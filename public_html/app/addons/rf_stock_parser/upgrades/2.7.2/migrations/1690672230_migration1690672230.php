<?php

use Phinx\Migration\AbstractMigration;

class Migration1690672230 extends AbstractMigration
{
    public function up()
    {
        db_query(
            '
            alter table ?:rf_stock_parser_logs_detailed
            modify p_price mediumint(8) default 0 not null;
        '
        );

        db_query(
            "
            alter table ?:rf_stock_parser
            add update_price_is_out_of_stock enum ('update', 'set_zero', 'keep') default 'update' not null;
        "
        );
    }
}
