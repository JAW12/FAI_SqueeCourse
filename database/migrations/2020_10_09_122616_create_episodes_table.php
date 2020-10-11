<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            // PRIMARY KEY
            $table->id();

            // FOREIGN KEY
            $table->unsignedBigInteger('row_id_seri');

            // NOT NULL
            $table->string('judul');
            $table->string('slug', 70);
            $table->string('url_youtube');
            $table->integer('durasi');
            $table->tinyInteger('status_berbayar')
                ->comment("0 = GRATIS, 1 = BERBAYAR");

            // timestamps
            $table->timestamps();
        });

        Schema::table('episodes', function (Blueprint $table) {
            // foreign key
            $table->foreign('row_id_seri')
                    ->references('id')
                    ->on('series');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodes');
    }
}
