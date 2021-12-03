<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class encuestaController extends Controller
{
    public function index()
    {
        
        return view ('encuesta');
    }

}
