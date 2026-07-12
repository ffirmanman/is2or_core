<?php

// RF_OB_TRUE

namespace Tygh\RfStockParser\PriceDataType\XmlPreset;

use Tygh\RfStockParser\PriceDataType\XmlPreset\Preset1C;
use Tygh\RfStockParser\PriceDataType\XmlPreset\PresetYml;
use Tygh\RfStockParser\PriceDataType\XmlPreset\PresetDefault;

class Preset
{
    public const PRESETS = [
        Preset1C::class,
        PresetYml::class,
    ];

    public static function detect($filePath)
    {
        $detectedPreset = null;
        $paths = [];
        $maxDepth = 0;

        /** @var PresetDefault $preset */
        foreach (self::PRESETS as $preset) {
            $path = $preset::getPath();

            $depth = count(explode('/', $path));
            if ($depth > $maxDepth) {
                $maxDepth = $depth;
            }

            $paths[$path] = $preset;
        }

        $reader = new \XMLReader();

        if ($reader->open($filePath)) {
            $structure = [];

            while ($reader->read()) {
                $depth = $reader->depth;
                if ($depth > $maxDepth) {
                    continue;
                }

                if ($reader->nodeType == \XMLReader::ELEMENT) {
                    $structure[$depth] = $reader->name;
                }

                $structure = array_slice($structure, 0, $depth + 1, true);

                $path = implode('/', $structure);
                if (isset($paths[$path])) {
                    $detectedPreset = $paths[$path];
                    break;
                }
            }

            $reader->close();
        }

        return !empty($detectedPreset) ? new $detectedPreset() : new PresetDefault();
    }
}
