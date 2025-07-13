<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class perpustakaan extends Model
{
    protected $table = 'perpustakaans';

    protected $fillable = [
        'nama',
        'alamat',
        'no_telpon',
        'tipe',
        'latitude',
        'longitude',
        
    ];
}
