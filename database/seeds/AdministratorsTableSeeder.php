<?php

use Illuminate\Database\Seeder;

class AdministratorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('administrators')->count() == 0){
            DB::table('administrators')->insert([
                'name' => 'admin1',
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('123456')
            ]);
    }
}
}