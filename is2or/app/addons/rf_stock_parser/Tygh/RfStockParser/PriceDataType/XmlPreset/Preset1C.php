<?php

// RF_OB_TRUE

namespace Tygh\RfStockParser\PriceDataType\XmlPreset;

class Preset1C extends PresetDefault
{
    public static function getPath()
    {
        return 'КоммерческаяИнформация/ПакетПредложений/Предложения/Предложение';
    }

    public function getElements($filePath, $elementPath, $pathsWithoutAttr)
    {
        self::removeNamespaces($filePath);

        $reader = new \XMLReader();
        $structure = [];

        $priceElementPath = 'КоммерческаяИнформация/ПакетПредложений/ТипыЦен';
        $replaceElement = '/Предложение/Цены/Цена/ИдТипаЦены';
        $priceData = [];

        $maxDepth = count(explode('/', $priceElementPath)) - 1;

        if (!$reader->open($filePath)) {
            fn_set_notification('E', __('error'), 'Failed to open ' . $filePath);
        } else {
            while ($reader->read()) {
                $depth = $reader->depth;

                if ($depth > $maxDepth) {
                    continue;
                }

                if ($reader->nodeType == \XMLReader::ELEMENT) {
                    $structure[$depth] = $reader->name;
                }

                $get = implode('/', $structure) == $priceElementPath;

                if ($reader->nodeType == \XMLReader::ELEMENT && $get) {
                    $xml = simplexml_load_string($reader->readOuterXML());
                    $prices = $xml->xpath('ТипЦены');
                    foreach ($prices as $price) {
                        $id = (string) $price->Ид;
                        $value = (string) $price->Наименование;
                        if (!isset($priceData[$id])) {
                            $priceData[$id] = $value;
                        }
                    }

                    break;
                }
            }

            $reader->close();
        }

        list($structure, $elements, $filterAttributes) = parent::getElements($filePath, $elementPath, $pathsWithoutAttr);

        foreach ($elements as $name => $element) {
            if ($name == $replaceElement) {
                foreach ($priceData as $k => $priceDatum) {
                    $newKey = $replaceElement . '[=' . $k . ']#' . $priceDatum;

                    if (!isset($elements[$newKey])) {
                        $elements[$newKey] = $element;
                    }

                    $elements[$newKey][] = 'neighbour=ЦенаЗаЕдиницу';
                }

                unset($elements[$name]);
            }
        }
        unset($element);

        return [
            $structure,
            $elements,
            $filterAttributes,
        ];
    }

    public static function removeNamespaces($filePath)
    {
        if (function_exists('exec')) {
            $sedCommand = "sed -ie 's/xmlns=\".*\"//g' {$filePath}";
            exec($sedCommand);
        }
    }
}
