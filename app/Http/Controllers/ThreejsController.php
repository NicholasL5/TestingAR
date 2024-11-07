<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreejsController extends Controller
{
    public function showAR()
    {
        return view('testing');
    }

    public function index()
    {
        $disable_fullpage = true;
        return view('products', compact(['disable_fullpage']));
    }
}
