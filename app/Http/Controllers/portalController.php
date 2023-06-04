<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portalController extends Controller
{
    public function portal_page()
    {
        return view('portal_pages',[
            "title" => "Portal Otomatis"
        ]);
    }
}
