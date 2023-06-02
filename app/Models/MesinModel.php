<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MesinModel extends Model
{
    use HasFactory;
    protected $table = 'mesin';
    protected $fillable = ['tugas_id','keterangan','image'];
}
