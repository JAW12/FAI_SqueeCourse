<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

use App\Models\DUserKuis;

class Question extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $table = "questions";

    protected $primaryKey = "id";
    protected $incremental = true;

    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // supaya bisa dapetin diffForHumans : https://stackoverflow.com/questions/30991992/how-do-i-get-the-difference-of-time-in-human-readable-format-with-laravel-5

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable =[
        'row_id_kuis',
        'pertanyaan',
        'pilihan_a',
        'pilihan_b',
        'pilihan_c',
        'pilihan_d',
        'kunci_jawaban'
    ];

    // ================ RELATION MODEL ============================

    public function quiz(){
        // one to many (inverse)
        // related model, related model dikenali sbg FK apa di class model saat ini, PK class model saat ini
        return $this->belongsto(
            Quiz::class, 'row_id_kuis', 'id');
    }

    public function duserkuis(){
        return $this->HasMany(DUserKuis::class, 'row_id_soal', 'id');
    }

}
