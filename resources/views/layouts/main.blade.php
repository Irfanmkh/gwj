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

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
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

    <!-- Script untuk Navbar Tetap di Atas -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.querySelector('.navbar');

            function handleScroll() {
                if (window.scrollY > 50) {
                    navbar.classList.add('fixed', 'top-0', 'shadow-lg', 'bg-white/80', 'backdrop-blur');
                    navbar.classList.remove('w-full');
                    navbar.classList.add('mx-auto', 'container', );
                } else {
                    navbar.classList.remove('fixed', 'top-0', 'shadow-lg', 'bg-white/80', 'backdrop-blur');
                    navbar.classList.remove('container', 'mx-auto');
                    navbar.classList.add('w-full');
                }
            }

            handleScroll();
            window.addEventListener('scroll', handleScroll);
        });
    </script>

    @stack('js')

</body>

</html>
