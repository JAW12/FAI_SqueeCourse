<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use LabelPost;

class Post extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $table = "posts";

    protected $primaryKey = "id";
    protected $incremental = true;

    public $timestamps = true;
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

    public function category(){
        return $this->belongsTo(
            Category::class, 'row_id_kategori', 'id');
    }

    public function labels(){
        return $this->belongsToMany(
            Label::class,
            'label_post',
            'row_id_post',
            'row_id_label'
        );
    }

    public function labelpost(){
        return $this->hasMany(LabelPost::class, 'row_id_post', 'id');
    }

}
