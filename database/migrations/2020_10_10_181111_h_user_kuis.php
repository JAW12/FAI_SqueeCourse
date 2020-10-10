<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HUserKuis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_user_kuis', function (Blueprint $table) {
            $table->id();

            // FOREIGN KEY
            $table->unsignedBigInteger('row_id_user');

            $table->unsignedBigInteger('row_id_kuis');

            // NILAI
            $table->tinyInteger('nilai')->nullable();

            // timestamps
            $table->timestamps();
        });


        Schema::table('h_user_kuis', function (Blueprint $table) {
            $table->foreign('row_id_user')
                ->references('id')
                ->on('users');

            $table->foreign('row_id_kuis')
                ->references('id')
                ->on('quizzes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_user_kuis');
    }
}
