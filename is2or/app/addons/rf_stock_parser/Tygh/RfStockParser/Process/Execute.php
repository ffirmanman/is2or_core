<?php

namespace Tygh\RfStockParser\Process;

use Tygh\Registry;
use Tygh\RfStockParser\Helpers\FilesHelper;

class Execute
{
    public const MIN_VERSION = 7.4;

    /**
     * @var Process
     */
    private $process;

    public const DESCRIPTORS = [
        ['pipe', 'r'],
        ['pipe', 'w'],
        ['pipe', 'w'],
    ];

    public function setProcess(Process $process): self
    {
        $this->process = $process;
        return $this;
    }

    public function execute(): void
    {
        $path = $this->getPath();
        $xdebugConfig = $_SERVER['XDEBUG_CONFIG'] ?? null;

        $xdebug = [];
        if (!empty($xdebugConfig)) {
            $xdebug = ['-d xdebug.mode=debug'];
            $params = explode(' ', $xdebugConfig);

            foreach ($params as $p) {
                $xdebug[] = '-d xdebug.' . $p;
            }
        }

        $fileHelper = new FilesHelper();
        $phpPath = $fileHelper->getExecutablePhp();

        if (!$this->checkPhp()) {
            return;
        }

        $command = $phpPath . ' ' . implode(' ', $xdebug) . ' ' . $path . ' ' . implode(' ', $this->process->getParams());
        proc_open($command, self::DESCRIPTORS, $pipes);
    }

    private function getPath(): string
    {
        return DIR_ROOT . '/' . Registry::get('config.admin_index');
    }

    public function checkPhp($test = false): bool
    {
        $fileHelper = new FilesHelper();
        $phpPath = $fileHelper->getExecutablePhp();

        if (empty($phpPath)) {
            $message = 'PHP executable does not found';

            if (!$test) {
                $this->process->saveStatus(0, 0, $message);
            }
            $this->process->notification($test, '[PHP_CHECK] ' . $message);

            return false;
        }

        $checkVersionCommand = $phpPath . ' -r "echo sprintf(\'%d.%d\', PHP_MAJOR_VERSION, PHP_MINOR_VERSION);"';
        $processCheck = proc_open($checkVersionCommand, self::DESCRIPTORS, $pipes);

        if (is_resource($processCheck)) {
            $check = stream_get_contents($pipes[1]);
            if (empty($check)) {
                $message = 'PHP executable does not found';

                if (!$test) {
                    $this->process->saveStatus(0, 0, $message);
                }
                $this->process->notification($test, '[PHP_CHECK] ' . $message);

                return false;
            } elseif ($check < self::MIN_VERSION) {
                $message = __('rf_stock_parser_cron_info_php_version', ['[must]' => self::MIN_VERSION, '[current]' => $check]);

                if (!$test) {
                    $this->process->saveStatus(0, 0, $message);
                }
                $this->process->notification($test, '[PHP_CHECK] ' . $message);

                return false;
            }
        }

        $checkCommand = $phpPath . ' ' . $this->getPath() . ' --dispatch=rf_stock_parser.check_executable';
        $processCheck = proc_open($checkCommand, self::DESCRIPTORS, $pipes);
        $check = '';

        if (is_resource($processCheck)) {
            $check = stream_get_contents($pipes[1]);
        }

        if ($check !== 'test') {
            $error = stream_get_contents($pipes[2]);

            if (!$test) {
                $this->process->saveStatus(0, 0, $error);
            }
            $this->process->notification($test, $error);

            return false;
        }

        return true;
    }
}
