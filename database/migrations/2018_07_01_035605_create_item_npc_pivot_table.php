<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemNpcPivotTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up(){
    Schema::create('item_npc', function (Blueprint $table) {
      $table->integer('item_id')->unsigned()->index();
      $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
      $table->integer('npc_id')->unsigned()->index();
      $table->foreign('npc_id')->references('id')->on('npcs')->onDelete('cascade');
      $table->primary(['item_id', 'npc_id']);
      $table->increments('id');
      
      $table->integer('item_id');
      $table->integer('npc_id');
      $table->integer('amount');
      
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
    Schema::drop('item_npc');
  }
}
