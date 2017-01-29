<?php
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();

/**
 * Create table 'gridJSR_bar_baz'
 */
$table = $installer->getConnection()
    // The following call to getTable('gridJSR_bar/baz') will lookup the resource for gridJSR_bar (gridJSR_bar_mysql4), and look
    // for a corresponding entity called baz. The table name in the XML is gridJSR_bar_baz, so ths is what is created.
    ->newTable($installer->getTable('gridJSR_bar/baz'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'ID')
    ->addColumn('produto', Varien_Db_Ddl_Table::TYPE_CLOB, 0, array(
        'nullable'  => false,
    ), 'Produto')

    ->addColumn('marca', Varien_Db_Ddl_Table::TYPE_CLOB, 0, array(
        'nullable'  => false,
    ), 'Marca')

    ->addColumn('url', Varien_Db_Ddl_Table::TYPE_CLOB, 0, array(
        'nullable'  => false,
    ), 'Url');
$installer->getConnection()->createTable($table);

$installer->endSetup();