<?php

namespace App\Http\Controllers;
use App\Models\mid;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home()
    {   
        return view('Home');
    }
}
