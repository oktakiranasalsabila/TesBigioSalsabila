<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function index()
    {
        $jabatans=Jabatan::latest()->paginate(8);
        return view('jabatan.jabatan',['jabatans'=>$jabatans]);
    }
}
