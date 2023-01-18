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
        /*Schema::create('student_grade', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("student_id");
            $table->foreign('student')
            ->references('id')->on('student')->onDelete('cascade');
            $table->unsignedBigInteger("grade_id");
            $table->foreign('grade')
            ->references('id')->on('grade')->onDelete('cascade');
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
        //Schema::dropIfExists('student_grade');
    }
};
