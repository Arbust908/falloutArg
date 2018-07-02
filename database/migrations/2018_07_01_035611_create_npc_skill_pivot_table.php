<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNpcSkillPivotTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('npc_skill', function (Blueprint $table) {
      $table->integer('npc_id')->unsigned()->index();
      $table->foreign('npc_id')->references('id')->on('npcs')->onDelete('cascade');
      $table->integer('skill_id')->unsigned()->index();
      $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
      $table->primary(['npc_id', 'skill_id']);
      $table->increments('id');
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
    Schema::drop('npc_skill');
  }
}
