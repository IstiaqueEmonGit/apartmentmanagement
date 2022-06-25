<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <?php  /* <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div> */?>
            <div class=" w-full max-w-7xl">
                <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl p-5 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                    <div class="flex flex-row items-center justify-between lg:justify-start">
                        <a href="{{route('dashboard')}}" class="text-lg font-bold tracking-tighter text-blue-600 transition duration-500 ease-in-out transform tracking-relaxed lg:pr-8"> Apartment Management </a>
                    </div>

                    <nav :class="{'flex': open, 'hidden': !open}" class="flex-col items-center flex-grow hidden pb-4 border-blue-600 md:pb-0 md:flex md:justify-end md:flex-row lg:border-l-2 lg:pl-2">
                        <a class="px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline" href="#">About</a>
                        <a class="px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline" href="#">Contact</a>
                        <!-- Settings Dropdown -->
                        <div class="inline-flex items-center gap-2 list-none lg:ml-auto" class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
              </div>
                    </nav>

                </div>

                <!-- Navigation Links -->
               <!-- <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div> -->

            <!-- Settings Dropdown -->




            <!-- Hamburger -->

        </div>
        <div class="flex  overflow-hidden bg-white rounded-lg">
                    <div class="hidden md:flex md:flex-shrink-0 min-h-screen">
                        <div class="flex flex-col w-64">
                            <div class="flex flex-col flex-grow pt-5 overflow-y-auto bg-indigo-700 border-r">
                                <div class="flex flex-col flex-grow px-4 mt-5">
                                    <nav class="flex-1 space-y-1 bg-indigo-700">
                                        <ul>
                                            <li>
                                                <a href="{{route('dashboard')}}" class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform border-indigo-800 rounded-lg hover:border-indigo-800 focus:shadow-outline hover:bg-indigo-600" white="" 70="" >

                                                    <span class="ml-4"> Dashboard</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('society')}}" class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform border-indigo-800 rounded-lg hover:border-indigo-800 focus:shadow-outline hover:bg-indigo-600">

                                                    <span class="ml-4">Society List</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('apartment')}}" class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform border-indigo-800 rounded-lg hover:border-indigo-800 focus:shadow-outline hover:bg-indigo-600">

                                                    <span class="ml-4">Apartment List</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('flat')}}" class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform border-indigo-800 rounded-lg hover:border-indigo-800 focus:shadow-outline hover:bg-indigo-600" >

                                                    <span class="ml-4">Flat Details</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('owners')}}" class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform border-indigo-800 rounded-lg hover:border-indigo-800 focus:shadow-outline hover:bg-indigo-600" >

                                                    <span class="ml-4">Owners</span></a>
                                            </li>

                                            <li>
                                                <a href="{{route('tenants')}}" class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform border-indigo-800 rounded-lg hover:border-indigo-800 focus:shadow-outline hover:bg-indigo-600" white="" 70="" >

                                                    <span class="ml-4"> Tenants</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform border-indigo-800 rounded-lg hover:border-indigo-800 focus:shadow-outline hover:bg-indigo-600" white="" 70="" href="#">

                                                    <span class="ml-4"> settings</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </nav>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col flex-1 w-0 overflow-hidden">
                        <!-- Page Content -->
                            <main>
                                {{ $slot }}
                            </main>
                    </div>

                </div>
            </div>
    </div>


    <!-- Responsive Navigation Menu -->

        <!-- Responsive Settings Options -->

</nav>



