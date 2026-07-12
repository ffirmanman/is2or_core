<?php

use Phinx\Migration\AbstractMigration;

class Migration1585239221 extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $data = $this->fetchAll("select my_supplier_id, price_url, price_download_time from {$pr}my_suppliers");

        $this->execute('alter table cscart_my_suppliers drop column price_url');
        $this->execute('alter table cscart_my_suppliers drop column price_download_time');
        $this->execute('alter table cscart_my_suppliers add cron TEXT null');

        if (!empty($data)) {
            foreach ($data as $datum) {
                $cronData = [
                    'mode' => 'http',
                    'http' => [
                        'url' => $datum['price_url'],
                    ],
                    'time' => $datum['price_download_time'],
                ];

                $cronData = serialize($cronData);
                $this->execute("UPDATE {$pr}my_suppliers set cron = '{$cronData}' WHERE my_supplier_id = {$datum['my_supplier_id']}");
            }
        }
    }
}
