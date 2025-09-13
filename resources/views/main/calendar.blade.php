@extends('layouts.main')

@section('title', 'Calendar')
@section('content')
<!-- Main Content -->
    

    <!-- Main Calendar Content -->
    <main class="p-6 ml-20 mr-20 flex flex-col items-center">
    <div class="w-full max-w-6xl">
        <h1 class="text-2xl font-bold text-[#96A6DD] mb-6">
            {{ \Carbon\Carbon::now()->format('F Y') }}
        </h1>

        <div class="border border-indigo-200 rounded-xl overflow-hidden max-h-[90vh]">
            <!-- Calendar Day -->
            <div class="grid grid-cols-7 bg-[#AABEFF]">
                @foreach (['Mon','Tue','Wed','Thu','Fri','Sat','Sun'] as $day)
                    <div class="py-2 flex items-center justify-center text-sm font-medium text-[#4156BE] ">
                        {{ $day }}
                    </div>
                @endforeach
            </div>

            <!-- Calendar Date -->
            <div class="grid grid-cols-7">
                @foreach ($calendar as $cell)
                    @php
                        $colIndex = $loop->index % 7;
                    @endphp

                    <div class="relative p-1 min-h-[70px] border-r border-b border-indigo-200
                        @if($colIndex == 5 || $colIndex == 6) 
                            bg-[#FFEDED] 
                        @else 
                            bg-white hover:bg-indigo-50 
                        @endif
                    ">
                        <span class="absolute top-1 right-1 text-[10px] font-semibold
                            @if(!$cell['isCurrentMonth'])
                                text-[#AABEFF]
                            @elseif ($cell['isPast'] && $colIndex == 5 || $colIndex == 6)
                                text-[#EA1D20]
                            @elseif($cell['isPast'])
                                text-gray-400
                            @elseif($cell['isToday'])
                                text-white bg-[#4156BE] rounded-full px-2
                            @elseif($colIndex == 5 || $colIndex == 6)
                                text-[#EA1D20]
                            @else
                                text-[#4156BE]
                            @endif
                        ">
                            {{ $cell['day'] }}
                        </span>

                        <!-- Picket List -->
                        @if(!empty($cell['pickets']))
                            <div class="mt-2 text-[11px] text-[#4156BE]">
                                <p class="font-semibold">Picket :</p>
                                <ul class="ml-4">
                                    @foreach ($cell['pickets'] as $name)
                                        <li>-{{ $name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                @endforeach
            </div>

    </div>

        </div>
    </div>
</main>

@endsection