<!--Nav-->
<nav id="header">
    <div>
        <div class="logo-container">
            <a class="toggleColour" href="#">
                Bohemian Space
            </a>
        </div>
        <div class="block lg:hidden pr-4">
            <button id="nav-toggle"
                class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20"
            id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                {{-- <li class="mr-3">
                <a class="inline-block py-2 px-4 text-white font-bold no-underline" href="#">Active</a>
            </li>
            @if (Route::has('login'))
                @auth
                    <li class="mr-3">
                        <a href="{{ url('/dashboard') }}" class="inline-block text-white no-underline hover:text-gray-100 hover:text-underline py-2 px-4">Dashboard</a>
                    </li>
                @else
                    <li class="mr-3">
                        <a href="{{ route('login') }}" class="inline-block text-white no-underline hover:text-gray-100 hover:text-underline py-2 px-4">Log in</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="mr-3">
                        <a href="{{ route('register') }}" class="inline-block text-white no-underline hover:text-gray-100 hover:text-underline py-2 px-4">Register</a>
                    </li>
                    @endif
                @endauth
            @endif
        </ul> --}}
                {{-- <button id="navAction"
                class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
        >
            Registrate
        </button> --}}
        </div>
    </div>
    <hr />
</nav>
