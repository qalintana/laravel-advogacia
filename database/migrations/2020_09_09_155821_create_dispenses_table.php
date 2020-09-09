<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispensesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('dispenses', function (Blueprint $table) {
      $table->id();
      $table->decimal('valor', 10, 2);
      $table->unsignedBigInteger('font_id')->nullable();
      $table->date('data');
      $table->unsignedBigInteger('process_id')->nullable();
      $table->timestamps();


      $table->foreign('process_id')->references('id')
        ->on('processes')->onDelete('SET NULL')
        ->onUpdate('CASCADE');

      $table->foreign('font_id')->references('id')
        ->on('fonts')->onDelete('SET NULL')
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
    Schema::dropIfExists('dispenses');
  }
}
