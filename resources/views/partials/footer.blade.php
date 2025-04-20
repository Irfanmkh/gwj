    <footer class="footer sm:footer-horizontal mt-8 items-center p-4 footerbg border-white border-t-4 rounded-t-4xl">
        <div class="text-center mx-auto">
            <p class="font-display text-lg md:text-xl mx-auto">
                Copyright © <span id="year"></span> - All rights reserved
            </p>
            <div
                class="text-sm text-neutral-content/70 flex flex-col md:flex-row md:justify-center gap-x-1 md:gap-x-2 text-center mx-auto">
                <p>
                    Created by <span class="font-semibold text-neutral-content">Irfan Maulana Khakiki</span>
                </p>
                <p>
                    · Reference design:
                    <a href="https://victoreke.com/" target="_blank"
                        class="hover:underline text-neutral-content/80 font-semibold">Victor Eke</a>,
                    <a href="https://jansenharris.com/" target="_blank"
                        class="hover:underline text-neutral-content/80 font-semibold">Jasen Harris</a>
                </p>
            </div>

        </div>



        <!-- Build with -->
        <nav
            class="flex flex-col md:flex-row md:items-center gap-6 md:place-self-center md:justify-self-end text-center mx-auto">
            <div class="flex flex-col items-center">
                <p class="font-display text-lg md:text-xl mb-2">Build With:</p>
                <div class="flex flex-row gap-6">
                    <!-- Tailwind -->
                    <div class="flex flex-col items-center">
                        <a href="https://tailwindcss.com/" target="_blank" title="Tailwind CSS">
                            <img src="https://www.svgrepo.com/show/374118/tailwind.svg" alt="Tailwind CSS"
                                class="w-10 h-10 hover:scale-110 transition" />
                        </a>
                        <span class="text-xs text-neutral-content/70 mt-1">Tailwind</span>
                    </div>

                    <!-- Alpine.js -->
                    <div class="flex flex-col items-center">
                        <a href="https://alpinejs.dev/" target="_blank" title="Alpine.js">
                            <img src="https://icon.icepanel.io/Technology/png-shadow-512/Alpine.js.png" alt="Alpine.js"
                                class="w-10 h-10 hover:scale-110 transition" />
                        </a>
                        <span class="text-xs text-neutral-content/70 mt-1">Alpine.js</span>
                    </div>

                    <!-- Laravel -->
                    <div class="flex flex-col items-center">
                        <a href="https://laravel.com/" target="_blank" title="Laravel">
                            <img src="https://www.svgrepo.com/show/353985/laravel.svg" alt="Laravel"
                                class="w-10 h-10 hover:scale-110 transition" />
                        </a>
                        <span class="text-xs text-neutral-content/70 mt-1">Laravel</span>
                    </div>
                </div>
            </div>
        </nav>

    </footer>


    <script>
        // Untuk update tahun secara otomatis
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>

    <style>
        /* Apply background to the entire page */
        .footerbg {
            background: radial-gradient(#1a1b6b #73b41d, #0378ff, #1a1b6b, #ffffff);
            animation: gradient 15s ease-out 0s alternate infinite none running;
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
    </style>
