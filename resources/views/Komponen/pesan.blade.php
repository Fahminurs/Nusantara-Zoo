<script>
    // Event listener untuk tombol konfirmasi simpan
    document.getElementById('confirmSaveButton').addEventListener('click', function() {
        if (validateForm()) {
            document.getElementById('dataForm').submit();
        }
    });

    // Fungsi untuk validasi form
    function validateForm() {
        const formElements = document.forms['dataForm'].elements;
        for (let i = 0; i < formElements.length; i++) {
            if (formElements[i].type === 'text' || formElements[i].type === 'textarea') {
                if (containsMaliciousCode(formElements[i].value)) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Terdeteksi serangan xss',
                        text: 'Input tidak boleh mengandung script atau elemen berbahaya.',
                    });
                    return false;
                }
            }
        }
        return true;
    }

    // Fungsi untuk mendeteksi kode berbahaya
    function containsMaliciousCode(input) {
        const xssPattern = /<\s*script\b[^>]*>(.*?)<\s*\/\s*script\s*>/gi;
        return xssPattern.test(input);
    }

    function confirmDelete(itemId) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda tidak akan dapat mengembalikan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#0E8F02',
            cancelButtonColor: '#30afd6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm' + itemId).submit();
            }
        });
    }
    // Menampilkan kesalahan dari server jika ada
    document.addEventListener('DOMContentLoaded', function() {
        @if ($errors->any())
            Swal.fire({
                icon: 'error',
                title: 'Terjadi Kesalahan',
                html: '<div style="text-align: left;"><ul style="padding-left: 20px;">' + 
                        @foreach ($errors->all() as $item)
                            '<li>🟢 {{ $item }}</li>' + 
                        @endforeach
                      '</ul></div>',
            });
        @endif

        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('success') }}',
            });
        @endif
    });
</script>
