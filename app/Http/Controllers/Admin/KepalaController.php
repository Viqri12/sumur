<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\kepala;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use RealRashid\SweetAlert\Facades\Alert;

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
        return view('admin.kepala.tambah_data');
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
            'no_hp' => 'required',
            'alamat' => 'required',
       ]);

       $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => hash::make('adminpassword'),
       ]);

       $users->assignRole('kepala');

       $kepala = kepala::create([
         'nama' => $users->name,
         'user_id' => $users->id,
         'alamat' => $request->alamat,
         'no_hp' => $request->no_hp
       ]);

       Alert::success('Berhasil','Data berhasil di tambahkan');
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
        $data = kepala::where('id',$id)->with('user')->first();
        // return $data;
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
            'no_hp' => 'required',
            'alamat' => 'required',
       ]);

        $cek = kepala::where('id',$request->id)->first();

        $update = kepala::where('id',$request->id)->update([
            'nama' => $request->name ,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]);

        $update_user = User::where('id',$cek->user_id)->update([
            'email' => $request->email,
            'name' => $request->name
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
        // try {
            $cek = kepala::where('id',$id)->first();
            // return $cek;
            User::where('id',$cek->user_id)->delete();
            Alert::success('Berhasil','Data berhasil di hapus');
            return back();
        // } catch (\Throwable $th) {
        //     Alert::error('Gagal','Sepertinya ada yang salah');
        //    return back();
        // }

    }
}
