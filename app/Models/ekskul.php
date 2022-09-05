<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ekskul extends Model
{
    protected $fillable = ['jenis','nama_eks','pelatih','nohp_pelatih'];
}
