<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\kepala;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KepalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kepala::with('user')->get();
        // return $data;
        return view('admin.kepala.kepala',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::all();
        return view('admin.kepala.tambah_data',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
       $validator = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'user_id' => 'required'
       ]);
    
       $users = kepala::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => hash::make('adminpassword'),
        'user_id' => $request->user_id
       ]);

       return redirect('admin/kepala');
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
        $data = kepala::where('id',$id)->get();
        return view('admin.kepala.edit_kepala',compact('data','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // return $request;
        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $update = kepala::where('id',$request->id)->update([
            'name' => $request->name ,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect('admin/kepala');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = kepala::find($id)->delete();

        if($delete){
            return redirect()->route('admin.kepala')->with('success' , 'Berhasil di hapus');
          }
         return redirect()->route('admin.kepala')->with('error' , 'User gagal hapus');
    }
}
