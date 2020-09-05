<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('parcels', function (Blueprint $table) {
      $table->id();
      $table->integer('parcela');
      $table->unsignedBigInteger('avence_id')->nullable();
      $table->double('valor');
      $table->double('desconto');
      $table->date('data_vencimento');
      $table->date('data_pagamento');

      $table->foreign('avence_id')
        ->references('id')->on('avences')
        ->onDelete('SET NULL')->onUpdate('CASCADE');
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
    Schema::dropIfExists('parcels');
  }
}
