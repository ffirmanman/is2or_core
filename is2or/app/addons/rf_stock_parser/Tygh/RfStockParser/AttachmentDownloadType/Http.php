<?php

namespace Tygh\RfStockParser\AttachmentDownloadType;

class Http extends Type
{
    public function process()
    {
        $httpUrl = $this->getPath();

        if (!preg_match('/:\/\//', $httpUrl)) {
            $httpUrl = 'http://' . $httpUrl;
        }

        $tempFile = fn_create_temp_file();

        \Tygh\Http::get(
            $httpUrl,
            [],
            [
                'binary_transfer' => true,
                'write_to_file' => $tempFile,
                'connection_timeout' => 3000,
                'execution_timeout' => 3000,
            ]
        );

        $file = [
            'name' => 'price' . $this->data['my_supplier_id'] . '.' . $this->data['type'],
            'path' => $tempFile,
            'type' => fn_get_mime_content_type($tempFile, false, ''),
            'size' => filesize($tempFile),
        ];

        if (empty($file['type'])) {
            $file['type'] = fn_get_file_type($file['name']);
        }

        $this->addUnlink($file['path']);
        $this->setFile($file);

        $this->path = $httpUrl;
    }

    public function getType(): string
    {
        return 'server';
    }
}
