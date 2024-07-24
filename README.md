## Introduction
This module adds the functionality that allows the redirection to the product details page when the query used in the search matches a valid product SKU.

## Install
```
composer config repositories.dianabotean-redirectsku git git@github.com:dianabotean/redirecttosku
composer require dianabotean/redirecttosku
bin/magento setup:upgrade
```

## Update
```
composer update dianabotean/redirecttosku
```

## Uninstall
```
composer remove diana/redirecttosku
bin/magento setup:upgrade
```
