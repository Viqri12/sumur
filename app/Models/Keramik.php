<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keramik extends Model
{
    use HasFactory;
    protected $table = 'keramik';
    protected $fillable = ['tugas_id','keterangan','image'];
}
