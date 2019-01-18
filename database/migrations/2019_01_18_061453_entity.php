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
        $table->string('subtype')->nullable('false');
        $table->string('slug')->unique()->nullable(false);
        $table->integer('owner_id')->nullable(false);
        $table->boolean('status')->default(true)->nullable(false);
        // 0 represent public permission
        $table->enum('permissoin',[0,1,2,3])->default(0)->nullable(false);
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
