<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        //Auth::guard('beneficiado')->attempt(['email' => "banana@banana.com", 'password' => "123123123"]);

        if (Auth::user()) {
            if (Auth::user()->hasRole('escola')) {
                return view('dashboard-escola');
            } elseif (Auth::user()->hasRole('doador')) {
                return view('dashboard-doador');
            } elseif (Auth::user()->hasRole('beneficiado')) {
                return view('dashboard-beneficiado');
            }
        } else {
            return view('dashboard');
        }

        return view('dashboard');
    }
}
