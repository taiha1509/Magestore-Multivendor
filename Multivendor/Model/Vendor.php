<?php


namespace Magestore\Multivendor\Model;

use Magento\Framework\Stdlib\DateTime\DateTime;

class Vendor extends \Magento\Framework\Model\AbstractModel
{
    protected $_dateTime;

    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param ResourceModel\Vendor $resource
     * @param ResourceModel\Vendor\Collection $resourceCollection
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magestore\Multivendor\Model\ResourceModel\Vendor $resource,
        \Magestore\Multivendor\Model\ResourceModel\Vendor\Collection $resourceCollection
    )
    {
        parent::__construct(
            $context,
            $registry,
            $resource,
            $resourceCollection
        );

    }

    public function beforeSave()
    {
        $dateTime = new \DateTime('now');
        //var_dump($dateTime->gmtDate());
        if (!$this->getId()) {
            $this->setCreatedAt($dateTime);
        } else {
            $this->setUpdated_at($dateTime);
        }

        return parent::beforeSave();
    }

}
