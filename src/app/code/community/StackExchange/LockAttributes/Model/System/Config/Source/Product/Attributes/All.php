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
 */
class StackExchange_LockAttributes_Model_System_Config_Source_Product_Attributes_All
{
    /** @var $_options array of options */
    protected $_options;

    /**
     * Get all product attributes with frontend label
     *
     * @return array Attribute (label/value)
     */
    public function toOptionArray()
    {
        if (!$this->_options) {
            $options = Mage::getResourceModel('catalog/product_attribute_collection')
                ->addFieldToFilter('frontend_label', array('neq' => ''))
                ->setOrder('frontend_label', 'ASC');

            $optionsArray = array();
            foreach ($options as $option) {
                /* @var Mage_Catalog_Model_Resource_Eav_Attribute $option */
                $optionsArray[] = array(
                    'label' => $option->getFrontendLabel(),
                    'value' => $option->getAttributeCode()
                );
            }
            $this->_options = $optionsArray;
        }
        return $this->_options;
    }
}
