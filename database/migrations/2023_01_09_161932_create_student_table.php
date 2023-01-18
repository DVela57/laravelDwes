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
       /* Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string("Nombre Apellido");
            $table->integer("edad")->unsigned();
            $table->string("telefono");
            $table->string("direccion");
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // Schema::dropIfExists('student');
    }
};
