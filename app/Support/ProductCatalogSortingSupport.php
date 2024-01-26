<?php


namespace App\Support;


use App\Traits\ProductCatalogSortingTrait;

class ProductCatalogSortingSupport
{
    use ProductCatalogSortingTrait;

    public array $products;

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function getProducts(string $sortBy)
    {
        return $this->sorters($sortBy) ?? [];
    }
}
