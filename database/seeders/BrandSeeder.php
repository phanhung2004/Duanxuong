<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            ['name' => 'ADIDAS', 'logo' => 'hhhhhh'],
            ['name' => 'NIKE', 'logo' => 'hhhhhh'],
            ['name' => 'HUMA', 'logo' => 'hhhhhh']
        ]);
    }
}
