<?php

use Illuminate\Database\Seeder;

class SpecialitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('specialities')->count() == 0){
            DB::table('specialities')->insert([
                'name' => 'التصميم',
                'slug' => 'design',
                'status' =>'1'
            ]);
            DB::table('specialities')->insert([
                'name' => 'البرمجة',
                'slug' => 'programming',
                'status' =>'1'
            ]);
            DB::table('specialities')->insert([
                'name' => 'كتابة المحتوى',
                'slug' => 'writing',
                'status' =>'1'
            ]);
        }
    }
}
