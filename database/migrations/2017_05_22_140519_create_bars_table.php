<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->default(0)->nullable();
            $table->integer('lft')->unsigned()->nullable();
            $table->integer('rgt')->unsigned()->nullable();
            $table->integer('depth')->unsigned()->nullable();
            $table->text('title')->nullable();
            $table->string('slug')->default('');
            $table->string('image')->nullable();
            $table->text('descr')->nullable();
            $table->text('content')->nullable();
            $table->string('url')->nullable();
            $table->string('fb')->nullable();
            $table->string('inst')->nullable();
            $table->string('ytube')->nullable();
            $table->string('twit')->nullable();
            $table->enum('status', ['PUBLISHED', 'NOT PUBLISHED'])->default('PUBLISHED');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bars');
    }
}
