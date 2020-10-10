<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserWatchlist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_watchlist', function (Blueprint $table) {
            // PRIMARY KEY
            $table->id();

            // FOREIGN KEY
            $table->unsignedBigInteger('row_id_seri');
            $table->unsignedBigInteger('row_id_user');

            // timestamps
            $table->timestamps();
        });

        // FOREIGN KEY
        Schema::table('user_watchlist', function (Blueprint $table) {
            $table->foreign('row_id_seri')
                ->references('id')
                ->on('series');

            $table->foreign('row_id_user')
                ->references('id')
                ->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_watchlist');
    }
}
