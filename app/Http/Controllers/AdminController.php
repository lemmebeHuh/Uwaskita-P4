<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function index()
    {
        return view('dashboard');
    }

    function operator()
    {
        
        return view('dashboard');
    }

    function mahasiswa()
    {
        
        return view('dashboard');
    }
    function dosen()
    {
        
        return view('dashboard');
    }

    function profile()
    {
        
        return view('profile');
    }
}

// echo "selamat datang di halaman index";
// echo "<h1>" .Auth::user()->name."</h1>";
// echo "<a href='logout'>logout >></a>";
