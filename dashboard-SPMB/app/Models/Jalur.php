<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jalur extends Model
{
    use HasFactory;
    public $table = 't_r_jalur_pendaftaran';

    public function pendaftar()
    {
        return $this->belongsTo(Pendaftar::class,'jalur_pendaftaran_id');
    }
}
