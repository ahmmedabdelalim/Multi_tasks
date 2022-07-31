<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtractController extends Controller
{
    //


    public function index()
    {
        return view('extract.extract_text');
    }
}
