<?php

use Illuminate\Database\Seeder;

class InstitutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('instituts')->count() == 0){
            DB::table('instituts')->insert([
                'name' => 'Ecole NationaLe Poltechnique Oran',
                'slug' => 'ENPO',
                'city_id' =>'3'
            ]);
            DB::table('instituts')->insert([
                'name' => 'Ecole NationaLe Poltechnique Alger',
                'slug' => 'ENP',
                'city_id' =>'2'
            ]);
            DB::table('instituts')->insert([
                'name' => 'Université Hassiba Ben Bouali Chlef',
                'slug' => 'UHBC',
                'city_id' =>'1'
            ]);
        }
    }
}
