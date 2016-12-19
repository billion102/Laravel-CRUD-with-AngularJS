<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create supplier table
        Schema::create('supplier', function (Blueprint $table) {
            $table->increments('id');
            $table->string('supplierName')->unique();
            $table->string('supplierEmail')->unique();
            $table->string('supplierContact');
            $table->string('supplierPosition');
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
        //Drop supplier table
        Schema::drop('supplier');
    }
}
