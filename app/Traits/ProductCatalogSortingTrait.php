<?php


namespace App\Traits;


trait ProductCatalogSortingTrait
{
    public function sorters(string $sortBy)
    {
        $folderPath = app_path('Support/Sorters');

        $files = glob($folderPath . '/*.php');

        $sorted = [];

        foreach ($files as $file) {
            $className = pathinfo($file, PATHINFO_FILENAME);

            $namespace = 'App\\Support\\Sorters\\' . $className;

            $sorterClass = new $namespace($this->products);

            if ( method_exists($sorterClass, $sortBy) ){
                $sorted = $sorterClass->$sortBy();
                break;
            }
        }

        return $sorted;
    }
}
