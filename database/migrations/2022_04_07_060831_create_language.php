<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('basics_id');   
            $table->unsignedBigInteger('option_id');
            $table->boolean('read')->default(0);
            $table->boolean('write')->default(0);
            $table->boolean('speak')->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('basics_id')->references('id')->on('basics');
            $table->foreign('option_id')->references('id')->on('options');
     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
    }
}
