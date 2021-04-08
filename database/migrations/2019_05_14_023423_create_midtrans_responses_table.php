<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMidtransResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('midtrans_responses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('transaction_time');
            $table->string('transaction_status');
            $table->string('transaction_id');
            $table->string('status_message');
            $table->integer('status_code');
            $table->string('signature_key');
            $table->string('payment_type');
            $table->string('order_id');
            $table->string('masked_card');
            $table->bigInteger('gross_amount');
            $table->string('fraud_status');
            $table->string('currency');
            $table->string('channel_response_message');
            $table->integer('channel_response_code');
            $table->string('card_type');
            $table->string('bank');
            $table->string('approval_code');
            $table->json('raw_data');
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
        Schema::dropIfExists('midtrans_responses');
    }
}
