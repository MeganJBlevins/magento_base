<?php

namespace Blevins\SampleModule\Model\ResourceModel\Item;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Blevins\SampleModule\Model\ResourceModel\Item as ResourceItem;
use Blevins\SampleModule\Model\Item;


class Collection extends AbstractCollection 
{
  protected $_idFieldName = 'id';

  protected function _construct() 
  {
    $this->_init( Item::class, ResourceItem::class );
  }

}
