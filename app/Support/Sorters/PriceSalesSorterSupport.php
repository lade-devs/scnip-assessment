<?php


namespace App\Support\Sorters;


class PriceSalesSorterSupport
{
    public array $products;

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function sortByPrice()
    {
        return collect($this->products)->sortByDesc('price')->values()->toArray();
    }

    public function sortBySalesPerView()
    {
        return collect($this->products)->sortByDesc(function ($item){
            return $item['sales_count'] / $item['views_count'];
        })->values()->toArray();
    }
}
