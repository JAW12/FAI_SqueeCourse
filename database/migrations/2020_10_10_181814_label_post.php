<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LabelPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('label_post', function (Blueprint $table) {
            $table->id();

            // FOREIGN KEY
            $table->unsignedBigInteger('row_id_label');

            $table->unsignedBigInteger('row_id_post');
        });

        Schema::table('label_post', function (Blueprint $table) {
            $table->foreign('row_id_label')
                ->references('id')
                ->on('labels');

            $table->foreign('row_id_post')
                ->references('id')
                ->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('label_post');
    }
}
