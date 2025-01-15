<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class hewanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function hewan(Request $request)
    {
        $kw = $request->q;
        $data = Hewan::when($kw, function ($query, $kw) {
                return $query->where('Nama Hewan', 'like', "%{$kw}%")
                             ->orWhere('Jenis Hewan', 'like', "%{$kw}%")
                             ->orWhere('Status Kesehatan', 'like', "%{$kw}%");
            })
            ->orderBy('id_hewan', 'asc')
            ->paginate(5)
            ->appends(['q' => $kw]);
            
        $totalHewan = Hewan::count();
        $jumlahHewanSakit = Hewan::where('Status Kesehatan', 'Sakit')->count();
        $jumlahHewanSehat = Hewan::where('Status Kesehatan', 'Sehat')->count();
    
        return view('Admin.Hewan', [
            'title' => 'Hewan',
            'totalHewan' => $totalHewan,
            'jumlahHewanSakit' => $jumlahHewanSakit,
            'jumlahHewanSehat' => $jumlahHewanSehat,
            'data' => $data,
            'kw' => $kw,
        ]);
    }
    public function search(Request $request)
    {
        Log::info('Search method called with query: ', ['query' => $request->q]);
    
        $kw = $request->q;
        $data = Hewan::when($kw, function ($query, $kw) {
                return $query->where('Nama Hewan', 'like', "%{$kw}%")
                             ->orWhere('Jenis Hewan', 'like', "%{$kw}%")
                             ->orWhere('Status Kesehatan', 'like', "%{$kw}%");
            })
            ->orderBy('id_hewan', 'asc')
            ->paginate(4)
            ->appends(['q' => $kw]);
    
        Log::info('Search results: ', ['data' => $data]);
    
        try {
            $htmlData = view('Admin.Hewan', compact('data'))->render();
            $pagination = (string) $data->links();
    
            Log::info('Rendered view and pagination: ', ['htmlData' => $htmlData, 'pagination' => $pagination]);
            
            return response()->json([
                'data' => $htmlData,
                'pagination' => $pagination,
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to render view or pagination: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to render data'], 500);
        }
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
        'nama_hewan' => 'required|string|max:50',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:8000',
        'tanggal_lahir' => 'required|date',
        'jenis_kelamin' => 'required|string|in:Jantan,Betina',
        'jenis_pakan' => 'required|string|max:50',
        'berat' => 'required|string|max:100',
        'klasifikasi' => 'required|string|max:30',
        'asal' => 'required|string|max:50',
        'habitat' => 'required|string|max:50',
        'jenis_hewan' => 'required|string|max:50',
        'lokasi_kandang' => 'required|string|max:50',
        'status_kesehatan' => 'required|string|in:Sehat,Sakit,Cacat',
        'status_konservasi' => 'required|string|max:50',
        'deskripsi_hewan' => 'nullable|string',
        'nama_pendata' => 'required|string|max:50',
    ],[
        'nama_hewan.required' => 'Nama Hewan wajib diisi',
        'nama_hewan.string' => 'Nama Hewan harus berupa string',
        'nama_hewan.max' => 'Nama Hewan maksimal 50 karakter',
        'foto.image' => 'Foto harus berupa gambar',
        'foto.mimes' => 'Foto harus berformat jpeg, png, jpg, atau gif',
        'foto.max' => 'Ukuran Foto maksimal 8 MB',
        'tanggal_lahir.required' => 'Tanggal Lahir wajib diisi',
        'tanggal_lahir.date' => 'Tanggal Lahir harus berupa tanggal yang valid',
        'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi',
        'jenis_kelamin.in' => 'Jenis Kelamin harus Jantan atau Betina',
        'jenis_pakan.required' => 'Jenis Pakan wajib diisi',
        'jenis_pakan.string' => 'Jenis Pakan harus berupa string',
        'jenis_pakan.max' => 'Jenis Pakan maksimal 50 karakter',
        'berat.required' => 'Berat wajib diisi',
        'berat.string' => 'Berat harus berupa string',
        'berat.max' => 'Berat maksimal 100 karakter',
        'klasifikasi.required' => 'Klasifikasi wajib diisi',
        'klasifikasi.string' => 'Klasifikasi harus berupa string',
        'klasifikasi.max' => 'Klasifikasi maksimal 30 karakter',
        'asal.required' => 'Asal wajib diisi',
        'asal.string' => 'Asal harus berupa string',
        'asal.max' => 'Asal maksimal 50 karakter',
        'habitat.required' => 'Habitat wajib diisi',
        'habitat.string' => 'Habitat harus berupa string',
        'habitat.max' => 'Habitat maksimal 50 karakter',
        'jenis_hewan.required' => 'Jenis Hewan wajib diisi',
        'jenis_hewan.string' => 'Jenis Hewan harus berupa string',
        'jenis_hewan.max' => 'Jenis Hewan maksimal 50 karakter',
        'lokasi_kandang.required' => 'Lokasi Kandang wajib diisi',
        'lokasi_kandang.string' => 'Lokasi Kandang harus berupa string',
        'lokasi_kandang.max' => 'Lokasi Kandang maksimal 50 karakter',
        'status_kesehatan.required' => 'Status Kesehatan wajib diisi',
        'status_kesehatan.in' => 'Status Kesehatan harus Sehat, Sakit, atau Cacat',
        'status_konservasi.required' => 'Status Konservasi wajib diisi',
        'status_konservasi.string' => 'Status Konservasi harus berupa string',
        'status_konservasi.max' => 'Status Konservasi maksimal 50 karakter',
        'deskripsi_hewan.string' => 'Deskripsi Hewan harus berupa string',
        'nama_pendata.required' => 'Nama Pendata wajib diisi',
        'nama_pendata.string' => 'Nama Pendata harus berupa string',
        'nama_pendata.max' => 'Nama Pendata maksimal 50 karakter',
    ]);
    $tanggalLahir = Carbon::parse($request->input('tanggal_lahir'));
    $umur = $tanggalLahir ->age;
    $data = [
        'Nama Hewan' =>e($request->input('nama_hewan')),
        'Foto' => $request->input('foto'),
        'Tanggal Lahir' =>  $tanggalLahir->format('Y-m-d'),
        'Jenis Kelamin' => e($request->input('jenis_kelamin')),
        'Jenis Pakan' => e($request->input('jenis_pakan')),
        'Berat' => e($request->input('berat')),
        'Klasifikasi' => e($request->input('klasifikasi')),
        'Asal' => e($request->input('asal')),
        'Habitat' => e($request->input('habitat')),
        'Jenis hewan' => e($request->input('jenis_hewan')),
        'Lokasi Kandang' => e($request->input('lokasi_kandang')),
        'Status Kesehatan' => e($request->input('status_kesehatan')),
        'Status Konservasi' => e($request->input('status_konservasi')),
        'Deskripsi Hewan' => e($request->input('deskripsi_hewan')),
        'Nama Pendata' => e($request->input('nama_pendata')),
        'Tanggal Data Masuk' => Carbon::now()->format('Y-m-d H:i:s'),
        'Umur' => $umur,
    ];
    
    // Hitung umur hewan
if ($request->hasFile('foto')) {
    // Pindahkan foto ke direktori 'fotoHewan'
    $foto = $request->file('foto');
    $fotoName = $foto->getClientOriginalName();
    $foto->move('fotoHewan/', $fotoName);
    
    // Simpan nama file foto dalam array data
    $data['Foto'] = $fotoName;
}
// $data = $request->all();
    // Insert data into database
    Hewan::create($data);
    session()->flash('success', 'Berhasil menyimpan data');

    return redirect()-> to ('Admin/Hewan');
}


// Orii 
// $data = [
//     'Nama Hewan' => $request->input('nama_hewan'),
//     'Foto' => $request->input('foto'), // Sesuaikan dengan nama kolom di database
//     'Tanggal Lahir' => Carbon::parse($request->input('tanggal_lahir'))->format('Y-m-d'),
//     'Jenis Kelamin' => $request->input('jenis_kelamin'),
//     'Jenis Pakan' => $request->input('jenis_pakan'),
//     'Berat' => $request->input('berat'),
//     'Klasifikasi' => $request->input('klasifikasi'),
//     'Asal' => $request->input('asal'),
//     'Habitat' => $request->input('habitat'),
//     'Jenis hewan' => $request->input('jenis_hewan'),
//     'Lokasi Kandang' => $request->input('lokasi_kandang'),
//     'Status Kesehatan' => $request->input('status_kesehatan'),
//     'Status Konservasi' => $request->input('status_konservasi'),
//     'Deskripsi Hewan' => $request->input('deskripsi_hewan'),
//     'Nama Pendata' => $request->input('nama_pendata'),
//     'Tanggal Data Masuk' => Carbon::parse($request->input('tanggal_data_masuk'))->format('Y-m-d'),
// ];


    /**
     * Display the specified resource.
     */
    public function show(string $id) //menampilkan
    {
        //
    }

 /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_hewan
     * @return \Illuminate\Http\Response
     */
   public function edit($id)
   {
       $hewan = Hewan::find($id);
    //    return view('hewan.edit', compact('hewan'));
   }


    


   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) //update data
    {
        Log::info('Update method called for ID: ' . $id);
       
        $request->validate([
            'nama_hewan' => 'required|string|max:50',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:8000',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string|in:Jantan,Betina',
            'jenis_pakan' => 'required|string|max:50',
            'berat' => 'required|integer',
            'klasifikasi' => 'required|string|max:30',
            'asal' => 'required|string|max:50',
            'habitat' => 'required|string|max:50',
            'jenis_hewan' => 'required|string|max:50',
            'lokasi_kandang' => 'required|string|max:50',
            'status_kesehatan' => 'required|string|in:Sehat,Sakit,Cacat',
            'status_konservasi' => 'required|string|max:50',
            'deskripsi_hewan' => 'nullable|string',
            'nama_pendata' => 'required|string|max:50',
        ],[
            'nama_hewan.required' => 'Nama Hewan wajib diisi',
            'nama_hewan.string' => 'Nama Hewan harus berupa string',
            'nama_hewan.max' => 'Nama Hewan maksimal 50 karakter',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Foto harus berformat jpeg, png, jpg, atau gif',
            'foto.max' => 'Ukuran Foto maksimal 8 MB',
            'tanggal_lahir.required' => 'Tanggal Lahir wajib diisi',
            'tanggal_lahir.date' => 'Tanggal Lahir harus berupa tanggal yang valid',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi',
            'jenis_kelamin.in' => 'Jenis Kelamin harus Jantan atau Betina',
            'jenis_pakan.required' => 'Jenis Pakan wajib diisi',
            'jenis_pakan.string' => 'Jenis Pakan harus berupa string',
            'jenis_pakan.max' => 'Jenis Pakan maksimal 50 karakter',
            'berat.required' => 'Berat wajib diisi',
            'berat.integer' => 'Berat harus berupa angka',
            'klasifikasi.required' => 'Klasifikasi wajib diisi',
            'klasifikasi.string' => 'Klasifikasi harus berupa string',
            'klasifikasi.max' => 'Klasifikasi maksimal 30 karakter',
            'asal.required' => 'Asal wajib diisi',
            'asal.string' => 'Asal harus berupa string',
            'asal.max' => 'Asal maksimal 50 karakter',
            'habitat.required' => 'Habitat wajib diisi',
            'habitat.string' => 'Habitat harus berupa string',
            'habitat.max' => 'Habitat maksimal 50 karakter',
            'jenis_hewan.required' => 'Jenis Hewan wajib diisi',
            'jenis_hewan.string' => 'Jenis Hewan harus berupa string',
            'jenis_hewan.max' => 'Jenis Hewan maksimal 50 karakter',
            'lokasi_kandang.required' => 'Lokasi Kandang wajib diisi',
            'lokasi_kandang.string' => 'Lokasi Kandang harus berupa string',
            'lokasi_kandang.max' => 'Lokasi Kandang maksimal 50 karakter',
            'status_kesehatan.required' => 'Status Kesehatan wajib diisi',
            'status_kesehatan.in' => 'Status Kesehatan harus Sehat, Sakit, atau Cacat',
            'status_konservasi.required' => 'Status Konservasi wajib diisi',
            'status_konservasi.string' => 'Status Konservasi harus berupa string',
            'status_konservasi.max' => 'Status Konservasi maksimal 50 karakter',
            'deskripsi_hewan.string' => 'Deskripsi Hewan harus berupa string',
            'nama_pendata.required' => 'Nama Pendata wajib diisi',
            'nama_pendata.string' => 'Nama Pendata harus berupa string',
            'nama_pendata.max' => 'Nama Pendata maksimal 50 karakter',
        ]);
        Log::info('Validation passed');
        $item = Hewan::findOrFail($id);
        $umur = Carbon::parse($request->input('tanggal_lahir'))->age;
        $data = [
            'Nama Hewan' =>e($request->input('nama_hewan')),
            'Foto' => $request->input('foto'),
            'Tanggal Lahir' => Carbon::parse($request->input('tanggal_lahir'))->format('Y-m-d'),
            'Jenis Kelamin' => e($request->input('jenis_kelamin')),
            'Jenis Pakan' => e($request->input('jenis_pakan')),
            'Berat' => $request->input('berat'),
            'Klasifikasi' => e($request->input('klasifikasi')),
            'Asal' => e($request->input('asal')),
            'Habitat' => e($request->input('habitat')),
            'Jenis hewan' => e($request->input('jenis_hewan')),
            'Lokasi Kandang' => e($request->input('lokasi_kandang')),
            'Status Kesehatan' => e($request->input('status_kesehatan')),
            'Status Konservasi' => e($request->input('status_konservasi')),
            'Deskripsi Hewan' => e($request->input('deskripsi_hewan')),
            'Nama Pendata' => e($request->input('nama_pendata')),
            'Tanggal Data Masuk' => Carbon::now()->format('Y-m-d H:i:s'),
            'Umur' => $umur,
        ];
        
    if ($request->hasFile('foto')) {
        // Pindahkan foto ke direktori 'fotoHewan'
        $foto = $request->file('foto');
        $fotoName = $foto->getClientOriginalName();
        $foto->move('fotoHewan/', $fotoName);
        
        // Simpan nama file foto dalam array data
        $data['Foto'] = $fotoName;


    } else {
        // If no new photo is uploaded, keep the existing photo
        $data['Foto'] = $item->Foto;
    }

    try {
        $updateSuccess = Hewan::find($id);;
        $updateSuccess->update($data);
        $updateSuccess->save($data);
        Log::info('Update success: ' . $updateSuccess);
        
        if ($updateSuccess) {
            return redirect()->to('Admin/Hewan')->with('success', 'Data updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update data');
        }
    } catch (\Exception $e) {
        Log::error('Update failed: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Failed to update data');
        Log::info('Redirecting to Admin/Hewan');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $hewan = Hewan::findOrFail($id);
            $hewan->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }
    }

}
