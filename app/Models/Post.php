<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";

    protected $primaryKey = "id";
    protected $incremental = true;

    protected $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // supaya bisa dapetin diffForHumans : https://stackoverflow.com/questions/30991992/how-do-i-get-the-difference-of-time-in-human-readable-format-with-laravel-5

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable =[
        'row_id_kategori',
        'judul',
        'isi',
        'slug',
        'status_aktif',
        ''
    ];

    // ================ RELATION MODEL ============================

    public function getPostCategory(){
        return $this->belongsTo(
            Category::class, 'row_id_kategori', 'id');
    }

    public function getPostLabels(){
        return $this->belongsToMany(
            Posts::class,
            'label_post',
            'row_id_post',
            'row_id_label'
        );
    }
}
