<?php

namespace KTPL\Knockoutjs\Controller\Test;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;

    /**
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory resultPageFactory
     */
    public function __construct(\Magento\Framework\App\Action\Context $context,\Magento\Framework\View\Result\PageFactory $resultPageFactory
       )
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