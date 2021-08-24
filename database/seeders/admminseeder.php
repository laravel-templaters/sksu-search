<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class admminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'Kristine H. Ampas',
            'email'=>'kha@admin.com',
            'password'=> Hash::make('searchadmin0123'),
            'role_id'=>1]);
    }
}
