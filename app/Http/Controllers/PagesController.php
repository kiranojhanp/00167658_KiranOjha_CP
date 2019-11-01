<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function indexpage()
    {
        return view('indexpage');
    }

    public function clinics()
    {
        return view('clinics.index');
    }
    
}
