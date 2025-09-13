@extends('layouts.main')

@section('title', 'Picket')
@section('content')
<!-- Main Class Content -->
    <main class="p-6 ml-20 mr-20" x-data="{ showRequest: false }">
        <div class="justify-center">
            <div class="flex flex-row">
                <h1 class="text-2xl font-semibold text-[#2C3278]">Time :</h1>
                <x-main.dropdown-input-main 
                    name="weekList"
                    :selected="$week"
                />
            </div>
            <div class="flex flex-col w-full">
                <h1 class="text-3xl font-bold text-[#2C3278] text-center">Your Picket Schedule</h1>
                <button class="bg-[#AAB8FF] text-[#4156BE] font-semibold px-6 py-2 rounded-sm flex items-center space-x-2 self-end"
                    @click="showRequest = true">
                    <img src="{{ asset('images/icons/request-icon.svg') }}" alt="">
                    <span>Request</span>
                </button>

                <template x-if="showRequest">
                    <div class="fixed inset-0 flex items-center justify-center z-50">
                        <!-- Overlay transparan -->
                        <div class="absolute inset-0 bg-black opacity-40"></div>

                        <!-- Modal box -->
                        <div class="relative bg-white rounded-xl shadow-xl p-6 w-120 text-start z-50">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Request</h2>
                            <p class="text-gray-600 mb-6 text-sm">Need a switch? Request to update your picket schedule now</p>

                            <div class="flex flex-col space-y-3">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Who you want to switch with</label>
                                    <input type="text" name="switch_with" placeholder="Enter name"
                                        class="w-full px-3 py-2 rounded-lg border border-gray-300 mb-3 focus:outline-none focus:ring-1 focus:ring-indigo-500">

                                    <!-- Date -->
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                                    <input type="date" name="date"
                                        class="w-full px-3 py-2 rounded-lg border border-gray-300 mb-3 focus:outline-none focus:ring-1 focus:ring-indigo-500">

                                    <!-- Reason -->
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Reason</label>
                                    <textarea name="reason" rows="3"
                                        class="w-full px-3 py-2 rounded-lg border border-gray-300 mb-3 focus:outline-none focus:ring-1 focus:ring-indigo-500"
                                        placeholder="Why do you want to switch?"></textarea>


                                    <button type="submit" 
                                        class="w-full px-4 py-2 rounded-lg bg-[#2C3278] text-white font-medium">
                                        Submit
                                    </button>
                                </form>
                                <button @click="showRequest = false" 
                                    class="w-full px-4 py-2 rounded-lg border border-[#2C3278] hover:bg-gray-200 text-gray-800 font-medium">
                                    No, I'm Just Kidding
                                </button>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                @forelse ($pickets as $picket)
                    <x-main.picket-card-main 
                        profile="{{ $picket->user->image 
                            ? asset('images/profiles/' . $picket->user->image) 
                            : asset('images/placeholder/profile.jpg') }}" 
                        name="{{ $picket->user->name }}"
                        task="{{ $picket->task->name }}"
                    />              
                @empty
                    <p class="text-center text-gray-500 col-span-3">No picket schedule available.</p>
                @endforelse
            </div>
        </div>
    </main>
@endsection