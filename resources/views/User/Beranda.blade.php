@extends('layout.Puser')

@section('konten')

<div class="container-fluid">
        <div class="content-container">
            <div class="row">
                <div class="col">
                    <!-- Artikel Pertama -->
                    <div class="section-title">
                        <h2>Artikel Terbaru</h2>
                    </div>
                    <div class="article-content">
                        <div class="article-item">
                            <div class="article-image">
                                <img src="/User/img/article_1.png" alt="Gambar Artikel 1">
                            </div>
                            <div class="article-text">
                                <h3>Mengenal Lebih Dekat: Interaksi Langka antara Pengunjung dan Hewan di Kebun Binatang</h3>
                                <p>Telusuri kisah menginspirasi dari para pengunjung yang berbagi momen pribadi yang istimewa dengan hewan-hewan langka di kebun binatang.</p>
                                <a href="#" class="read-more-link">Baca Lebih Lanjut</a>
                            </div>
                        </div>

                        <div class="article-item">
                            <div class="article-image">
                                <img src="/User/img/article_2.png" alt="Gambar Artikel 2">
                            </div>
                            <div class="article-text">
                                <h3>Sambut Hari Perayaan ke 5 tahun, Kebun Binatang Nusantara Rencanakan Acara Spesial untuk Pengunjung</h3>
                                <p>Dalam rangka merayakan perayaan ini, kebun binatang telah merencanakan acara-acara khusus yang tak terlupakan untuk pengunjung dari segala usia.</p>
                                <a href="#" class="read-more-link">Baca Lebih Lanjut</a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg" onclick="location.href='Semua_artikel'">Telusuri Lebih Banyak</button>
                    </div>
                </div>
            </div>
        <!-- Event -->
        <div class="event-content">
            <div class="row justify-content-center">
                <div class="col">
                    <!-- Event -->
                    <div class="section-title">
                        <h2>Event Kebun Binatang</h2>
                    </div>
                    <div class="event-content">
                        <div class="row">
                            <div class="col-md-4 text-center"> <!-- Menambahkan text-center di sini -->
                                <div class="event-item">
                                    <img src="/User/img/event_1.png" alt="Gambar Event 1">
                                    <div class="event-description">
                                        <h3>Pertunjukan Hewan Spesial</h3>
                                        <p>Deskripsi event 1.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center"> <!-- Menambahkan text-center di sini -->
                                <div class="event-item">
                                    <img src="/User/img/event_2.png" alt="Gambar Event 2">
                                    <div class="event-description">
                                        <h3>Pertunjukan Pendidikan: Melindungi Alam</h3>
                                        <p>Deskripsi event 2.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center"> <!-- Menambahkan text-center di sini -->
                                <div class="event-item">
                                    <img src="/User/img/event_3.png" alt="Gambar Event 3">
                                    <div class="event-description">
                                        <h3>Pesta Perayaan Kebun Binatang Nusantara</h3>
                                        <p>Deskripsi event 3.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg" onclick="location.href='/Semua_event'">Lihat Detail Event</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection