<?php
/**
 * Created by PhpStorm.
 * User: adriano
 * Date: 19/03/18
 * Time: 12:37
 */

namespace Webjump\SampleModule\Model;


use Magento\Framework\Model\AbstractModel;
use Webjump\SampleModule\Model\ResourceModel\Item as ItemResource;

class Item extends AbstractModel
{

    public function __construct()
    {
        $this->_init(ItemResource::class);
    }

}