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
        Schema::create('FaultyGeneralItems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id')->on('GeneralItems');
            $table->unsignedBigInteger('borrow_id');
            $table->foreign('borrow_id')->references('id')->on('Borrow');
            $table->string('quantity');
            $table->timestamp('FaultDate');
            $table->string('FaultDescription');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('FaultyGeneralItems');
    }
};