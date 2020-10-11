<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = "replies";

    protected $primaryKey = "id";
    protected $incremental = true;

    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // supaya bisa dapetin diffForHumans : https://stackoverflow.com/questions/30991992/how-do-i-get-the-difference-of-time-in-human-readable-format-with-laravel-5

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable =[
        'row_id_user',
        'row_id_komentar',
        'isi_reply'
    ];

    // ================ RELATION MODEL ============================

    public function getReplyComment(){
        // related model, related model dikenali sbg FK apa di model saat ini, PK dari model saat ini
        return $this->belongsTo(Comment::class, 'row_id_komentar', 'id');
    }

    public function getReplyUser(){
        return $this->belongsTo(User::class, 'row_id_user', 'id');
    }
}
