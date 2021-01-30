<?php

declare(strict_types=1);

namespace Diana\SkuSearch\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\App\Response\Http;
use Magento\Framework\Event\Observer;

/**
 * Class RedirectToProduct
 * @package Diana\SkuSearch\Observer
 */
class RedirectToProduct implements ObserverInterface
{
    private $productFactory;
    private $request;
    private $response;

    /**
     * RedirectToProduct constructor
     *
     * @param ProductFactory $productFactory
     * @param RequestInterface $request
     * @param Http $response
     */
    public function __construct(
        ProductFactory $productFactory,
        RequestInterface $request,
        Http $response
    ) {
        $this->productFactory = $productFactory;
        $this->request = $request;
        $this->response = $response;
    }

    /**
     * Will redirect to the product details page of the product that matches the query string as SKU
     *
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        $queryString = trim($this->request->getQuery('q'));

        $productFactory = $this->productFactory->create();
        $product = $productFactory->loadByAttribute('sku', $queryString);
        if (!($product instanceof \Magento\Catalog\Model\Product) || !$product->getProductUrl()) {
            return;
        }

        $this->response->setRedirect($product->getProductUrl());
    }
}
