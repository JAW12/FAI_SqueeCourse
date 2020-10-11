<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $table = "labels";

    protected $primaryKey = "id";
    protected $incremental = true;

    protected $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // supaya bisa dapetin diffForHumans : https://stackoverflow.com/questions/30991992/how-do-i-get-the-difference-of-time-in-human-readable-format-with-laravel-5

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable =[
        'nama',
        'slug'
    ];

    // ================ RELATION MODEL ============================

    public function getLabelSeries(){
        return $this->belongsToMany(
            Series::class,
            'label_seri',
            'row_id_label',
            'row_id_seri'
        );
    }

    public function getLabelPosts(){
        return $this->belongsToMany(
            Posts::class,
            'label_post',
            'row_id_label',
            'row_id_post'
        );
    }
}
