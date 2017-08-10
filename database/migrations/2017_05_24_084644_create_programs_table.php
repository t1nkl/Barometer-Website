<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('speaker_id')->unsigned();
            $table->integer('scene_id')->unsigned();
            $table->string('day')->nullable();
            $table->text('title')->nullable();
            $table->time('start_date')->nullable();
            $table->time('end_date')->nullable();
            $table->enum('type', ['Standard', 'Premium'])->default('Standard');
            $table->text('content')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('programs');
    }
}
