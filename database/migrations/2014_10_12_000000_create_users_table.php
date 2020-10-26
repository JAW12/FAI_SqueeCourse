<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // PRIMARY KEY
            $table->id();

            // NOT NULL
            $table->string('username', 25)->unique();
            $table->string('nama');
            $table->string('password');
            $table->string('email')->unique();

            // NULLABLE
            $table->string('no_hp', 14)->nullable();
            $table->string('jenis_kelamin', 1)->nullable()
                ->comment('opsi values = L / P');
            $table->date('tanggal_lahir')->nullable();
            $table->text('bekerja_sebagai')->nullable();
            $table->text('tempat_kerja')->nullable();
            $table->text('sedikit_tentang_anda')->nullable();
            $table->string('url_website')->nullable();
            $table->string('url_github')->nullable();
            $table->string('url_twitter')->nullable();
            $table->string('url_facebook')->nullable();
            $table->string('url_instagram')->nullable();

            // timestamps
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

            // soft deletes
            $table->softDeletes();
        });


        Schema::table('users', function (Blueprint $table) {
            // Add the constraint
            DB::statement('ALTER TABLE USERS
            ADD CONSTRAINT ch_jenis_kelamin
            CHECK (jenis_kelamin = "L" OR jenis_kelamin = "P");');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
