<nav class="absolute md:top-[5%] w-full z-[1000] h-[60px]">
    <div class="md:w-[600px] h-full text-white mx-auto bg-black/30 backdrop-blur-3xl flex items-center justify-between sm:rounded-full px-6">
        <h1 class="title text-2xl">Decora</h1>

        <!-- Hamburger Button (Only visible on small screens) -->
        <button id="menu-toggle" class="block md:hidden text-white focus:outline-none">
            ☰ 
        </button>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex items-center space-x-3">
            <li class="cursor-pointer w-[120px] py-2 flex items-center justify-center rounded-full 
                hover:bg-[#938d88] hover:text-black transition duration-300 text">
                <a href="{{ route('home')}}">Home</a>
            </li>
            <li class="cursor-pointer w-[120px] py-2 flex items-center justify-center rounded-full 
                hover:bg-[#938d88] hover:text-black transition duration-300 text">
                <a href="{{ route('catalogue')}}">Catalogue</a>
            </li>
        </ul>

        <h1 class="hidden md:flex  py-2 px-4 bg-white text-black hover:bg-[#554739] hover:text-white transition duration-300 rounded-full text">
            <a href="{{ route('contact-us')}}">Contact Us</a>
        </h1>
    </div>

    <!-- Mobile Menu (Initially hidden) -->
    <ul id="mobile-menu" class="backdrop-blur-3xl hidden flex-col items-center space-y-3 bg-transparent text-white text-center py-4 md:hidden">
        <li class="w-full py-2 text hover:bg-[#938d88] hover:text-black transition duration-300">
            <a href="{{ route('home')}}">Home</a>
        </li>
        <li class="w-full py-2 text hover:bg-[#938d88] hover:text-black transition duration-300">
            <a href="{{ route('catalogue')}}">Catalogue</a>
        </li>
        <li class="w-full py-2 text hover:bg-[#938d88] hover:text-black  text-white rounded-full">
            <a href="{{ route('contact-us')}}">Contact Us</a>
        </li>
    </ul>
</nav>

<script>
    // JavaScript to toggle mobile menu
    document.getElementById("menu-toggle").addEventListener("click", function() {
        document.getElementById("mobile-menu").classList.toggle("hidden");
    });
</script>