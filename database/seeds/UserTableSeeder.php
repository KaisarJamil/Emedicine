<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Admin',
            'role_id'=>1,
            'email'=>'admin@gmail.com',
            'address'=>'Mirpur',
            'password' =>bcrypt('rootadmin'),
        ]);
        DB::table('users')->insert([
            'name'=>'User',
            'role_id'=>2,
            'email'=>'user@gmail.com',
            'address'=>'Karimganj',
            'password' =>bcrypt('rootuser'),
        ]);
    }
}
