<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->string('Name_Client');
            $table->string('LastName');
            $table->string('Telephone_Client');
            $table->string('Type');
            $table->string('Operator')->nullable();
            $table->string('Cashier')->nullable();
            $table->string('Delivery')->nullable();
            $table->string('comment');
            $table->string('products')->nullable();
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
        Schema::dropIfExists('client');
    }
}
