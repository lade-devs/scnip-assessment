<?php


namespace App\Http\Controllers;


use App\Support\ProductCatalogSortingSupport;
use Illuminate\Http\Request;

class ProductSortingController
{
    public function index(Request $request)
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Alabaster Table',
                'price' => 12.99,
                'created' => '2019-01-04',
                'sales_count' => 32,
                'views_count' => 730,
            ],
            [
                'id' => 2,
                'name' => 'Zebra Table',
                'price' => 44.49,
                'created' => '2012-01-04',
                'sales_count' => 301,
                'views_count' => 3279,
            ],
            [
                'id' => 3,
                'name' => 'Coffee Table',
                'price' => 10.00,
                'created' => '2014-05-28',
                'sales_count' => 1048,
                'views_count' => 20123,
            ]
        ];

        if ( ! $request->filled('sortBy') ){
            dd($products);
        }

        $sortBy = $request->input('sortBy');

        $catalog = (new ProductCatalogSortingSupport($products));

        $sortedProducts = $catalog->getProducts($sortBy);

        dd($sortedProducts);
    }
}
