<?php

namespace Tygh\RfStockParser\AttachmentDownloadType;

class Factory
{
    public function getObject($type): ?Type
    {
        $current = null;

        switch ($type) {
        case 'local':
            $current = new Local();
            break;
        case 'url':
        case 'http':
            $current = new Http();
            break;
        case 'server':
            $current = new Server();
            break;
        case 'ftp':
            $current = new Ftp();
            break;
        }

        return $current;
    }
}
