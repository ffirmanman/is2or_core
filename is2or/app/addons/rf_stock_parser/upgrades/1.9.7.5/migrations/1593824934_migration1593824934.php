<?php

use Phinx\Migration\AbstractMigration;

class Migration1593824934 extends AbstractMigration
{
    public function up()
    {
        $parsers = db_get_array('SELECT my_supplier_id, column_settings, constructor_id FROM ?:my_suppliers WHERE type = "xml" AND custom_node_name IS NULL');

        foreach ($parsers as $parser) {
            $nodes = db_get_array('SELECT * FROM ?:my_suppliers_xml_nodes WHERE constructor_id = ?i', $parser['constructor_id']);

            foreach ($nodes as $node) {
                $newName = $this->getNewName($node['name']);
                db_query('UPDATE ?:my_suppliers_xml_nodes SET name = ?s WHERE constructor_id = ?i AND name = ?s', $newName, $node['constructor_id'], $node['name']);
            }

            $columnSettings = unserialize($parser['column_settings']);
            if (!empty($columnSettings['column_map']['from'])) {
                foreach ($columnSettings['column_map']['from'] as &$from) {
                    $from = $this->getNewName($from);
                }
            }

            $columnSettings = serialize($columnSettings);

            db_query('UPDATE ?:my_suppliers SET column_settings = ?s, custom_node_name = ?s WHERE my_supplier_id = ?i', $columnSettings, 'yml_catalog/shop/offers/offer', $parser['my_supplier_id']);
        }

        db_query('alter table ?:my_suppliers_xml_nodes modify attrs text not null');
    }

    public function getNewName($name)
    {
        if ($name == 'offer') {
            $newName = '/offer';
        } else {
            $newName = '/offer/' . $name;
        }

        return $newName;
    }
}
