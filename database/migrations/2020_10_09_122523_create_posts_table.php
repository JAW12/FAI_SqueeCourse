<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            // PRIMARY KEY
            $table->id();

            // FOREIGN KEY
            $table->unsignedBigInteger('row_id_kategori');

            $table->string('judul');
            $table->text('isi');
            $table->string('slug', 70);
            $table->tinyInteger('status_aktif')
                ->comment("0 = INACTIVE, 1 = ACTIVE");

            // timestamp
            $table->timestamps();

        });

        Schema::table('posts', function (Blueprint $table) {
            // foreign key
            $table->foreign('row_id_kategori')
                    ->references('id')
                    ->on('categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
