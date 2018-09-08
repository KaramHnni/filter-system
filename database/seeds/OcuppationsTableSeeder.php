<?php

use Illuminate\Database\Seeder;

class OcuppationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('occupations')->count() == 0){
            DB::table('occupations')->insert([
                'name' => 'Freelancer'
            ]);
            DB::table('occupations')->insert([
                'name' => 'Full Time Job'
            ]);
            DB::table('occupations')->insert([
                'name' => 'Partial Time Job'
            ]);
        }
    }
}
