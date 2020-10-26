<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            // PRIMARY KEY
            $table->id();

            // FOREIGN KEY
            $table->unsignedBigInteger('row_id_user');
            $table->unsignedBigInteger('row_id_episode');

            // NOT NULL
            $table->text('isi_komentar');

            // timestamps
            $table->timestamps();

            // soft deletes
            $table->softDeletes();

        });

        Schema::table('comments', function (Blueprint $table) {
            // foreign key
            $table->foreign('row_id_user')
                ->references('id')
                ->on('users');

            $table->foreign('row_id_episode')
                ->references('id')
                ->on('episodes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
