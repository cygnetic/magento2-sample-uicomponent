<?php
namespace Turiknox\Sample\Model\ResourceModel\Data;
/*
 * Turiknox_Sample

 * @category   Turiknox
 * @package    Turiknox_Sample
 * @copyright  Copyright (c) 2017 Turiknox
 * @license    https://github.com/Turiknox/magento2-sample-uicomponent/blob/master/LICENSE.md
 * @version    1.0.0
 */

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'data_id';

    /**
     * Collection initialisation
     */
    protected function _construct()
    {
        $this->_init('Turiknox\Sample\Model\Data','Turiknox\Sample\Model\ResourceModel\Data');
    }
}