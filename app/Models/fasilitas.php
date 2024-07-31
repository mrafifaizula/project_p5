<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
     use HasFactory;
    public $fillable = ['nama', 'img'];
    public $visible = ['nama', 'img'];
    public $timestamps = true;

    public function deleteImage()
    {
        if ($this->img && file_exists(public_path('images/fasilitas/' . $this->img))) {
            return unlink(public_path('images/fasilitas/' . $this->img));
        }
    }
}
