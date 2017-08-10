<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProgramTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scenes')->insert([
            'title' => '{"ru":"Barometer School"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('scenes')->insert([
            'title' => '{"ru":"Tasting room 1"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('scenes')->insert([
            'title' => '{"ru":"Tasting room 2"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('scenes')->insert([
            'title' => '{"ru":"Barometer Education"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('programs')->insert([
            'speaker_id' => '1',
            'scene_id' => '1',
            'day' => '29-09-2017',
            'title' => '{"ru":"Start with Nico de Soto","en":"Start with Nico de Soto"}',
            'start_date' => '12:00:00',
            'end_date' => '13:00:00',
            'type' => 'Standard',
            'content' => '{"ru":"\u0422\u0435\u0441\u0442 \u043a\u043e\u043d\u0442\u0435\u043d\u0442","en":"Test content"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('programs')->insert([
            'speaker_id' => '1',
            'scene_id' => '1',
            'day' => '29-09-2017',
            'title' => '{"ru":"Bar Concept 1"}',
            'start_date' => '13:30:00',
            'end_date' => '15:00:00',
            'type' => 'Premium',
            'content' => '{"ru":"\u0422\u0435\u0441\u0442 \u043a\u043e\u043d\u0442\u0435\u043d\u0442","en":"Test content"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('programs')->insert([
            'speaker_id' => '6',
            'scene_id' => '2',
            'day' => '29-09-2017',
            'title' => '{"ru":"Bar Concept 2"}',
            'start_date' => '13:00:00',
            'end_date' => '16:00:00',
            'type' => 'Premium',
            'content' => '{"ru":"\u0422\u0435\u0441\u0442 \u043a\u043e\u043d\u0442\u0435\u043d\u0442","en":"Test content"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('programs')->insert([
            'speaker_id' => '4',
            'scene_id' => '3',
            'day' => '29-09-2017',
            'title' => '{"ru":"The Joy of Bitterness: The History & Evolution of Bitter Flavors"}',
            'start_date' => '15:00:00',
            'end_date' => '17:00:00',
            'type' => 'Premium',
            'content' => '{"ru":"\u0422\u0435\u0441\u0442 \u043a\u043e\u043d\u0442\u0435\u043d\u0442","en":"Test content"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('programs')->insert([
            'speaker_id' => '3',
            'scene_id' => '4',
            'day' => '29-09-2017',
            'title' => '{"ru":"\u044b\u0444\u044b\u0444\u044b\u0444\u044b\u0444\u044b"}',
            'start_date' => '14:00:00',
            'end_date' => '19:00:00',
            'type' => 'Standard',
            'content' => '{"ru":"\u0422\u0435\u0441\u0442 \u043a\u043e\u043d\u0442\u0435\u043d\u0442","en":"Test content"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('programs')->insert([
            'speaker_id' => '2',
            'scene_id' => '2',
            'day' => '29-09-2017',
            'title' => '{"ru":"Bar Concept 3"}',
            'start_date' => '17:00:00',
            'end_date' => '20:00:00',
            'type' => 'Standard',
            'content' => '{"ru":"\u0422\u0435\u0441\u0442 \u043a\u043e\u043d\u0442\u0435\u043d\u0442","en":"Test content"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
