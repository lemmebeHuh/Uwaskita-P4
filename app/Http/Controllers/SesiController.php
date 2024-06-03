<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }
    function homee()
    {
        return view('landing');
    }
    
    

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerStore(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:3', 
        'role' => 'required',
    ]);

    $data['password'] = bcrypt($data['password']);

    $user = User::create($data);

    
    if ($request->role === 'mahasiswa') {
        Mahasiswa::create([
            'nama' => $user->name, 
            'email' => $user->email,
            'user_id' => $user->id,
        ]);
    } else if ($request->role === 'dosen') {
        Dosen::create([
            'nama' => $user->name,
            'email' => $user->email,
            'user_id' => $user->id,
        ]);
    }

    return redirect()->route('login')->with('success', 'Sukses! Silahkan login.'); // Perjelas pesan sukses
} 

    function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required' => 'Email haruas diisi',
            'password.required' => 'password haruas diisi',
        ]);

        $infologin= [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin))
        {
            if(Auth::user()->role == 'operator'){
                return redirect('dashboard/operator');
            }elseif (Auth::user()->role == 'mahasiswa'){
                return redirect('dashboard/mahasiswa');
            }elseif (Auth::user()->role == 'dosen'){
                return redirect('dashboard/dosen');
            }
        }else{
            return redirect('/login')->withErrors('Tidak sesuai')->withInput();
        }
    }
}
