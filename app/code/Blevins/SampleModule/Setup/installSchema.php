<?php

namespace Blevins\SampleModule\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

/**
*   @codeCoverageIgnore
*/
class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table = $setup->getConnection()->newTable(
          $setup->getTable('blevins_sample_item')
        )->addColumn(
          'id',
          Table::TYPE_INTEGER,
          null, // length/size
          ['identity' => true, 'nullable' => false, 'primary' => true],//options
          'Item ID'
        )->addColumn(
          'name',
          Table::TYPE_TEXT,
          255, 
          ['nullable' => false], 
          'Item Name'// comment for field
        )->addIndex(
          $setup->getIdxName('blevins_sample_item', ['name']),
          ['name'] // first arg is table name second is fields for index, here it's just one.
        )->setComment(
          'Sample Items'
        );

        $setup->getConnection()->createTable($table);
        $setup->endSetup();
    }
}