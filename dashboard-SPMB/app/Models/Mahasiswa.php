<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    public $table = 't_calon_mahasiswa';

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class,'jurusan_id');
    }
}
