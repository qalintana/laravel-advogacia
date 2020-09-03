<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvencesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('avences', function (Blueprint $table) {
      $table->id();
      $table->decimal('valor_mensal');
      $table->string('iva');
      $table->string('retencao');
      $table->integer('parcelas');
      $table->string('obs');
      $table->unsignedBigInteger('client_id');
      $table->timestamps();

      $table->foreign('client_id')->references('id')
        ->on('clients')->onDelete('CASCADE')
        ->onUpdate('CASCADE');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('avences');
  }
}
