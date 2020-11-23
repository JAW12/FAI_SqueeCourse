<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\DUserKuis;
use Illuminate\Notifications\Notifiable;

class HUserKuis extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $table = "h_user_kuis";

    protected $primaryKey = "id";
    protected $incremental = true;

    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable =[
        'row_id_user',
        'row_id_kuis',
        'nilai'
    ];

    // ================ RELATION MODEL ============================
    public function user(){
        return $this->belongsTo(User::class, 'row_id_user', 'id');
    }

    public function quiz(){
        return $this->belongsTo(Quiz::class, 'row_id_kuis', 'id');
    }

    public function duserkuis(){
        return $this->hasMany(DUserKuis::class, 'row_id_pengambilan_kuis', 'id');
    }
}
