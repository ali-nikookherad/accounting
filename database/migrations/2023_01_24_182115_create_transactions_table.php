<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("amount");

            $table->unsignedInteger("from_account_id")
                ->nullable();

            $table->unsignedInteger("to_account_id")
                ->nullable();

            $table->dateTime("paid_at");

            $table->unsignedInteger("order_id")
                ->index("index_for_order_id_in_transaction");

            $table->timestamps();

            $table->foreign("order_id")
                ->references("id")
                ->on("orders");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
