<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas=Siswa::latest()->paginate(4);
        return view('siswa.siswa',['siswas'=>$siswas]);
    }
}
