<?php

namespace Tygh\RfStockParser\Process;

class ProcessesCollection
{
    /**
     * @var Process[]
     */
    private $processes;

    public function add(Process $process): self
    {
        $this->processes[] = $process;
        return $this;
    }

    public function getStatuses($lastChange = null): array
    {
        if (empty($this->processes)) {
            return [];
        }

        $where = [];
        $whereOr = [];

        foreach ($this->processes as $process) {
            $whereOr[] = db_quote('(parser_id = ?i AND type = ?s)', $process->getParserId(), $process->getType());
        }

        if ($lastChange) {
            $where[] = db_quote('last_change > ?i', $lastChange);
        }

        $where[] = '(' . implode(' OR ', $whereOr) . ')';
        $where = implode(' AND ', $where);

        $data = db_get_hash_array(
            '
            SELECT * FROM ?:rf_stock_parser_process
            WHERE ' . $where . '
        ',
            'parser_id'
        );

        foreach ($data as &$process) {
            if (!empty($process['data'])) {
                $process['data'] = Process::processData($process['data']);
            }

            if (!empty($process['running']) && !empty($process['last_change']) && Process::isNotRunning($process['last_change'])) {
                $data['running'] = 0;
            }
        }
        unset($process);

        return $data;
    }
}
