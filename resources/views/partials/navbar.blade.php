<nav x-data="{ scrolled: false, hover: false }" x-init="window.addEventListener('scroll', () => {
    scrolled = window.scrollY > 50;
})" @mouseenter="hover = true" @mouseleave="hover = false"
    :class="{
        'w-full': !scrolled || hover,
        'w-1/2 mx-auto': scrolled && !hover,
        'fixed top-0 left-0 right-0 z-50 transition-all duration-500 ease-in-out': true
    }"
    class="bg-white shadow-md rounded-full px-6 py-3">

    <!-- Flex container untuk memposisikan elemen-elemen navbar -->
    <div class="flex justify-between items-center ">

        <!-- Menampilkan nama sesuai kondisi scroll -->
        <div class="text-xl font-bold text-amber-700 ">
            <!-- Jika scrolled, hanya menampilkan "IRFAN", jika tidak "IRFAN MAULANA KHAKIKI" -->
            <span x-text="scrolled ? 'IRFAN' : 'IRFAN MAULANA KHAKIKI'"></span>
        </div>

        <!-- Daftar navigasi yang hanya muncul jika tidak ada scroll atau hover -->
        <ul :class="{ 'hidden': scrolled && !hover }" class="flex gap-4 text-amber-700">
            <!-- Item navigasi Home -->
            <li><a href="#" class="hover:text-blue-600">Home</a></li>
            <!-- Item navigasi About -->
            <li><a href="#" class="hover:text-blue-600">About</a></li>
            <!-- Item navigasi Contact -->
            <li><a href="#" class="hover:text-blue-600">Contact</a></li>
        </ul>
    </div>
</nav>
