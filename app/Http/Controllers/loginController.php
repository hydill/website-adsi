<?php

namespace App\Http\Controllers;



use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User as ModelsUser;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;


class loginController extends Controller
{
    function login_page()
    {
        
        return view('login_pages');
    }
   

    function store(Request $request)
    {
        // Session::flash('username', $request->username);
        // Session::flash('password', $request->password);
        $user = new User();
        $request -> validate([
            'username' => 'required',
            'password' => 'required | min:6',
            'confirm_pass' => 'same:password',
        ],[
            'username.required'=>'silahkan masukan username',
            'username.unique'=>'data tersebut telah terdaftar',
            'password.required' => 'silahkan masukan password ',
            'password.min' => 'password minimal 6 digit',
            'confirm_pass.same' => 'password tidak sesuai',
        ]);

        // $data = [
        //     'username' => $request->username,
        //     'password' => Hash::make($request->password),
        //     'confirm_pass' => $request->confirm_pass
        // ];

        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->confirm_pass =  $request->confirm_pass;

        $user->save();

        return redirect('cctv');
        // User::create($data);

        // $infologin = [
        //     'username' => $request->username,
        //     'password' => $request->password,
        //     'confirm_pass' => $request->confirm_pass
        // ];
        // dd($infologin);
        // if (Auth::attempt($user)){
        //     return redirect('cctv');
        // }else{
        //     return redirect('regis') -> withErrors('username dan password tidak valid');
        // }

    }
    function login(Request $request)
    {
        // Session::flash('username', $request->username);
        // $request -> validate([
        //     'username' => 'required',
        //     'password' => 'required'
        // ],[
        //     'username.required' => 'username wajib diisi',
        //     'password.required' => 'password wajib diisi',
        // ]);

        $credentials = [
            'username' => $request -> username,
            'password' => $request -> password,
        ];

        if (Auth::attempt($credentials)){
            return redirect('cctv');
        }else{
            return redirect('login') -> withErrors('username dan password tidak valid');
        }
    }

    function cctv_masuk1()
    {
        return view('cctv_masuk', 
        ['title'=> 'cctv1','activated']);
    }
    function cctv_masuk2()
    {
        return view('cctv_masuk2', 
        ['title'=> 'cctv2']);
    }
    function cctv_masuk3()
    {
        return view('cctv_masuk3', 
        ['title'=> 'cctv3']);
    }
}

