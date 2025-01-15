<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class AcaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_acara = Acara::orderBy('id_acara', 'asc')->paginate(5);
        return view('Admin.Acara', [
            'title' => 'Acara',
            'data' => $data_acara,
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'Nama_Acara' => 'required|string|max:50', // Nama Hewan wajib diisi, harus berupa string, maksimal 50 karakter
            'Foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:8000', // Foto harus berupa gambar dengan format jpeg, png, jpg, atau gif, maksimal 8 MB
            'Lokasi' => 'required|string|max:50', // Lokasi Acara wajib diisi, harus berupa string, maksimal 50 karakter
            'Waktu_Mulai' => 'required|date_format:Y-m-d\TH:i', // Waktu Mulai wajib diisi, harus berupa tanggal dengan format YYYY-MM-DDTHH:MM
            'Waktu_Berakhir' => 'nullable|date_format:Y-m-d\TH:i|after_or_equal:Waktu_Mulai',
            'Deskripsi_Acara' => 'required|string', // Deskripsi Hewan harus berupa string
            'Nama_Pendata' => 'required|string|max:50', // Nama Pendata wajib diisi, harus berupa string, maksimal 50 karakter
        ], [
            'Nama_Acara.required' => 'Nama Acara wajib diisi',
            'Nama_Acara.string' => 'Nama Acara harus berupa string',
            'Nama_Acara.max' => 'Nama Acara maksimal 50 karakter',
            'Foto.image' => 'Foto harus berupa gambar',
            'Foto.mimes' => 'Foto harus berformat jpeg, png, jpg, atau gif',
            'Foto.max' => 'Ukuran Foto maksimal 8 MB',
            'Lokasi.required' => 'Lokasi Acara wajib diisi',
            'Lokasi.string' => 'Lokasi Acara harus berupa string',
            'Lokasi.max' => 'Lokasi Acara maksimal 50 karakter',
            'Waktu_Mulai.required' => 'Waktu Mulai wajib diisi',
            'Waktu_Mulai.date' => 'Waktu Mulai harus berupa tanggal yang valid',
            'Waktu_Berakhir.after_or_equal' => 'Waktu Berakhir harus setelah atau sama dengan Waktu Mulai',
            'Deskripsi_Acara.required' => 'Deskripsi Acara wajib diisi',
            'Deskripsi_Acara.string' => 'Deskripsi Acara harus berupa string',
            'Nama_Pendata.required' => 'Nama Pendata wajib diisi',
            'Nama_Pendata.string' => 'Nama Pendata harus berupa string',
            'Nama_Pendata.max' => 'Nama Pendata maksimal 50 karakter',
        ]);

        $data = [
            'Nama_Acara' =>e($request->input('Nama_Acara')),
            'Foto' => $request->input('foto'),
            'Lokasi' =>e($request->input('Lokasi')),
            'Waktu_Mulai' =>$request->input('Waktu_Mulai'),
            'Waktu_Berakhir' =>$request->input('Waktu_Berakhir'),
            'Deskripsi_Acara' =>e($request->input('Deskripsi_Acara')),
            'Nama_Pendata' =>e($request->input('Nama_Pendata')),
            'Tanggal_Data_Masuk' => Carbon::now()->format('Y-m-d H:i:s'),
        ];
        
        // Hitung umur hewan
    if ($request->hasFile('foto')) {
        // Pindahkan foto ke direktori 'fotoHewan'
        $foto = $request->file('foto');
        $fotoName = $foto->getClientOriginalName();
        $foto->move('fotoAcara/', $fotoName);
        
        // Simpan nama file foto dalam array data
        $data['Foto'] = $fotoName;
    }
    // $data = $request->all();
        // Insert data into database
        Acara::create($data);
        session()->flash('success', 'Berhasil menyimpan data');
    
        return redirect()-> to ('Admin/Acara');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Acara = Acara::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Log::info('Memulai update Acara: ' . $id);

        $request->validate([
            'Nama_Acara' => 'required|string|max:50', // Nama Hewan wajib diisi, harus berupa string, maksimal 50 karakter
            'Foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:8000', // Foto harus berupa gambar dengan format jpeg, png, jpg, atau gif, maksimal 8 MB
            'Lokasi' => 'required|string|max:50', // Lokasi Acara wajib diisi, harus berupa string, maksimal 50 karakter
            'Waktu_Mulai' => 'required|date_format:Y-m-d\TH:i', // Waktu Mulai wajib diisi, harus berupa tanggal dengan format YYYY-MM-DDTHH:MM
            'Waktu_Berakhir' => 'nullable|date_format:Y-m-d\TH:i|after_or_equal:Waktu_Mulai',
            'Deskripsi_Acara' => 'required|string', // Deskripsi Hewan harus berupa string
            'Nama_Pendata' => 'required|string|max:50', // Nama Pendata wajib diisi, harus berupa string, maksimal 50 karakter
        ], [
            'Nama_Acara.required' => 'Nama Acara wajib diisi',
            'Nama_Acara.string' => 'Nama Acara harus berupa string',
            'Nama_Acara.max' => 'Nama Acara maksimal 50 karakter',
            'Foto.image' => 'Foto harus berupa gambar',
            'Foto.mimes' => 'Foto harus berformat jpeg, png, jpg, atau gif',
            'Foto.max' => 'Ukuran Foto maksimal 8 MB',
            'Lokasi.required' => 'Lokasi Acara wajib diisi',
            'Lokasi.string' => 'Lokasi Acara harus berupa string',
            'Lokasi.max' => 'Lokasi Acara maksimal 50 karakter',
            'Waktu_Mulai.required' => 'Waktu Mulai wajib diisi',
            'Waktu_Mulai.date' => 'Waktu Mulai harus berupa tanggal yang valid',
            'Waktu_Berakhir.after_or_equal' => 'Waktu Berakhir harus setelah atau sama dengan Waktu Mulai',
            'Deskripsi_Acara.required' => 'Deskripsi Acara wajib diisi',
            'Deskripsi_Acara.string' => 'Deskripsi Acara harus berupa string',
            'Nama_Pendata.required' => 'Nama Pendata wajib diisi',
            'Nama_Pendata.string' => 'Nama Pendata harus berupa string',
            'Nama_Pendata.max' => 'Nama Pendata maksimal 50 karakter',
        ]);
        Log::info('Validasi berhasil untuk Acara: ' . $id);
        $item = Acara::findOrFail($id);

        $data = [
            'Nama_Acara' =>e($request->input('Nama_Acara')),
            'Foto' => $request->input('foto'),
            'Lokasi' =>e($request->input('Lokasi')),
            'Waktu_Mulai' =>$request->input('Waktu_Mulai'),
            'Waktu_Berakhir' =>$request->input('Waktu_Berakhir'),
            'Deskripsi_Acara' =>e($request->input('Deskripsi_Acara')),
            'Nama_Pendata' =>e($request->input('Nama_Pendata')),
            'Tanggal_Data_Masuk' => Carbon::now()->format('Y-m-d H:i:s'),
        ];
        
    
   
    

    
        if ($request->hasFile('foto')) {
            // Pindahkan foto ke direktori 'fotoHewan'
            $foto = $request->file('foto');
            $fotoName = $foto->getClientOriginalName();
            $foto->move('fotoAcara/', $fotoName);
            
            // Simpan nama file foto dalam array data
            $data['Foto'] = $fotoName;
    
            Log::info('Update  ada untuk Acara: ' . $fotoName);
    
        } else {
            // If no new photo is uploaded, keep the existing photo
            $data['Foto'] = $item->Foto;
        }
    
    
        try {
            $updateSuccess = Acara::find($id);;
            $updateSuccess = $item->update($data);
            Log::info('Update sukses untuk Acara: ' . $id);
    
            if ($updateSuccess) {
                return redirect()->to('Admin/Acara')->with('success', 'Data updated successfully');
            } else {
                return redirect()->back()->with('error', 'Failed to update data');
            }
        } catch (\Exception $e) {
            Log::error('Update failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update data');
            Log::info('Redirecting to Admin/Acara');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $acara = Acara::findOrFail($id);
            $acara->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }
    }
}
