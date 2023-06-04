<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cctvController extends Controller
{
    public function cctv_page()
    {
        // $data_cctv = \App\Models\cctv::all();
        return view('cctv_pages',[
            "title" => "Monitoring CCTV"
        ]);
    }
}
