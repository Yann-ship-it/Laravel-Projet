<?php

namespace Database\Seeders;

use App\Models\Promotion;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Promotion::create([
            "name" => 'noel',
            "pourcentage" => 20,
        ]);
    }
}
