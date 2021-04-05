<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(){

        if(Auth::guard('beneficiado')->check()){
            return redirect()->intended(route('beneficiado.show'));
        }

        if(Auth::guard('doador')->check()){
            return redirect()->intended(route('doador.index'));
        }

        if(Auth::guard('escola')->check()){
            return redirect()->intended(route('escola.index'));
        }

        return view('auth.login');
    }

    public function login(Request $request){

        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $guard = $request->tipo;

        if($guard == "beneficiado"){
            if(Auth::guard('beneficiado')->attempt(['email' => $request->email, 'password' => $request->password],$request->remember)){
                return redirect()->intended(route('beneficiado.show'));
            }
        }elseif($guard == "doador"){
            if(Auth::guard('doador')->attempt(['email' => $request->email, 'password' => $request->password],$request->remember)){
                return redirect()->intended(route('doador.index'));
            }
        }elseif($guard == "escola"){
            if(Auth::guard('escola')->attempt(['email' => $request->email, 'password' => $request->password],$request->remember)){
                return redirect()->intended(route('escola.index'));
            }
        }

        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout(){
        Auth::guard('beneficiado')->logout();
        Auth::guard('doador')->logout();
        Auth::guard('escola')->logout();
        return redirect(route('login'));
    }

}
