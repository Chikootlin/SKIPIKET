<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | SKIPIKET</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logos/logoSKI.svg') }}">
    @vite('resources/css/app.css')
</head>
<body class="m-0 p-0" x-data="{ showLogout: false }">
    <!-- Background Color Layer -->
    <div 
        class="absolute inset-0 bg-blue-400 opacity-20 -z-10">
    </div>

    <!-- Background -->
    <div 
        class="absolute inset-0 bg-cover opacity-80 -z-20 block"
        style="background-image: url('{{ asset('images/backgrounds/360_F_601629275_sz3QMahg40CpXTo21qbmKbG0bATJH1pi 1.jpg') }}');"
    ></div>

    <!-- Top Header -->
    <header>
        <x-main.header-main />
    </header>

    <!-- Sidebar -->
    <div class="absolute inset-y-0 left-0 w-20 bg-cordes-dark shadow-xl z-50 bg-white">
        <div class="flex items-center justify-center h-20 bg-cordes-blue">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10">
                    <img src="{{ asset('images/logos/logoSKI.svg') }}" alt="icon">
                </div>
            </div>
        </div>
        
        <nav class="mt-5 px-4">
            <div class="space-y-2">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-200 hover:text-white rounded-lg transition-colors group">
                    <img src="{{ asset('images/icons/dashboard-icon.svg') }}" alt="Dashboard Icon">
                </a>
                <a href="{{ route('picket') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-200 hover:text-white rounded-lg transition-colors group">
                    <img src="{{ asset('images/icons/picket-icon.svg') }}" alt="Picket Icon">
                </a>
                <a href="{{ route('calendar') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-200 hover:text-white rounded-lg transition-colors group">
                    <img src="{{ asset('images/icons/solar_calendar-bold.svg') }}" alt="Calendar Icon">
                </a>
                <a href="{{ route('notification') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-200 hover:text-white rounded-lg transition-colors group">
                    <img src="{{ asset('images/icons/mingcute_notification-fill.svg') }}" alt="Notification Icon">
                </a>
            </div>
        </nav>
        
        <div class="absolute bottom-4 left-4 right-4" x-data="{ showLogout: false }">
            <a href="{{ route('profile') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-200 hover:text-white rounded-lg transition-colors group">
                <img src="{{ asset('images/icons/profile-icon.svg') }}" alt="Profile Icon">
            </a>
            <a href="#"
                @click.prevent="showLogout = true"
                class="flex items-center px-4 py-3 text-gray-300 hover:bg-red-500 hover:text-white rounded-lg transition-colors group">
                <img src="{{ asset('images/icons/material-symbols_logout-rounded.svg') }}" alt="Logout Icon">
            </a>

            <template x-if="showLogout">
                <div class="fixed inset-0 flex items-center justify-center z-50">
                    <!-- Overlay transparan -->
                    <div class="absolute inset-0 bg-black opacity-40"></div>

                    <!-- Modal box -->
                    <div class="relative bg-white rounded-xl shadow-xl p-6 w-96 text-center z-50">
                        <img src="{{ asset('images/illustrations/undraw_log-out_2vod 1.svg') }}" class="mx-auto mb-6 max-w-[200px]">
                        <p class="text-gray-600 mb-6 text-2xl">Wait a sec did you mean to leave, are you sure?</p>

                        <div class="flex flex-col space-y-3">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" 
                                    class="w-full px-4 py-2 rounded-lg bg-[#2C3278] text-white font-medium">
                                    Yes, Log Me Out
                                </button>
                            </form>
                            <button @click="showLogout = false" 
                                class="w-full px-4 py-2 rounded-lg border border-[#2C3278] hover:bg-gray-200 text-gray-800 font-medium">
                                No, I'm Just Kidding
                            </button>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
    
    <!-- Main Content Area -->
    <div class="ml-25">
        @yield('content')
    </div>

</body>
</html>