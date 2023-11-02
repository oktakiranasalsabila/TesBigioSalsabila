<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gurus=Guru::latest()->paginate(8);
        return view('backend.gurus.index',['gurus'=>$gurus]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.gurus.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData=$request->validate([
            'nip'=>'required|unique:gurus',
            'nama_guru'=>'required|min:3',
            'email'=>'required',
            'tem_lahir'=>'required',
            'tgl'=>'required',
            'jabatan'=>'required',
            'jenkel'=>'required',
            'tlpn'=>'required',
            'alamat'=>''
        ]);
        Guru::create($validateData);
        return redirect('/guru-backend')->with('pesan','Data Berhasil Disimpan');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.gurus.edit',['gurus'=>Guru::find($id),]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData=$request->validate([
            'nip'=>'required|unique:gurus',
            'nama_lengkap'=>'required|min:3',
            'jabatan'=>'required',
            'email'=>'required',
            'tlpn'=>'required',
            'alamat'=>''
        ]);
        Gusu::where('id',$id)->update( $validateData);
        return redirect('/guru-backend')->with('pesan','Data Berhasil Diupdate');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Guru::destroy($id);
        return redirect('/guru-backend')->with('pesan','Data Berhasil Dihapus');
    }
}
