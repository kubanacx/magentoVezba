<?php

namespace Learning\HelloPage\Controller\Page;

use Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

class View extends \Magento\Framework\App\Action\Action {

    protected $_resultPageFactory;
 
    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
 
    public function execute()
    {
        $resultPage = $this->_resultPageFactory->create();
        return $resultPage;
    }

}
