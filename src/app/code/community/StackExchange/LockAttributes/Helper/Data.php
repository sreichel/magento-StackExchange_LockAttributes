<?php
/**
 * Magento-Module
 *
 * @author      Sven Reichel <github-sr@hotmail.com>
 * @category    StackExchange
 * @package     StackExchange_LockAttributes
 */

/**
 * Data helper
 * @SuppressWarnings(PHPMD.CamelCaseClassName)
 * @SuppressWarnings(PHPMD.CamelCasePropertyName)
 */
class StackExchange_LockAttributes_Helper_Data extends Mage_Core_Helper_Abstract
{
    /** @var string $_moduleName Module name */
    protected $_moduleName = 'StackExchange_LockAttributes'; // phpcs:ignore

    /**
     * @param string|int|null $storeId
     * @return array
     * @SuppressWarnings(PHPMD.StaticAccess)
     */
    public function getLockedAttributes($storeId = null)
    {
        return explode(',', (string)Mage::getStoreConfig('catalog/backend/lock_attributes', $storeId));
    }
}
