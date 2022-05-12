<nav class="px-2 sm:px-4 py-4 dark:bg-gray-800 shadow-md sticky top-0 z-50 bg-white">
    <div class="container flex flex-wrap justify-between mx-auto">
        <a href="{{ url('/') }}" class="flex">
            <span class="self-center text-xl font-semibold whitespace-nowrap text-gray-800" id="title">App
                Alumni</span>
        </a>
        <button type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-indigo-700 rounded-lg peer md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indig0-500 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="mobile-menu" aria-expanded="false">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden peer-focus:block justify-between items-center w-full md:flex md:w-auto md:order-1"
            id="mobile-menu">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0">
                <li>
                    <a href="{{ url('/') }}"
                        class="block py-2 pr-4 pl-3 font-semibold md:hover:-translate-y-1 ease-in-out duration-200 md:p-0 {{ Request::is('/*') ? 'text-blue-600' : 'text-stone-800' }}">Home
                        &nbsp;<i class="fa-solid fa-house"></i></a>
                </li>
                <li>
                    <a href="{{ url('/berita') }}"
                        class="block py-2 pr-4 pl-3 font-semibold md:hover:-translate-y-1 ease-in-out duration-200 md:p-0 {{ Request::is('berita*') ? 'text-blue-600' : 'text-stone-800' }}">Berita
                        &nbsp;<i class="fa-solid fa-newspaper"></i></a>
                </li>
                <li>
                    <a href="{{ url('/cari-alumni') }}"
                        class="block py-2 pr-4 pl-3 font-semibold md:hover:-translate-y-1 ease-in-out duration-200 md:p-0 {{ Request::is('cari-alumni*') ? 'text-blue-600' : 'text-stone-800' }}">Cari
                        Alumni &nbsp;<i class="fa-solid fa-magnifying-glass"></i></a>
                </li>
                <li>
                    <a href="{{ url('/galeri') }}"
                        class="block py-2 pr-4 pl-3 font-semibold md:hover:-translate-y-1 ease-in-out duration-200 md:p-0 {{ Request::is('galeri*') ? 'text-blue-600' : 'text-stone-800' }}">Galeri
                        &nbsp;<i class="fa-solid fa-image"></i></a>
                </li>
                @auth
                    <li>
                        <a href="{{ url('/edit-profile/' . auth()->user()->id) }}"
                            class="block py-2 pr-4 pl-3 font-semibold md:hover:-translate-y-1 ease-in-out duration-200 md:p-0 {{ Request::is('edit-profile*') ? 'text-blue-600' : 'text-stone-800' }}">{{ auth()->user()->nama }}
                            &nbsp;<i class="fa-solid fa-user"></i></a>
                    </li>
                    <li>
                        <a href="{{ url('/logout') }}"
                            class="block py-2 pr-4 pl-3 font-semibold md:hover:-translate-y-1 ease-in-out duration-200 md:p-0 text-stone-800"
                            onclick="return confirm('Apakah Anda Yakin Ingin Logout?')">Logout &nbsp;<i
                                class="fa-solid fa-arrow-right-from-bracket"></i></a>
                    </li>
                @else
                    <li>
                        <a href="{{ url('/register') }}"
                            class="block py-2 pr-4 pl-3 font-semibold md:hover:-translate-y-1 ease-in-out duration-200 md:p-0 {{ Request::is('register') ? 'text-blue-600' : 'text-stone-800' }}">Register
                            &nbsp;<i class="fa-solid fa-user-pen"></i></a>
                    </li>
                    <li>
                        <a href="{{ url('/login') }}"
                            class="block py-2 pr-4 pl-3 font-semibold md:hover:-translate-y-1 ease-in-out duration-200 md:p-0 {{ Request::is('login') ? 'text-blue-600' : 'text-stone-800' }}">Login
                            &nbsp;<i class="fa-solid fa-arrow-right-to-bracket"></i></a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
