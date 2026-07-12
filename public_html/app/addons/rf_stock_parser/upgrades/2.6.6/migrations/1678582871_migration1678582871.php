<?php

use Phinx\Migration\AbstractMigration;

class Migration1678582871 extends AbstractMigration
{
    public function up()
    {
        db_query(
            '
            alter table ?:rf_stock_parser
            change access_count access_time int default 0 not null;
        '
        );

        db_query(
            '
            alter table ?:rf_stock_parser_logs
            change access_count access_time int default 0 not null;
        '
        );

        db_query(
            '
            alter table ?:rf_stock_parser_logs_detailed
            change access_count access_time int default 0 not null;
        '
        );

        db_query(
            '
            alter table ?:products
            change supplier_access_count supplier_access_time int default 0 not null;
        '
        );

        db_query(
            '
            alter table ?:rf_stock_parser
            drop column access_date;
        '
        );
    }
}
