<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCharityIdInMidtransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('midtrans_responses', function (Blueprint $table) {
            $table->unsignedInteger('charity_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('midtrans_responses', function (Blueprint $table) {
            $table->dropColumn('charity_id');
        });
    }
}
