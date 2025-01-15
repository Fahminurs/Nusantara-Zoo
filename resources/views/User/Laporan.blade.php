@extends('layout.Puser')

@section('konten')

<div class="container-fluid">
    <div class="content-container">
        <div class="row">
            <div class="col">
                <!-- Section 1-->
                <div class="section-title">
                    <h2>Laporkan Keadaan Hewan</h2>
                    <p>Temukan dan laporkan dengan cepat setiap keadaan yang memerlukan perhatian di kebun binatang kami. Dengan fitur ini,
                        Anda dapat dengan mudah mem   beri tahu kami tentang kondisi apa pun yang dialami oleh hewan di kebun binatang Nusantara.</p>
                </div>
            </div>
        </div>
    <!-- Event -->
    <div class="event-content">
        <div class="row justify-content-center">
            <div class="col">
                <!-- Form -->
                <div class="section-title">
                    <h3>Formulir Pelaporan</h3>
                </div>
                <div class="event-content">
                    {{-- Start Form --}}
                    <form id="form">
                        <h1 style="color: green;">Formulir Pelaporan</h1>
                        <div class="mb-3">
                          <label for="Nama" class="form-label">Nama Lengkap Pengunjung</label>
                          <input type="text" class="form-control" id="Namaid" placeholder="Masukkan nama lengkap Pengunjung">
                        </div>
                        <div class="mb-3">
                          <label for="Kontak" class="form-label">Kontak Pengunjung</label>
                          <input type="text" class="form-control" id="Kontakid" placeholder="No Telepon/Email">
                        </div>
                        <div class="mb-3">
                          <label for="Jenis hewan" class="form-label">Nama/jenis Hewan</label>
                          <input type="text" class="form-control" id="Jenis_hewanid" placeholder="Contoh : Gajah">
                        </div>
                        <div class="mb-3">
                          <label for="Kondisi" class="form-label">Kondisi Hewan</label>
                          <select class="form-select" id="Kondisi">
                            <option selected disabled hidden>Pilih Keadaan Hewan</option>
                            <option value="Senang">Senang</option>
                            <option value="Marah">Marah</option>
                            <option value="Kehilangan">Kehilangan</option>
                            <option value="Lapar">Lapar</option>
                            <option value="Sakit">Sakit</option>
                            <option value="Kekerasan terhadap hewan">Kekerasan terhadap hewan</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="Deskripsi" class="form-label">Deskripsi Kondisi Hewan</label>
                          <input type="text" class="form-control" id="Deskripsi" placeholder="Deskripsikan Keadaan Hewan">
                        </div>
                        <div class="mb-3">
                          <label for="formFile" class="form-label">Unggah Bukti</label>
                          <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop">Laporkan</button>
                        </div>
                        <!-- Vertically centered modal -->
                        <!-- Modal -->
                        
                      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Apakah Anda Yakin Ingin Melaporkan?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                              <button id="submit" class="btn btn-success">Iya</button>
                              <!-- Loading  -->
                              <button id="loadingButton" class="btn btn-success d-none" type="button" disabled>
                                <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                                <span role="visually-hidden">Loading...</span>
                                
                              </button>
                            </div> 
                          </div>
                        </div>
                      </div>
                        <!--  -->
                    
                        <!-- Modal berhasil -->
                        <div class="modal fade" id="statusSuccessModal" tabindex="-1" role="dialog" data-bs-backdrop="static"
                          data-bs-keyboard="false">
                          <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                              <div class="modal-body text-center p-lg-4">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                  <circle class="path circle" fill="none" stroke="#198754" stroke-width="6" stroke-miterlimit="10" cx="65.1"
                                    cy="65.1" r="62.1" />
                                  <polyline class="path check" fill="none" stroke="#198754" stroke-width="6" stroke-linecap="round"
                                    stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 " />
                                </svg>
                                <h4 class="text-success mt-3">Data Berhasil Terkirim</h4>
                                <p class="mt-3">Terimasih Atas Laporan yang Telah dikirimkan</p>
                                <button type="button" class="btn btn-sm mt-3 btn-success" data-bs-dismiss="modal">Ok</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal Gagal -->
                        <div class="modal fade" id="statusErrorsModal" tabindex="-1" role="dialog" data-bs-backdrop="static"
                          data-bs-keyboard="false">
                          <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                              <div class="modal-body text-center p-lg-4">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                  <circle class="path circle" fill="none" stroke="#db3646" stroke-width="6" stroke-miterlimit="10" cx="65.1"
                                    cy="65.1" r="62.1" />
                                  <line class="path line" fill="none" stroke="#db3646" stroke-width="6" stroke-linecap="round"
                                    stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8" y2="92.3" />
                                  <line class="path line" fill="none" stroke="#db3646" stroke-width="6" stroke-linecap="round"
                                    stroke-miterlimit="10" x1="95.8" y1="38" X2="34.4" y2="92.2" />
                                </svg>
                                <h4 class="text-success mt-3">Data Gagal Terkirim</h4>
                                <p class="mt-3">Silahkan Kirim Ulang atau Cek Koneksi Internet Anda<br><h2>Terimakasih</h2></p>
                                <button type="button" class="btn btn-lg mt-3 btn-danger " data-bs-dismiss="modal">Ok</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        
                      
                    
                      </form>
                      {{-- End Form --}}
                </div>
            </div>
        </div>
    </div>
</div>
</div>




  <!-- Modal -->

@endsection