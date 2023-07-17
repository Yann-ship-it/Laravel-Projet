<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\PromotionSeeder;
use Database\Seeders\UserProductSeeder;
use Database\Seeders\ProductPromotionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            ProductSeeder::class,
            CategorySeeder::class,
            RoleSeeder::class,
            ProductPromotionSeeder::class,
            PromotionSeeder::class,
            UserProductSeeder::class,
            ProductPromotionSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
