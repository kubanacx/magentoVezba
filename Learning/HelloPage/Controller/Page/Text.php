<?php

namespace Learning\HelloPage\Controller\Page;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;

class Text extends Action {

    public function __construct(Context $context) {
        parent::__construct($context);
    }

    public function execute() {
        $this->getResponse()->setRedirect('/learning/page/view');
    }

}
