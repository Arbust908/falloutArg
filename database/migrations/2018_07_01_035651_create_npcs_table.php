<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNpcsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('npcs', function (Blueprint $table) {
      $table->increments('id');
      $table->string('slug');
      
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
    Schema::dropIfExists('npcs');
  }
}
