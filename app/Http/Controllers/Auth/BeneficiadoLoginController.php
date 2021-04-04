<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeneficiadoLoginController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest:beneficiado');
    }

    public function showLoginForm(){
        return view('auth.beneficiado-login');
    }

    public function login(Request $request){

        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::guard('beneficiado')->attempt(['email' => $request->email, 'password' => $request->password],$request->remember)){
            return redirect()->intended(route('beneficiado.index'));
        }

        return redirect()->back()->withInput($request->only('email','remember'));
    }


}
