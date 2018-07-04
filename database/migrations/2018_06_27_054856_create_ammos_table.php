<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmmosTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('ammos', function (Blueprint $table) {
      $table->increments('id');
      $table->string('slug');

      
      $table->string('name');
      $table->integer('weight');
      $table->text('description');
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
    Schema::dropIfExists('ammos');
  }
}
