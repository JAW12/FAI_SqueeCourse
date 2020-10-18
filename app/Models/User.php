<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = "users";

    protected $primaryKey = "id";
    protected $incremental = true;

    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // supaya bisa dapetin diffForHumans : https://stackoverflow.com/questions/30991992/how-do-i-get-the-difference-of-time-in-human-readable-format-with-laravel-5

    protected $dates = ['created_at', 'updated_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'password',
        'nama',
        'email',
        'no_hp',
        'jenis_kelamin',
        'tanggal_lahir',
        'bekerja_sebagai',
        'tempat_kerja',
        'sedikit_tentang_anda',
        'url_website',
        'url_github',
        'url_twitter',
        'url_facebook',
        'url_instagram'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // ================ RELATION MODEL ============================

    // untuk mendapatkan semua transaksi user
    public function transactions(){
        // related model, local FK, local PK
        return $this->hasMany(
            Transaction::class,
            'row_id_user',
            'id'
        );
    }

    // untuk mendapatkan semua komentar yang dilakukan user
    public function comments(){
        return $this->hasMany(
            Comment::class,
            'row_id_user',
            'id'
        );
    }


    // untuk mendapatkan semua reply yang dilakukan user
    public function replies(){
        return $this->hasMany(
            Reply::class,
            'row_id_user',
            'id'
        );
    }

    // untuk mendapatkan semua seri yang ditonton user (watch list)
    public function watchlist(){
        // related model, pivot table (table hasil relasi), local FK, related FK
        return $this->belongsToMany(
            Series::class,
            "user_watchlist",
            'row_id_user',
            'row_id_seri'
        );
    }

    // untuk mendapatkan semua header kuis yang dilakukan user
    public function hquizzes(){
        return $this->belongsToMany(
            Quiz::class,
            'h_user_kuis',
            'row_id_user',
            'row_id_kuis'
        );
    }

}
