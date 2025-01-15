@extends('layout.Puser')

@section('konten')


<div class="container-fluid">
    <div class="content-container">
        <div class="row">
            <div class="col">
                <!-- Artikel Pertama -->
                <div class="section-title">
                    <h2>Semua Event Kebun Binatang</h2>
                </div>
                <div class="article-content">
                    <!-- Event Pertama -->
                    <div class="article-item">
                        <div class="article-image">
                            <img src="/User/img/event_1.png" alt="Gambar Event 1">
                        </div>
                        <div class="article-text">
                            <h3>Pertunjukan Hewan Spesial</h3>
                            <p>Nikmati pertunjukan istimewa dari berbagai hewan di kebun binatang, termasuk atraksi lompatan, trik-trik unik, dan banyak lagi!</p>
                            <p class="detail-event">
                                <img src="/User/img/location.png" alt="" width="30" height="30" class="d-inline-block align-text-center">
                                Panggung Utama Kebun Binatang Nusantara
                            </p>
                            <p class="detail-event">
                                <img src="/User/img/calendar.png" alt="" width="30" height="30" class="d-inline-block align-text-center">
                                Setiap hari Sabtu dan Minggu
                            </p>
                            <p class="detail-event">
                                <img src="/User/img/clocktime.png" alt="" width="30" height="30" class="d-inline-block align-text-center">
                                10:00 - 11:30 Pagi
                            </p>
                        </div>
                    </div>

                    <!-- Event Kedua -->
                    <div class="article-item">
                        <div class="article-image">
                            <img src="/User/img/event_2.png" alt="Gambar Event 2">
                        </div>
                        <div class="article-text">
                            <h3>Pertunjukan Pendidikan: Melindungi Alam</h3>
                            <p>Nikmati pertunjukan istimewa dari berbagai hewan di kebun binatang, termasuk atraksi lompatan, trik-trik unik, dan banyak lagi!</p>
                            <p class="detail-event">
                                <img src="/User/img/location.png" alt="" width="30" height="30" class="d-inline-block align-text-center">
                                Gedung Konservasi Kebun Binatang Nusantara
                            </p>
                            <p class="detail-event">
                                <img src="/User/img/calendar.png" alt="" width="30" height="30" class="d-inline-block align-text-center">
                                Setiap hari Senin
                            </p>
                            <p class="detail-event">
                                <img src="/User/img/clocktime.png" alt="" width="30" height="30" class="d-inline-block align-text-center">
                                11:00 - 12:00 siang
                            </p>
                        </div>
                    </div>

                    <!-- Event ketiga -->
                    <div class="article-item">
                        <div class="article-image">
                            <img src="/User/img/event_3.png" alt="Gambar Event 3">
                        </div>
                        <div class="article-text">
                            <h3>Pesta Perayaan Ulang Tahun Kebun Binatang</h3>
                            <p>Nikmati pertunjukan istimewa dari berbagai hewan di kebun binatang, termasuk atraksi lompatan, trik-trik unik, dan banyak lagi!</p>
                            <p class="detail-event">
                                <img src="/User/img/location.png" alt="" width="30" height="30" class="d-inline-block align-text-center">
                                Area Pesta Kebun Binatang Nusantara
                            </p>
                            <p class="detail-event">
                                <img src="/User/img/calendar.png" alt="" width="30" height="30" class="d-inline-block align-text-center">
                                07 Mei 2024
                            </p>
                            <p class="detail-event">
                                <img src="/User/img/clocktime.png" alt="" width="30" height="30" class="d-inline-block align-text-center">
                                09:00 - 17:00
                            </p>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-lg" onclick="location.href='Beranda'">Kembali ke Beranda</button>
                </div>
            </div>
        </div>
</div>
</div>
    
@endsection