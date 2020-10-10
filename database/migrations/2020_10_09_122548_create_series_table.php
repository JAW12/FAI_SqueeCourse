<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->unsignedBigInteger('row_id_kuis');

            $table->string('judul');
            $table->string('slug', 70);
            $table->tinyInteger('tingkat_kesulitan');
            $table->integer('total_durasi');
            $table->tinyInteger('status_complete');
            $table->tinyInteger('status_berbayar');
            $table->tinyInteger('status_masuk_header');
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
