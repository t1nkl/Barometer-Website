<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PartnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mainpartners')->insert([
            'title' => '{"ru":"\u041e\u0440\u0433\u0430\u043d\u0438\u0437\u0430\u0442\u043e\u0440"}',
            'image' => 'http://via.placeholder.com/350x350',
            'content' => '{"ru":"\u041f\u0440\u0438\u043c\u0435\u0440\u044b \u0441\u0430\u043c\u044b\u0445 \u0443\u0441\u043f\u0435\u0448\u043d\u044b\u0445 \u043a\u0435\u0439\u0441\u043e\u0432, \u043e\u0431\u0443\u0447\u0430\u044e\u0449\u0438\u0435 \u0441\u0435\u043c\u0438\u043d\u0430\u0440\u044b, \u044d\u043a\u0441\u043a\u043b\u044e\u0437\u0438\u0432\u043d\u044b\u0435 \u043f\u0440\u0435\u0437\u0435\u043d\u0442\u0430\u0446\u0438\u0438, \u0443\u0432\u043b\u0435\u043a\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u0435 \u043c\u0430\u0441\u0442\u0435\u0440-\u043a\u043b\u0430\u0441\u0441\u044b \u043e\u0442 \u0432\u0435\u0434\u0443\u0449\u0438\u0445 \u044d\u043a\u0441\u043f\u0435\u0440\u0442\u043e\u0432 \u0440\u044b\u043d\u043a\u0430."}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('mainpartners')->insert([
            'title' => '{"ru":"\u041e\u0440\u0433\u0430\u043d\u0438\u0437\u0430\u0442\u043e\u0440"}',
            'image' => 'http://via.placeholder.com/350x350',
            'content' => '{"ru":"\u041f\u0440\u0438\u043c\u0435\u0440\u044b \u0441\u0430\u043c\u044b\u0445 \u0443\u0441\u043f\u0435\u0448\u043d\u044b\u0445 \u043a\u0435\u0439\u0441\u043e\u0432, \u043e\u0431\u0443\u0447\u0430\u044e\u0449\u0438\u0435 \u0441\u0435\u043c\u0438\u043d\u0430\u0440\u044b, \u044d\u043a\u0441\u043a\u043b\u044e\u0437\u0438\u0432\u043d\u044b\u0435 \u043f\u0440\u0435\u0437\u0435\u043d\u0442\u0430\u0446\u0438\u0438, \u0443\u0432\u043b\u0435\u043a\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u0435 \u043c\u0430\u0441\u0442\u0435\u0440-\u043a\u043b\u0430\u0441\u0441\u044b \u043e\u0442 \u0432\u0435\u0434\u0443\u0449\u0438\u0445 \u044d\u043a\u0441\u043f\u0435\u0440\u0442\u043e\u0432 \u0440\u044b\u043d\u043a\u0430."}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('mainpartners')->insert([
            'title' => '{"ru":"\u041e\u0440\u0433\u0430\u043d\u0438\u0437\u0430\u0442\u043e\u0440"}',
            'image' => 'http://via.placeholder.com/350x350',
            'content' => '{"ru":"\u041f\u0440\u0438\u043c\u0435\u0440\u044b \u0441\u0430\u043c\u044b\u0445 \u0443\u0441\u043f\u0435\u0448\u043d\u044b\u0445 \u043a\u0435\u0439\u0441\u043e\u0432, \u043e\u0431\u0443\u0447\u0430\u044e\u0449\u0438\u0435 \u0441\u0435\u043c\u0438\u043d\u0430\u0440\u044b, \u044d\u043a\u0441\u043a\u043b\u044e\u0437\u0438\u0432\u043d\u044b\u0435 \u043f\u0440\u0435\u0437\u0435\u043d\u0442\u0430\u0446\u0438\u0438, \u0443\u0432\u043b\u0435\u043a\u0430\u0442\u0435\u043b\u044c\u043d\u044b\u0435 \u043c\u0430\u0441\u0442\u0435\u0440-\u043a\u043b\u0430\u0441\u0441\u044b \u043e\u0442 \u0432\u0435\u0434\u0443\u0449\u0438\u0445 \u044d\u043a\u0441\u043f\u0435\u0440\u0442\u043e\u0432 \u0440\u044b\u043d\u043a\u0430."}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('partners')->insert([
            'title' => 'Test',
            'url' => 'test',
            'image' => 'http://via.placeholder.com/270x270',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
