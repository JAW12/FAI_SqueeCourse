<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            // PRIMARY KEY
            $table->id();

            // FOREIGN KEY
            $table->unsignedBigInteger('row_id_kategori');
            $table->unsignedBigInteger('row_id_kuis')->nullable();

            $table->string('judul');
            $table->text("deskripsi");
            $table->string('slug', 70);
            $table->tinyInteger('tingkat_kesulitan')
                ->comment("1 = BEGINNER, 2 = INTERMEDIATE, 3 = ADVANCED");
            $table->integer('total_durasi');
            $table->tinyInteger('status_complete')
                ->comment("0 = BELUM, 1 = SUDAH");
            $table->tinyInteger('status_berbayar')
                ->comment("0 = GRATIS, 1 = BERBAYAR");
            $table->tinyInteger('status_masuk_header')
                ->comment("0 = TIDAK, 1 = MASUK HEADER");
            $table->string('url_foto_banner')->nullable();

            // timestamp
            $table->timestamps();
        });

        Schema::table('series', function (Blueprint $table) {
            // foreign key
            $table->foreign('row_id_kategori')
                    ->references('id')
                    ->on('categories');

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
        Schema::dropIfExists('series');
    }
}
