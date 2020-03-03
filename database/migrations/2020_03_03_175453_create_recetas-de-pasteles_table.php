<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetasDePastelesTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas-de-pasteles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->mediumText('ingredientes');
            $table->mediumText('preparación');
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
        Schema::dropIfExists('recetas-de-pasteles');
    }
}
