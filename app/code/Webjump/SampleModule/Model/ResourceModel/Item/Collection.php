<?php
/**
 * Created by PhpStorm.
 * User: adriano
 * Date: 19/03/18
 * Time: 12:50
 */

namespace Webjump\SampleModule\Model\ResourceModel\Item;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Webjump\SampleModule\Model\ResourceModel\Item as ItemResource;
use Webjump\SampleModule\Model\Item;

class Collection extends AbstractCollection
{

    protected $_idFieldName = 'id';

    public function __construct()
    {
        $this->_init(
            Item::class, ItemResource::class
        );
    }

}