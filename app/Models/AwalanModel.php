<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwalanModel extends Model
{
    use HasFactory;
    protected $table = 'awalan';
    protected $fillable = ['tugas_id','keterangan','image'];
}
