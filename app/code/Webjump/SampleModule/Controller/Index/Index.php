<?php
/**
 * Created by PhpStorm.
 * User: adriano
 * Date: 19/03/18
 * Time: 14:18
 */

namespace Webjump\SampleModule\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{


    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {

        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}