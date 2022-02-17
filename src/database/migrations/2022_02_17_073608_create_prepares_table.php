<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreparesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prepares', function (Blueprint $table) {
            $table->id();
            $table->integer('click_trans_id');
            $table->integer('service_id');
            $table->integer('click_paydoc_id');
            $table->string('merchant_trans_id', 255);
            $table->float('amount', 8, 2);
            $table->integer('action');
            $table->integer('error');
            $table->string('error_note', 255);
            $table->string('sign_time', 255);
            $table->string('sign_string', 255);
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
        Schema::dropIfExists('prepares');
    }
}
