document.addEventListener('DOMContentLoaded', function () {
            const nav = document.querySelector('nav');

            // Tambahkan event listener untuk mengubah latar belakang saat di-scroll
            window.addEventListener('scroll', function () {
                if (window.scrollY > 0) {
                    nav.classList.add('scroll-nav'); // Tambahkan class untuk mengubah latar belakang
                } else {
                    nav.classList.remove('scroll-nav'); // Hapus class untuk kembali ke latar belakang transparan
                }
            });
        });