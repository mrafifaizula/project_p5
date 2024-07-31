<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eskul extends Model
{
    use HasFactory;
    public $fillable = ['eskul', 'deskripsi', 'img'];
    public $visible = ['eskul', 'deskripsi', 'img'];
    public $timestamps = true;

    public function deleteImage()
    {
        if ($this->img && file_exists(public_path('images/eskul/' . $this->img))) {
            return unlink(public_path('images/eskul/' . $this->img));
        }
    }

}
