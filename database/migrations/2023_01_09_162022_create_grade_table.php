<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('grade', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->integer("nivel")->nullable();
            $table->integer("horas");
            $table->integer("idProfesor");
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('grade');
    }
};
