<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecetasPasteles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('recetas_pasteles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->mediumText('ingredientes');
            $table->mediumText('preparacion');
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
        Schema::dropIfExists('recetas_pasteles');
    }

}
