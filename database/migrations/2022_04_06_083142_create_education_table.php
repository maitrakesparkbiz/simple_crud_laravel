<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('basics_id');
            $table->unsignedBigInteger('option_id');
            $table->string('university');
            $table->year('passing_year');
            $table->float('percentage');
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
        Schema::dropIfExists('education');
    }
}
