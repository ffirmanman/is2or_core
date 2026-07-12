<?php

use Phinx\Migration\AbstractMigration;

class Migration1665211037 extends AbstractMigration
{
    public function up()
    {
        db_query(
            '
            alter table ?:rf_stock_parser_process
            add type tinyint not null default 1;
        '
        );

        db_query(
            '
            alter table ?:rf_stock_parser_process
            add data text null;
        '
        );

        db_query(
            '
            alter table ?:rf_stock_parser_process
            drop primary key;
        '
        );

        db_query(
            '
            alter table ?:rf_stock_parser_process
            add primary key (parser_id, type);
        '
        );
    }
}
