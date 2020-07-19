<?php

namespace Blevins\SampleModule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb
{
  protected function _construct() 
  {
    $this->_init('blevins_sample_item');
  }
}