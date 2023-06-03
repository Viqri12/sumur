<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasModel extends Model
{
    use HasFactory;
    protected $table = "tugas";
    protected $fillable = ['kepala_id','no_sumur','nama_donatur','proses','alamat','status'];

    public function awalan(){
        return $this->belongsTo(AwalanModel::class,'id','tugas_id');
    }

    public function kedalaman(){
        return $this->belongsTo(Kedalaman::class,'id','tugas_id');
    }

    public function penembokan(){
        return $this->belongsTo(Penembokan::class,'id','tugas_id');
    }

    public function pengacian(){
        return $this->belongsTo(Pengacian::class,'id','tugas_id');
    }

    public function keramik(){
        return $this->belongsTo(Keramik::class,'id','tugas_id');
    }

    public function pengecatan(){
        return $this->belongsTo(Pengecatan::class,'id','tugas_id');
    }

    public function mesin(){
        return $this->belongsTo(MesinModel::class,'id','tugas_id');
    }

    public function simulasi(){
        return $this->belongsTo(Simulasi::class,'id','tugas_id');
    }

}
