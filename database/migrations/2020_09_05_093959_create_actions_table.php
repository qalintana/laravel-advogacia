<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActionsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('actions', function (Blueprint $table) {
      $table->id();
      $table->string('ato');
      $table->unsignedBigInteger('process_id');
      $table->date('data');
      $table->decimal('valor', 10, 2);
      $table->decimal('valorfinal', 10, 2);
      $table->string('tempo');

      $table->foreign('process_id')->references('id')
        ->on('processes')->onDelete('SET NULL')
        ->onUpdate('CASCADE');

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
    Schema::dropIfExists('actions');
  }
}
