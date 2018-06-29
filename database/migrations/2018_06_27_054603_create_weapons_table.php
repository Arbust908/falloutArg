<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeaponsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('weapons', function (Blueprint $table) {
      $table->increments('id');
      
      $table->string('name');
      $table->integer('skill_id');
      $table->integer('weight');
      $table->integer('ammo_id');
      $table->string('100%');
      $table->string('75%');
      $table->string('50%');
      $table->string('25%');
      $table->integer('melee');
      $table->integer('close');
      $table->integer('medium');
      $table->integer('long');
      $table->integer('distant');
      $table->integer('rarity_id');
      $table->string('special');
      $table->string('trait');
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
    Schema::dropIfExists('weapons');
  }
}
