<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
    protected $fillable = ['id_ekskul','nis','nama_siswa','kelas','nohp'];
}
