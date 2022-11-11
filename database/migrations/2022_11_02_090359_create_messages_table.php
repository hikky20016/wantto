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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('Body',100);
            $table->unsignedBigInteger('to_user')->constrained()->nullable();
            $table->unsignedBigInteger('to_team')->constrained()->nullable();
            $table->unsignedBigInteger('from_user')->constrained()->nullable();
            $table->unsignedBigInteger('from_team')->constrained()->nullable();
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
        Schema::dropIfExists('messages');
    }
};
