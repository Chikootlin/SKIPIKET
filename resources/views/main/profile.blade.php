@extends('layouts.main')
@section('title', 'Profile')

@section('content')
<!-- Main Content -->
<main class="p-6">
    <h1 class="text-3xl font-bold text-[#2C3278] mb-6">Profile</h1>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
        {{-- KIRI --}}
        <div class="bg-white rounded-2xl shadow p-6 text-center">
            <form action="{{ route('profile.updateImage') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="profileImage" class="cursor-pointer">
                    <div class="relative group w-32 h-32 mx-auto mb-4">
                        <img src="{{ asset(Auth::user()->image ? 'images/profiles/' . Auth::user()->image : 'images/placeholder/profile.jpg') }}"
                            alt="Profile"
                            class="w-32 h-32 rounded-full object-cover mx-auto mb-4">

                        <div class="absolute inset-0 bg-black/50 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                            <img src="{{ asset('images/icons/mdi_camera-outline.svg') }}" class="w-8 h-8 text-white" alt="Upload">
                        </div>
                    </div>
                </label>
                <input id="profileImage" type="file" name="image" class="hidden" onchange="this.form.submit()">
            </form>

            <h2 class="text-xl font-bold text-[#2C3278]">{{ Auth::user()->fullname ?? 'Full Name' }}</h2>
            <p class="text-[#5D6A85] mb-4">{{ Auth::user()->email }}</p>

            <h3 class="font-semibold mb-2 text-[#2C3278] text-start">My Account</h3>
            <div class="flex items-center justify-start space-x-2 text-[#2C3278]">
                <div class="w-10 h-10 rounded-full flex items-center justify-center bg-[#D6DDFF]">
                    <img src="{{ asset('images/icons/email-profile.svg') }}" class="w-5 h-5" alt="Avatar">
                </div>
                <span>{{ Auth::user()->email }}</span>
            </div>
            <a href="#">
                <div class="flex items-center justify-start space-x-2 text-[#2C3278] mt-2">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center bg-[#D6DDFF]">
                        <img src="{{ asset('images/icons/plus-profile.svg') }}" class="w-5 h-5" alt="Avatar">
                    </div>
                    <span>Add another account</span>
                </div>
            </a>
        </div>

        {{-- KANAN --}}
        <div class="lg:col-span-2 bg-white rounded-2xl shadow p-6">
            <h2 class="text-2xl font-bold text-[#2C3278] mb-2">Student Profile</h2>
            <p class="text-sm text-[#2C3278]/50 mb-2">Student Information</p>

            <div class="space-y-4">
                @foreach ([
                    'Username' => Auth::user()->name,
                    'Full Name' => Auth::user()->fullname,
                    'Gender' => Auth::user()->gender,
                    'Alamat' => Auth::user()->alamat,
                    'NIS' => Auth::user()->nis,
                    'NISN' => Auth::user()->nisn,
                ] as $label => $value)
                <div>
                    <label class="block text-sm text-[#2C3278] mb-1">{{ $label }}</label>
                    <input type="text" value="{{ $value }}"
                           readonly
                           class="w-full px-4 py-2 rounded-lg border border-[#2C3278]/50 focus:outline-none text-[#2C3278]/65">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>

@endsection