document.addEventListener('DOMContentLoaded', function() {
    // Data untuk grafik

    const laporanPengunjung = {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        datasets: [{
            label: 'Laporan Pengunjung',
            data: [10, 7, 9, 5, 8, 3, 4, 2, 1, 1,1,1],
            backgroundColor: 'rgba(255, 159, 64, 0.2)',
            borderColor: 'rgba(255, 159, 64, 1)',
            borderWidth: 1,
            fill: 'start'
        }]
    };

    const hewanMati = {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        datasets: [{
            label: 'Hewan Mati',
            data: [10, 7, 9, 5, 8, 3, 4, 2, 1, 1,1,1],
            backgroundColor: 'rgba(255, 99, 132, 0.5)', 
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    };

    // Opsi grafik
    
    const opsi = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: 'top',
            },
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    // Membuat grafik

    const visitorReportChart = new Chart(
        document.getElementById('visitorReportChart'),
        {
            type: 'line',
            data: laporanPengunjung,
            options: opsi
        }
    );

    const deadAnimalsChart = new Chart(
        document.getElementById('deadAnimalsChart'),
        {
            type: 'bar',
            data: hewanMati,
            options: opsi
        }
    );

    const cobaaChart = new Chart(
        document.getElementById("cobaa"),
        {
            type: "line",
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                datasets: [{
                    label: 'Pengunjung',
                    backgroundColor: ["rgba(255, 99, 132, 0.5)"],
                    borderColor: ["rgb(255, 99, 132)"],
                    data: [10, 7, 9, 5, 8, 3, 4, 2, 1, 1,1,1],
                    fill: 'start'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                animation: {
                    x: {
                        duration: 5000,
                        from: 0
                    },
                    y: {
                        duration: 3000,
                        from: 500
                    }
                },
                plugins: {
                    legend: {
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        }
    );
});