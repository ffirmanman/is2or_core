<?php

// RF_OB_TRUE

namespace Tygh\RfStockParser\PriceDataType\XmlPreset;

class PresetDefault
{
    public static function getPath()
    {
        return '';
    }

    public function getElements($filePath, $elementPath, $pathsWithoutAttr)
    {
        $reader = new \XMLReader();
        $structure = [];
        $elements = [];
        $filterAttributes = [];

        $isString = !file_exists($filePath) && !empty($filePath);
        if ($isString) {
            $reader->xml($filePath);
        }

        $maxDepth = count(explode('/', $elementPath)) - 1;

        if (!$isString && !$reader->open($filePath)) {
            fn_set_notification('E', __('error'), 'Failed to open ' . $filePath);
        } else {
            while ($reader->read()) {
                if ($reader->depth > $maxDepth) {
                    continue;
                }
                $structure[$reader->depth] = $reader->name;
                $preRoot = implode('/', array_slice($structure, 0, -1));
                $rootPath = implode('/', $structure);
                $get = $rootPath == $elementPath;

                if ($reader->nodeType == \XMLReader::ELEMENT && $get) {
                    $rootAttrs = [];

                    if ($reader->hasAttributes) {
                        while ($reader->moveToNextAttribute()) {
                            $rootAttrs[] = $reader->name;
                            if ($reader->value === 'false' || $reader->value === 'true') {
                                $filterAttributes[$reader->name] = true;
                            }
                        }
                    }

                    $xml = $reader->expand();

                    $generate = function ($nodes, $parentPath = null, $nicePath = null) use (&$elements, &$generate, $pathsWithoutAttr, $rootPath, $preRoot) {
                        /** @var \DOMNode $child */
                        $nodesCounter = 0;
                        foreach ($nodes as $k => $child) {
                            if (in_array(get_class($child), ['DOMText', 'DOMCdataSection'])) {
                                if (
                                    !empty($nicePath)
                                    && !empty($child->nodeValue)
                                    && !in_array('nodeValue', $elements[$nicePath] ?? [])
                                    && !empty(preg_replace('~(\s|\r\n|\r|\n)+~', '', $child->nodeValue))
                                ) {
                                    $elements[$nicePath][] = 'nodeValue';
                                }
                                continue;
                            }

                            $childPath = $child->getNodePath();
                            $fullChildClearPath = $preRoot . preg_replace('/\[\d+\]/', '', $childPath);

                            if (substr($childPath, -2) == '()') {
                                continue;
                            }

                            $clearChildPath = preg_replace('~^' . $parentPath . '~', '', $childPath);
                            if (!in_array($fullChildClearPath, $pathsWithoutAttr)) {
                                $firstAttributeName = $firstAttributeValue = null;
                                if (!empty($child->attributes->length)) {
                                    foreach ($child->attributes as $attr) {
                                        $firstAttributePrefix = $attr->prefix;
                                        $firstAttributeName = ($firstAttributePrefix ? $firstAttributePrefix . ':' : '') . $attr->name;
                                        $firstAttributeValue = $child->getAttribute($firstAttributeName);
                                        break;
                                    }
                                }
                            }

                            $temp = $parentPath . '/' . $child->nodeName;
                            if (!empty($firstAttributeName)) {
                                $temp .= '[@' . $firstAttributeName . '="' . $firstAttributeValue . '"]';
                            }

                            $key = $childPath;

                            if ($temp != $childPath && !in_array($rootPath . preg_replace('/\[\d+\]/', '', $clearChildPath), $pathsWithoutAttr)) {
                                if (!empty($nicePath)) {
                                    $key = str_replace($parentPath, $nicePath, $temp);
                                } else {
                                    $key = $temp;
                                }
                            } elseif ($temp == $childPath && !empty($nicePath)) {
                                $key = $nicePath . '/' . $child->nodeName;
                            } elseif (!empty($nicePath) && in_array($rootPath . preg_replace('/\[\d+\]/', '', $clearChildPath), $pathsWithoutAttr)) {
                                $key = str_replace($parentPath, $nicePath, $childPath);
                                $nodesCounter++;
                            }

                            if (!isset($elements[$key])) {
                                $elements[$key] = [];
                            }

                            if (!empty($child->attributes->length)) {
                                foreach ($child->attributes as $attr) {
                                    if (!in_array($attr->name, $elements[$key])) {
                                        $prefix = $attr->prefix;
                                        $elements[$key][] = ($prefix ? $prefix . ':' : '') . $attr->name;
                                    }
                                }
                            }

                            $hasChild = $child->hasChildNodes();

                            if (!$hasChild && empty($elements[$key])) {
                                unset($elements[$key]);
                            }

                            if ($hasChild) {
                                $generate($child->childNodes, $childPath, $key);
                            }

                            if ($nodesCounter > 1) {
                                $mKey = preg_replace('/\[\d+\]/', '', $key);
                                $elements[$mKey] = $elements[$key];
                            }
                        }
                    };

                    try {
                        $elements[$xml->getNodePath()] = $rootAttrs;
                        $generate($xml->childNodes, $xml->getNodePath());
                    } catch (\Error $e) {
                        fn_set_notification('E', __('error'), __('rf_stock_parser_xml_syntax_error'));
                        exit;
                    }
                }
            }

            $reader->close();
        }

        foreach ($elements as $k => $element) {
            if (empty($element)) {
                unset($elements[$k]);
            }
        }

        ksort($elements, SORT_NATURAL);

        return [
            $structure,
            $elements,
            $filterAttributes,
        ];
    }
}
