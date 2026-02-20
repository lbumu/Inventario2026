<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Electronics',
            'description' => 'Electronic devices and gadgets.'],
            ['name' => 'Clothing', 'description' => 'Apparel and accessories.'],
            ['name' => 'Books', 'description' => 'Printed and digital books.'],
            ['name' => 'Home & Kitchen', 'description' => 'Household items and kitchenware.'],
            ['name' => 'Sports & Outdoors', 'description' => 'Sporting goods and outdoor equipment.'],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }

    }
}
