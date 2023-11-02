<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $gurus=Guru::latest()->paginate(4);
        return view('guru.guru',['gurus'=>$gurus]);
    }
}
