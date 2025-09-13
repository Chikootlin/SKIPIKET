<div class=" bg-white rounded-2xl flex items-center space-x-4 mb-2">
    <div class="flex items-center space-x-4 p-4">
        <img src="{{ $icon }}" alt="notification icon">
        <div class="flex flex-col">
            <span class="font-medium text-[#2C3278]">
                {{ $message }}
            </span>
            <p class="text-sm text-gray-400">{{ $subMessage }}</p>
        </div>
    </div>
</div>