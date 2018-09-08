<?php

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('options')->count() == 0){
            DB::table('options')->insert([
                'name' => 'تصميم المواقع',
                'slug' => 'web-design',
                'speciality_id' => '1',
                'status' =>'1'
            ]);
            DB::table('options')->insert([
                'name' => 'برمجة تطبيقات المكتب',
                'slug' => 'Desktop-developping',
                'speciality_id' => '2',
                'status' =>'1'
            ]);
            DB::table('options')->insert([
                'name' => 'الترجمة',
                'slug' => 'translation',
                'speciality_id' => '3',
                'status' =>'1'
            ]);
    }
    }
}

