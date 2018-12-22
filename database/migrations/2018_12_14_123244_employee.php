<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('profession');
            $table->string('experience');
            $table->integer('cost');
            $table->string('location');
            $table->string('phoneNo');
            $table->string('password');
            $table->integer('rating')->nullable();
            $table->string('status')->nullable()->default('Free');
            $table->integer('request')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
