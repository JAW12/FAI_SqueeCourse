<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Transaction extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    public $table = "transactions";

    public $primaryKey = "id";
    public $incremental = true;

    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // supaya bisa dapetin diffForHumans : https://stackoverflow.com/questions/30991992/how-do-i-get-the-difference-of-time-in-human-readable-format-with-laravel-5

    public $dates = ['created_at', 'updated_at'];

    public $fillable =[
        'row_id_user',
        'jenis_membership',
        'waktu_expired_membership',
        'bank_asal',
        'bank_tujuan',
        'status_transaksi',
        'total_pembayaran'
    ];

    // ================ RELATION MODEL ============================

    public function user(){
        // one to many (inverse)
        // related model, related model dikenal sbg FK apa di class model saat ini
        return $this->belongsTo(User::class, 'row_id_user');
    }
}
