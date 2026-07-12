<?php

use Phinx\Migration\AbstractMigration;

class Migration1641450661 extends AbstractMigration
{
    public function up()
    {
        try {
            db_query(
                '
                alter table ?:rf_stock_parser change rf_stock_parser_xml_fix_wrong_encode xml_fix_wrong_encode tinyint(1) default 0 not null;
            '
            );
        } catch (\Exception $e) {
        }

        db_query('DROP TABLE IF EXISTS ?:rf_stock_parser_process');

        db_query(
            '
            create table ?:rf_stock_parser_process (
                parser_id int not null primary key,
                percent tinyint default 0 not null,
                error_message text null,
                running tinyint default 0 not null,
                last_change int null,
                process_message varchar(255) null
            ) ENGINE=InnoDB DEFAULT CHARSET=UTF8;
        '
        );

        db_query('alter table ?:rf_stock_parser change brand_synonyms features_synonyms text null;');
    }
}
