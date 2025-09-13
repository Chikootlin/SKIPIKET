<nav
    class="absolute top-0 left-0 right-0 px-10 py-6 flex justify-between items-center z-20"
    style="color: {{ $color }};"
>
    <div class="flex items-center gap-2">
        <img src="{{ asset('images/logos/' . $logo . '.svg') }}" alt="Logo" class="h-15 w-auto" />
    </div>

    <ul class="flex space-x-6 text-lg font-light">
        <li><a href="{{ route('index') }}" class="hover:underline">Home</a></li>
        <li><a href="{{ route('about') }}" class="hover:underline">About Us</a></li>
        <li><a href="{{ route('faq') }}" class="hover:underline">FAQ</a></li>
    </ul>
</nav>
