<!DOCTYPE html>
@if (session()->get('locale') == 'en')
    <html lang="en">
@elseif(session()->get('locale') == 'id')
    <html lang="id">
@elseif(session()->get('locale') == 'ar')
    <html lang="ar">
@elseif(session()->get('locale') == 'kr')
    <html lang="kr">
@endif

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>IRFAN</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Iceberg&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('css')
</head>

<body class="bg-white reveal-body">
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Konten Utama -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('partials.footer')

    <!-- SCRIPT -->
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mengambil referensi elemen-elemen yang digunakan dalam navbar
            const navbar = document.getElementById('navbar'); // Navbar utama
            const wrapper = document.getElementById(
                'navbar-wrapper'); // Wrapper untuk navbar yang berisi brand dan menu
            const brand = document.getElementById('brand'); // Elemen brand yang berisi nama
            const fullName = brand.querySelector('.full-name'); // Nama panjang yang ditampilkan saat tidak scroll
            const shortName = brand.querySelector('.short-name'); // Nama pendek yang ditampilkan saat scroll
            const menu = document.getElementById('menu'); // Menu navigasi

            let isScrolled = false; // Variabel untuk mendeteksi apakah sudah scroll atau belum

            // Menambahkan event listener pada window untuk mendeteksi scroll
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50 && !isScrolled) {
                    // Jika scroll sudah lebih dari 50px, navbar mengecil dan pindah ke tengah
                    navbar.classList.add('bg-transparent');
                    // Memberikan efek background dan blur pada navbar
                    wrapper.classList.remove('px-8', 'py-6',
                        'max-w-full', 'shadow'); // Menghapus padding dan lebar penuh
                    wrapper.classList.add('py-3', 'justify-center', 'max-w-lg',
                        'scale-90'
                    ); // Mengatur padding lebih kecil dan memperkecil ukuran wrapper, serta menyejajarkan ke tengah

                    brand.classList.remove('translate-center');
                    brand.classList.add(
                        'translate-left');

                    fullName.classList.add('hidden'); // Menyembunyikan nama panjang
                    shortName.classList.remove('hidden'); // Menampilkan nama pendek

                    menu.classList.add('hidden'); // Menyembunyikan menu saat navbar mengecil

                    isScrolled = true; // Menandakan bahwa sudah melakukan scroll
                } else if (window.scrollY <= 50 && isScrolled) {
                    // Jika scroll kembali ke atas (kurang dari atau sama dengan 50px)
                    navbar.classList.remove('backdrop-blur'); // Menghapus efek background dan blur
                    wrapper.classList.add('px-8', 'py-6',
                        'justify-between'
                    ); // Mengembalikan padding dan menjajarkan elemen ke kiri dan kanan
                    wrapper.classList.remove('py-3', 'justify-center',
                        'max-w-lg'); // Menghapus pengaturan padding dan lebar serta posisi tengah

                    fullName.classList.remove('hidden'); // Menampilkan nama panjang
                    shortName.classList.add('hidden'); // Menyembunyikan nama pendek

                    menu.classList.remove('hidden'); // Menampilkan menu saat kembali ke atas

                    isScrolled = false; // Menandakan bahwa scroll sudah kembali ke atas
                }
            });

            // Saat hover pada brand (dalam posisi scroll), tampilkan layout semula
            wrapper.addEventListener('mouseenter', () => {
                if (isScrolled) {
                    // Mengubah posisi wrapper kembali ke posisi semula
                    wrapper.classList.add(
                        'justify-between'
                    ); // Mengembalikan padding dan menjajarkan elemen ke kiri dan kanan
                    wrapper.classList.remove('justify-center',
                        'max-w-lg'); // Menghapus pengaturan padding dan lebar serta posisi tengah
                    brand.classList.add('brand-expanded');

                    // Mengubah lebar brand saat hover
                    fullName.classList.remove('hidden'); // Menampilkan nama panjang
                    shortName.classList.add('hidden'); // Menyembunyikan nama pendek

                    menu.classList.remove('hidden'); // Menampilkan menu
                }
            });

            // Saat hover keluar dari brand, kembali ke posisi scroll
            wrapper.addEventListener('mouseleave', () => {
                if (isScrolled) {
                    // Tambahkan animasi transform
                    wrapper.classList.add('justify-center');
                    wrapper.classList.remove('justify-between');
                    brand.style.width = ''; // Mengembalikan lebar ke ukuran semula
                    brand.classList.remove('translate-left');
                    brand.classList.add('translate-center');

                    fullName.classList.add('hidden');
                    shortName.classList.remove('hidden');
                    menu.classList.add('hidden');
                }
            });
        });
    </script> --}}

    @stack('js')

</body>

</html>
