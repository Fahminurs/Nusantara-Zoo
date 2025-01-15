@extends('layout.main')

@section('konten')
<!-- Main Content -->
<div class="content">
    <!-- Navbar -->
    <nav>
        <div class="nav-start">
            <i class='bx bx-menu'></i>
            <!-- Menu icon -->
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
                <h1>Data Acara/Event</h1>
            </div>
        </div>
        <!-- Insights -->
        <ul class="insights">
            <li>
                <i class='bx bx-calendar-check'></i>
                <span class="info">
                    <h3> 2</h3>
                    <p>Jumlah <br> Acara </p>
                </span>
            </li>
            <li>
                <i class='bx bx-line-chart'></i>
                <span class="info">
                    <h3>Pertunjukan Gajah</h3>
                    <p>Terfavorit</p>
                </span>
            </li>
        </ul>
        <!-- End of Insights -->
        <div class="bottom-data">
            <div class="orders">
                <div class="header">
                    <i class='bx bx-receipt'></i>
                    <h3>Pendataan Hewan</h3>
                </div>
                <div class="buttons-container d-flex align-items-center" id="searchInput">
                    <button type="button" class="report" id="add-data-btn" data-bs-target="#Tambahkandata" data-bs-toggle="modal">
                        <i class='bx bxs-cloud-upload'></i>
                        <span>Tambahkan Data</span>
                    </button>
                    <div class="form-controlTable">
                        <input type="search" id="search" style="max-width: 200px;" placeholder="Search...">
                    </div>
                    <button class="search-btnTable" type="submit">
                        <i class='bx bx-search'></i>
                    </button>
                </div>

                {{-- Modal Form --}}
                <form id="dataForm" action="{{ url('/Admin/Acara/Tambah') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Modal Tambahkan Data -->
                    <div class="modal fade" id="Tambahkandata" aria-hidden="true" aria-labelledby="TambahkandataLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="TambahkandataLabel">Tambahkan Data Acara</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="input_namaAcara" name="Nama_Acara" placeholder="Nama Acara">
                                                <label for="input_namaAcara">Nama Acara</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="lokasiInput" name="Lokasi" placeholder="Lokasi">
                                                <label for="lokasiInput">Lokasi</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-floating mb-3">
                                                <input type="datetime-local" class="form-control" id="waktuMulaiInput" name="Waktu_Mulai" placeholder="Waktu Mulai">
                                                <label for="waktuMulaiInput">Waktu Mulai</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating mb-3">
                                                <input type="datetime-local" class="form-control" id="waktuBerakhirInput" name="Waktu_Berakhir" placeholder="Waktu Berakhir">
                                                <label for="waktuBerakhirInput">Waktu Berakhir</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="namaPendataInput" name="Nama_Pendata" placeholder="Nama Pendata">
                                                <label for="namaPendataInput">Nama Pendata</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating mb-3">
                                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="foto">
                                                <label for="formFileSm" class="form-label p-2">Masukkan Foto</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" placeholder="Deskripsi" id="deskripsiTextarea" name="Deskripsi_Acara" style="height: 100px;"></textarea>
                                            <label for="deskripsiTextarea">Deskripsi Acara</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-utama" data-bs-target="#Tambahkandata2" data-bs-toggle="modal" type="button">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Konfirmasi -->
                    <div class="modal fade" id="Tambahkandata2" aria-hidden="true" aria-labelledby="TambahkandataLabel2" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="TambahkandataLabel2">Konfirmasi</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">Apakah Anda yakin untuk Menambahkan Data?</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-bs-target="#Tambahkandata" data-bs-toggle="modal">Kembali</button>
                                    <button class="btn btn-utama" type="submit" data-bs-dismiss="modal" id="confirmSaveButton">Simpan</button>
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
                                        <th>Nama Acara<span class="icon-arrow">&UpArrow;</span></th>
                                        <th>Lokasi<span class="icon-arrow">&UpArrow;</span></th>
                                        <th>Waktu Mulai<span class="icon-arrow">&UpArrow;</span></th>
                                        <th>Waktu Berakhir<span class="icon-arrow">&UpArrow;</span></th>
                                        <th>Deskripsi<span class="icon-arrow">&UpArrow;</span></th>
                                        <th>Nama Pendata<span class="icon-arrow">&UpArrow;</span></th>
                                        <th>Tanggal Masuk<span class="icon-arrow">&UpArrow;</span></th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                            <?php $i = $data->firstItem() ?>
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>
                                                        <a href="{{ asset('fotoAcara/' . $item->Foto) }}" data-lightbox="models" data-title="{{ $item->Nama_Acara }}">
                                                            <img src="{{ asset('fotoAcara/' . $item->Foto) }}"  width="50">
                                                        </a>{{ $item->{'Nama_Acara'} }}
                                                    </td>
                                                    <td>{{ $item->{'Lokasi'} }}</td>
                                                    <td>{{ $item->{'Waktu_Mulai'} }}</td>
                                                    <td>{{ $item->{'Waktu_Berakhir'} }}</td>
                                                    <td>{{ $item->{'Deskripsi_Acara'} }}</td>
                                                    <td>{{ $item->{'Nama_Pendata'} }}</td>
                                                    <td>{{ $item->{'Tanggal_Data_Masuk'} }}</td>
                                                    <td style="text-align: center;">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-flex" role="group" aria-label="Basic example">
                                                                <form id="deleteForm{{ $item->id_acara}}" action="{{ route('acara.destroy', $item->id_acara) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button" class="btn btn-secondary btn-sm" onclick="confirmDelete('{{ $item->id_acara }}')" title="Delete"><i class='bx bx-trash icon-sm'></i></button>
                                                                </form>
                                                                <button type="button" class="btn btn-secondary btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#EditData{{ $item->id_acara}}" title="Edit"><i class='bx bx-edit icon-sm'></i></button>
                                                            {{-- Editt --}}
                                                            <form id="dataForm{{ $item->id_acara }}" action="{{ url('/Admin/Acara/update/' . $item->id_acara) }}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal fade" id="EditData{{ $item->id_acara }}" aria-hidden="true" aria-labelledby="EditDataLabel{{ $item->id_acara }}" tabindex="-1">
                                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h1 class="modal-title fs-5" id="EditDataLabel{{ $item->id_acara }}">Edit Data Acara</h1>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row d-flex justify-content-center">
                                                                                    @if($item->Foto)
                                                                                    <div style="margin-left: 10px; width: 50%; height: 50%; border-radius: 5px; margin-bottom: 7px;">
                                                                                        <a href="{{ asset('fotoAcara/' . $item->Foto) }}" data-lightbox="models" data-title="{{ $item->Foto }}">
                                                                                            <img src="{{ asset('fotoAcara/' . $item->Foto) }}" class="img-thumbnail" alt="Foto Acara" style="border-radius: 10px; width: 100%; height: 100%; object-fit: cover;">
                                                                                        </a>
                                                                                    </div>
                                                                                    @else
                                                                                    <p class="text-muted text-center">Tidak ada foto untuk ditampilkan</p>
                                                                                    @endif
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <div class="form-floating mb-3">
                                                                                            <input type="text" class="form-control" id="Edit_namaAcara{{ $item->id_acara }}" name="Nama_Acara" placeholder="Nama Acara" value="{{ $item->Nama_Acara }}">
                                                                                            <label for="Edit_namaAcara{{ $item->id_acara }}">Nama Acara</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <div class="form-floating mb-3">
                                                                                            <input type="text" class="form-control" id="lokasiEdit{{ $item->id_acara }}" name="Lokasi" placeholder="Lokasi" value="{{ $item->Lokasi }}">
                                                                                            <label for="lokasiEdit{{ $item->id_acara }}">Lokasi</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <div class="form-floating mb-3">
                                                                                            <input type="datetime-local" class="form-control" id="waktuMulaiEdit{{ $item->id_acara }}" name="Waktu_Mulai" placeholder="Waktu Mulai" value="{{ \Carbon\Carbon::parse($item->Waktu_Mulai)->format('Y-m-d\TH:i') }}">
                                                                                            <label for="waktuMulaiEdit{{ $item->id_acara }}">Waktu Mulai</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <div class="form-floating mb-3">
                                                                                            <input type="datetime-local" class="form-control" id="waktuBerakhirEdit{{ $item->id_acara }}" name="Waktu_Berakhir" placeholder="Waktu Berakhir" value="{{ \Carbon\Carbon::parse($item->Waktu_Berakhir)->format('Y-m-d\TH:i') }}">
                                                                                            <label for="waktuBerakhirEdit{{ $item->id_acara }}">Waktu Berakhir</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <div class="form-floating mb-3">
                                                                                            <input type="text" class="form-control" id="namaPendataEdit{{ $item->id_acara }}" name="Nama_Pendata" placeholder="Nama Pendata" value="{{ $item->Nama_Pendata }}">
                                                                                            <label for="namaPendataEdit{{ $item->id_acara }}">Nama Pendata</label>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-sm-6">
                                                                                        <div class="form-floating mb-3">
                                                                                            <input class="form-control form-control-sm" id="formFileSm{{ $item->id_acara }}" type="file" name="foto" value= "{{ $item->Foto }}">
                                                                                            <label for="formFileSm{{ $item->id_acara }}" class="form-label p-2">Masukkan Foto</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="form-floating mb-3">
                                                                                        <textarea class="form-control" placeholder="Deskripsi" id="deskripsiTextarea_Edit{{ $item->id_acara }}" name="Deskripsi_Acara" style="height: 100px;">{{ $item->Deskripsi_Acara }}</textarea>
                                                                                        <label for="deskripsiTextarea_Edit{{ $item->id_acara }}">Deskripsi Acara</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                                                                                <button class="btn btn-utama"type="button" data-bs-target="#editdata{{ $item->id_acara }}" data-bs-toggle="modal">Save</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            
                                                            <!-- Modal Konfirmasi -->
                                                            <div class="modal fade" id="editdata{{ $item->id_acara }}" aria-hidden="true" aria-labelledby="editdatalabel{{ $item->id_acara }}" tabindex="-1">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h1 class="modal-title fs-5" id="editdata{{ $item->id_acara }}">Konfirmasi</h1>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">Apakah Anda yakin untuk Menyimpanee Perubahan Data?</div>
                                                                        <div class="modal-footer">
                                                                            <button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#EditData{{ $item->id_acara}}" title="Edit">Kembali</button>
                                                                            <button class="btn btn-utama" type="submit" id="confirmSaveButton">Simpan</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                            {{-- End Modal --}}
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php $i++ ?>
                                            @endforeach
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

