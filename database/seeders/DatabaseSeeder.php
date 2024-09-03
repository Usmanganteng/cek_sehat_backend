<?php

namespace Database\Seeders;

use App\Models\Symtomps;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 10; $i++){
            Symtomps::create([
                'nama' => $faker->name,
                'description' => $faker->name,
            ]);
        }
    }
}
