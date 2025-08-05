<div class="container my-4 mx-auto ">
@foreach ($announcements as $item)
        <a href="#" class="group block">
            <div class="grid rounded grid-cols-6 items-center mb-4 transition duration-300 ease-in-out transform group-hover:scale-105 group-hover:shadow-xl group-hover:rounded-lg bg-white border border-gray-200 hover:border-yellow-500">
                
                {{-- Date Section --}}
                <div class="bg-yellow-500 h-full rounded-s text-center">
                    <div class="flex flex-col text-center text-white p-2">
                        <div class="text-md font-bold">{{ \Carbon\Carbon::parse($item->created_at)->format('Y') }}</div>
                        <div class="text-2xl font-bold">{{ \Carbon\Carbon::parse($item->created_at)->format('d') }}</div>
                        <div class="text-md font-bold">{{ \Carbon\Carbon::parse($item->created_at)->format('M') }}</div>
                    </div>
                </div>

                {{-- Text Section --}}
                <div class="p-4 col-span-4 break-words sm:text-sm">
                    <div class="font-bold text-gray-900 group-hover:text-yellow-600">{{ $item->title }}</div>
                    <div class="text-gray-500 text-sm">
                        <span class="font-medium">Deadline: </span>{{ \Carbon\Carbon::parse($item->deadline)->format('m/d/Y') }}
                    </div>

                    {{-- Optional urgency badge --}}
                   @php
    $daysLeft = \Carbon\Carbon::parse($item->deadline)->diffInDays(now(), false);
@endphp

@if ($daysLeft > 0)
    <span class="inline-block mt-2 px-2 py-1 text-xs bg-orange-400 text-white rounded-full">
        ⚠️ {{ $daysLeft }} days left
    </span>
@elseif ($daysLeft === 0)
    <span class="inline-block mt-2 px-2 py-1 text-xs bg-red-500 text-white rounded-full animate-pulse">
        🔥 Today
    </span>
@else
    <span class="inline-block mt-2 px-2 py-1 text-xs bg-gray-400 text-white rounded-full">
        📌 Deadline passed
    </span>
@endif

                </div>
            </div>
        </a>
    @endforeach
</div>
