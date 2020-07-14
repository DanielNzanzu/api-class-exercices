<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class IntervalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('intervals')->insert([
            'name' => 'Morning',
            'start' => '04:00',
            'end' => '06:00',
            'description' => 'Morning',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('intervals')->insert([
            'name' => 'Midday',
            'start' => '11:00',
            'end' => '13:00',
            'description' => 'Midday',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('intervals')->insert([
            'name' => 'Evening',
            'start' => '03:00',
            'end' => '05:00',
            'description' => 'Evening',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
