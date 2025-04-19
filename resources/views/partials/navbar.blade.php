<nav x-data="{ scrolled: false, mobileMenuOpen: false }" x-init="window.addEventListener('scroll', () => {
    scrolled = window.scrollY > 50;
})"
    :class="{
        // Ketika tidak di-scroll, navbar lebar penuh
        'w-full  px-6 py-5': !scrolled,
        // Ketika di-scroll, navbar lebar 1/2
        'w-1/2 md:w-1/4 mx-auto mt-8 lg:py-4  ': scrolled,
        // Ketika di-scroll, beri margin-top untuk memberikan jarak
        'fixed top-0 left-0 right-0 z-50 transition-all duration-500 ease-in-out': true,
    
        // Background semi transparan dengan blur dan shadow saat di-scroll
        'bg-white/50 backdrop-blur shadow-md': scrolled,
        // Background transparan saat tidak di-scroll
        'bg-transparent': !scrolled
    }"
    class="rounded-full ">
    <div class="flex justify-between items-center text-white px-4 lg:px-10 text-l  "
        :class="{
            'text-black': scrolled,
            'text-white': !scrolled
        }">
        <!-- Teks IRFAN, akan berubah sesuai kondisi scroll -->
        <div class="font-display font-bold transition-all duration-500 ease-in-out lg:text-4xl ">
            <span x-text="scrolled ? 'IRFAN' : 'IRFAN MAULANA KHAKIKI'" x-cloak></span>
        </div>

        <div class="lg:hidden flex items-center ml-auto">
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-700 p-2 focus:outline-none"
                id="mobile-menu-button-alpine">
                <i class="fas fa-bars text-xl"
                    :class="{
                        'text-black': scrolled,
                        'text-white': !scrolled
                    }"></i>
            </button>
        </div>

        <div x-show="mobileMenuOpen" x-transition:enter="transition transform ease-in-out duration-300"
            x-transition:enter-start="translate-y-[-100%]" x-transition:enter-end="translate-y-0"
            x-transition:leave="transition transform ease-in-out duration-300" x-transition:leave-start="translate-y-0"
            x-transition:leave-end="translate-y-[-100%]" x-collapse x-cloak @click.outside="mobileMenuOpen = false"
            class="lg:hidden fixed left-0 right-0
                overflow-hidden
                duration-300 ease-in-out
                z-40"
            :class="{
                'top-15': !scrolled,
                'top-10': scrolled
            }"
            id="mobile-menu-alpine">
            {{-- Inner container for scrolling and padding --}}
            <div class="flex flex-col h-full">
                {{-- Scrollable Navigation --}}
                <nav class="flex-grow overflow-y-auto px-2 pb-4">
                    {{-- Dropdown: Tentang Kami - Using Alpine --}}

                    {{-- Regular Mobile Links --}}
                    <a class="block px-4 py-2 mt-4 font-bold border-b border-transparent text-sm bg-white/50 backdrop-blur shadow-md rounded-full"
                          href="/about">About</a>

                    <a class="block px-4 py-2 mt-4  font-bold border-b border-transparent text-sm bg-white/50 backdrop-blur shadow-md rounded-full"
                        href="/pendidikan">Project</a>
                    <a class="block px-4 py-2 mt-4 font-bold border-b border-transparent text-sm bg-white/50 backdrop-blur shadow-md rounded-full"
                        href="/penelitian">Contact</a>

                </nav>
            </div>
        </div>

        <!-- Daftar navigasi -->
        <ul class="hidden lg:flex gap-8 lg:text-3xl">
            <li><a href="#" class="hover:text-blue-600">About</a></li>
            <li><a href="#" class="hover:text-blue-600">Project</a></li>
            <li><a href="#" class="hover:text-blue-600">Contact</a></li>
        </ul>
    </div>
</nav>
