<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kepala;
use App\Models\mandor;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use RealRashid\SweetAlert\Facades\Alert;

class MandorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = mandor::with('user')->get();
        // return $data;
        return view('admin.mandor.mandor',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::all();
        return view('admin.mandor.tambah_mandor' ,compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->name;
        $validator = $request->validate([
           'name' => 'required',
           'email' => 'required',
           'no_hp' => 'required',
           'alamat' => 'required' 
        ]);

        $user = User::create([
            'name' => $request->name ,
            'email' => $request->email ,
            'password' => hash::make('adminpassword')
        ]);
        
        $user->assignRole('mandor');

        $mandor = mandor::create([
            'nama' => $request->name,
            'user_id' => $user->id,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat
        ]);
        
        Alert::success('Berhasil','Data berhasil di tambahkan');
        return redirect('admin/mandor');
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
        $data = mandor::where('id',$id)->with('user')->first();
        return view('admin.mandor.edit_mandor',compact('data','id'));
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
            'alamat' => 'required'
        ]); 

        $cek = mandor::where('id',$request->id)->first();

        $ubah = mandor::where('id',$request->id)->update([
            'nama' => $request->name,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat
        ]);

        $ubah_user = User::where('id',$cek->user_id)->update([
            'name' => $request->name,
        ]);

        return redirect(route('admin.mandor'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = mandor::destroy($id);
        return back();
    }
}
