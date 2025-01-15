<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
        <!--Logo title-->
        <link rel="icon" href="/User/img/logo_putih.png" type="png" sizes="18x18">
    <!-- Bootstrap dan CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/User/style/cards-gallery.css">
    <link rel="stylesheet" href="/User/style/style.css">  
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="Beranda">
                <img src="/User/img/logo.png" alt="Logo" width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Beranda' ? 'active' : '' }}" href="Beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ $title === 'Kategori' ? 'active' : '' }}" href="Kategori">Kategori Hewan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ $title === 'Peta' ? 'active' : '' }}" href="Peta">Peta Kebun Binatang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Laporan' ? 'active' : '' }}" aria-current="page" href="Laporan">Laporkan Keadaan Hewan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a id="logout-link" class="dropdown-item" href="/Pengunjung/logout">Logout</a>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    
    <div class="container-fluid background-container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Selamat datang,  {{ session('pengunjung_name') }}!</h1>
                    <h3>Jelajahi
                        Kebun Binatang
                        Nusantara</h3>
                </div>
            </div>
        </div>
    </div>



@yield('konten')
@include('Komponen.pesan')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
crossorigin="anonymous"></script>
<script src="/User/style/main.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
