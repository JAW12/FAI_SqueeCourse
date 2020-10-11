<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            // PRIMARY KEY
            $table->id();

            // FOREIGN KEY
            $table->unsignedBigInteger('row_id_kuis');

            // NOT NULL
            $table->text('pertanyaan')  ;
            $table->text('pilihan_a');
            $table->text('pilihan_b');
            $table->text('pilihan_c');
            $table->text('pilihan_d');
            $table->string('kunci_jawaban', 1)
                ->comment('opsi values : A/B/C/D');

            // timestamps
            $table->timestamps();
        });

        Schema::table('questions', function (Blueprint $table) {
            // foreign key
            $table->foreign('row_id_kuis')
                    ->references('id')
                    ->on('quizzes');

            DB::statement("ALTER TABLE QUESTIONS
                ADD CONSTRAINT CH_QUESTION_KUNCI_JAWABAN
                CHECK(KUNCI_JAWABAN = 'A' OR KUNCI_JAWABAN = 'B' OR
                        KUNCI_JAWABAN = 'C' OR KUNCI_JAWABAN = 'D');"
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
        Schema::dropIfExists('questions');
    }
}
