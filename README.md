This module adds the functionality that allows the redirection to the product details page of a product when the query used in search matches a valid product SKU.
## Install
```
composer config repositories.repo-name git git@github.com:dianabotean/redirecttosku
composer require dianabotean/redirecttosku
bin/magento setup:upgrade
```

## Update
```
composer update diana/redirecttosku
```

## Uninstall
```
composer remove diana/redirecttosku
bin/magento setup:upgrade
```
