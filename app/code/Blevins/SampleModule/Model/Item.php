<?php

namespace Blevins\SampleModule\Model;

use Magento\Framework\Model\AbstractModel;
use Blevins\SampleModule\Model\ResourceModel\Item as ResourceItem;

class Item extends AbstractModel
{
  protected function _construct() {
    $this->_init(ResourceItem::class);
  }
}