<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kedalaman extends Model
{
    use HasFactory;
    protected $table = 'kedalaman';
    protected $fillable = ['tugas_id','keterangan','image'];
}
