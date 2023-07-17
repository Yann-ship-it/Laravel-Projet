<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i = 0; $i < 10; $i++){
            DB::table('user_products')->insert([
                "product_id" => $i,
                "user_id" => 2,
            ]);
        }

        for ($i = 0; $i < 10; $i++){
            DB::table('user_products')->insert([
                "product_id" => $i,
                "user_id" => 1,
            ]);
        }
    }
}
