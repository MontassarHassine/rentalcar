<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string'
        ]) ;

        $check = Auth::guard('admin')->attempt($data);

        if(!$check)
          {
            return "incorrect credentials" ;
          }
        $admin = Auth::guard('admin')->user();
       Auth::login($admin);
      return redirect()->route('dashboard') ;
    }
}
