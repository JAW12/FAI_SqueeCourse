<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DUserKuis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_user_kuis', function (Blueprint $table) {
            $table->id();

            // FOREIGN KEY
            $table->unsignedBigInteger('row_id_pengambilan_kuis');

            $table->unsignedBigInteger('row_id_soal');

            // NILAI
            $table->string('jawaban_user', 1);

            // timestamps
            $table->timestamps();
        });


        Schema::table('d_user_kuis', function (Blueprint $table) {
            $table->foreign('row_id_pengambilan_kuis')
                ->references('id')
                ->on('h_user_kuis');

            $table->foreign('row_id_soal')
                ->references('id')
                ->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('d_user_kuis');
    }
}
