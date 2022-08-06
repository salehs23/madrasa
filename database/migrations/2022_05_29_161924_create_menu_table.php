<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->string('main_menu');
            $table->string('sub_menu');
            $table->string('txt_icon_name');
            $table->integer('status');
            $table->timestamps();
            $table->integer('order');
            $table->string('txt_function');
            $table->integer('sub_menu_status');
            $table->integer('main_menu_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
