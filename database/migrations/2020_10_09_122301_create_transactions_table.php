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
            $table->tinyInteger('jenis_membership')
                    ->comment('1 = SILVER, 2 = GOLD, 3 = PLATINUM');
            $table->dateTime('waktu_expired_membership')
                    ->comment('SILVER = 1 BULAN, GOLD = 3 BULAN, PLATINUM = 6 BULAN');
            $table->string('bank_asal', 20);
            $table->string('bank_tujuan', 20);
            $table->tinyInteger('status_transaksi')
                    ->comment('1 = PENDING, 2 = ACCEPTED, 3 = REJECTED');
            $table->integer('total_pembayaran');

            // timestamps
            $table->timestamps();

            // soft deletes
            $table->softDeletes();

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
