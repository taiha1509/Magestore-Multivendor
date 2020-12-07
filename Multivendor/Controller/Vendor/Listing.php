<?php


namespace Magestore\Multivendor\Controller\Vendor;


use Magento\Framework\App\ResponseInterface;

class Listing extends \Magento\Framework\App\Action\Action
{

    /**
     * @inheritDoc
     */
    public function execute()
    {
//        var_dump(1);
//        die();
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}
