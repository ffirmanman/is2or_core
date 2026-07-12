<?php

use Phinx\Migration\AbstractMigration;

class Migration1654743513 extends AbstractMigration
{
    public function up()
    {
        db_query(
            '
            create table ?:rf_stock_parser_artefacts (
                id int auto_increment,
                parser_id int not null,
                name varchar(255) not null,
                value text null,
                PRIMARY KEY (`id`),
                unique (parser_id, name)
            ) ENGINE=InnoDB DEFAULT CHARSET=UTF8;
        '
        );

        db_query(
            '
            alter table ?:rf_stock_parser
            modify supplier_name varchar(255) not null;
        '
        );
    }
}
