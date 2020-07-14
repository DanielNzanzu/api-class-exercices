<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin user
        DB::table('roles')->insert([
            'name' => 'admin',
            'description' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //manager
        DB::table('roles')->insert([
            'name' => 'manager',
            'description' => 'Manager',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //casual
        DB::table('roles')->insert([
            'name' => 'labourer',
            'description' => 'Labourer',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //customer
        DB::table('roles')->insert([
            'name' => 'customer',
            'description' => 'Customer',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //societies
        DB::table('roles')->insert([
            'name' => 'dairy-coop',
            'description' => 'Dairy Cooperative',
            'isOrganization' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
