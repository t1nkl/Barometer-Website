<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DemoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'title' => 'Настройки сайта',
            'seo_title' => '{"ru":"Baromether","en":"Baromether"}',
            'seo_description' => '{"ru":"Baromether","en":"Baromether"}',
            'start_date' => '2018-08-16 12:00:00',
            'end_date' => '2018-08-20 21:00:00',
            'place' => '{"ru":"\u041a\u0438\u0435\u0432","en":"Kiev"}',
            // 'seo_title' => 'Настройки',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);


    }
}
