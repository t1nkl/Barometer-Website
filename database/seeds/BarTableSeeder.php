<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bars')->insert([
            'title' => '{"ru":"Test 1"}',
            'slug' => 'test-1',
            'image' => 'http://via.placeholder.com/300x300',
            'descr' => '{"ru":"Test description"}',
            'content' => '{"ru":"Test content"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bars')->insert([
            'title' => '{"ru":"Test 2"}',
            'slug' => 'test-2',
            'image' => 'http://via.placeholder.com/300x300',
            'descr' => '{"ru":"Test description"}',
            'content' => '{"ru":"Test content"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bars')->insert([
            'title' => '{"ru":"Test 3"}',
            'slug' => 'test-3',
            'image' => 'http://via.placeholder.com/300x300',
            'descr' => '{"ru":"Test description"}',
            'content' => '{"ru":"Test content"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bars')->insert([
            'title' => '{"ru":"Test 4"}',
            'slug' => 'test-4',
            'image' => 'http://via.placeholder.com/300x300',
            'descr' => '{"ru":"Test description"}',
            'content' => '{"ru":"Test content"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bars')->insert([
            'title' => '{"ru":"Test 5"}',
            'slug' => 'test-5',
            'image' => 'http://via.placeholder.com/300x300',
            'descr' => '{"ru":"Test description"}',
            'content' => '{"ru":"Test content"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bars')->insert([
            'title' => '{"ru":"Test 6"}',
            'slug' => 'test-6',
            'image' => 'http://via.placeholder.com/300x300',
            'descr' => '{"ru":"Test description"}',
            'content' => '{"ru":"Test content"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bars')->insert([
            'title' => '{"ru":"Test 7"}',
            'slug' => 'test-7',
            'image' => 'http://via.placeholder.com/300x300',
            'descr' => '{"ru":"Test description"}',
            'content' => '{"ru":"Test content"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bars')->insert([
            'title' => '{"ru":"Test 8"}',
            'slug' => 'test-8',
            'image' => 'http://via.placeholder.com/300x300',
            'descr' => '{"ru":"Test description"}',
            'content' => '{"ru":"Test content"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bars')->insert([
            'title' => '{"ru":"Test 9"}',
            'slug' => 'test-9',
            'image' => 'http://via.placeholder.com/300x300',
            'descr' => '{"ru":"Test description"}',
            'content' => '{"ru":"Test content"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bars')->insert([
            'title' => '{"ru":"Test 10"}',
            'slug' => 'test-10',
            'image' => 'http://via.placeholder.com/300x300',
            'descr' => '{"ru":"Test description"}',
            'content' => '{"ru":"Test content"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bars')->insert([
            'title' => '{"ru":"Test 11"}',
            'slug' => 'test-11',
            'image' => 'http://via.placeholder.com/300x300',
            'descr' => '{"ru":"Test description"}',
            'content' => '{"ru":"Test content"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bars')->insert([
            'title' => '{"ru":"Test 12"}',
            'slug' => 'test-12',
            'image' => 'http://via.placeholder.com/300x300',
            'descr' => '{"ru":"Test description"}',
            'content' => '{"ru":"Test content"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bars')->insert([
            'title' => '{"ru":"Test 13"}',
            'slug' => 'test-13',
            'image' => 'http://via.placeholder.com/300x300',
            'descr' => '{"ru":"Test description"}',
            'content' => '{"ru":"Test content"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('bars')->insert([
            'title' => '{"ru":"Test 14"}',
            'slug' => 'test-14',
            'image' => 'http://via.placeholder.com/300x300',
            'descr' => '{"ru":"Test description"}',
            'content' => '{"ru":"Test content"}',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
