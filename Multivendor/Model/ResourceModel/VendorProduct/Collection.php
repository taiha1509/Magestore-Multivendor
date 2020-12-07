<?php


namespace Magestore\Multivendor\Model\ResourceModel\VendorProduct;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function __construct()
    {
        parent::_construct();
        $this->_init('Magestore\Multivendor\Model\VendorProduct', 'Magestore\Multivendor\Model\ResourceModel\VendorProduct');
    }

}
