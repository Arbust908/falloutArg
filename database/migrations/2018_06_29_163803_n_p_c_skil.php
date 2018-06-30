<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NPCSkil extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('n_p_c_skill', function (Blueprint $table) {
      $table->increments('id');
      
      $table->integer('npc_id');
      $table->integer('skill_id');
      $table->integer('porcentaje');
      
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
    Schema::dropIfExists('n_p_c_skill');
  }
}
