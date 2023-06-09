<?php

namespace App\Http\Controllers\Kepala;

use App\Http\Controllers\Controller;
use App\Models\kepala;
use App\Models\mandor;
use App\Models\TugasMandor;
use App\Models\TugasModel;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Tugas";
        $kepala = kepala::where('user_id',auth()->user()->id)->first();
        $tugas = TugasMandor::with('tugas')->whereHas('tugas',function($q) use ($kepala){
            $q->where('kepala_id',$kepala->id);
        })->latest()->get();
        // return $tugas;
        return view('kepala.tugas.tugas',compact('title','tugas'));
    }

    public function kirim_tugas(){
        $title = "Kirim Tugas";
        // return auth()->user();
        $cek = kepala::where('user_id',auth()->user()->id)->first();
        $getTugas = TugasModel::where('kepala_id',$cek->id)->latest()->first();
        $mandor = mandor::with('user')->get();
        // return $mandor;
        return view('kepala.tugas.kirim_tugas',compact('title','mandor','getTugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // return $request;
        $validte = $request->validate([
            'nama_donatur' => 'required',
            'mandor' => 'required'
        ]);

        $cek = kepala::where('user_id',auth()->user()->id)->first();
        // return $cek;
        $nomor_sumur = $request->no_sumur;
        if(!$request->no_sumur){
            $getTugas = TugasModel::where('kepala_id',$cek->id)->latest()->first();
            // return $getTugas;
            if($getTugas){
                $nomor_sumur = (int)$getTugas->no_sumur + 1;
            }else{
                $nomor_sumur = 1;
            }
        }

        $create = TugasModel::create([
            'kepala_id' => $cek->id,
            'no_sumur' => $nomor_sumur,
            'nama_donatur' => $request->nama_donatur,
        ]);

        $kirim = TugasMandor::create([
            'mandor_id' => $request->mandor_id,
            'tugas_id' => $create->id,
            'status' => 0,
        ]);

        Alert::success('Berhasil','Tugas berhasil di kirim');
        return redirect('kepala/tugas');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
