<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mandor extends Model
{
    use HasFactory;
    protected $table = "mandor";
    protected $fillable = ['user_id','nama','alamat','no_hp'];

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
