<?php

use Phinx\Migration\AbstractMigration;
use Tygh\Registry;

class Migration1588621103 extends AbstractMigration
{
    public function up()
    {
        $options = $this->adapter->getOptions();
        $pr = $options['prefix'];

        $table = $this->table("{$pr}my_suppliers_xml_nodes", ['id' => false]);
        $table
            ->addColumn('constructor_id', 'integer', ['signed' => false])
            ->addColumn('name', 'string')
            ->addColumn('attrs', 'string')
            ->create()
        ;

        $this->execute("create index my_suppliers_xml_nodes_constructor_id_index on {$pr}my_suppliers_xml_nodes (constructor_id)");

        $this->execute("alter table {$pr}my_suppliers add constructor_id int default 0 not null");

        $parsers = db_get_array('SELECT my_supplier_id, xml_columns, node_attributes FROM ?:my_suppliers WHERE type = "xml"');

        $start = time();
        foreach ($parsers as &$parser) {
            $elements = [];

            $parser['xml_columns'] = explode(',', $parser['xml_columns']);
            $parser['node_attributes'] = json_decode($parser['node_attributes'], true);

            if (!empty($parser['xml_columns'])) {
                foreach ($parser['xml_columns'] as $column) {
                    $elements[$column] = !empty($parser['node_attributes'][$column]) ? $parser['node_attributes'][$column] : [];
                }
            }

            $constructorId = $start + $parser['my_supplier_id'];
            $elementsChunks = array_chunk($elements, 300, true);

            foreach ($elementsChunks as $elementsChunk) {
                $insert = [];
                foreach ($elementsChunk as $k => $attrs) {
                    $insert[] = db_quote(
                        '(?i, ?s, ?s)',
                        $constructorId,
                        $k,
                        implode(',', $attrs)
                    );
                }

                db_query('INSERT INTO ?:my_suppliers_xml_nodes (constructor_id, name, attrs) VALUES' . implode(',', $insert));
            }

            db_query('UPDATE ?:my_suppliers SET constructor_id = ?i WHERE my_supplier_id = ?i', $constructorId, $parser['my_supplier_id']);
        }
        unset($parser);

        $this->execute("alter table {$pr}my_suppliers drop column xml_columns");
        $this->execute("alter table {$pr}my_suppliers drop column node_attributes");
    }
}
