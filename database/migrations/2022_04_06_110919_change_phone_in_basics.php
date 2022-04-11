<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangePhoneInBasics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('basics', function (Blueprint $table) {
            $table->unsignedBigInteger('phone')->change();
            $table->unsignedBigInteger('zip')->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('basics', function (Blueprint $table) {
            //
        });
    }
}
