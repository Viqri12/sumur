<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kepala extends Model
{
    use HasFactory;
    protected $table = "kepala";
    protected $fillable = ['kepala_id','user_id','name','email','password'];

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}

