<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class LabelSeri extends Model
{
    use HasFactory, Notifiable, SoftDeletes;
    protected $table = "label_seri";

    protected $primaryKey = "id";
    protected $incremental = true;

    public $timestamps = false;

    // ================ RELATION MODEL ============================
    public function label(){
        return $this->belongsTo(Label::class, 'row_id_label', 'id');
    }

    public function series(){
        return $this->belongsTo(Series::class, 'row_id_seri', 'id');
    }
}
