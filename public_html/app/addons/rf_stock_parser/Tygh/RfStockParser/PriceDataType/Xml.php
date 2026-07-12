<?php

// RF_OB_TRUE

namespace Tygh\RfStockParser\PriceDataType;

use Tygh\RfStockParser\Column;
use Tygh\RfStockParser\PriceDataType\XmlPreset\Preset1C;
use Tygh\RfStockParser\PriceDataType\ReadHelpers\XmlHelper;
use Tygh\RfStockParser\PriceDataType\XmlPreset\PresetYml;
use Tygh\RfStockParser\ProcessingData;

class Xml extends Type
{
    protected $string;

    public function setString($string)
    {
        $this->string = $string;
    }

    public function getData(ProcessingData $processingData): \Iterator
    {
        $i = 0;
        $steps = 0;

        $elementPath = $this->columnSettings['custom_node_name'];
        $maxDepth = count(explode('/', $elementPath)) - 1;

        if ($elementPath == PresetYml::getPath()) {
            $maxDepthCategories = count(explode('/', PresetYml::getCategoriesPath())) - 1;
        }

        if ($elementPath == Preset1C::getPath()) {
            Preset1C::removeNamespaces($this->filePath);
        }

        $structure = $structureForCategories = [];
        if ($this->string === null && !isset($processingData['process']['all_rows_count'])) {
            $processingData['process']['all_rows_count'] = 0;
            $readerForCount = new \XMLReader();
            $readerForCount->open($this->filePath);

            $categories = [];
            while ($readerForCount->read()) {
                $forCountLimit = $readerForCount->depth > $maxDepth;
                $forCategoriesLimit = isset($maxDepthCategories) && $readerForCount->depth > $maxDepthCategories || !isset($maxDepthCategories);

                if ($forCountLimit && $forCategoriesLimit) {
                    continue;
                }

                if (!$forCountLimit) {
                    $structure[$readerForCount->depth] = $readerForCount->name;

                    $get = implode('/', $structure) == $elementPath;
                    if ($readerForCount->nodeType == \XMLReader::ELEMENT && $get) {
                        $processingData['process']['all_rows_count']++;
                    }
                }

                if (isset($maxDepthCategories) && !$forCategoriesLimit && empty($categories)) {
                    $structureForCategories[$readerForCount->depth] = $readerForCount->name;

                    $get = implode('/', $structureForCategories) == PresetYml::getCategoriesPath();
                    if ($readerForCount->nodeType == \XMLReader::ELEMENT && $get) {
                        $xml = simplexml_load_string($readerForCount->readOuterXML());

                        foreach ($xml->children() as $child) {
                            $id = $child->attributes()->id ?? [];
                            $parentId = $child->attributes()->parentId ?? [];

                            if (!empty($id)) {
                                $categories[reset($id)] = [
                                    'parentId' => reset($parentId),
                                    'name' => (string) $child,
                                ];
                            }
                        }

                        if (!empty($categories)) {
                            $processingData['parserCategories'] = $this->buildNames($categories);
                        }
                    }
                }
            }
            unset($readerForCount);
        }

        $reader = new \XMLReader();
        if ($this->string === null) {
            $reader->open($this->filePath);
        } else {
            $reader->xml($this->string);
        }

        $filter_available = !empty($this->columnSettings['filter_available']);

        $data = [];
        $structure = [];
        while ($reader->read()) {
            if ($reader->depth > $maxDepth) {
                continue;
            }
            $structure[$reader->depth] = $reader->name;
            $get = implode('/', $structure) == $elementPath;

            if ($reader->nodeType == \XMLReader::ELEMENT && $get) {
                if ($i >= $this->firstRow || $this->firstRow == 0) {
                    $steps++;

                    $available = true;
                    if ($filter_available && strtolower($reader->getAttribute('available')) === 'false') {
                        $available = false;
                    }

                    if ($available) {
                        $xml = simplexml_load_string($reader->readOuterXML());

                        foreach ($this->columns as $path => $column) {
                            if (is_array($column)) {
                                foreach ($column as $aColumn) {
                                    $data = $this->addColumnData($data, $i, $aColumn, $this->getValue($path, $xml, $aColumn));
                                }
                            } else {
                                $data = $this->addColumnData($data, $i, $column, $this->getValue($path, $xml, $column));
                            }
                        }

                        if (empty($data[$i]['manufacturer_code'])) {
                            unset($data[$i]);
                        }

                        if (!isset($processingData['count'])) {
                            $processingData['count'] = 0;
                        }

                        if (!empty($data[$i])) {
                            $processingData['count']++;
                        }
                    }
                }

                if ($steps && $steps % $this->getStep() == 0) {
                    $processingData['count'] = $i + 1;
                    yield $data;
                    $data = [];
                }

                $i++;
            }
        }

        $processingData['count'] = $i;
        yield $data;
    }

    private function getAttr($v)
    {
        $v = ((array) $v)['@attributes'] ?? [];
        return reset($v);
    }

    private function getValue($path, $xml, $column)
    {
        $getAttr = false;
        $neighbour = null;

        if (strpos($path, '/@') !== false) {
            $getAttr = true;
        }

        if (strpos($path, '/@neighbour') !== false) {
            $neighbour = preg_replace('~.*/@neighbour=(.*)~ui', '$1', $path);
            $path = preg_replace('~(.*)/.*/@neighbour=.*~ui', '$1', $path);
            $getAttr = false;
        }

        $value = $xml->xpath($path);

        if (!in_array($column, Column::MULTI_COLUMNS) && is_array($value)) {
            $value = reset($value);

            if (!empty($neighbour) && isset($value->{$neighbour})) {
                $value = reset($value->{$neighbour});
            }
        }

        if ($getAttr) {
            if (is_array($value)) {
                $nodeValue = [];
                foreach ($value as $v) {
                    $nodeValue[] = $this->getAttr($v);
                }
            } else {
                $nodeValue = $this->getAttr($value);
            }
        } else {
            $nodeValue = $value;
        }

        return $nodeValue;
    }

    private function buildNames($blocks)
    {
        $toDelete = [];
        foreach ($blocks as $id => $node) {
            if (!empty($node['parentId'])) {
                $parentId = $node['parentId'];
                $blocks[$parentId]['children'][$id] = &$blocks[$id];
                $toDelete[] = $id;
            }
        }

        foreach ($toDelete as $v) {
            unset($blocks[$v]);
        }

        $ar = [];

        $names = function ($items) use (&$ar, &$names) {
            foreach ($items as $id => $item) {
                $ar[$id] = $item['name'];

                if (!empty($ar[$item['parentId']])) {
                    $ar[$id] = $ar[$item['parentId']] . '/' . $item['name'];
                }

                if (!empty($item['children'])) {
                    $names($item['children']);
                }
            }
        };

        $names($blocks);

        return $ar;
    }
}
