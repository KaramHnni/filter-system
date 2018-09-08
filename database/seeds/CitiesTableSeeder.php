<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('cities')->count() == 0){
            DB::table('cities')->insert([
                'name' => 'ألشلف',
                'status' => '1',
                'slug' => 'chlef'
            ]);
            DB::table('cities')->insert([
                'name' => 'الجزائر العاصمة',
                'status' => '0',
                'slug' => 'alger'
            ]);
            DB::table('cities')->insert([
                'name' => 'وهران',
                'status' => '1',
                'slug' => 'oran'
            ]);
        }
    }
}
