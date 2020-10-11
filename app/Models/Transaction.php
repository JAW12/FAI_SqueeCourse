<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = "transactions";

    protected $primaryKey = "id";
    protected $incremental = true;

    protected $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // supaya bisa dapetin diffForHumans : https://stackoverflow.com/questions/30991992/how-do-i-get-the-difference-of-time-in-human-readable-format-with-laravel-5

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable =[
        'row_id_user',
        'jenis_membership',
        'waktu_expired_membership',
        'bank_asal',
        'bank_tujuan',
        'status_transaksi',
        'total_pembayaran'
    ];

    // ================ RELATION MODEL ============================

    public function getTransactionUser(){
        // one to many (inverse)
        // related model, related model dikenal sbg FK apa di class model saat ini
        return $this->belongsTo(User::class, 'row_id_user');
    }
}
