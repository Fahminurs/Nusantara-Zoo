@extends('layout.main')

@section('konten')




<!-- Main Content -->
<div class="content">
    <!-- Navbar -->
    <nav>
        <div class="nav-start">
            <i class='bx bx-menu'></i> <!-- Menu icon -->
        </div>
        <div class="nav-end">
            <input type="checkbox" id="theme-toggle" hidden>
            <label for="theme-toggle" class="theme-toggle"></label>
            <a href="#" class="notif">
                <i class='bx bx-bell'></i>
                <span class="count">12</span>
            </a>
            <a href="#" class="profile">
                <img src="images/Logo/logo.png">

            </a>
        </div>
    </nav>

    <!-- End of Navbar -->

    <main>
        <div class="header">
            <div class="left">
                <h1>Data Hewan</h1>
            </div>
        </div>

        <!-- End Header -->
        <!-- Insights -->
        <ul class="insights">
            <li>

                <i class='bx bx-calendar-check'></i>
                <span class="info">
                    <h3>{{ $totalHewan }}</h3>
                    <p>Jumlah <br> Hewan</p>
                </span>
            </li>
            <li><i class='bx bx-show-alt'></i>
                <span class="info">
                    <h3>{{ $jumlahHewanSakit }}</h3>
                    <p>Jumlah <br> Hewan Sakit</p>
                </span>
            </li>
            <li><i class='bx bx-line-chart'></i>
                <span class="info">
                    <h3>{{ $jumlahHewanSehat }}</h3>
                    <p>Jumlah <br> hewan Sehat</p>
                </span>
            </li>
        </ul>
        <!-- End of Insights -->


 <!-- End of Insights -->


         <div class="bottom-data">
            <div class="orders">
                <div class="header">
                    <i class='bx bx-receipt'></i>
                    <h3>Pendataan Hewan</h3>
                    <!-- <i class='bx bx-search'></i> -->
                </div>
                <div class="buttons-container d-flex align-items-center" id="searchInput">
                    <button type="button" class="report" id="add-data-btn" data-bs-target="#Tambahkandata"
                        data-bs-toggle="modal">
                        <i class='bx bxs-cloud-upload'></i>
                        <span>Tambahkan Data</span>
                    </button>
                    <div></div>
                    <div class="form-controlTable">
                         <input type="search" id="search" style="max-width: 200px;" placeholder="Search..." value="{{ $kw }}">
                    </div>
                    <button class="search-btnTable" type="submit"><i class='bx bx-search'></i></button>

                </div> 


                <form id="dataForm" action="{{ url('/Admin/Hewan/Tambah') }}" method="POST" enctype="multipart/form-data">
        <!-- Modal 1 -->
            @csrf <!-- Tambahkan CSRF Token -->
            <div class="modal fade" id="Tambahkandata" aria-hidden="true" aria-labelledby="TambahkandataLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="TambahkandataLabel">Tambahkan Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-floating mb-3">
                                        <input type="text"  class="form-control" id="input_namahewan" placeholder="Nama Hewan" name="nama_hewan">
                                        <label for="input_namahewan">Nama Hewan</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="jenisKelaminSelect" aria-label="Pilih Jenis Kelamin" name="jenis_kelamin">
                                            <option selected >Pilih Jenis Kelamin</option>
                                            <option value="Jantan">Jantan</option>
                                            <option value="Betina">Betina</option>
                                        </select>
                                        <label for="jenisKelaminSelect">Jenis Kelamin</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-floating mb-3">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" name="foto">
                                        <label for="formFileSm" class="form-label p-2">Masukkan Foto</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="klasifikasiHewanSelect" aria-label="Pilih Klasifikasi Hewan" name="klasifikasi">
                                            <option selected >Pilih Klasifikasi Hewan</option>
                                            <option value="Herbivora">Herbivora</option>
                                            <option value="Karnivora">Karnivora</option>
                                            <option value="Omnivora">Omnivora</option>
                                            <option value="Insektivora">Insektivora</option>
                                            <option value="Frugivora">Frugivora</option>
                                            <option value="Folivora">Folivora</option>
                                            <option value="Nektarivora">Nektarivora</option>
                                            <option value="Detritivora">Detritivora</option>
                                        </select>
                                        <label for="klasifikasiHewanSelect">Klasifikasi Hewan</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="jenisHewanSelect" aria-label="Pilih Jenis Hewan" name="jenis_hewan">
                                            <option selected disabled>Pilih Jenis Hewan</option>
                                            <option value="Mamalia">Mamalia</option>
                                            <option value="Reptil">Reptil</option>
                                            <option value="Aves">Aves</option>
                                            <option value="Amfibi">Amfibi</option>
                                            <option value="Ikan">Ikan</option>
                                            <option value="Serangga">Serangga</option>
                                        </select>
                                        <label for="jenisHewanSelect">Jenis Hewan</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="tglLahirInput" placeholder="Tanggal Lahir" name="tanggal_lahir">
                                        <label for="tglLahirInput">Tanggal Lahir</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="statusKesehatanSelect" aria-label="Pilih Status Kesehatan" name="status_kesehatan">
                                            <option selected disabled>Pilih Status Kesehatan</option>
                                            <option value="Sehat">Sehat</option>
                                            <option value="Sakit">Sakit</option>
                                            <option value="Cacat">Cacat</option>
                                        </select>
                                        <label for="statusKesehatanSelect">Status Kesehatan</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="beratInput" placeholder="Berat" name="berat">
                                        <label for="beratInput">Berat</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="jenisPakanSelect" aria-label="Pilih Jenis Pakan" name="jenis_pakan">
                                            <option selected disabled>Pilih Jenis Pakan</option>
                                            <option value="Rumput">Rumput</option>
                                            <option value="Serbuk Sereal">Serbuk Sereal</option>
                                            <option value="Biji-bijian">Biji-bijian</option>
                                            <option value="Daging">Daging</option>
                                            <option value="Ikan">Ikan</option>
                                            <option value="Sayuran">Sayuran</option>
                                            <option value="Buah-buahan">Buah-buahan</option>
                                        </select>
                                        <label for="jenisPakanSelect">Jenis Pakan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="kandangInput" placeholder="Kandang" name="lokasi_kandang">
                                        <label for="kandangInput">Lokasi Kandang</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="habitatInput" placeholder="Habitat" name="habitat">
                                        <label for="habitatInput">Habitat</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="asalInput" placeholder="Asal" name="asal">
                                        <label for="asalInput">Asal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="namaPendataInput" placeholder="Nama Pendata" name="nama_pendata">
                                        <label for="namaPendataInput">Nama Pendata</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="statusKonservasiSelect" aria-label="Pilih Status Konservasi" name="status_konservasi">
                                        <option selected disabled>Pilih Status Konservasi</option>
                                        <option value="Perhatian Rendah (LC)">Perhatian Rendah (LC)</option>
                                        <option value="Hampir Terancam (NT)">Hampir Terancam (NT)</option>
                                        <option value="Rentan (VU)">Rentan (VU)</option>
                                        <option value="Terancam (EN)">Terancam (EN)</option>
                                        <option value="Sangat Terancam (CR)">Sangat Terancam (CR)</option>
                                        <option value="Punah di Alam Liar (EW)">Punah di Alam Liar (EW)</option>
                                        <option value="Punah (EX)">Punah(EX)</option>                        
                                    </select>
                                    <label for="statusKonservasiSelect">Status Konservasi</label>
                                </div>
                                </div>
                            </div>
                           
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Deskripsi" id="deskripsiTextarea" style="height: 100px;" name="deskripsi_hewan"></textarea>
                                <label for="deskripsiTextarea">Deskripsi</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" aria-label="Close">Close</button>
                            <button class="btn btn-utama" type="button" data-bs-target="#Tambahkandata2" data-bs-toggle="modal"  >Save</button>
                        </div>
                    </div>
                </div>
            </div>
        
     
          


                <!-- Modal 2 -->
                <div class="modal fade" id="Tambahkandata2" aria-hidden="true" aria-labelledby="TambahkandataLabel2"
                    tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="TambahkandataLabel2">Konfirmasi</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin untuk Menambahkan Data.
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-warning" type="button" data-bs-target="#Tambahkandata" data-bs-toggle="modal" >kembali</button>
                                <button class="btn btn-utama" data-bs-target="#Tambahkandata"
                                    data-bs-toggle="modal" id="confirmSaveButton">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                <div class="table-container">
                <!-- table -->
                <main class="table">
                    <section class="table__body" id="customers_table">
                        <div id="search-results">
                        <table>
                            <thead>
                                <tr>
                                    <th>No<span class="icon-arrow">&UpArrow;</span></th>
                                    <th>Nama Hewan<span class="icon-arrow">&UpArrow;</span></th>
                                    <th>Tgl Lahir<span class="icon-arrow">&UpArrow;</span></th>
                                    <th>Umur<span class="icon-arrow">&UpArrow;</span></th>
                                    <th>Jenis Kelamin<span class="icon-arrow">&UpArrow;</span></th>
                                    <th>Jenis Pakan<span class="icon-arrow">&UpArrow;</span></th>
                                    <th>Berat<span class="icon-arrow">&UpArrow;</span></th>
                                    <th>Asal<span class="icon-arrow">&UpArrow;</span></th>
                                    <th>Habitat<span class="icon-arrow">&UpArrow;</span></th>
                                    <th>Jenis Hewan<span class="icon-arrow">&UpArrow;</span></th>
                                    <th>Lokasi Kandang<span class="icon-arrow">&UpArrow;</span></th>
                                    <th>Klasifikasi Makanan<span class="icon-arrow">&UpArrow;</span></th>
                                    <th>Status Kesehatan<span class="icon-arrow">&UpArrow;</span></th>
                                    <th>Status Konservasi<span class="icon-arrow">&UpArrow;</span></th>
                                    <th>Deskripsi<span class="icon-arrow">&UpArrow;</span></th>
                                    <th>Nama Pendata<span class="icon-arrow">&UpArrow;</span></th>
                                    <th>Data Masuk<span class="icon-arrow">&UpArrow;</span></th>
                                    <th style="text-align: center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = $data ->firstItem()?>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{$i }}</td>
                                    <td>
                                        <a href="{{ asset('fotoHewan/' . $item->Foto) }}" data-lightbox="models" data-title="{{ $item->nama_hewan }}">
                                            <img src="{{ asset('fotoHewan/' . $item->Foto) }}" alt="{{ $item->nama_hewan }}" width="50">
                                        </a>
                                        {{ $item->{'Nama Hewan'} }} 
                                    </td>
                                    <td>{{ $item->{'Tanggal Lahir'} }}</td>
                                    <td>{{ $item->Umur }}</td>
                                    <td>{{ $item->{'Jenis Kelamin'} }}</td>
                                    <td>{{ $item->{'Jenis Pakan'} }}</td>
                                    <td>{{ $item->Berat }}</td>
                                    <td>{{ $item->Asal }}</td>
                                    <td>{{ $item->Habitat }}</td>
                                    <td>{{ $item->{'Jenis hewan'} }}</td>
                                    <td>{{ $item->{'Lokasi Kandang'} }}</td>
                                    <td>{{ $item->Klasifikasi }}</td>
                                    <td>{{ $item->{'Status Kesehatan'} }}</td>
                                    <td>{{ $item->{'Status Konservasi'} }}</td>
                                    <td>{{ $item->{'Deskripsi Hewan'} }}</td>
                                    <td>{{ $item->{'Nama Pendata'} }}</td>
                                    <td>{{ $item->{'Tanggal Data Masuk'} }}</td>
                                    <td style="text-align: center;">
                                        <div class="d-flex justify-content-center">
                                            <div class="d-flex " role="group" aria-label="Basic example">
                                                <form id="deleteForm{{ $item->id_hewan }}" action="{{ route('hewan.destroy', $item->id_hewan) }}"   method="POST" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-secondary btn-sm" onclick="confirmDelete('{{ $item->id_hewan }}')" title="Delete"><i class='bx bx-trash icon-sm'></i></button>
                                                </form>
                                                <button type="button" class="btn btn-secondary btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#EditData2{{ $item->id_hewan}}" title="Edit"><i class='bx bx-edit icon-sm'></i></button>
                                                {{-- Edit --}}
                                                    {{-- Modal 1 --}}
                                                    <form  id="dataForm{{ $item->id_hewan}}" action="{{ url('/Admin/Hewan/update/'.$item->id_hewan) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal fade" id="EditData2{{ $item->id_hewan}}" aria-hidden="true" aria-labelledby="EditDataLabel" tabindex="-1">
                                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="EditDataLabel{{ $item->id_hewan }}">Edit Data Hewan</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row d-flex justify-content-center">
                                                                            @if($item->Foto)
                                                                            <div style="margin-left: 10px; width: 50%; height: 50%; border-radius: 5px; margin-bottom: 7px;">
                                                                                <a href="{{ asset('fotoHewan/' . $item->Foto) }}" data-lightbox="models" data-title="{{ $item->Foto }}">
                                                                                    <img src="{{ asset('fotoHewan/' . $item->Foto) }}" class="img-thumbnail" alt="Foto Hewan" style="border-radius: 10px; width: 100%; height: 100%; object-fit: cover;">
                                                                                </a>
                                                                            </div>
                                                                        @else
                                                                            <p class="text-muted text-center">Tidak ada foto untuk ditampilkan</p>
                                                                        @endif
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <div class="form-floating mb-3">
                                                                                    <input type="text" value="{{  $item->{'Nama Hewan'}  }}" class="form-control" id="input_namahewan{{ $item->id_hewan}}" placeholder="Nama Hewan" name="nama_hewan">
                                                                                    <label for="input_namahewan{{ $item->id_hewan}}">Nama Hewan</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="form-floating mb-3">
                                                                                    <select class="form-select" id="jenisKelaminSelect{{ $item->id_hewan}}" aria-label="Pilih Jenis Kelamin" name="jenis_kelamin">
                                                                                        <option selected disabled>Pilih Jenis Kelamin</option>
                                                                                        <option value="Jantan" {{ $item->{'Jenis Kelamin'} == 'Jantan' ? 'selected' : '' }}>Jantan</option>
                                                                                        <option value="Betina" {{ $item->{'Jenis Kelamin'} == 'Betina' ? 'selected' : '' }}>Betina</option>
                                                                                    </select>
                                                                                    <label for="jenisKelaminSelect">Jenis Kelamin</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control form-control-sm" id="formFileSm{{ $item->id_acara }}" type="file" name="foto" value= "{{ $item->Foto }}">
                                                                                    <label for="formFileSm{{ $item->id_hewan}}" class="form-label p-2">Masukkan Foto</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <div class="form-floating mb-3">
                                                                                    <select class="form-select" id="klasifikasiHewanSelect{{ $item->id_hewan}}" aria-label="Pilih Klasifikasi Hewan" name="klasifikasi">
                                                                                        <option selected>Pilih Klasifikasi Hewan</option>
                                                                                        <option value="Herbivora" {{ $item-> { 'Klasifikasi' } == 'Herbivora' ? 'selected' : '' }}>Herbivora</option>
                                                                                        <option value="Karnivora" {{ $item->{ 'Klasifikasi' } == 'Karnivora' ? 'selected' : '' }}>Karnivora</option>
                                                                                        <option value="Omnivora" {{ $item->{ 'Klasifikasi' } == 'Omnivora' ? 'selected' : '' }}>Omnivora</option>
                                                                                        <option value="Insektivora" {{ $item->{ 'Klasifikasi' } == 'Insektivora' ? 'selected' : '' }}>Insektivora</option>
                                                                                        <option value="Frugivora" {{ $item->{ 'Klasifikasi' } == 'Frugivora' ? 'selected' : '' }}>Frugivora</option>
                                                                                        <option value="Folivora" {{ $item->{ 'Klasifikasi' } == 'Folivora' ? 'selected' : '' }}>Folivora</option>
                                                                                        <option value="Nektarivora" {{ $item->{ 'Klasifikasi' } == 'Nektarivora' ? 'selected' : '' }}>Nektarivora</option>
                                                                                        <option value="Detritivora" {{ $item->{ 'Klasifikasi' } == 'Detritivora' ? 'selected' : '' }}>Detritivora</option>
                                                                                    </select>
                                                                                    <label for="klasifikasiHewanSelect">Klasifikasi Hewan</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="form-floating mb-3">
                                                                                    <select class="form-select" id="jenisHewanSelect{{ $item->id_hewan}}" aria-label="Pilih Jenis Hewan" name="jenis_hewan">
                                                                                        <option selected >Pilih Jenis Hewan</option>
                                                                                        <option value="Mamalia" {{ $item->{ 'Jenis hewan'}  == 'Mamalia' ? 'selected' : '' }}>Mamalia</option>
                                                                                        <option value="Reptil" {{ $item->{ 'Jenis hewan'}  == 'Reptil' ? 'selected' : '' }}>Reptil</option>
                                                                                        <option value="Aves" {{ $item->{ 'Jenis hewan'}  == 'Aves' ? 'selected' : '' }}>Aves</option>
                                                                                        <option value="Amfibi" {{ $item->{ 'Jenis hewan'}  == 'Amfibi' ? 'selected' : '' }}>Amfibi</option>
                                                                                        <option value="Ikan" {{ $item->{ 'Jenis hewan'}  == 'Ikan' ? 'selected' : '' }}>Ikan</option>
                                                                                        <option value="Serangga" {{ $item->{ 'Jenis hewan'}  == 'Serangga' ? 'selected' : '' }}>Serangga</option>
                                                                                    </select>
                                                                                    <label for="jenisHewanSelect{{ $item->id_hewan}}">Jenis Hewan</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="form-floating mb-3">
                                                                                    <input type="date" class="form-control" id="tglLahirInput{{ $item->id_hewan}}" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{ $item->{'Tanggal Lahir'} }}">
                                                                                    <label for="tglLahirInput{{ $item->id_hewan}}">Tanggal Lahir</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <div class="form-floating mb-3">
                                                                                    <select class="form-select" id="statusKesehatanSelect{{ $item->id_hewan}}" aria-label="Pilih Status Kesehatan" name="status_kesehatan">
                                                                                        <option selected >Pilih Status Kesehatan</option>
                                                                                        <option value="Sehat" {{ $item->{'Status Kesehatan'} == 'Sehat' ? 'selected' : '' }}>Sehat</option>
                                                                                        <option value="Sakit" {{ $item->{'Status Kesehatan'} == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                                                                                        <option value="Cacat" {{ $item->{'Status Kesehatan'} == 'Cacat' ? 'selected' : '' }}>Cacat</option>
                                                                                    </select>
                                                                                    <label for="statusKesehatanSelect{{ $item->id_hewan}}">Status Kesehatan</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="form-floating mb-3">
                                                                                    <input type="number" class="form-control" id="beratInput{{ $item->id_hewan}}" placeholder="Berat" name="berat" value="{{ $item->{'Berat'}  }}">
                                                                                    <label for="beratInput{{ $item->id_hewan}}">Berat</label>
                                                                                
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="form-floating mb-3">
                                                                                    <select class="form-select" id="jenisPakanSelect{{ $item->id_hewan}}" aria-label="Pilih Jenis Pakan" name="jenis_pakan">
                                                                                        <option selected >Pilih Jenis Pakan</option>
                                                                                        <option value="Rumput" {{ $item->{'Jenis Pakan'} == 'Rumput' ? 'selected' : '' }}>Rumput</option>
                                                                                        <option value="Serbuk Sereal" {{ $item->{'Jenis Pakan'} == 'Serbuk Sereal' ? 'selected' : '' }}>Serbuk Sereal</option>
                                                                                        <option value="Biji-bijian" {{ $item->{'Jenis Pakan'} == 'Biji-bijian' ? 'selected' : '' }}>Biji-bijian</option>
                                                                                        <option value="Daging" {{ $item->{'Jenis Pakan'} == 'Daging' ? 'selected' : '' }}>Daging</option>
                                                                                        <option value="Ikan" {{ $item->{'Jenis Pakan'} == 'Ikan' ? 'selected' : '' }}>Ikan</option>
                                                                                        <option value="Sayuran" {{ $item->{'Jenis Pakan'} == 'Sayuran' ? 'selected' : '' }}>Sayuran</option>
                                                                                        <option value="Buah-buahan" {{ $item->{'Jenis Pakan'} == 'Buah-buahan' ? 'selected' : '' }}>Buah-buahan</option>
                                                                                    </select>
                                                                                    <label for="jenisPakanSelect{{ $item->id_hewan}}">Jenis Pakan</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <div class="form-floating mb-3">
                                                                                    <input type="text" class="form-control" id="kandangInput{{ $item->id_hewan}}" placeholder="Kandang" name="lokasi_kandang" value="{{ $item->{'Lokasi Kandang'} }}">
                                                                                    <label for="kandangInput{{ $item->id_hewan}}">Lokasi Kandang</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="form-floating mb-3">
                                                                                    <input type="text" class="form-control" id="habitatInput{{ $item->id_hewan}}" placeholder="Habitat" name="habitat" value="{{ $item->Habitat }}">
                                                                                    <label for="habitatInput{{ $item->id_hewan}}">Habitat</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="form-floating mb-3">
                                                                                    <input type="text" class="form-control" id="asalInput{{ $item->id_hewan}}" placeholder="Asal" name="asal" value="{{ $item->Asal }}">
                                                                                    <label for="asalInput{{ $item->id_hewan}}">Asal</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <div class="form-floating mb-3">
                                                                                    <input type="text" class="form-control" id="namaPendataInput{{ $item->id_hewan}}" placeholder="Nama Pendata" name="nama_pendata" value="{{ $item->{'Nama Pendata'} }}">
                                                                                    <label for="namaPendataInput{{ $item->id_hewan}}">Nama Pendata</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-floating mb-3">
                                                                                    <select class="form-select" id="statusKonservasiSelect{{ $item->id_hewan}}" aria-label="Pilih Status Konservasi" name="status_konservasi">
                                                                                        <option selected>Pilih Status Konservasi</option>
                                                                                        <option value="Perhatian Rendah (LC)" {{ $item->{'Status Konservasi'} == 'Perhatian Rendah (LC)' ? 'selected' : '' }}>Perhatian Rendah (LC)</option>
                                                                                        <option value="Hampir Terancam (NT)" {{ $item->{'Status Konservasi'} == 'Hampir Terancam (NT)' ? 'selected' : '' }}>Hampir Terancam (NT)</option>
                                                                                        <option value="Rentan (VU)" {{ $item->{'Status Konservasi'} == 'Rentan (VU)' ? 'selected' : '' }}>Rentan (VU)</option>
                                                                                        <option value="Terancam (EN)" {{ $item->{'Status Konservasi'} == 'Terancam (EN)' ? 'selected' : '' }}>Terancam (EN)</option>
                                                                                        <option value="Sangat Terancam (CR)" {{ $item->{'Status Konservasi'} == 'Sangat Terancam (CR)' ? 'selected' : '' }}>Sangat Terancam (CR)</option>
                                                                                        <option value="Punah di Alam Liar (EW)" {{ $item->{'Status Konservasi'} == 'Punah di Alam Liar (EW)' ? 'selected' : '' }}>Punah di Alam Liar (EW)</option>
                                                                                        <option value="Punah (EX)" {{ $item->{'Status Konservasi'} == 'Punah (EX)' ? 'selected' : '' }}>Punah(EX)</option>
                                                                                    </select>
                                                                                    <label for="statusKonservasiSelect{{ $item->id_hewan}}">Status Konservasi</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                      
                                                                        <div class="form-floating mb-3">
                                                                            <textarea class="form-control" placeholder="Deskripsi" id="deskripsiTextarea{{ $item->id_hewan}}" style="height: 100px;" name="deskripsi_hewan">{{ $item->{'Deskripsi Hewan'} }}</textarea>
                                                                            <label for="deskripsiTextarea{{ $item->id_hewan}}">Deskripsi</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" aria-label="Close">Close</button>
                                                                        <button class="btn btn-utama" type="button"  data-bs-target="#EditDatanext2{{ $item->id_hewan}}" data-bs-toggle="modal"  >Save</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                        <!-- Modal Konfirmasi (Modal 2) -->
                                                        <div class="modal fade" id="EditDatanext2{{ $item->id_hewan}}" aria-hidden="true" aria-labelledby="EditDataLabel2{{ $item->id_hewan}}" tabindex="-1">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="EditDataLabel2{{ $item->id_hewan}}">Konfirmasi</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Apakah Anda yakin untuk menyimpan perubahan data?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-warning" type="button"  data-bs-toggle="modal" data-bs-target="#EditData2{{ $item->id_hewan}}" >Kembali</button>
                                                                        <button class="btn btn-utama" type="submit"  id="confirmSaveButton" >Simpan</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
{{-- End modal --}}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            @endforeach
                                <!-- Baris data lainnya -->
                                @if (count($data) <= 0)
                                <tr>
                                    <td class="text-center" colspan="18">No Data found</td>
                                </tr>
                                @endif
                            </tbody>

                        </table>
                    </div>
                        
                      
                    </section>
                    <div class="wrapper-slider">
                  
                        <div class="range-box">
                          <input type="range"  id="tableSlider" />
                        </div>
            </div>

                <!-- End Modal Show -->
                {{-- {{ $data->withQueryString()->links() }} --}}

                <div id="pagination-links">
                    {{$data->onEachSide(4)->links()}}
                    </div>

                <!-- End Bottom -->
            </div>
        </div>


        <!-- main header -->
    </main>
    <!-- End Content -->
</div>





@endsection