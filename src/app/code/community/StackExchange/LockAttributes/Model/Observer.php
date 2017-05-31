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
        $product = $observer->getProduct();
        $attributes = explode(',', Mage::getStoreConfig('catalog/backend/lock_attributes', $product->getStoreId()));
        if (count($attributes)) {
            foreach ($attributes as $attributeCode) {
                $product->lockAttribute($attributeCode);
            }
        }
    }
}
