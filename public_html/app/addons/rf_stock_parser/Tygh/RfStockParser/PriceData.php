<?php

// RF_OB_TRUE

namespace Tygh\RfStockParser;

use Tygh\RfStockParser\PriceDataType\Fabric;
use Tygh\RfStockParser\PriceDataType\Type;

class PriceData
{
    private $additionalColumnsModifiers = [];
    private $additionalColumnsInName = [];

    protected $parserId;
    protected $data;
    protected $processingData;

    public function __construct($parserId, ProcessingData $processingData, $data)
    {
        $this->parserId = $parserId;
        $this->data = $data;
        $this->processingData = $processingData;
    }

    public function getData($filePath): \Iterator
    {
        if (empty($filePath) || !file_exists($filePath)) {
            yield [];
        }

        $columns = $this->data['column_settings']['column_map'];
        $additionalColumns = $this->data['column_settings']['additional'] ?? [];

        if (empty($columns)) {
            $columns = Column::getDefaultColumns($this->data['company_id']);
        } else {
            if (!empty($columns['in_name']) && is_array($columns['in_name'])) {
                foreach ($columns['in_name'] as $k => $c) {
                    if (isset($columns['order'][$k], $columns['to'][$k])) {
                        $this->additionalColumnsInName[] = [
                            'order' => $columns['order'][$k],
                            'type' => $columns['to'][$k],
                        ];
                    }
                }
            }

            if ($this->data['type'] == Type::TYPE_XML) {
                foreach ($columns['from'] as $k => &$v) {
                    if (!empty($columns['attr'][$k]) && $columns['attr'][$k] != 'nodeValue') {
                        $v .= '/@' . $columns['attr'][$k];
                    }
                }
                unset($v);
            }

            $columns = array_combine($columns['from'], $columns['to']);
            if (!empty($additionalColumns)) {
                foreach ($additionalColumns as $additionalColumn) {
                    $addToType = in_array($additionalColumn['type'], Column::MULTI_COLUMNS) && !empty($additionalColumn['value']) ? '|' . $additionalColumn['value'] : '';
                    if ($this->data['type'] == Type::TYPE_XML && !empty($additionalColumn['attr']) && $additionalColumn['attr'] != 'nodeValue') {
                        $additionalColumn['from'] .= '/@' . $additionalColumn['attr'];
                    }

                    $newColumn = &$columns[$additionalColumn['from']];

                    if (isset($newColumn) && !is_array($newColumn)) {
                        $newColumn = [$newColumn];
                    }

                    if ($additionalColumn['type'] == 'group') {
                        $newColumn[] = $additionalColumn['type'] . '=' . $additionalColumn['value'] . '=' . $additionalColumn['value2'];
                    } elseif ($additionalColumn['type'] == 'product_field') {
                        $newColumn[] = $additionalColumn['type'] . '=' . $additionalColumn['value3'];
                    } else {
                        $newColumn[] = $additionalColumn['type'] . $addToType;
                    }

                    if (!empty($additionalColumn['modifier'])) {
                        if ($additionalColumn['type'] != 'feature') {
                            $this->additionalColumnsModifiers[$additionalColumn['type']][] = $additionalColumn['modifier'];
                        } else {
                            $this->additionalColumnsModifiers[$additionalColumn['value']] = $additionalColumn['modifier'];
                        }
                    }

                    if (isset($additionalColumn['in_name'])) {
                        $this->additionalColumnsInName[] = [
                            'order' => $additionalColumn['order'],
                            'type' => $additionalColumn['type'],
                            'value' => $additionalColumn['value'],
                        ];
                    }
                }
            }

            $columns = array_filter($columns);
            unset($columns['']);
            ksort($columns);
        }

        $this->data['column_settings']['custom_node_name'] = $this->data['custom_node_name']; // прокидываем из основных полей
        $processor = (new Fabric())->getReader($this->data['type'], $this->parserId, $filePath, $columns, $this->data['column_settings']);

        foreach ($processor->getData($this->processingData) as $data) {
            yield $data;
        }
    }

    public function getAdditionalColumnsModifiers(): array
    {
        return $this->additionalColumnsModifiers;
    }

    public function getAdditionalColumnsInName(): array
    {
        return $this->additionalColumnsInName;
    }

    public static function getOperationValue($value, $modifierValue, array $only = [])
    {
        if (!mb_strlen($modifierValue)) {
            return null;
        }

        $operations = [
            '+' => function ($x, $y) {
                return $x + $y;
            },
            '-' => function ($x, $y) {
                return $x - $y;
            },
            '*' => function ($x, $y) {
                return $x * $y;
            },
            '/' => function ($x, $y) {
                return $x / $y;
            },
            '[prf]' => function ($x, $y) {
                return $y . $x;
            },
            '[psf]' => function ($x, $y) {
                $x .= $y;
                return $x;
            },
            '[expl]' => function ($x, $y) {
                return array_map('trim', explode($y, $x));
            },
            '[strip_tags]' => function ($x, $y) {
                return strip_tags($x, '<br>');
            },
            '[hash]' => function ($x, $y) {
                return sha1($x);
            },
        ];

        $modifierValue = explode('&&', $modifierValue);
        $modified = null;

        foreach ($modifierValue as $mod) {
            foreach ($operations as $operation => $v) {
                if (!empty($only) && !in_array($operation, $only)) {
                    continue;
                }

                if (strpos($mod, $operation) === 0) {
                    $mod = preg_replace('~^' . preg_quote($operation) . '~u', '', $mod);

                    if (is_array($value)) {
                        foreach ($value as &$vv) {
                            $vv = $v($vv, $mod);
                        }
                        unset($vv);
                    } else {
                        $value = $v($value, $mod);
                    }

                    $modified = true;
                }
            }
        }

        return $modified ? $value : null;
    }
}
