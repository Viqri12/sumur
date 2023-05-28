<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasModel extends Model
{
    use HasFactory;
    protected $table = "tugas";
    protected $fillable = ['kepala_id','no_sumur','nama_donatur','proses','alamat'];
}
