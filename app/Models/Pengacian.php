<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengacian extends Model
{
    use HasFactory;
    protected $table = 'pengacian';
    protected $fillable = ['tugas_id','keterangan','image'];
}
