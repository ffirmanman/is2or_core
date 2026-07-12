<?php

namespace Tygh\RfStockParser\Process\Processes;

use Tygh\RfStockParser\Process\Process;

class NotFoundExport extends Process
{
    private $attach;

    public function getParams(): array
    {
        return [
            '--dispatch=rf_stock_parser.export_not_found',
            '--parser_id=' . $this->parserId,
        ];
    }

    public function getType(): int
    {
        return Process::TYPE_NOT_FOUND_EXPORT;
    }
}
