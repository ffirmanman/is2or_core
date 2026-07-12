<?php

// RF_OB_TRUE

namespace Tygh\RfStockParser\Helpers;

class UrlHelper
{
    public function parseStr($string)
    {
        if ($string === '') {
            return [];
        }

        $vars = explode('&', $string);
        $result = [];
        $count = [];

        foreach ($vars as $var) {
            $dkIndex = strpos($var, '[]');

            if (false === $dkIndex) {
                $dkIndex = strpos($var, '%5B%5D');
            }

            if (false !== $dkIndex) {
                $varPrefix = substr($var, 0, $dkIndex);
                if (!isset($count[$varPrefix])) {
                    $count[$varPrefix] = 0;
                }
                $var = str_replace(['[]', '%5B%5D'], '[' . $count[$varPrefix]++ . ']', $var);
            }

            // use the original parse_str() on each element
            $params = null;
            parse_str($var, $params);
            $k = key($params);
            if (!isset($result[$k])) {
                $result += $params;
            } else {
                if (!is_array($result[$k])) {
                    $result[$k] = $params[$k];
                } else {
                    $result[$k] = $this->arrayMergeRecursiveDistinct($result[$k], $params[$k]);
                }
            }
        }

        return $result;
    }

    private function arrayMergeRecursiveDistinct(array &$array1, array &$array2)
    {
        $merged = $array1;

        foreach ($array2 as $key => &$value) {
            if (is_array($value) && isset($merged[$key]) && is_array($merged[$key])) {
                $merged[$key] = $this->arrayMergeRecursiveDistinct($merged[$key], $value);
            } else {
                $merged[$key] = $value;
            }
        }
        unset($value);

        return $merged;
    }
}
