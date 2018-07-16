<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('items', function (Blueprint $table) {
      $table->increments('id');
      $table->string('slug');
      
      $table->string('name');
      $table->unsignedTinyInteger('weight');
      //$table->integer('weight');
      $table->unsignedTinyInteger('rarity_id');
      //$table->integer('rarity_id');
      $table->text('description');
      $table->string('effect');
      $table->string('img');
      
      $table->integer('status');

      //$table->morphs('taggable');
      $table->nullableMorphs('itemable');
      //$table->integer('itemable_id');
      //$table->string('itemable_type');

      $table->timestampsTz();
      //$table->timestamps();
      
    });
  }
  
  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('items');
  }
}
