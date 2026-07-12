<?php

namespace Tygh\RfStockParser\Process\Processes;

use Tygh\RfStockParser\Process\Process;

class Parse extends Process
{
    private $attach;

    public function getParams(): array
    {
        return [
            '--dispatch=rf_stock_parser.cron',
            '--attach=' . $this->attach,
            '--force=true',
            '--parser_id=' . $this->parserId,
        ];
    }

    public function getType(): int
    {
        return Process::TYPE_PARSE;
    }

    public function setAttach($id): self
    {
        $this->attach = $id;
        return $this;
    }
}
