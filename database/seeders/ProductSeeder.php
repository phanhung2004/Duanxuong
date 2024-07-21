<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('products')->insert([
                'name' => $faker->text(25),
                'image' => "https://www.google.com/imgres?q=cr7&imgurl=https%3A%2F%2Fcafefcdn.",
                'description' => $faker->text(50),
                'material' => $faker->text(50),
                'price' => $faker->text(),
                'sale-price' => rand(1, 1000),
                'category_id' => rand(1, 3),
                'brand_id' => rand(1, 3),
                'code' => $faker->text(10),
            ]);
        }
        ;
    }
}
