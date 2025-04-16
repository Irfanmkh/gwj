<!-- Navbar Transparan di Atas Jumbotron -->
<nav class="navbar absolute top-0 left-0 w-full bg-transparent text-white h-[80px] flex items-center justify-center z-50">
    <button id="burger-menu-button"
        class="bg-white/10 backdrop-blur-md rounded-full py-3 px-6 text-black font-bold hover:scale-105 transition-transform shadow-lg">
        Open Nav Menu
    </button>
</nav>

<nav>
    <div id="dropdown"
        class="fixed top-0 right-0 bg-[#1E1F26] text-white w-96 z-50 h-full translate-x-full transition-all duration-500 ease-in-out">
        <div class="mb-4 px-6 pt-6 flex items-center justify-between">
            <img src="https://legende.cc/pfp.png" alt="Logo" width="70" />
            <button class="bg-[#605CEB] w-16 h-16 rounded-full grid place-content-center ml-auto"
                id="close-dropdown-button">
                <span class="block text-2xl font-extralight">✕</span>
            </button>
        </div>
        <h2 class="opacity-60 text-xs uppercase mt-10 ml-6">Navigation</h2>
        <div class="h-[1px] w-full bg-gray-500 mt-4"></div>
        <div class="px-6" id="links">
            <!-- All the paths go here (JS) -->
        </div>
    </div>
</nav>

@push('js')
    <script>
        const paths = [{
                name: "Home",
                link: "/"
            },
            {
                name: "Contact",
                link: "/contact"
            },
        ];

        const openBurgerMenuButton = document.getElementById("burger-menu-button");

        for (const path of paths) {
            const link = document.createElement("a");
            link.innerHTML = `
    <a class="py-4 text-3xl block transition-transform duration-500 ease-in-out translate-x-full link font-bold"
        id="${path.name}"
        href="${path.link}">
        ${path.name}
    </a>`;
            document.getElementById("links").appendChild(link);
        }

        const dropdown = document.getElementById("dropdown");
        const links = document.querySelectorAll(".link");

        function openBurgerMenu() {
            openBurgerMenuButton.innerText = "Close Nav Menu";
            openBurgerMenuButton.addEventListener("click", () => {
                closeBurgerMenu();
            });
            dropdown?.classList.remove("translate-x-full");
            dropdown?.classList.add("translate-x-0");
            for (const link of links) {
                link.classList.remove("translate-x-full");
                link.classList.add("translate-x-0");
            }
        }

        function closeBurgerMenu() {
            openBurgerMenuButton.innerText = "Open Nav Menu";
            openBurgerMenuButton.addEventListener("click", () => {
                openBurgerMenu();
            });
            for (const link of links) {
                link.classList.remove("translate-x-0");
                link.classList.add("translate-x-full");
            }
            dropdown?.classList.remove("translate-x-0");
            dropdown?.classList.add("translate-x-full");
        }

        for (var index = 0; index < links.length; index++) {
            links[index].style.transitionDelay = index * 100 + "ms";
        }

        openBurgerMenuButton.addEventListener("click", () => {
            openBurgerMenu();
        });

        document
            .getElementById("close-dropdown-button")
            .addEventListener("click", () => {
                closeBurgerMenu();
            });

        openBurgerMenu();
    </script>
@endpush
