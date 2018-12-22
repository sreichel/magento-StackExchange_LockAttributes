# StackExchange LockAttributes Magento 1 Extension

This extension adds availability to prevent product attributes from editing in admin backend.

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/c7e099f0fcf44a548dc29b94b7be3f37)](https://www.codacy.com/app/sreichel/magento-StackExchange_LockAttributes?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=sreichel/magento-StackExchange_LockAttributes&amp;utm_campaign=Badge_Grade)
[![Maintainability](https://api.codeclimate.com/v1/badges/de5eb4d457411e58c485/maintainability)](https://codeclimate.com/github/sreichel/magento-StackExchange_LockAttributes/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/de5eb4d457411e58c485/test_coverage)](https://codeclimate.com/github/sreichel/magento-StackExchange_LockAttributes/test_coverage)

## Facts
- version: 1.1.0
- extension key: StackExchange_LockAttributes
- [extension on GitHub](https://github.com/sreichel/magento-StackExchange_LockAttributes)

### Description
[Read-Only Product Backend attribute](https://magento.stackexchange.com/questions/784/read-only-product-backend-attribute)

> I would like to create an attribute read only however it look it is not possible.
>
> I have tried to pass to addAttribute() `'disabled' =>true` or `'readonly' => true` with out any success.
> I have found out some suggestion about using `setLockedAttributes()` but for some reason it is not working 
>
> **Reference:**  
> `Varien_Data_Form_Element_Abstract::serialize($attributes = array(), $valueSeparator='=', $fieldSeparator=' ', $quote='"')`

### Requirements
- PHP >= 5.4.0 

### Compatibility
- Magento >= 1.5

#### Installation Instructions
- via modman
```
modman clone https://github.com/sreichel/magento-StackExchange_LockAttributes.git
```
- via composer
```
composer require mse-sv3n/lock-attributes
```

#### Uninstallation
- via modman
```
modman remove magento-stackexchange-lockattributes
```
- via composer
```
composer remove mse-sv3n/lock-attributes
```

### Usage
1. get to config section and set attributes you want to lock
2. set ACL permission for uses that are still allowed to edit

### Support
If you have any issues with this extension, open an issue on [GitHub](https://github.com/sreichel/magento-StackExchange_LockAttributes/issues).

### Contribution
Any contribution is highly appreciated. The best way to contribute code is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

### License
[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)
