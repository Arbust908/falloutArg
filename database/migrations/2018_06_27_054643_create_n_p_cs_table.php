<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNPCsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('n_p_cs', function (Blueprint $table) {
      $table->increments('id');

      $table->string('name');
      $table->integer('health');
      $table->integer('damage_reduction');
      $table->string('img');
      
      $table->integer('status');
      
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
    Schema::dropIfExists('n_p_cs');
  }
}
