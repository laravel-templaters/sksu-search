<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert(
            [
                ['position_name' => 'admin'], 
                ['position_name' => 'department_head'], 
                ['position_name' => 'secretariat']
            ]);
    }
}
