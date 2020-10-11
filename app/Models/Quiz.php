<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = "quizzes";

    protected $primaryKey = "id";
    protected $incremental = true;

    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // supaya bisa dapetin diffForHumans : https://stackoverflow.com/questions/30991992/how-do-i-get-the-difference-of-time-in-human-readable-format-with-laravel-5

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable =[
        'nama',
        'jumlah_pertanyaan'
    ];

    // ================ RELATION MODEL ============================

    public function getQuizQuestions(){
        return $this->hasMany(
            Question::class, 'row_id_kuis', 'id'
        );
    }

    public function getQuizUser(){
        return $this->belongsToMany(
            User::class, 'h_user_kuis','row_id_kuis','row_id_user'
        );
    }

    // one to one
    public function getQuizSeries(){
        // related model, model saat ini dikenal sbg FK apa di related model, local PK (PK dari model saat ini)
        return $this->hasOne(
            Series::class, 'row_id_kuis', 'id'
        );
    }

}
