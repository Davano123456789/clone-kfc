<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KidsController extends Controller
{
    public function kids()  {
        return view('kids');
        
    }
}
