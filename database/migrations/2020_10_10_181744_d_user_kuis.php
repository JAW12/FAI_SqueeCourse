<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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

            // pengambilan kuis
            $table->string('jawaban_user', 1);

            // timestamps
            $table->timestamps();

            // soft deletes
            $table->softDeletes();
        });


        Schema::table('d_user_kuis', function (Blueprint $table) {
            $table->foreign('row_id_pengambilan_kuis')
                ->references('id')
                ->on('h_user_kuis');

            $table->foreign('row_id_soal')
                ->references('id')
                ->on('questions');

            DB::statement("ALTER TABLE D_USER_KUIS
                ADD CONSTRAINT CH_D_USER_KUIS_JAWABAN_USER
                CHECK(jawaban_user = 'A' OR jawaban_user = 'B' OR
                    jawaban_user = 'C' OR jawaban_user = 'D');"
            );
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
