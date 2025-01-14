<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuruKelas extends Model
{
    protected $fillable = [
        'id_guru',
        'id_kelas'
    ];
}
