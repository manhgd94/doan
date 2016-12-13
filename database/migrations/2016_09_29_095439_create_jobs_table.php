<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');

            // adding specific fields here...
            $table->string('name');
            $table->string('description');
            $table->string('image');
            $table->integer('salary');
            $table->string('position');
            $table->tinyInteger('status');

            $table->integer('user_id')->index();
            $table->integer('category_id')->index();
            $table->double('latitude');
            $table->double('longitude');

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
        Schema::drop('jobs');
    }
}
