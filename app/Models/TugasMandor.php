<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasMandor extends Model
{
    use HasFactory;
    protected $table = "tugas_mandor";
    protected $fillable = ['tugas_id','mandor_id','keterangan','status'];

    public function tugas(){
        return $this->hasOne(TugasModel::class,'id','tugas_id')->with('awalan',
        'kedalaman','penembokan','pengacian','keramik','pengecatan','mesin','simulasi');
    }

}
