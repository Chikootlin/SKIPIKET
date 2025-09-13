@extends('layouts.main')

@section('title', 'Dashboard')
@section('content')
<!-- Main Content -->
    <!-- Main Dashboard Content -->
    <main class="p-6">
        <!-- Welcome Message -->
        <h1 class="text-2xl font-semibold text-[#2C3278]">Dashboard</h1>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-6 mb-8 mt-4">
            <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex justify-evenly items-center">
                    <div class="flex flex-col items-start">
                        <h1 class="text-6xl text-[#2C3278] font-bold">Hi, {{ Auth::user()->name ?? 'User' }}!</h1>
                        <p class="text-2xl text-[#96A6DD] font-extralight mt-4">What are you looking today?</p>
                        
                        <div class="mt-6">
                            <ul class="space-y-2">
                                <li class="flex items-center space-x-3 text-[#5370FF]">
                                    <img src="{{ asset('images/icons/emojione-monotone_up-arrow.svg') }}" alt="">
                                    <a href="{{ route('calendar') }}">Check Schedule</a>
                                </li>
                                <li class="flex items-center space-x-3 text-[#5370FF]">
                                    <img src="{{ asset('images/icons/emojione-monotone_up-arrow.svg') }}" alt="">
                                    <a href="{{ route('picket') }}">Change Schedule</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-80 items-center justify-center flex overflow-hidden rounded-2xl mt-10">
                        <lottie-player
                            src="{{ asset('animation/5OaDx3NKBh.json') }}"
                            background="transparent"
                            speed="1"
                            style="width: 300px; height: 220px;"
                            loop
                            autoplay>
                        </lottie-player>
                    </div>
                </div>
            </div>

            <!-- Notifications -->
            <div>
                <div class="flex space-x-2 mb-4">
                    <img src="{{ asset('images/icons/hugeicons_notification-01.svg') }}" alt="">
                    <span class="text-lg font-semibold text-[#2C3278]">
                        Notifications
                    </span>
                </div>
                <div class="space-y-4 max-h-[300px] overflow-y-auto">
                    <x-main.notification-card-dashboard-main 
                        icon="images/icons/mingcute_time-fill.svg" 
                        message="Tomorrow is your turn to picket" 
                        subMessage="Don't forget to picket"
                    />
                    <x-main.notification-card-dashboard-main 
                        icon="images/icons/mingcute_time-fill.svg" 
                        message="Tomorrow is your turn to picket" 
                        subMessage="Don't forget to picket"
                    />
                    <x-main.notification-card-dashboard-main 
                        icon="images/icons/mingcute_time-fill.svg" 
                        message="Tomorrow is your turn to picket" 
                        subMessage="Don't forget to picket"
                    />
                </div>
                <a href="{{ route('notification') }}" class="text-[#5370FF] flex justify-end text-end">See all</a>
            </div>
        </div>

        <!-- Bottom Row -->
            <h1 class="text-3xl font-bold text-[#2C3278]">Distribution of Picket Schedule</h1>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mt-4">
                    @forelse ($pickets as $picket)
                        <x-main.distribution-card-main 
                            icon="{{ asset($picket->task_icon) }}" 
                            task="{{ $picket->task->name }}" 
                            assignees="{{ $picket->user->name }}" 
                        />              
                    @empty
                        <p class="flex justify-center text-center text-gray-500 col-span-3">No picket schedule available.</p>
                    @endforelse
                </div>
    </main>
@endsection