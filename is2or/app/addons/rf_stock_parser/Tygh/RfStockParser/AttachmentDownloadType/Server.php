<?php

namespace Tygh\RfStockParser\AttachmentDownloadType;

use Tygh\RfStockParser\Helpers\FilesHelper;

class Server extends Type
{
    public function process()
    {
        $filesHelper = new FilesHelper();
        $filePath = $filesHelper->getServerUploadedPath($this->getPath());

        $tempfile = fn_create_temp_file();
        fn_copy($filePath, $tempfile);

        $file = [
            'name' => 'price' . $this->data['my_supplier_id'] . '.' . $this->data['type'],
            'path' => $tempfile,
            'type' => fn_get_mime_content_type($tempfile, false, ''),
            'size' => filesize($tempfile),
        ];

        $this->addUnlink($file['path']);
        $this->setFile($file);
    }

    public function getType(): string
    {
        return 'server';
    }
}
