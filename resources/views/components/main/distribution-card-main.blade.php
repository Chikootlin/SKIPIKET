<div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
    <div class="flex justify-center items-center flex-col">
        <img src="{{ asset($icon) }}" alt="task icon">
        <h3 class="text-2xl font-bold text-[#2C3278]">{{ $task }}</h3>
        <p class="text-[#96A6DD]">{{ $assignees }}</p>
    </div>
</div>