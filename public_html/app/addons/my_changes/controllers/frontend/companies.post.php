<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

// Расширяем режим "catalog" для списка продавцов
if ($mode == 'catalog') {
    $companies = Registry::get('view')->getTemplateVars('companies');

    if (!empty($companies)) {
        foreach ($companies as &$company) {
            $company_data = db_get_row("SELECT address, city, state FROM ?:companies WHERE company_id = ?i", $company['company_id']);

            $company['address'] = $company_data['address'] ?? '';
            $company['city'] = $company_data['city'] ?? '';
            $company['state'] = $company_data['state'] ?? '';
        }

        // Передаем обновленный список компаний в шаблон
        Registry::get('view')->assign('companies', $companies);
    }
}
