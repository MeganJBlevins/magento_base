<?php

namespace Blevins\SampleModule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
*   @codeCoverageIgnore
*/
class InstallData implements InstallDataInterface
{
  public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
  {
    $setup->startSetup();

    $setup->getConnection()->insert(
      $setup->getTable('blevins_sample_item'),
      [
        'name' => 'First Item'
      ]
    );
    $setup->getConnection()->insert(
      $setup->getTable('blevins_sample_item'),
      [
        'name' => 'Second Item'
      ]
    );

    $setup->endSetup();
  }
}