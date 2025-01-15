@extends('layout.Puser')

@section('konten')

<div class="container-fluid">
    <div class="content-container">
        <!-- Kategori 1 -->
        <div class="event-content">
            <div class="row justify-content-center">
                <div class="col col_kategori">
                    <!-- Jenis Kelas-->
                    <div class="section-title">
                        <h2>Berdasarkan Kelas</h2>
                        <p>Kelas hewan adalah salah satu tingkatan dalam taksonomi yang mengelompokkan hewan
                            berdasarkan karakteristik umum yang mereka miliki.</p>
                    </div>
                    <div class="event-content">
                        <div class="row">
                            <div class="col-md-2 text-center">
                                <div class="event-item">
                                    <a href="#">
                                    <img src="/User/img/k_mamalia.png" alt="Gambar Kelas Mamalia">
                                    </a>
                                    <div class="event-description">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <div class="event-item">
                                    <a href="#">
                                    <img src="/User/img/k_reptil.png" alt="Gambar Kelas Reptilia">
                                    </a>
                                    <div class="event-description">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <div class="event-item">
                                    <a href="#">
                                    <img src="/User/img/k_ikan.png" alt="Gambar Kelas Ikan">
                                    </a>
                                    <div class="event-description">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <div class="event-item">
                                    <a href="#">
                                    <img src="/User/img/k_burung.png" alt="Gambar Kelas Burung">
                                    </a>
                                    <div class="event-description">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <div class="event-item">
                                    <a href="#">
                                    <img src="/User/img/k_amfibi.png" alt="Gambar Kelas Amfibi">
                                    </a>
                                    <div class="event-description">
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-2 text-left">
                                    <div class="event-item">
                                        <a href="#">
                                        <img src="/User/img/k_serangga.png" alt="Gambar Kelas Serangga">
                                        </a>
                                        <div class="event-description">
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kategori 2 -->
        <div class="event-content">
            <div class="row justify-content-center">
                <div class="col col_kategori">
                    <!-- Jenis makanan -->
                    <div class="section-title">
                        <h2>Berdasarkan Jenis Makanan Hewan</h2>
                    </div>
                    <div class="event-content">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <div class="event-item">
                                    <a href="#">
                                    <img src="/User/img/k_herbivora.png" alt="Gambar Herbivora">
                                    </a>
                                    <div class="event-description">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="event-item">
                                    <a href="#">
                                    <img src="/User/img/k_karnivora.png" alt="Gambar Karnivora">
                                    </a>
                                    <div class="event-description">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="event-item">
                                    <a href="#">
                                    <img src="/User/img/k_omnivora.png" alt="Gambar Omnivora">
                                    </a>
                                    <div class="event-description">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kategori 3 -->
        <div class="event-content">
            <div class="row justify-content-center">
                <div class="col col_kategori">
                    <!-- Status Konservasi -->
                    <div class="section-title">
                        <h2>Berdasarkan Status Konservasi</h2>
                        <p>Status konservasi adalah penilaian terhadap tingkat risiko spesies dalam kelestariannya di alam.
                            Ini mencerminkan seberapa rentan spesies tersebut terhadap ancaman seperti hilangnya habitat, perubahan iklim, perburuan,
                            dan faktor-faktor lain yang mempengaruhi kelangsungan hidup mereka. </p>
                    </div>
                    <div class="event-content">
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <div class="event-item">
                                    <a href="#">
                                    <img src="/User/img/k_terancam-punah.png" alt="Gambar Terancam Punah">
                                    </a>
                                    <div class="event-description">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="event-item">
                                    <a href="#">
                                    <img src="/User/img/k_rentan.png" alt="Gambar Rentan">
                                    </a>
                                    <div class="event-description">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="event-item">
                                    <a href="#">
                                    <img src="/User/img/k_hampir-terancam.png" alt="Gambar Hampir Terancam">
                                    </a>
                                    <div class="event-description">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="event-item">
                                    <a href="#">
                                    <img src="/User/img/k_tidak-terancam.png" alt="Gambar Tidak Terancam">
                                    </a>
                                    <div class="event-description">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection