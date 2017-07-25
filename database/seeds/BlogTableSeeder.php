<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'title' => '{"ru":"Тег 1"}',
            'slug' => 'teg-1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('tags')->insert([
            'title' => '{"ru":"Тег 2"}',
            'slug' => 'teg-2',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('tags')->insert([
            'title' => '{"ru":"Тег 3"}',
            'slug' => 'teg-3',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('articles')->insert([
            'title' => '{"ru":"Test title 1"}',
            'slug' => 'test-title-1',
            'image' => 'http://via.placeholder.com/600x600',
            'content' => '{"ru":"Test content"}',
            'status' => 'PUBLISHED',
            'date' => '2017-07-17',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('articles')->insert([
            'title' => '{"ru":"Test title 2"}',
            'slug' => 'test-title-2',
            'image' => 'http://via.placeholder.com/600x600',
            'content' => '{"ru":"Test content"}',
            'status' => 'PUBLISHED',
            'date' => '2017-07-16',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('articles')->insert([
            'title' => '{"ru":"Test title 3"}',
            'slug' => 'test-title-3',
            'image' => 'http://via.placeholder.com/600x600',
            'content' => '{"ru":"Test content"}',
            'status' => 'PUBLISHED',
            'date' => '2017-07-15',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('articles')->insert([
            'title' => '{"ru":"Test title 4"}',
            'slug' => 'test-title-4',
            'image' => 'http://via.placeholder.com/600x600',
            'content' => '{"ru":"Test content"}',
            'status' => 'PUBLISHED',
            'date' => '2017-07-14',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('article_tag')->insert([
            'article_id' => '1',
            'tag_id' => '1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => '1',
            'tag_id' => '2',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => '2',
            'tag_id' => '2',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => '2',
            'tag_id' => '3',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => '3',
            'tag_id' => '1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => '3',
            'tag_id' => '2',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => '3',
            'tag_id' => '3',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => '4',
            'tag_id' => '2',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
