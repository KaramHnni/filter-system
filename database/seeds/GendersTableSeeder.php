<?php

use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('genders')->count() == 0){
            DB::table('genders')->insert([
                'name' =>'ذكر'
            ]);
            DB::table('genders')->insert([
                'name' =>'أنثى'
            ]);
    }
}
}
