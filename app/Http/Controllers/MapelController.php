<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $mapels=Mapel::latest()->paginate(2);
        return view('mapel.mapel',['mapels'=>$mapels]);
    }
}
