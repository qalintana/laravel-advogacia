<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('processes', function (Blueprint $table) {
      $table->id();
      $table->date('data_abertura');
      $table->decimal('valor', 8, 2);
      $table->double('valor_alcancado', 8, 2);

      $table->string('contraparte');
      $table->date('data_conclusao');
      $table->string('retencao');
      $table->string('desconto');
      $table->string('successfree');
      $table->unsignedBigInteger('client_id')->nullable();
      $table->unsignedBigInteger('escritory_id')->nullable();
      $table->unsignedBigInteger('type_id')->nullable();
      $table->timestamps();

      $table->foreign('client_id')
        ->references('id')->on('clients')
        ->onDelete('SET NULL')
        ->onUpdate('CASCADE');

      $table->foreign('escritory_id')
        ->references('id')->on('escritories')
        ->onDelete('SET NULL')
        ->onUpdate('CASCADE');

      $table->foreign('type_id')
        ->references('id')->on('types')
        ->onDelete('SET NULL')
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
    Schema::dropIfExists('processes');
  }
}
