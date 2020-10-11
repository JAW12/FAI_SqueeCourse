<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $table = "series";

    protected $primaryKey = "id";
    protected $incremental = true;

    protected $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // supaya bisa dapetin diffForHumans : https://stackoverflow.com/questions/30991992/how-do-i-get-the-difference-of-time-in-human-readable-format-with-laravel-5

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable =[
        'row_id_kategori',
        'row_id_kuis',
        'judul',
        'slug',
        'tingkat_kesulitan',
        'total_durasi',
        'status_complete',
        'status_berbayar',
        'status_masuk_header',
        'url_foto_banner'
    ];

    // ================ RELATION MODEL ============================

    public function getSeriesEpisodes(){
        return $this->hasMany(
            Episode::class,
            'row_id_seri',
            'id'
        );
    }

    public function getSeriesUsers(){
        return $this->belongsToMany(
            User::class,
            'user_watchlist',
            'row_id_seri',
            'row_id_user'
        );
    }

    public function getSeriesLabels(){
        return $this->belongsToMany(
            Label::class,
            'label_seri',
            'row_id_seri',
            'row_id_label'
        );
    }

    // one to one (inverse)
    public function getSeriesCategory(){
        // related model, related model dikenali sbg FK apa di class model saat ini
        return $this->belongsTo(Category::class, 'row_id_kategori');
    }

}
