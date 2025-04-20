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
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">


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

    @include('partials.bubble')

    <!-- Footer -->
    @include('partials.footer')



    @stack('js')

</body>

</html>
