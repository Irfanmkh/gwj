@extends('layouts.main')

@section('content')
    {{-- Jumbotron --}}
    <section id="jumbotron"
        class="h-screen flex items-center justify-center text-white pt-20 bg-cover bg-center section-bg md:section-bg">
        <div class="container mx-auto text-center px-4 max-w-7xl font-display">
            <h1 class="text-2xl md:text-5xl font-bold mb-4">
                Software Engineer <br>
                E-Commerce & Marketplace Specialist <br>
                Graphic Designer
            </h1>

            <div x-data="{
                greeting() {
                    const hours = new Date().getHours();
                    if (hours >= 5 && hours < 12) return 'Selamat Pagi';
                    else if (hours >= 12 && hours < 18) return 'Selamat Siang';
                    else return 'Selamat Malam';
                }
            }">
                <p class="text-sm md:text-xl leading-relaxed max-w-3xl mx-auto py-3 md:py-8 text-justify">
                    <span
                        x-text="`${greeting()}, selamat datang di web saya. Saya Irfan, seorang backend developer yang kembali menekuni pemrograman setelah sempat vakum karena berkarier di sektor e-commerce dan marketplace. Selain itu, saya juga memiliki keahlian di bidang desain grafis.`">
                    </span>
                </p>
            </div>

            <!-- Stats (GitHub, Instagram, etc.) -->
            <div class="stats stats-horizontal lg:stats-horizontal shadow bg-white/50 backdrop-blur mt-3">
                <!-- GitHub -->
                <div class="stat py-0 md:py-2">
                    <div class="stat-value">
                        <a href="https://github.com/yourusername" target="_blank" class="text-blue-600 hover:text-blue-800">
                            <i class="fab fa-github text-3xl"></i>
                            <span class="hidden md:inline">GitHub</span>
                        </a>
                    </div>
                </div>

                <!-- Instagram -->
                <div class="stat py-0 md:py-2">
                    <div class="stat-value">
                        <a href="https://instagram.com/yourusername" target="_blank"
                            class="text-pink-600 hover:text-pink-800">
                            <i class="fab fa-instagram text-3xl"></i>
                            <span class="hidden md:inline">Instagram</span>
                        </a>
                    </div>
                </div>

                <!-- Email -->
                <div class="stat py-0 md:py-2">
                    <div class="stat-value">
                        <a href="mailto:your-email@example.com" class="text-gray-600 hover:text-gray-800">
                            <i class="fas fa-envelope text-3xl"></i>
                            <span class="hidden md:inline">Email</span>
                        </a>
                    </div>
                </div>

                <!-- LinkedIn -->
                <div class="stat py-0 md:py-2">
                    <div class="stat-value">
                        <a href="https://www.linkedin.com/in/yourusername" target="_blank"
                            class="text-blue-700 hover:text-blue-900">
                            <i class="fab fa-linkedin text-3xl"></i>
                            <span class="hidden md:inline">LinkedIn</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section berikutnya (Graph Contributions) --}}
    <section id="contribution-graph" class="pb-8 section-bg">
        <div class="container mx-auto text-center pb-8">
            <!-- Title -->
            <h2
                class="font-display text-2xl md:text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-500 to-pink-500 mb-8 animate-pulse">
                GitHub Contribution Graph
            </h2>

            <!-- GitHub Streak Image -->
            <div class="mb-8 max-w-4xl mx-auto transition-all duration-300">
                <img src="https://github-readme-streak-stats.herokuapp.com/?user=irfanmkh" alt="GitHub Streak"
                    class="w-full max-w-xs sm:max-w-md md:max-w-lg lg:max-w-2xl mx-auto rounded-lg shadow-md hover:scale-105 transition-all duration-300 transform" />
            </div>


            <!-- Optional Subtitle -->
            <p class="text-sm md:text-lg text-gray-300 mb-8 max-w-xl mx-auto">
                Here you can see my GitHub streak, showing my daily contributions to open-source projects. Feel free to
                check out my work!
            </p>

            <!-- Animation Section (Optional) -->
            <div class="animate-bounce text-xl text-gray-400 mt-8">
                <span>🚀 Keep contributing, keep growing! 💻</span>
            </div>
        </div>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-2 gap-6 p-4 container mx-auto bg-black/50 backdrop-blur-2xl rounded-2xl ">
        <!-- Kolom Full-time -->
        <div class="border-r-8 px-4 mx-auto ">
            <h2 class="text-2xl md:text-5xl font-bold mb-4 font-display text-center">Full-time</h2>

            <ol class="border-s border-neutral-300 dark:border-neutral-500">
                <!--First item-->
                <li>
                    <div class="flex-start flex items-center pt-3">
                        <div class="-ms-[5px] me-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500"></div>
                        <h4 class="text-xl md:text-3xl font-Bold font-display">CV. Carolina Unggul Persada</h4>

                    </div>
                    <div class="mb-6 ms-4">
                        <h4 class="text-xl md:text-2xl font-semibold">Marketplace & E-Commerce Specialist</h4>
                        <p class="text-xl md:text-2xl font-semibold text-neutral-500 dark:text-neutral-300">
                            Desember 2023 - Sekarang
                        </p>
                        <p class="mb-3 text-neutral-500 dark:text-neutral-300 mt-4 text-xl">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                            scelerisque diam non nisi semper, et elementum lorem ornare.
                            Maecenas placerat facilisis mollis. Duis sagittis ligula in
                            sodales vehicula.
                        </p>
                    </div>
                </li>

                <!--Second item-->
                <li>
                    <div class="flex-start flex items-center pt-2">
                        <div class="-ms-[5px] me-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500"></div>
                        <p class="text-sm text-neutral-500 dark:text-neutral-300">
                            13.09.2021
                        </p>
                    </div>
                    <div class="mb-6 ms-4 mt-2">
                        <h4 class="mb-1.5 text-xl font-semibold">Title of section 2</h4>
                        <p class="mb-3 text-neutral-500 dark:text-neutral-300">
                            Libero expedita explicabo eius fugiat quia aspernatur autem
                            laudantium error architecto recusandae natus sapiente sit nam
                            eaque, consectetur porro molestiae ipsam an deleniti.
                        </p>
                    </div>
                </li>

                <!--Third item-->
                <li>
                    <div class="flex-start flex items-center pt-2">
                        <div class="-ms-[5px] me-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500"></div>
                        <p class="text-sm text-neutral-500 dark:text-neutral-300">
                            25.11.2021
                        </p>
                    </div>
                    <div class="ms-4 mt-2 pb-5">
                        <h4 class="mb-1.5 text-xl font-semibold">Title of section 3</h4>
                        <p class="mb-3 text-neutral-500 dark:text-neutral-300">
                            Voluptatibus temporibus esse illum eum aspernatur, fugiat suscipit
                            natus! Eum corporis illum nihil officiis tempore. Excepturi illo
                            natus libero sit doloremque, laborum molestias rerum pariatur quam
                            ipsam necessitatibus incidunt, explicabo.
                        </p>
                    </div>
                </li>
            </ol>
        </div>
        <!-- component -->


        <!-- Kolom Part-time -->
        <div class="border-l-8">
            <h2 class="text-2xl md:text-5xl font-bold mb-4 font-display text-center">Part-time</h2>

            <ol class="border-e border-neutral-300 dark:border-neutral-500">
                <!-- First item -->
                <li>
                    <div class="flex flex-row-reverse items-center pt-3">
                        <!-- Titik bulat -->
                        <div class="-me-[5px] ms-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500"></div>

                        <!-- Judul perusahaan -->
                        <h4 class="text-xl md:text-3xl font-bold font-display">CV. Carolina Unggul Persada</h4>
                    </div>
                    <div class="mb-6 me-4 text-end">
                        <h4 class="text-xl md:text-2xl font-semibold">Marketplace & E-Commerce Specialist</h4>
                        <p class="text-xl md:text-2xl font-semibold text-neutral-500 dark:text-neutral-300">
                            Desember 2023 - Sekarang
                        </p>
                        <p class="mb-3 text-neutral-500 dark:text-neutral-300 mt-4 text-xl">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                            scelerisque diam non nisi semper, et elementum lorem ornare.
                            Maecenas placerat facilisis mollis. Duis sagittis ligula in
                            sodales vehicula.
                        </p>
                    </div>
                </li>

                <!-- Second item -->
                <li>
                    <div class="flex flex-row-reverse items-center pt-2">
                        <div class="-me-[5px] ms-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500"></div>
                        <p class="text-sm text-neutral-500 dark:text-neutral-300">13.09.2021</p>
                    </div>
                    <div class="mb-6 me-4 mt-2 text-end">
                        <h4 class="mb-1.5 text-xl font-semibold">Title of section 2</h4>
                        <p class="mb-3 text-neutral-500 dark:text-neutral-300">
                            Libero expedita explicabo eius fugiat quia aspernatur autem
                            laudantium error architecto recusandae natus sapiente sit nam
                            eaque, consectetur porro molestiae ipsam an deleniti.
                        </p>
                    </div>
                </li>

                <!-- Third item -->
                <li>
                    <div class="flex flex-row-reverse items-center pt-2">
                        <div class="-me-[5px] ms-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500"></div>
                        <p class="text-sm text-neutral-500 dark:text-neutral-300">25.11.2021</p>
                    </div>
                    <div class="me-4 mt-2 pb-5 text-end">
                        <h4 class="mb-1.5 text-xl font-semibold">Title of section 3</h4>
                        <p class="mb-3 text-neutral-500 dark:text-neutral-300">
                            Voluptatibus temporibus esse illum eum aspernatur, fugiat suscipit
                            natus! Eum corporis illum nihil officiis tempore. Excepturi illo
                            natus libero sit doloremque, laborum molestias rerum pariatur quam
                            ipsam necessitatibus incidunt, explicabo.
                        </p>
                    </div>
                </li>
            </ol>

        </div>
    </section>




    <style>
        /* Apply background to the entire page */
        body {
            background: radial-gradient(#ff007f, #1a1b6b, #0378ff, #ff6600);
            background-size: 900% 900%;
            animation: gradient 15s ease-out 0s alternate infinite none running;
            min-height: 100vh;
        }

        /* Add gradient animation */
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Specific section styling */
        .section-bg {
            background: inherit;
            background-size: inherit;
            background-position: inherit;
        }
    </style>
@endsection
