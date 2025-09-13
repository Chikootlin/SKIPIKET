@extends('layouts.main')

@section('title', 'Notification')
@section('content')
<!-- Main Content -->
    <!-- Main Notification Content -->
    <main class="p-6 ml-20 mr-20 flex flex-col items-center">
        <div class="w-full max-w-6xl">
            <h1 class="text-2xl font-bold text-[#2D3748] mb-6">Notification</h1>
            <x-main.notification-card-main 
                icon="images/icons/mingcute_time-fill.svg" 
                message="Tomorrow is your turn to picket" 
                subMessage="Don't forget to picket"
            />
            <x-main.notification-card-main 
                icon="images/icons/mingcute_time-fill.svg" 
                message="Tomorrow is your turn to picket" 
                subMessage="Hama"
            />
            <x-main.notification-card-main 
                icon="images/icons/mingcute_time-fill.svg" 
                message="Tomorrow is your turn to picket" 
                subMessage="Ahen"
            />
    </main>

@endsection