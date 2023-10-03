<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories=[
          ['name'=>'Jeans'],
          ['name'=>'T-Shirts'],
          ['name'=>'Sports'],
          ['name'=>'Shirts & Tops'],
          ['name'=>'Clogs & Mules'],
          ['name'=>'Sunglasses'],
          ['name'=>'Bags & Wallets'],
          ['name'=>'Sneakers & Athletics'],
          ['name'=>'Electronics'],
          ['name'=>'Furniture'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
