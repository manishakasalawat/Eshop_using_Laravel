<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //\App\Models\User::factory(10)->create();
    	//Category::truncate();
    	//Products::truncate();
    	$category = Category::create([
    		'category_name' => 'Accessories',
    		'category_desc' => 'This category contains accessories.'
    	]);
    	
    	Products::factory(5)->create([
    		'category_id'=> 3
    	]);
    }
}
