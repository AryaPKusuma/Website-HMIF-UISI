<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function ristek()
    {
        return view('ristek');
    }

    public function kwu()
    {
        return view('kwu');
    }

    public function humas()
    {
        return view('humas');
    }

    public function psdm()
    {
        return view('psdm');
    }

    public function kominfo()
    {
        return view('kominfo');
    }

}
