<div class="flex justify-between items-center w-full px-6 py-2">
    <div></div>

    <div class="flex justify-center items-center space-x-2 ml-40">
        <img src="{{ asset('images/icons/solar_calendar-bold-duotone.svg') }}" alt="">
        <p class="text-[#2C3278]">
            {{ \Carbon\Carbon::now()->format('D, d M Y') }}
        </p>
    </div>

    <div class="flex items-center space-x-3">
        <img src="{{ asset(Auth::user()->image ? 'images/profiles/' . Auth::user()->image : 'images/placeholder/profile.jpg') }}" 
             alt="Profile" 
             class="w-10 h-10 rounded-full object-cover cursor-pointer"
        >
        <div class="flex flex-col">
            <span class="text-[#2C3278] font-medium text-sm">
                {{ Auth::user()->fullname ?? 'User' }}
            </span>
            <span class="text-sm text-gray-400">
                {{ Auth::user()->role_id == 2 ? 'Student' : 'Teacher' }}
            </span>
        </div>
    </div>
</div>
