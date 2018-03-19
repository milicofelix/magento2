<?php
/**
 * Created by PhpStorm.
 * User: adriano
 * Date: 15/03/18
 * Time: 12:56
 */
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Webjump\SampleModule\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        $table = $installer->getConnection()->newTable(
            $installer->getTable('webjump_sample_item'))->addColumn(
                'id',
                Table::TYPE_INTEGER,
                null,
                ['identity' => true,
                'nullable' => false,
                'primary'   => true,
                'comment' => 'Código do item'],
                'Item ID'
        )->addColumn(
                'name',
                Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'Item Name'

        )->addIndex(
            $installer->getIdxName('webjump_sample_item',['name']),
            ['name']
        )->setComment('Sample Items');
        $installer->getConnection()->createTable($table);
        $installer->endSetup();
    }
}
