<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $primaryKey = "id";
    protected $incremental = true;

    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // supaya bisa dapetin diffForHumans : https://stackoverflow.com/questions/30991992/how-do-i-get-the-difference-of-time-in-human-readable-format-with-laravel-5

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable =[
        'nama',
        'slug'
    ];

    // ================ RELATION MODEL ============================

    public function getCategorySeries(){
        return $this->hasMany(
            Series::class,
            'row_id_kategori',
            'id'
        );
    }

    public function getCategoryPosts(){
        return $this->hasMany(
            Post::class,
            'row_id_kategori',
            'id'
        );
    }
}
