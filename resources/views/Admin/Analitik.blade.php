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
                    <h1>Laporan/Analytic</h1>
                </div>
            </div>

            <div class="grid">

                <div class="chart-container">
                    <canvas id="visitorReportChart"></canvas>
                </div>
                <div class="chart-container">
                    <canvas id="deadAnimalsChart"></canvas>
                </div>
                <div class="chart-container">
                    <canvas id="cobaa"></canvas>
                </div>
            </div>


@endsection