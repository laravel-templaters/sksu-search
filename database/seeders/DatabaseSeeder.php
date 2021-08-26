<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([admminseeder::class, DepartmentSeeder::class, PositionSeeder::class, RoleSeeder::class]);
    }
}
