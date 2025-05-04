<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = new Product();
        $product->name = "طاولة سقرة جديدة";
        $product->price = 500;
        $product->quantity = 5;
        $product->save();

        Product::factory(20)->create();
    }

}
