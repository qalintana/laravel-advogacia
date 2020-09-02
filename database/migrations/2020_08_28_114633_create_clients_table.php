<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('clients', function (Blueprint $table) {
      $table->id();
      $table->string('nome');
      $table->string('apelido');
      $table->string('morada');
      $table->string('nif');
      $table->string('postal')->nullable();
      $table->string('fraguesia')->nullable();
      $table->string('concelho');
      $table->string('contacto1');
      $table->string('contacto2');
      $table->string('email');
      $table->string('user_id');
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
    Schema::dropIfExists('clients');
  }
}
