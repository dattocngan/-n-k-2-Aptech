<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
        	'name' => "Điện Thoại",
        ]);

        Category::insert([
        	'name' => "Laptop",
        ]);

        Category::insert([
        	'name' => "Smart Watch",
        ]);
    }
}
