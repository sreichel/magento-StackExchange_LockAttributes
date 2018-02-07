<?php
/**
 * Magento-Module
 *
 * @author      Sven Reichel <github-sr@hotmail.com>
 * @category    StackExchange
 * @package     StackExchange_LockAttributes
 */

class StackExchange_LockAttributes_Model_Observer
{
    /**
     * Make product attributes uneditable
     *
     * @param Varien_Event_Observer $observer
     * @return void
     */
    public function lockProductAttributes(Varien_Event_Observer $observer)
    {
        if (!$this->_isAllowed()) {
            /* @var Mage_Catalog_Model_Product $product */
            $product = $observer->getProduct();
            $attributes = explode(',', Mage::getStoreConfig('catalog/backend/lock_attributes', $product->getStoreId()));
            if (count($attributes)) {
                foreach ($attributes as $attributeCode) {
                    $product->lockAttribute($attributeCode);
                }
            }
        }
    }

    /**
     * Check admin permissions for locked attributes
     */
    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('catalog/products/edit_locked_attributes');
    }
}
