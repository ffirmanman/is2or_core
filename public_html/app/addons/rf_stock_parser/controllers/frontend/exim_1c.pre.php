<?php

use Tygh\Commerceml\RusEximCommerceml;
use Tygh\Commerceml\Logs;

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}

if (!empty($_SERVER['PHP_AUTH_USER'])) {
    $data['user_login'] = $_SERVER['PHP_AUTH_USER'];
    list($status, $user_data, $user_login, $password, $salt) = fn_auth_routines($data, []);
    fn_commerceml_change_company_store($user_data);
}

$params = $_REQUEST;
$type = $mode = $service_exchange = '';
if (isset($params['type'])) {
    $type = $params['type'];
}

if (isset($params['mode'])) {
    $mode = $params['mode'];
}

if (isset($params['service_exchange'])) {
    $service_exchange = $params['service_exchange'];
}

$manual = !empty($params['manual']);

$path_file = 'exim/1C_' . date('dmY') . '/';
$path = fn_get_files_dir_path() . $path_file;
$path_commerceml = fn_get_files_dir_path();

$log = new Logs($path_file, $path);
$exim_commerceml = new RusEximCommerceml(Tygh::$app['db'], $log, $path_commerceml);

$exim_commerceml->import_params['service_exchange'] = $service_exchange;
$exim_commerceml->import_params['manual'] = $manual;

list($cml, $s_commerceml) = $exim_commerceml->getParamsCommerceml();

if ($exim_commerceml->checkParameterFileUpload()) {
    exit;
}

$s_commerceml = $exim_commerceml->getCompanySettings();

$filename = (!empty($params['filename'])) ? fn_basename($params['filename']) : '';
$lang_code = (!empty($s_commerceml['exim_1c_lang'])) ? $s_commerceml['exim_1c_lang'] : CART_LANGUAGE;

$exim_commerceml->getDirCommerceML();
$exim_commerceml->import_params['lang_code'] = $lang_code;

if ($type == 'catalog') {
    if ($mode == 'file') {
        if ($exim_commerceml->createImportFile($filename) !== false) {
            $newPath = explode('/', $exim_commerceml->path_commerceml);
            foreach ($newPath as $k => $n) {
                if (strpos($n, '1C_') !== false) {
                    unset($newPath[$k]);
                }
            }

            $newPath = implode('/', $newPath);
            copy($exim_commerceml->path_commerceml . $filename, $newPath . '1C.xml');
        }
    }
}
