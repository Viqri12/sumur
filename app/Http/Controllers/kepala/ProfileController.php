<?php

namespace App\Http\Controllers\Kepala;

use App\Http\Controllers\Controller;
use App\Models\kepala;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Profile";
        $kepala = kepala::where('user_id' ,auth()->user()->id)->first();
        return view('kepala.profile',compact('title','kepala'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function update(Request $request)
    {
        {
            // return $request;
            $validator = $request->validate([
                'name' => 'required',
                'no_hp' => 'required',
                'alamat' => 'required',
            ]);
    
            $mandor = kepala::where('user_id',auth()->user()->id)->update([
                'nama' => $request->name,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat
            ]);
            
            if($request->file('image')){
                $foto = $request->file('image')->getClientOriginalName();
                $request->image->storeAs('post-images',$foto,'public');
                
                $user = User::where('id',auth()->user()->id)->update([
                    'name' => $request->name, 
                    'image' => $foto,
                    'no_hp' => $request->no_hp
                ]);
            }else{
                $user = User::where('id',auth()->user()->id)->update([
                    'name' => $request->name,
                    'no_hp' => $request->no_hp
                ]);
            }
            // return $foto;
    
    
            return redirect('kepala/profile');
        }
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
