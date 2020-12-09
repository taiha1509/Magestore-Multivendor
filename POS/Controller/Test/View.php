<?php
namespace Magestore\POS\Controller\Test;


use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;

class View extends \Magento\Framework\App\Action\Action
{
    protected $_response;
    public function __construct(Context $context, \Magento\Framework\View\Result\PageFactory $response)
    {
        $this->_response = $response;
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        var_dump(1);
        die();
        $this->_view->loadLayout();
        $this->_view->renderLayout();
        $resultPage = $this->_response->create();
        return $resultPage;
    }
}
