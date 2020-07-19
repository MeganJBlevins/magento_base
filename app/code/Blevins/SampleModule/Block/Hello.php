<?php
namespace Blevins\SampleModule\Block;

use Blevins\SampleModule\Model\ResourceModel\Item\Collection;
use Blevins\SampleModule\Model\ResourceModel\Item\CollectionFactory;
use \Magento\Framework\View\Element\Template;

class Hello extends Template
{
  private $collectionFactory;
  public function __construct(Template\Context $context, CollectionFactory $collectionFactory, array $data = [])
  { 
    $this->collectionFactory = $collectionFactory;
    parent::__construct($context, $data);
  }

  public function getItems()
  {
    return $this->collectionFactory->create()->getItems();
  } 
}