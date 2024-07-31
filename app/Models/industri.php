<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class industri extends Model
{
    use HasFactory;
    public $fillable = ['nama', 'alamat', 'tahun'];
    public $visible = ['nama', 'alamat', 'tahun'];
    public $timestamps = true;

    public function jurusan()
    {
        return $this->belongsTo(jurusan::class, 'id_jurusan');

    }
}
