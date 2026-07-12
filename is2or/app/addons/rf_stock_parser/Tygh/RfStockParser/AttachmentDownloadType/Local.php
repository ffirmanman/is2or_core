<?php

namespace Tygh\RfStockParser\AttachmentDownloadType;

class Local extends Type
{
    public function process()
    {
    }

    public function getType(): string
    {
        return 'local';
    }
}
