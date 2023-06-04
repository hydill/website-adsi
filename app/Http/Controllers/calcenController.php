<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcenController extends Controller
{
    public function calcen_page()
    {
        return view('calcen', [
            "title" => "call center"
        ]);
    }
}
