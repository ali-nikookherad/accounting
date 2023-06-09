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
        Schema::create('banks', function (Blueprint $table) {
            $table->id();

            $table->string("name");

            $table->string("cvv2")
                ->nullable();

            $table->date("card_date")
                ->nullable();

            $table->string("branch")
                ->nullable();

            $table->string("card_number")
                ->nullable();

            $table->string("account_number")
                ->nullable();

            $table->string("sheba")
                ->nullable();

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
        Schema::dropIfExists('banks');
    }
};
