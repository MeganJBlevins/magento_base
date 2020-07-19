<?php

namespace Blevins\SampleModule\Controller\Adminhtml\Index;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Backend\App\Action 
{
  public function execute() 
  {
    // This is a \Magento\Framework\Controller\Result\Raw result
    $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
    $result->setContents('Hello Admin!');
    return $result;
  }

}