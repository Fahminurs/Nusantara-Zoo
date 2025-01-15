<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Sesiuser extends Controller
{
    public function index()
    {
        // echo "Halo";
        return view('User.login_pengunjung');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request)
    {
        $request->validate([
            'password' => 'required'
        ],[
            'password' => 'No Tiket Wajib diisi'
        ]);

        $noTiket = $request->password;
        $name = $request->name;

        // Cek apakah nomor tiket ada dalam database pengunjung
        $pengunjung = Pengunjung::where('No_Tiket', $noTiket)->first();

        if($pengunjung){
            session(['pengunjung_name' => $name]);
            return view('User.Beranda',[
                'title' => 'Beranda',
            ]);
        } else {
            return redirect('/login_pengunjung')->withErrors('No Tiket Tidak Sesuai')->withInput();
        }
    }
    public function logout()
    {
        session()->forget('pengunjung_name');
        return redirect('/login_pengunjung');
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
