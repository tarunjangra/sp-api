<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Relationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('relationships', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedInteger('entity_one_guid');
        $table->string('entity_one_subtype');
        $table->unsignedInteger('entity_two_guid');
        $table->string('entity_two_subtype');
        $table->enum('relation',['LIKE','RECOMMEND','SUBSCRIBE','UNSUBSCRIBE']);
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
        //
    }
}
