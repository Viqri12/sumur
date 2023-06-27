<?php

namespace App\Http\Controllers\mandor;

use App\Http\Controllers\Controller;
use App\Models\mandor;
use App\Models\TugasMandor;
use App\Models\TugasModel;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Tugas Saya";
        $mandor = mandor::where('user_id',auth()->user()->id)->first();
        $tugas = TugasMandor::where('mandor_id',$mandor->id)->with('tugas')->latest()->get();
        // return $tugas;
        return view('mandor.tugas',compact('title','tugas'));
    }

    public function upload($id)
    {
        $title = "Upload bukti tugas";
        return view('mandor.tugas.upload_bukti',compact('title','id'));
    }

    public function get_tugas($id){
        $tugas = TugasMandor::where('id',$id)->with('tugas')->latest()->get();
        return $tugas;
    }



    public function upload_awalan(Request $request)
    {
        dd($request);
    }

    public function tolak_tugas($id){
        $update = TugasMandor::where('id',$id)->update([
            'status' => 3
        ]);

        return back();
    }

    public function terima_tugas(Request $request){

        // $update = TugasMandor::where('')
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
