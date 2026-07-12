<?php

use Imagine\Image\Box;
use Imagine\Image\ImageInterface;
use Imagine\Image\Metadata\ExifMetadataReader;
use Tygh\Registry;
use Tygh\Settings;
use Tygh\Storage;
use Tygh\Tygh;

defined('BOOTSTRAP') or die('Access denied');

function fn_is2or_thumbnail_crop_get_object_type_from_path(string $image_path): ?string
{
    $parts = explode('/', trim($image_path, '/'));

    return !empty($parts[0]) ? $parts[0] : null;
}

function fn_is2or_thumbnail_crop_get_enabled_object_types(): array
{
    $value = Registry::get('addons.is2or_thumbnail_crop.outbound_object_types');

    if (is_array($value)) {
        return array_values(array_filter($value, 'is_string'));
    }

    if (is_string($value) && $value !== '') {
        return array_values(array_filter(array_map('trim', explode(',', $value)), 'strlen'));
    }

    return [];
}

function fn_is2or_thumbnail_crop_is_enabled_for_type(?string $object_type): bool
{
    if (!$object_type) {
        return false;
    }

    return in_array($object_type, fn_is2or_thumbnail_crop_get_enabled_object_types(), true);
}

function fn_is2or_thumbnail_crop_clear_thumbnails(): bool
{
    Storage::instance('images')->deleteByPattern('thumbnails/*');

    return true;
}

function fn_is2or_thumbnail_crop_generate_outbound_contents(string $src, int $width, int $height, string $bg_color = '#ffffff')
{
    if ($width <= 0 || $height <= 0 || !is_readable($src)) {
        return false;
    }

    $settings = Settings::instance()->getValues('Thumbnails');
    $imagine = Tygh::$app['image'];
    $format = $settings['convert_to'] ?? 'png';

    if ($format === 'original') {
        $original_file_type = fn_get_image_extension(fn_get_mime_content_type($src, true));
        $format = $original_file_type ?: 'png';
    }

    try {
        $imagine->setMetadataReader(new ExifMetadataReader());
        $exif_supported = true;
    } catch (\Imagine\Exception\NotSupportedException $exception) {
        $exif_supported = false;
    }

    try {
        $image = $imagine->open($src);

        if ($exif_supported) {
            $metadata = $image->metadata()->toArray();

            if (isset($metadata['exif.Orientation'])) {
                $exif_orientation = (int) $metadata['exif.Orientation'];
            } elseif (isset($metadata['ifd0.Orientation'])) {
                $exif_orientation = (int) $metadata['ifd0.Orientation'];
            } else {
                $exif_orientation = null;
            }

            $rotation_angles = [
                3 => 180,
                6 => 90,
                8 => 270,
            ];

            if ($exif_orientation !== null && isset($rotation_angles[$exif_orientation])) {
                $image->rotate($rotation_angles[$exif_orientation]);
            }
        }

        fn_catch_exception(function () use ($image) {
            $image->usePalette(new \Imagine\Image\Palette\RGB());
        });

        $filter = ($imagine instanceof \Imagine\Gd\Imagine)
            ? ImageInterface::FILTER_UNDEFINED
            : ImageInterface::FILTER_LANCZOS;

        $thumbnail = $image->thumbnail(
            new Box($width, $height),
            ImageInterface::THUMBNAIL_OUTBOUND,
            $filter
        );

        return $thumbnail->get($format, [
            'jpeg_quality' => $settings['jpeg_quality'] ?? null,
            'png_compression_level' => 9,
            'filter' => $filter,
            'flatten' => true,
        ]);
    } catch (\Exception $exception) {
        return false;
    }
}

function fn_is2or_thumbnail_crop_generate_thumbnail_post($th_filename, $lazy, $image_path, $width, $height, $image): bool
{
    $object_type = fn_is2or_thumbnail_crop_get_object_type_from_path((string) $image_path);

    if (!fn_is2or_thumbnail_crop_is_enabled_for_type($object_type)) {
        return true;
    }

    $width = (int) $width;
    $height = (int) $height;
    $image_path = (string) $image_path;

    if ($width <= 0 || $height <= 0 || $image_path === '') {
        return true;
    }

    $source_absolute_path = Storage::instance('images')->getAbsolutePath($image_path);
    list(, , , $tmp_path) = fn_get_image_size($source_absolute_path);

    if (empty($tmp_path)) {
        return true;
    }

    $contents = fn_is2or_thumbnail_crop_generate_outbound_contents(
        $tmp_path,
        $width,
        $height,
        (string) Registry::get('settings.Thumbnails.thumbnail_background_color')
    );

    if (empty($contents)) {
        return true;
    }

    $target_relative_path = 'thumbnails/' . $width . '/' . $height . '/' . $image_path;

    Storage::instance('images')->delete($target_relative_path);
    Storage::instance('images')->put($target_relative_path, [
        'contents' => $contents,
        'caching' => true,
        'overwrite' => true,
    ]);

    return true;
}

function fn_is2or_thumbnail_crop_install(): bool
{
    return fn_is2or_thumbnail_crop_clear_thumbnails();
}

function fn_is2or_thumbnail_crop_uninstall(): bool
{
    return fn_is2or_thumbnail_crop_clear_thumbnails();
}
