<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mandor extends Model
{
    use HasFactory;
    protected $table = "mandor";
    protected $fillable = ['mandor_id','user_id','name','email','password'];

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
