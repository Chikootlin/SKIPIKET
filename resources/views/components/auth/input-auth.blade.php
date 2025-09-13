<div class="relative mt-5">
    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
        <img src="{{ asset($icon) }}" class="w-5 h-5" alt="{{ $alt ?? 'Icon' }}">
    </div>
    <input
        class="pl-10 w-full py-3 rounded-lg font-small  border border-[#2C3278] placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
        type="{{ $type }}"
        name="{{ $name }}"
        placeholder="{{ $placeholder }}" />
</div>