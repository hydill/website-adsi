<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function regis_page()
    {
        return view('regis_page');
    }

    public function store()
    {
        return request()->all();
    }


}

