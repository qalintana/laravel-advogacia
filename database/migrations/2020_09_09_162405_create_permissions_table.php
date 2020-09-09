<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('permissions', function (Blueprint $table) {
      $table->id();
      $table->date('data');
      $table->unsignedSmallInteger('advocate_id')->nullable();
      $table->unsignedSmallInteger('process_id')->nullable();

      $table->foreign('advocate_id')->references('id')->on('advocates')->onDelete('SET NULL')
        ->onUpdate('CASCADE');

      $table->foreign('process_id')->references('id')->on('processes')->onDelete('SET NULL')
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
    Schema::dropIfExists('permissions');
  }
}
