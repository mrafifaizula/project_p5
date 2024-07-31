<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informasi extends Model
{
    use HasFactory;
    public $fillable = ['judul', 'deskripsi', 'tgl', 'img'];
    public $visible = ['judul', 'deskripsi', 'tgl', 'img'];
    public $timestamps = true;

    public function deleteImage()
    {
        if ($this->img && file_exists(public_path('images/eskul/' . $this->img))) {
            return unlink(public_path('images/eskul/' . $this->img));
        }
    }
}
