<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('escola')) {
            return view('dashboard');
        } elseif (Auth::user()->hasRole('doador')) {
            return view('dashboard');
        } elseif (Auth::user()->hasRole('beneficiado')) {
            return view('dashboard');
        }
    }
}