<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvinesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('provines', function (Blueprint $table) {
      $table->id();
      $table->decimal('valor', 10, 2);
      $table->date('data');
      $table->unsignedBigInteger('process_id')->nullable();
      $table->timestamps();

      $table->foreign('process_id')->references('id')
        ->on('processes')
        ->onDelete('SET NULL')->onUpdate('CASCADE');
    });
  }
  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('provines');
  }
}
