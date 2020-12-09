<?php

namespace Magestore\POS\Block;
class View extends \Magento\Framework\View\Element\Template
{
    protected $_objectManager;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\ObjectManager $objectManager
    )
    {
        $this->_objectManager = $objectManager;
        parent::__construct($context);
    }

    public function getCustomAttribute(){

        $product = $this->_objectManager->create('\Magento\Catalog\Model\Product');

        $product->load(2);

        if($product->getData()){
            if (null !== $product->getCustomAttribute('isVisibleOnPOS')) {
                return $product->getCustomAttribute('isVisibleOnPOS')->getValue();
            }else{
                echo 'cannot get custom attribute';
            }
        }else{
            echo 'product is null';
        }

        return null;
    }
}
