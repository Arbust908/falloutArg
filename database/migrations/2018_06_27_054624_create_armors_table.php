<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArmorsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('armors', function (Blueprint $table) {
      $table->increments('id');
      
      $table->integer('skill_id');
      $table->string('requirement');
      $table->string('100%');
      $table->string('75%');
      $table->string('50%');
      $table->string('25%');
      //Esto es el 'effect' del item
      //$table->string('trait');
      
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
    Schema::dropIfExists('armors');
  }
}
