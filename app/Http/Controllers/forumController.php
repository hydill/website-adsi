<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forumController extends Controller
{
    public function forum_page()
    {
        return view('frm_publik',[
            "title" => "Forum Publik"
        ]);
    }
}
