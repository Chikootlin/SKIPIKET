<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logos/logoSKI.svg') }}">
    <title>Landing | SKIPIKET</title>
</head>
<body class="m-0 p-0 relative h-screen">
    <div 
        class="absolute inset-0 bg-[#2C3278] opacity-60 -z-10">
    </div>

    <!-- Background -->
    <div 
        class="absolute inset-0 bg-cover bg-center opacity-80 -z-20"
        style="background-image: url('{{ asset('images/backgrounds/smk1 1.jpg') }}');">
    </div>

    <!-- Navbar -->
    <x-landing.navbar
        logo="logoLP"
        color="white"
    />

    <!-- Content -->
    <div class="relative z-10 h-full flex items-end px-10 md:px-20 pb-20">
        <div class="text-white max-w-xl">
            <h2 class="text-3xl md:text-4xl font-semibold leading-snug">
                No more <span class="text-[#5370FF]">confusion</span><br>
                No more <span class="text-[#5370FF]">missed turns</span><br>
                No more <span class="text-[#5370FF]">messy spreadsheets.</span>
            </h2>
            <a href="{{ route('login') }}" class="inline-block mt-6 px-6 py-3 bg-[#AABEFF] text-[#2C3278] rounded-full shadow-lg">
                Get Started
            </a>
        </div>
    </div>

</body>
</html>