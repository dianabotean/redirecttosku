## Introduction
This module adds the functionality that allows the redirection to the product details page of a product when the query used in search matches a valid product SKU.

## Install module
```
composer config repositories.repo-name git git@github.com:dianabotean/redirecttosku
composer require diana/redirecttosku:dev-main --no-update
bin/magento setup:upgrade
```
