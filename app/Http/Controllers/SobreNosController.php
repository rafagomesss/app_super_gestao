<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function main()
    {
        return view('site.sobre-nos');
    }
}
