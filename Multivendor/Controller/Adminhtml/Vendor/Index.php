<?php


namespace Magestore\Multivendor\Controller\Adminhtml\Vendor;


use Magestore\Multivendor\Controller\Adminhtml\Vendor;

class Index extends Vendor
{
    protected $resultPageFactory;
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
//        var_dump(1);
//        die();
        return $resultPage;
    }


}
