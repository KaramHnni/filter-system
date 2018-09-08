<?php

use Illuminate\Database\Seeder;

class DegreesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('degrees')->count() == 0){
            DB::table('degrees')->insert([
                'name' => 'Lisence',
                'abbreviation' => 'L',
                'institut_id' =>'3'
            ]);
            DB::table('degrees')->insert([
                'name' => 'Master',
                'abbreviation' => 'M',
                'institut_id' =>'1'
            ]);
            DB::table('degrees')->insert([
                'name' => 'Ingenieur',
                'abbreviation' => 'ING',
                'institut_id' =>'2'
            ]);
        }
    }
}
