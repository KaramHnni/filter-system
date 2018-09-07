<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('users')->count() == 0){
            DB::table('users')->insert([
                'name' => 'test1',
                'email' => 'test1@gmail.com',
                'password' => bcrypt('123456')
            ]);
        }
    }
}
