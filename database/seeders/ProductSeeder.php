<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'DELL',
            'price' => 200,
            'user_id' => 1,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
