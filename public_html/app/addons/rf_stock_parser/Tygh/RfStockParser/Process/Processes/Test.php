<?php

namespace Tygh\RfStockParser\Process\Processes;

use Tygh\RfStockParser\Process\Process;

/**
 * @internal
 *
 * @coversNothing
 */
class Test extends Process
{
    public function getParams(): array
    {
        return [];
    }

    public function getType(): int
    {
        return 1;
    }
}
