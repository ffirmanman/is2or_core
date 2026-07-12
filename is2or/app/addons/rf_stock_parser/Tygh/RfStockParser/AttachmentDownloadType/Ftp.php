<?php

namespace Tygh\RfStockParser\AttachmentDownloadType;

use Tygh\Storage;

class Ftp extends Type
{
    public function process()
    {
        $localFile = fn_create_temp_file();
        $serverFile = $this->getPath();

        $port = empty($this->data['cron']['ftp']['port']) ? 21 : $this->data['cron']['ftp']['port'];
        $ftpConnection = ftp_connect($this->data['cron']['ftp']['server'], $port);

        if (empty($this->data['cron']['ftp']['login'])) {
            $this->data['cron']['ftp']['login'] = 'anonymous';
            $this->data['cron']['ftp']['password'] = '';
        }

        ftp_login($ftpConnection, $this->data['cron']['ftp']['login'], $this->data['cron']['ftp']['password']);
        ftp_pasv($ftpConnection, true);

        if (ftp_get($ftpConnection, $localFile, $serverFile, FTP_BINARY)) {
            $ftpFile = $localFile;
        } else {
            return false;
        }

        ftp_close($ftpConnection);

        $this->addUnlink($ftpFile);
        $this->setFile(
            [
                'name' => 'price' . $this->data['my_supplier_id'] . '.' . $this->data['type'],
                'type' => fn_get_mime_content_type($ftpFile, false, ''),
                'size' => filesize($ftpFile),
                'path' => $ftpFile,
            ]
        );
    }

    public function getType(): string
    {
        return 'server';
    }
}
