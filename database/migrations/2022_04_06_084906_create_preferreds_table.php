<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreferredsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferred', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('basics_id');
            $table->unsignedBigInteger('option_id');
            $table->string('notice_period');
            $table->string('current_ctc');
            $table->string('exp_ctc');
            $table->string('department');
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
        Schema::dropIfExists('preferred');
    }
}
