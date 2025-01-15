<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        ol, ul {
            padding-left: 0;
        }
        
    </style>
    <link rel="stylesheet" href="/Admin/Style/css/style.css">
    <title>Nusantara Zoo</title>
    <link rel="stylesheet" type="text/css" href="/Admin/Style/css/table.css">
    <link rel="stylesheet" type="text/css" href="/Admin/Style/css/Dasboard.css">
    <link rel="stylesheet" type="text/css" href="/Admin/Style/css/Analitic.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="/Admin/Style/css/lightbox.css">
    <link rel="stylesheet" href="/Admin/Style/css/lightbox.min.css">
    <link rel="stylesheet" href="/Admin/Style/css/Paginasi.css">

        <!-- Unicon Icons -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="" class="logo">
            <i class='bx bx-world'></i>
            <div class="logo-name"><span>NTR</span>Zoo</div>
        </a>
        <ul class="side-menu">
            <li class="{{ $title === 'Dashboard' ? 'active' : '' }}">
                <a href="Dashboard"><i class='bx bxs-dashboard'></i>Dashboard</a>
            </li>
            <li class="{{ $title === 'Hewan' ? 'active' : '' }}"><a href="Hewan"
                ><i class='bx bx-store-alt'></i>Hewan</a>
            </li>
            <li class="{{ $title === 'Analitik' ? 'active' : '' }}"><a href="Analitik"><i class='bx bx-analyse'></i>Analytic</a></li>
            <li class="{{ $title === 'Acara' ? 'active' : '' }}" ><a href="Acara"><i class='bx bx-message-square-dots'></i>Acara</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="logout" class="logout">
                    <i class='bx bx-log-out-circle'></i>
                    Logout  
                </a>
            </li>
        </ul>
    </div>
    <!-- End of Sidebar -->
    @php
    $title = isset($title) ? $title : ''; // Set default value untuk $title
@endphp
    @yield('konten')
    @include('Komponen.pesan')




    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>

    <script src="/Admin/Style/Javascript/index.js"></script>
    <script src="/Admin/Style/Javascript/Analitic.js"></script>
    <script src="/Admin/Style/Javascript/table.js"></script>
    <script src="/Admin/Style/Javascript/lightbox-plus-jquery.js"></script>


    {{--  --}}
  
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const addDataBtn = document.getElementById('add-data-btn');
            const addDataIcon = addDataBtn.querySelector('i');
            const addDataText = addDataBtn.querySelector('span');

            function updateAddDataBtn() {
                if (window.innerWidth <= 576) {
                    addDataBtn.classList.add('icon-only');
                    addDataIcon.style.fontSize = '24px'; // Adjust the icon size if needed
                    addDataText.style.display = 'none'; // Hide the text
                } else {
                    addDataBtn.classList.remove('icon-only');
                    addDataIcon.style.fontSize = ''; // Reset the icon size
                    addDataText.style.display = ''; // Show the text
                }
            }

            // Update button on page load
            updateAddDataBtn();

            // Update button on window resize
            window.addEventListener('resize', updateAddDataBtn);
        });
    </script>

    <script>
        document.getElementById('copy-icon').addEventListener('click', function() {
            // Dapatkan elemen input
            var copyInput = document.getElementById('copy-input');
    
            // Pilih teks di dalam input
            copyInput.select();
            copyInput.setSelectionRange(0, 99999); // Untuk perangkat mobile


   // Copy the text inside the text field
  navigator.clipboard.writeText(copyInput.value);
    
            // // Salin teks ke clipboard
            // document.execCommand('copy');
    
            // Tampilkan notifikasi menggunakan SweetAlert
            Swal.fire({
                icon: 'success',
                title: 'Copied!',
                text: 'The link has been copied to your clipboard.',
                showConfirmButton: false,
                timer: 1500
            });
        });
    </script>
    <script>
        const tableBody = document.querySelector('.table__body');
        const slider = document.getElementById('tableSlider');
    
        // Function to update table scroll based on slider position
        function updateTableScroll() {
            tableBody.scrollLeft = (tableBody.scrollWidth - tableBody.clientWidth) * (slider.value / 100);
        }
    
        // Function to update slider position based on table scroll
        function updateSlider() {
            const scrollPercentage = (tableBody.scrollLeft / (tableBody.scrollWidth - tableBody.clientWidth)) * 100;
            slider.value = scrollPercentage;
        }
    
        // Event listener for slider input
        slider.addEventListener('input', updateTableScroll);
    
        // Event listener for table scroll
        tableBody.addEventListener('scroll', updateSlider);
    
        // Set initial table scroll to match slider position
        // Ensure slider starts at 0 and table is scrolled to the start
        slider.value = 0;
        tableBody.scrollLeft = 0;
    </script>
    
    

    
    
</body>

</html>

