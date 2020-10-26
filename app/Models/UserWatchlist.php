<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class UserWatchlist extends Model
{
    use HasFactory, Notifiable, SoftDeletes;
    protected $table = "user_watchlist";

    protected $primaryKey = "id";
    protected $incremental = true;

    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // ================ RELATION MODEL ============================
    public function user(){
        return $this->belongsTo(User::class, 'row_id_user', 'id');
    }

    public function series(){
        return $this->belongsTo(Series::class, 'row_id_seri', 'id');
    }
}
