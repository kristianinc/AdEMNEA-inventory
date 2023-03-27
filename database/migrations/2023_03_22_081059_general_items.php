<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('GeneralItems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('Categories');
            $table->unsignedBigInteger('compartment_id');
            $table->foreign('compartment_id')->references('id')->on('Compartments');
            $table->unsignedBigInteger('consignment_id');
            $table->foreign('consignment_id')->references('id')->on('Consignments');
            $table->string('name');
            $table->string('Type')->nullable();
            $table->string('Quantity');
            $table->string('trackable')->default('0');
            $table->boolean('in_stock')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('GeneralItems');
    }
};
