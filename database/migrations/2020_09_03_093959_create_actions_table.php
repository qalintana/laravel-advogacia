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
    // Schema::create('actions', function (Blueprint $table) {
    //   $table->id();
    //   $table->string('ato');
    //   $table->date('data');
    //   $table->decimal('valor', 10, 2);
    //   $table->decimal('valorfinal', 10, 2);
    //   $table->string('tempo');

    //   $table->timestamps();
    // });
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
