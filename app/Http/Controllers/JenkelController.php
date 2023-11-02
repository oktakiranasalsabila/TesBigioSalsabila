<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenkel;

class JenkelController extends Controller
{
    public function index()
    {
        $jenkels=Jenkel::latest()->paginate(2);
        return view('jenkel.jenkel',['jenkels'=>$jenkels]);
    }
}
