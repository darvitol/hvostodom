<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetImgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets_img', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->bigInteger('pet_id')
                ->unsigned();
            $table->foreign('pet_id')
                ->references('id')
                ->on('pets')
                ->onDelete('cascade');
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
        Schema::dropIfExists('pets_img');
    }
}
