<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengecatan extends Model
{
    use HasFactory;
    protected $table = "pengecatan";
    protected $fillable = ['tugas_id','keterangan','image'];
}
