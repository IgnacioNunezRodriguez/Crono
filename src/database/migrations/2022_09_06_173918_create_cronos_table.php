<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('cronos');
        Schema::create('cronos', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text('description');
            $table->time("cronovalue");
            $table->unsignedBigInteger('FK_user_id');
            $table->foreign('FK_user_id')->references('id')->on('users');
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
        Schema::dropIfExists('cronos');
    }
};