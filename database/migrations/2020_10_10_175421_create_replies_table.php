<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            // PRIMARY KEY
            $table->id();

            // FOREIGN KEY
            $table->unsignedBigInteger('row_id_user')->nullable();
            $table->unsignedBigInteger('row_id_komentar');

            // NOT NULL
            $table->text('isi_reply');

            // timestamps
            $table->timestamps();

            // soft deletes
            $table->softDeletes();
        });


        Schema::table('replies', function (Blueprint $table) {
            // foreign key
            $table->foreign('row_id_user')
                ->references('id')
                ->on('users');

            $table->foreign('row_id_komentar')
                ->references('id')
                ->on('comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('replies');
    }
}
