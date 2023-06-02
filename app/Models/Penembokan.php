<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penembokan extends Model
{
    use HasFactory;
    protected $table = 'penembokan';
    protected $fillable = ['tugas_id','keterangan','image'];
}
