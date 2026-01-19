<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelujian extends Model
{
    use HasFactory;

    protected $table = 'absensi';

    protected $fillable = [
        'nama',
        'status',
        'tanggal_lahir'

    ];
}
