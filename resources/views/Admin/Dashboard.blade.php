
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
                <h1>Dashboard</h1>
            </div>
        </div>
        <div class="grid">
            <div class="Dashboard-container">

                <img src="images/Qr-code/Group Laporan Pengunjung.png" alt="" >
                <h2>Group Pelaporan Hewan</h2>
                <div class="wrapper">
                    <div class="password-box">
                      <input type="text" id="copy-input" value="https://t.me/+oEAHcqB7aogyNGJl" disabled />
                      <i class="uil uil-copy copy-icon" id="copy-icon"></i>
                    </div>
              
              
                  </div>
            </div>
        </div>
    </main>
    <!-- End of Main Content -->
</div>


@endsection