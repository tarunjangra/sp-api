<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Entity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('entities', function (Blueprint $table) {
        $table->increments('guid');
        $table->string('subtype');
        $table->string('username')->unique();
        $table->boolean('status')->default(true);
        // 0 represent public permission
        $table->enum('permissoin',[0,1,2,3])->default(0);
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
