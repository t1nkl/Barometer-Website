<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TicketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert([
            'type' => 'Standart',
            'price' => '300',
            'options' => '{"ru":[{"title":"\u0421\u0432\u043e\u0431\u043e\u0434\u043d\u044b\u0439 \u0434\u043e\u0441\u0442\u0443\u043f: \u0417\u043e\u043d\u0430 \u0431\u0430\u0440\u043e\u0432"},{"title":"\u0412\u044b\u0441\u0442\u0430\u0432\u043e\u0447\u043d\u0430\u044f \u0437\u043e\u043d\u044b, \u0437\u043e\u043d\u044b food-court"},{"title":"\u041e\u0433\u0440\u0430\u043d\u0438\u0447\u0435\u043d\u043d\u043e\u0435 \u043f\u043e\u0441\u0435\u0449\u0435\u043d\u0438\u0435 \u043b\u0435\u043a\u0446\u0438\u0439 \u0438 \u0434\u0435\u0433\u0443\u0441\u0442\u0430\u0446\u0438\u0439"}],"en":[{"title":"Free access: Area of bars"},{"title":"Exhibition area, food-kurt zones"},{"title":"Limited visits to lectures and tastings"}]}',
            'premium_options' => '{"ru":null,"en":null}',
            'url' => '2018-08-20 21:00:00',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('tickets')->insert([
            'type' => 'Premium',
            'price' => '1200',
            'options' => '{"ru":[{"title":"\u041f\u043e\u0441\u0435\u0449\u0435\u043d\u0438\u0435 Barometer International Bar Show 2017"},{"title":"\u0414\u043e\u0441\u0442\u0443\u043f \u0432 \u0437\u043e\u043d\u0443 main stage"},{"title":"\u041f\u043e\u0441\u0435\u0449\u0435\u043d\u0438\u0435 \u0432\u0441\u0435\u0445 \u0434\u0435\u0433\u0443\u0441\u0442\u0430\u0446\u0438\u0439"}],"en":[{"title":"Visit to Barometer International Bar Show 2017"},{"title":"Access to the main service area"},{"title":"Visiting all tastings"}]}',
            'premium_options' => '{"ru":[{"title":"\u0414\u043e\u0441\u0442\u0443\u043f \u043a\u043e \u0432\u0441\u0435\u043c \u043c\u0430\u0441\u0442\u0435\u0440 \u043a\u043b\u0430\u0441\u0441\u0430\u043c"},{"title":"\u0412\u043e\u0437\u043c\u043e\u0436\u043d\u043e\u0441\u0442\u044c \u043f\u043e\u0441\u0435\u0449\u0435\u043d\u0438\u044f \u0432\u0441\u0435\u0445 \u043e\u0431\u0440\u0430\u0437\u043e\u0432\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u0445 \u043b\u0435\u043a\u0442\u043e\u0440\u0438\u0435\u0432"}],"en":[{"title":"Access to all master classes"},{"title":"Opportunity to visit all educational lectures"}]}',
            'url' => '#',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
