<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Emaillist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emaillist', function (Blueprint $table) {
            $table->bigIncrements('email_id');
            $table->string('nama_pengirim');
            $table->string('email');
            $table->string('subject');
            $table->string('messages');
            $table->string('logIp');
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
        Schema::dropIfExists('emaillist');
    }
}
