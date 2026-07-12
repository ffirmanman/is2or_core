<?php

namespace Tygh\RfStockParser;

use Tygh\Registry;

class Notification
{
    private $data;
    private $email;
    /**
     * @var \Tygh\Mailer\Mailer
     */
    private $mailer;

    public function __construct($data)
    {
        $this->data = $data;
        $this->email = Registry::get('settings.Company.company_site_administrator');
        $this->mailer = \Tygh::$app['mailer'];
    }

    public function sendFileNotExists(): bool
    {
        return $this->mailer->send(
            [
                'to' => $this->email,
                'from' => 'company_site_administrator',
                'data' => [
                    'name' => $this->data['supplier_name'],
                    'id' => $this->data['my_supplier_id'],
                ],
                'tpl' => 'addons/rf_stock_parser/not_available.tpl',
                'is_html' => true,
                'company_id' => $this->data['company_id'],
            ],
            'A',
            CART_LANGUAGE
        );
    }

    public function sendLargePercent(): bool
    {
        $allData = [];

        $offset = 0;
        do {
            $data = db_get_array(
                '
                SELECT d.id, d.product_id, d.p_price, pd.product
                FROM ?:rf_stock_parser_logs_detailed as d
                LEFT JOIN ?:product_descriptions as pd ON pd.product_id = d.product_id AND pd.lang_code = ?s
                WHERE d.my_supplier_id = ?i AND d.access_time = ?i AND d.large_percentage = 1 AND d.id > ?i
                ORDER BY d.id ASC
                LIMIT 500',
                CART_LANGUAGE,
                $this->data['my_supplier_id'],
                $this->data['access_time'],
                $offset
            );

            foreach ($data as $item) {
                $allData[] = $item;
                $offset = $item['id'];
            }
        } while ($data);

        if (empty($allData)) {
            return false;
        }

        return $this->mailer->send(
            [
                'to' => $this->email,
                'from' => 'company_site_administrator',
                'data' => [
                    'name' => $this->data['supplier_name'],
                    'id' => $this->data['my_supplier_id'],
                    'items' => $allData,
                ],
                'tpl' => 'addons/rf_stock_parser/large_percent.tpl',
                'is_html' => true,
                'company_id' => $this->data['company_id'],
            ],
            'A',
            CART_LANGUAGE
        );
    }

    public function setLabelsWrong(): bool
    {
        return $this->mailer->send(
            [
                'to' => $this->email,
                'from' => 'company_site_administrator',
                'data' => [
                    'name' => $this->data['supplier_name'],
                    'id' => $this->data['my_supplier_id'],
                ],
                'tpl' => 'addons/rf_stock_parser/labels_wrong.tpl',
                'is_html' => true,
                'company_id' => $this->data['company_id'],
            ],
            'A',
            CART_LANGUAGE
        );
    }
}
