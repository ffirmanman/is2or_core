<?php

namespace Tygh\RfStockParser\Process;

use Tygh\RfStockParser\Exceptions\ProcessExists;

abstract class Process
{
    public const TYPE_PARSE = 1;
    public const TYPE_NOT_FOUND_EXPORT = 2;
    public const TYPE_TEST = 3;

    protected $parserId;
    protected $type;

    abstract public function getParams(): array;

    abstract public function getType(): int;

    public function setParserId($parserId): self
    {
        $this->parserId = $parserId;
        return $this;
    }

    public function getParserId()
    {
        return $this->parserId;
    }

    /**
     * @throws ProcessExists
     */
    public function checkRunning()
    {
        $status = $this->getStatus();
        if (!empty($status) && $status['running']) {
            throw new ProcessExists();
        }
    }

    public function getStatus(): array
    {
        $data = db_get_row(
            '
            SELECT * FROM ?:rf_stock_parser_process
            WHERE parser_id = ?i AND type = ?i
        ',
            $this->parserId,
            $this->getType()
        );

        if (!empty($data) && $data['running'] && self::isNotRunning($data['last_change'])) {
            $data['running'] = 0;
        }

        return $data;
    }

    public function notification(bool $show, string $message): self
    {
        if ($show) {
            fn_set_notification('E', __('error'), $message);
        }

        return $this;
    }

    public function saveStatus($running = 0, $percent = 0, $error = '', $process = '', $data = ''): self
    {
        db_query(
            '
            INSERT INTO ?:rf_stock_parser_process (parser_id, type, running, percent, error_message, process_message, data, last_change)
            VALUES (?i, ?i, ?i, ?i, ?s, ?s, ?s, ?i)
            ON DUPLICATE KEY UPDATE running = ?i, percent = ?i, error_message = ?s, process_message = ?s, data = ?s, last_change = ?i
        ',
            $this->parserId,
            $this->getType(),
            $running,
            $percent,
            $error,
            $process,
            $data,
            time(),
            $running,
            $percent,
            $error,
            $process,
            $data,
            time()
        );

        return $this;
    }

    public function saveError($error)
    {
        db_query('UPDATE ?:rf_stock_parser_process SET error_message = ?s WHERE parser_id = ?i AND type = ?i', $error, $this->parserId, $this->getType());
    }

    public function saveMessage($message)
    {
        db_query('UPDATE ?:rf_stock_parser_process SET process_message = ?s WHERE parser_id = ?i AND type = ?i', $message, $this->parserId, $this->getType());
    }

    private static function getBootTime()
    {
        return shell_exec('stat -c %Z /proc/');
    }

    public static function isNotRunning($lastChange): bool
    {
        $bootTime = trim(self::getBootTime());
        if ($bootTime > $lastChange || time() - $lastChange > 1200) {
            return true;
        }

        return false;
    }

    public static function processData($data): array
    {
        $result = [];

        if (mb_strpos($data, '[READFILE]') !== false) {
            $data = str_replace('[READFILE]', '', $data);

            $result = [
                'type' => 'readfile',
                'data' => fn_url('rf_stock_parser.read_file?file=' . $data, 'A'),
            ];
        }

        return $result;
    }
}
