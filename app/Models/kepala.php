<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kepala extends Model
{
    use HasFactory;
    protected $table = "kepala";
    protected $fillable = ['user_id','nama','alamat','no_hp'];

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}

