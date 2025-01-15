<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Sesiadmin extends Controller
{
    public function index()
    {
        // echo "Halo";
        return view('Admin.loginadm');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email' => 'Email Wajib Diisi',
            'password' => 'Password Wajib Diisi'
        ]);
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            // return redirect('/Dashboard');
            if (Auth::user()->role=='Pengunjung'){
                Auth::logout();
                return redirect('/login_pengunjung')->withErrors('Pengunjung tidak dapat mengakses halaman admin.');
            }else if (Auth::user()->role=='Admin'){
                return redirect('/Admin/Dashboard');
                
            }
        } else {

            return redirect('/loginadm')->withErrors('Username dan password yang dimasukkan tidak sesuai')->withInput();
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/loginadm');
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //memasukkan ke database
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) //menampilkan
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) //update data
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
