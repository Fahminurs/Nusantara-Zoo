// Ambil elemen toggle
const toggler = document.getElementById('theme-toggle');

// Fungsi untuk menyetel mode berdasarkan status toggle
function setTheme(isDark) {
    if (isDark) {
        document.body.classList.add('dark');
        toggler.checked = true;
    } else {
        document.body.classList.remove('dark');
        toggler.checked = false;
    }
}

// Event listener untuk toggle
toggler.addEventListener('change', function () {
    const isDark = this.checked;
    setTheme(isDark);
    // Simpan status toggle di localStorage
    localStorage.setItem('darkMode', isDark);
});

// Saat halaman dimuat, periksa status dari localStorage dan setel tema
document.addEventListener('DOMContentLoaded', function () {
    const isDark = JSON.parse(localStorage.getItem('darkMode'));
    setTheme(isDark);
});

// Script lainnya
const sideLinks = document.querySelectorAll('.sidebar .side-menu li a:not(.logout)');

sideLinks.forEach(item => {
    const li = item.parentElement;
    item.addEventListener('click', () => {
        sideLinks.forEach(i => {
            i.parentElement.classList.remove('active');
        })
        li.classList.add('active');
    })
});

const menuBar = document.querySelector('.content nav .bx.bx-menu');
const sideBar = document.querySelector('.sidebar');

document.addEventListener('DOMContentLoaded', function() {
    const sideBar = document.querySelector('.sidebar');
    const menuBar = document.querySelector('.bx-menu');

    function toggleSidebar() {
        sideBar.classList.toggle('close');
    }

    // Pastikan sidebar ditutup saat halaman dimuat
    sideBar.classList.add('close');

    // Tambahkan event listener untuk menuBar
    menuBar.addEventListener('click', toggleSidebar);

    // Otomatis menutup sidebar di mobile (320px - 480px)
    function autoCloseSidebar() {
        const screenWidth = window.innerWidth;
        if (screenWidth >= 300 ) {
            sideBar.classList.add('close');
        } else {
            sideBar.classList.remove('close');
        }
    }

    // Panggil fungsi autoCloseSidebar saat dokumen dimuat dan saat ukuran layar berubah
    document.addEventListener('DOMContentLoaded', autoCloseSidebar);
    window.addEventListener('resize', autoCloseSidebar);
});

const searchBtnTable = document.querySelector('.search-btnTable');
const searchBtnIconTable = document.querySelector('.search-btnTable .bx');
const searchFormTable = document.querySelector('.form-controlTable');

searchBtnTable.addEventListener('click', function (e) {
    if (window.innerWidth < 576) {
        e.preventDefault();
        searchFormTable.classList.toggle('show');
        if (searchFormTable.classList.contains('show')) {
            searchBtnIconTable.classList.replace('bx-search', 'bx-x');
        } else {
            searchBtnIconTable.classList.replace('bx-x', 'bx-search');
        }
    }
});

window.addEventListener('resize', () => {
    if (window.innerWidth < 768) {
        sideBar.classList.add('close');
    } else {
        sideBar.classList.remove('close');
    }
    if (window.innerWidth > 576) {
        // Menambahkan pengecekan untuk menghindari kesalahan jika elemen tidak ditemukan
        if (searchBtnIcon) {
            searchBtnIcon.classList.replace('bx-x', 'bx-search');
        }
        if (searchForm) {
            searchForm.classList.remove('show');
        }
    }
});
