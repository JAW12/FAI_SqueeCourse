<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class LabelPost extends Model
{
    use HasFactory, Notifiable, SoftDeletes;
    protected $table = "label_post";

    protected $primaryKey = "id";
    protected $incremental = true;

    public $timestamps = false;
    protected $fillable =[
        'row_id_label',
        'row_id_post'
    ];
    // ================ RELATION MODEL ============================
    public function label(){
        return $this->belongsTo(Label::class, 'row_id_label', 'id');
    }

    public function post(){
        return $this->belongsTo(Post::class, 'row_id_post', 'id');
    }
}
