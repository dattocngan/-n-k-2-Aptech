<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('products')->insert([
            'name' => 'Iphone 7 32GB',
            'category_id' => 5,
            'brand_id' => 3,
            'price' => 18000000,
            'price_level' => 4,
            'quantity_available' => 150,
            'short_description' => 'Testing',
            'description' => 'Testing',
            'created_at' => now(),
            'updated_at' => now(),
            'image' => 'project/images/products/phones/iphone7-32gb.jpeg'
    }
