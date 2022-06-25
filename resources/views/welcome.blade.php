<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Apartment Management</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="{{ asset('bladewind/css/animate.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />

    </head>
    <body>
            <div class=" w-full max-w-7xl">
                <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl p-5 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                    <div class="flex flex-row items-center justify-between lg:justify-start">
                        <a href="./index.html" class="text-lg font-bold tracking-tighter text-blue-600 transition duration-500 ease-in-out transform tracking-relaxed lg:pr-8"> Apartment Management </a>
                    </div>

                    <nav :class="{'flex': open, 'hidden': !open}" class="flex-col items-center flex-grow hidden pb-4 border-blue-600 md:pb-0 md:flex md:justify-end md:flex-row lg:border-l-2 lg:pl-2">
                        <a class="px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline" href="#">About</a>
                        <a class="px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline" href="#">Contact</a>

                        <div class="inline-flex items-center gap-2 list-none lg:ml-auto">
                            <a href="{{route('login')}}"><button class="items-center block px-10 py-2.5 text-base font-medium text-center text-blue-600 transition duration-500 ease-in-out transform border-2 border-white shadow-md rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Sign in</button></a>
                            <a href="{{route('register')}}"><button class="items-center block px-10 py-3 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Sign up</button></a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="min-h-screen bg-gray-100">
            <x-bladewind::centered-content size="xl">
                <x-bladewind::card>
                     this content is centered in this column
                     <x-bladewind.button>subscribe now</x-bladewind.button>
                </x-bladewind::card>
             </x-bladewind::centered-content>

            </div>
            @include('layouts.footer')

    <script src="{{ asset('bladewind/js/helpers.js') }}" type="text/javascript"></script>
    </body>
</html>
