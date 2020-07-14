<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @Reference : https://www.infonet-biovision.org/AnimalHealth/Cattle-breeds
     * @return void
     */
    public function run()
    {
        DB::table('breeds')->insert([
            'name' => 'Freshian',
            'origin' => 'Netherlands',
            'animalTypeId' => 1,
            'photo' => 'uploads/freshian.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('breeds')->insert([
            'name' => 'Airshire',
            'origin' => 'Scotland',
            'animalTypeId' => 1,
            'photo' => 'uploads/airshire.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('breeds')->insert([
            'name' => 'Guernsey',
            'origin' => 'France',
            'animalTypeId' => 1,
            'photo' => 'uploads/guernsey.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('breeds')->insert([
            'name' => 'Jersey',
            'origin' => 'Jersey Island',
            'animalTypeId' => 1,
            'photo' => 'uploads/jersey.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
