<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kepala extends Model
{
    use HasFactory;
    protected $table = "kepala";
    protected $fillable = ['kepala_id','name','email','password'];
}

