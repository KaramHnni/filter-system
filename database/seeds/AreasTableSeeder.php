<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('areas')->count() == 0){
            DB::table('areas')->insert([
                'name' => 'ألشلف',
                'status' => '1',
                'city_id' => '1'
            ]);
            DB::table('areas')->insert([
                'name' => 'تنس',
                'status' => '0',
                'city_id' => '1'
            ]);
            DB::table('areas')->insert([
                'name' => 'بيرخادم',
                'status' => '1',
                'city_id' => '2'
            ]);
            
        }
    }
}
