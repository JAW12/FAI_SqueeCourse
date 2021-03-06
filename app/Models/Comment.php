<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Comment extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $table = "comments";

    protected $primaryKey = "id";
    protected $incremental = true;

    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // supaya bisa dapetin diffForHumans : https://stackoverflow.com/questions/30991992/how-do-i-get-the-difference-of-time-in-human-readable-format-with-laravel-5

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable =[
        'row_id_user',
        'row_id_episode',
        'isi_komentar'
    ];

    // ================ RELATION MODEL ============================

    //mendapatkan semua reply yg ada di komentar
    public function replies(){
        return $this->hasMany(
            Reply::class,
            'row_id_komentar',
            'id'
        );
    }

    // one to many (inverse)
    public function user(){
        // related model, related FK di model saat ini, local PK
        return $this->belongsTo(
            User::class,
            'row_id_user');
    }

    public function episode(){
        // related model, related FK di model saat ini, local PK
        return $this->belongsTo(
            Episode::class,
            'row_id_episode');
    }

}
