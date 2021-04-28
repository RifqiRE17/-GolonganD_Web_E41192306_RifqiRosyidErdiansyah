<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalamankerja extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'jabatan', 'tahun_masuk', 'tahun_keluar'];
}
