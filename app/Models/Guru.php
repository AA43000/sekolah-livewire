<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = [
        'name',
        'mata_pelajaran',
        'nip',
        'jenis_kelamin'
    ];

    public function kelas() {
        return $this->belongsToMany(Kelas::class, 'guru_kelas', 'id_guru', 'id_kelas');
    }
}
