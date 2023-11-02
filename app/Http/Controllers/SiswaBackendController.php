<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas=Siswa::latest()->paginate(8);
        return view('backend.siswas.index',['siswas'=>$siswas]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.siswas.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData=$request->validate([
            'nis'=>'required|unique:siswas',
            'namsis'=>'required|min:3',
            'tem_lahir'=>'required',
            'tgl'=>'required',
            'jenkel'=>'required',
            'kelas'=>'required',
            'alamat'=>''
        ]);
        Siswa::create($validateData);
        return redirect('/siswa-backend')->with('pesan','Data Berhasil Disimpan');
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
        return view('backend.siswas.edit',['siswas'=>Siswa::find($id),]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData=$request->validate([
            'nis'=>'required',
            'namsis'=>'required|min:3',
            'tem_lahir'=>'required',
            'tgl'=>'required',
            'kelas'=>'required',
            'alamat'=>''
        ]);
        Siswa::where('id',$id)->update( $validateData);
        return redirect('/siswa-backend')->with('pesan','Data Berhasil Diupdate');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Siswa::destroy($id);
        return redirect('/siswa-backend')->with('pesan','Data Berhasil Dihapus');
    }

}
