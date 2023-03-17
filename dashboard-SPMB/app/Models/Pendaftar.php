<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;
    public $table = 't_pendaftar';

    public function jalur()
    {
        return $this->belongsTo(Jalur::class,'jalur_pendaftaran_id');
    }
}
