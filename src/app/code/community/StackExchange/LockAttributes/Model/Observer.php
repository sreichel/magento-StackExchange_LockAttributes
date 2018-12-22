<?php
/**
 * Magento-Module
 *
 * @author      Sven Reichel <github-sr@hotmail.com>
 * @category    StackExchange
 * @package     StackExchange_LockAttributes
 */

/**
 * Class StackExchange_LockAttributes_Model_Observer
 * @SuppressWarnings(PHPMD.CamelCaseClassName)
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
        if ($this->isNotAllowed()) {
            $product = $observer->getProduct();
            if ($product instanceof Mage_Catalog_Model_Product) {
                $attributes = Mage::helper('stackexchange_lockattributes')->getLockedAttributes($product->getStoreId());
                if (count($attributes)) {
                    foreach ($attributes as $attributeCode) {
                        $product->lockAttribute($attributeCode);
                    }
                }
            }
        }
    }

    /**
     * Check admin permissions for locked attributes
     */
    private function isNotAllowed()
    {
        return !Mage::getSingleton('admin/session')->isAllowed('catalog/products/edit_locked_attributes');
    }
}
