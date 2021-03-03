<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('guest_id');
            $table->unsignedInteger('charity_category_id');
            $table->string('donation_id')->nullable();
            $table->integer('donation_amount')->default(0);
            $table->string('bank_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('bank_destination')->nullable();
            $table->text('message')->nullable();
            $table->enum('status', ['UNPAID', 'PAID', 'VOID']);
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
        Schema::dropIfExists('charities');
    }
}
