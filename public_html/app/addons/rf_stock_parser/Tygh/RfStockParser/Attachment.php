<?php

// RF_OB_TRUE

namespace Tygh\RfStockParser;

use Tygh\Storage;
use Tygh\RfStockParser\PriceDataType\Type;

class Attachment
{
    protected $supplierId;
    protected $data;

    public function __construct($supplierId, $data)
    {
        $this->supplierId = $supplierId;
        $this->data = $data;
    }

    public function download(AttachmentDownloadType\Type $type)
    {
        $type->setData($this->data);
        $type->process();

        if (empty($type->getType())) {
            return false;
        }

        $attachData = [
            'description' => 'price' . $this->supplierId,
            'position' => 0,
            'usergroup_ids' => 0,
        ];

        if (empty($type->getFile())) {
            $_REQUEST['file_attachment_files'] = [$type->getPath()];
            $_REQUEST['type_attachment_files'] = [$type->getType()];
        }

        if (!function_exists('fn_update_attachments')) {
            fn_set_notification('E', __('error'), __('rf_stock_parser_attachments_module_disabled'));
            return false;
        }
        $attachId = fn_update_attachments($attachData, null, 'my_supplier_price', $this->supplierId, 'M', $type->getFile(), DESCR_SL);
        if (empty($attachId)) {
            fn_set_notification('E', __('error'), __('rf_stock_parser_file_was_not_saved'));
            return false;
        }

        $type->after();

        $filePath = $this->get($attachId);
        if (empty($filePath)) {
            fn_set_notification('E', __('error'), __('rf_stock_parser_file_was_not_saved'));
        }

        return [
            $attachId,
            $filePath,
        ];
    }

    public function get($attachId)
    {
        static $fixEncodeStatus = false;

        if (empty($attachId)) {
            return false;
        }

        $data = db_get_row('SELECT * FROM ?:attachments WHERE attachment_id = ?i', $attachId);
        $attachment_obj = Storage::instance('attachments');
        $attachment_filename = $data['object_type'] . '/' . $data['object_id'] . '/' . $data['filename'];

        if (empty($data['filename']) || !$attachment_obj->isExist($attachment_filename)) {
            return false;
        }
        $path = $attachment_obj->getAbsolutePath($attachment_filename);

        $fixEncode = $this->data['xml_fix_wrong_encode'];
        if ($fixEncode && !$fixEncodeStatus && $this->data['type'] == Type::TYPE_XML) {
            $file = file_get_contents($path);
            $encoding = mb_detect_encoding($file, 'auto', true);
            if (!empty($encoding)) {
                $file = preg_replace('/encoding=".+?"/i', 'encoding="' . $encoding . '"', $file, 1);
                file_put_contents($path, $file);
            }
        }

        $fixEncodeStatus = true;

        return $path;
    }

    public function checkAttachBySize($attachId, $size = 1024 * 1024 * 1024): bool
    {
        $attachSize = db_get_field('SELECT filesize FROM ?:attachments WHERE attachment_id = ?i', $attachId);
        return $attachSize > $size;
    }
}
