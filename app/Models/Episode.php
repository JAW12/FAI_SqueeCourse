<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $table = "episodes";

    protected $primaryKey = "id";
    protected $incremental = true;

    protected $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // supaya bisa dapetin diffForHumans : https://stackoverflow.com/questions/30991992/how-do-i-get-the-difference-of-time-in-human-readable-format-with-laravel-5

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable =[
        'row_id_seri',
        'judul',
        'slug',
        'url_youtube',
        'durasi',
        'status_berbayar'
    ];

    // ================ RELATION MODEL ============================

    public function getEpisodeComments(){
        return $this->hasMany(
            Comment::class,
            'row_id_episode',
            'id'
        );
    }

    public function getEpisodeSeries(){
        // related model, related FK di model saat ini, local PK
        return $this->belongsTo(
            Series::class, 'row_id_seri', 'id');
    }
}
