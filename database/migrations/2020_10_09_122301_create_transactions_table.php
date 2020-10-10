<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            // PRIMARY KEY
            $table->id();

            // FOREIGN KEY
            $table->unsignedBigInteger('row_id_user');

            // NOT NULL
            $table->tinyInteger('jenis_membership');
            $table->dateTime('waktu_expired_membership');
            $table->string('bank_asal', 20);
            $table->string('bank_tujuan', 20);
            $table->tinyInteger('status_transaksi');
            $table->integer('total_pembayaran');

            // timestamps
            $table->timestamps();

        });


        // foreign key
        Schema::table('transactions', function (Blueprint $table) {
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
        Schema::dropIfExists('transactions');
    }
}