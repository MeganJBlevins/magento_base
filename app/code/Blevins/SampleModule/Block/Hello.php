<?php
namespace Blevins\SampleModule\Block;

use Blevins\SampleModule\Model\ResourceModle\Item\Collection;
use Blevins\SampleModule\Model\ResourceModle\Item\CollectionFactory;
use \Magento\Framework\View\Element\Template;

class Hello extends Template
{
  private $collectionFactory;
  public function __construct(Template\Context $context, CollectionFactory $collectionFactory, array $data = [])
  { 
    $this->collectionFacotry = $collectionFactory;
    parent::__construct($context, $data);
  }

  public function getItems()
  {
    return $this->collectionFactory->create()->getItems();
  } 
}