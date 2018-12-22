<?php
/**
 * Magento-Module
 *
 * @author      Sven Reichel <github-sr@hotmail.com>
 * @category    StackExchange
 * @package     StackExchange_LockAttributes
 */

/**
 * System config
 * @SuppressWarnings(PHPMD.CamelCaseClassName)
 */
class StackExchange_LockAttributes_Model_System_Config_Source_Product_Attributes_All
{
    /**
     * @var array $options
     */
    private $options;

    /**
     * Get all product attributes with frontend label
     *
     * @return array Attribute (label/value)
     */
    public function toOptionArray()
    {
        if (!$this->options) {
            $options = Mage::getResourceModel('catalog/product_attribute_collection')
                ->addFieldToFilter('frontend_label', ['neq' => ''])
                ->setOrder('frontend_label', 'ASC');

            $optionsArray = [];
            foreach ($options as $option) {
                /* @var Mage_Catalog_Model_Resource_Eav_Attribute $option */
                $optionsArray[] = [
                    'label' => $option->getFrontendLabel(),
                    'value' => $option->getAttributeCode()
                ];
            }
            $this->options = $optionsArray;
        }
        return $this->options;
    }
}
