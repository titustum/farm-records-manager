<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Farm Records App') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full font-sans antialiased bg-gray-100 text-gray-800">

    <div class="flex flex-col md:flex-row h-screen">

        <!-- LEFT SIDE: Features + CTA -->
        <div class="md:w-1/2 w-full bg-green-700 min-h-screen text-white flex items-center justify-center p-8 md:p-16">
            <div class="max-w-xl space-y-6 text-center lg:text-left">
                <div>
                    <img src="{{  asset('images/transparent-tetu-logo.png') }}" alt="Tetu TVC Logo"
                        class="mx-auto h-30 lg:h-40">
                </div>
                <h1 class="text-3xl lg:text-5xl font-bold leading-tight">Simplify Your Farm Management</h1>
                <p class="text-lg opacity-90">Track everything from animals to crops — all in one intuitive platform.
                </p>

                <ul class="space-y-2 text-base font-medium mx-auto">
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-white/90" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414L8.414 15H5v-3.414l8.293-8.293a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        Track animal & crop records
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-white/90" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5 3a1 1 0 011 1v1h8V4a1 1 0 112 0v1h1a1 1 0 011 1v2h-1v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8H2V6a1 1 0 011-1h1V4a1 1 0 011-1zm10 6H5v6h10V9z"
                                clip-rule="evenodd" />
                        </svg>
                        Manage expenses & sales
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-white/90" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 7H7v6h6V7z" />
                            <path fill-rule="evenodd"
                                d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v10H5V5z"
                                clip-rule="evenodd" />
                        </svg>
                        Generate reports & stats
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-white/90" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M4 3a1 1 0 011 1v1h10V4a1 1 0 112 0v1a2 2 0 01-2 2H5a2 2 0 01-2-2V4a1 1 0 011-1z" />
                            <path d="M3 9h14v6a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                        </svg>
                        Secure and cloud-ready
                    </li>
                </ul>

                <a href="{{ route('filament.admin.auth.login') }}"
                    class="inline-block mt-6 bg-white text-green-700 font-semibold px-6 py-3 rounded-md shadow hover:bg-gray-100 transition duration-200">
                    Login to Dashboard
                </a>
            </div>
        </div>

        <!-- RIGHT SIDE: Background Image -->
        <div class="md:w-1/2 hidden lg:inline w-full bg-cover bg-center"
            style="background-image: url('{{ asset('images/dairy-cows-grazing.avif') }}');" role="img"
            aria-label="Dairy animals grazing on pasture">
        </div>

    </div>

</body>

</html>