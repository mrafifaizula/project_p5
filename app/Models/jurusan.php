<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    use HasFactory;

    use HasFactory;
    public $fillable = ['nama_jurusan'];
    public $visible = ['nama_jurusan'];
    public $timestamps = true;

    public function jurusan()
    {
        return $this->hasMany(jurusan::class, 'id_jurusan');
    }
}
