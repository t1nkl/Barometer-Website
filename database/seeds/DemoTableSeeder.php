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
            'start_date' => '2018-10-30 12:00:00',
            'end_date' => '2018-11-01 23:00:00',
            'place' => '{"ru":"\u041a\u0438\u0435\u0432","en":"Kiev"}',
            'email' => 'ceo@barometer.show',
            'address' => '{"ru":"\u0443\u043b\u0438\u0446\u0430 \u041c\u0430\u043b\u0435\u043d\u044c\u043a\u043e\u0433\u043e \u041b\u0435\u043d\u0438\u043d\u0430\u041a\u0440\u0430\u0441\u0441\u043d\u0430\u044f \u0423\u0433\u0440\u043e\u0437\u0430, \u043a\u0432 3, -1 \u044d\u0442\u0430\u0436","en":"from. Cherry, Little Lenins street  Red Threat, sq. 3, -1 floor"}',
            'phone' => '+380 44 228 73 10',
            // 'seo_title' => 'Настройки',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);


    }
}
