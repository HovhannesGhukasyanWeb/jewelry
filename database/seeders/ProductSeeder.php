<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Generate fake products
        for ($i = 0; $i < 20; $i++) {
            Product::create([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'price' => $faker->randomFloat(2, 10, 1000),
                'stock_quantity' => $faker->numberBetween(1, 100),
                'image_url' => $faker->imageUrl(),
                'category_id' => $faker->numberBetween(1, 5) // Assuming you have 5 categories
            ]);
        }
    }
}
