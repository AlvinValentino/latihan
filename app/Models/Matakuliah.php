<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasUuids;

    protected $fillable = [
        'kode',
        'nama_matakuliah',
        'angkatan'
    ];

    protected $table = 'matakuliah';
}
