<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokal;

class LokalController extends Controller
{
    public function index()
    {
        $lokals=Lokal::latest()->paginate(6);
        return view('lokal.lokal',['lokals'=>$lokals]);
    }
}
