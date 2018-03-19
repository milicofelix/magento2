<?php
/**
 * Created by PhpStorm.
 * User: adriano
 * Date: 19/03/18
 * Time: 14:34
 */

namespace Webjump\SampleModule\Block;


use Magento\Framework\View\Element\Template;
use Webjump\SampleModule\Model\ResourceModel\Item\Collection;
use Webjump\SampleModule\Model\ResourceModel\Item\CollectionFactory;

class Hello extends Template
{
    private $collectionFactory;

    public function __construct(Template\Context $context,CollectionFactory $collectionFactory,  array $data = [])
    {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);

    }

    /**
     *@return \Webjump\SampleModule\Model\Item[]
     **/

    public function getItems(){

        return $this->collectionFactory->create()->getItems();
    }

}