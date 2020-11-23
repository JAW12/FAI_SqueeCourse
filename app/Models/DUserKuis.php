<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class DUserKuis extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $table = "d_user_kuis";

    protected $primaryKey = "id";
    protected $incremental = true;

    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $fillable =[
        'row_id_pengambilan_kuis',
        'row_id_soal',
        'jawaban_user'
    ];

    // ================ RELATION MODEL ============================
    public function huserkuis(){
        return $this->belongsTo(HUserKuis::class, 'row_id_pengambilan_kuis', 'id');
    }

    public function question(){
        return $this->belongsTo(Question::class, 'row_id_soal', 'id');
    }

}
