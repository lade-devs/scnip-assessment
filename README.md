## Scnip Assessment

### Setup
### Step 1: clone repo
### Step 2:
````
composer install
````
### Step 3:
````
php artisan key:generate
````

## To preview
app_url/sort-products?sortBy={sorting-definition}
<p>
   <b>Sorting Definition</b><br>
   sortBySalesPerView or sortByPrice
</p>
<p>It displayed a die dump of the products</p>

## New Team Sorter inclusion
New team can add new sorters by creating a new class under "Support\\Sorters".
<p>Method created should be same as sorting definition</p>
