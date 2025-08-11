<div class="container mx-auto my-8 px-4 sm:px-6 lg:px-20">
    @foreach ($announcements as $item)
        <a href="{{ route('insanno.show', $item->id) }}" class="group block mb-6">
            <div class="grid grid-cols-5 items-center rounded-lg overflow-hidden transition transform group-hover:scale-[1.02] group-hover:shadow-xl bg-white border border-gray-200 ">

                {{-- Date block --}}
                <div class="bg-[#fbbf24] text-white text-center h-full col-span-1 py-6 flex flex-col justify-center">
                    <div class="text-2xl font-extrabold leading-none">
                        {{ $item->created_at->format('d') }}
                    </div>
                    <div class="text-base font-semibold uppercase">
                        {{ $item->created_at->format('M') }}
                    </div>
                    <div class="text-xs font-light mt-1">
                        {{ $item->created_at->format('Y') }}
                    </div>
                </div>

                {{-- Content block --}}
                <div class="p-6 col-span-4 space-y-2">
                    <h3 class="text-xl font-semibold text-gray-800 transition group-hover:text-[#b45309]">
                        {{ $item->title }}
                    </h3>

                    @if ($item->deadline)
                        <p class="text-sm text-gray-600">
                            <span class="font-medium text-gray-700">Deadline:</span>
                            {{ \Carbon\Carbon::parse($item->deadline)->format('F j, Y') }}
                        </p>
                    @endif

                    {{-- Urgency badge --}}
                    @php $daysLeft = \Carbon\Carbon::parse($item->deadline)->diffInDays(now(), false); @endphp
                    @if ($daysLeft > 0)
                        <span class="inline-block mt-1 px-3 py-1 text-xs bg-orange-400 text-white rounded-full">
                            {{ \Carbon\Carbon::parse($item->deadline)->diffForHumans() }} remaining
                        </span>
                    @elseif ($daysLeft === 0)
                        <span class="inline-block mt-1 px-3 py-1 text-xs bg-red-500 text-white rounded-full animate-pulse">
                            Deadline is Today
                        </span>
                    @else
                        @php $deadlineCarbon = \Carbon\Carbon::parse($item->deadline); @endphp
                        <span class="inline-block mt-1 px-3 py-1 text-xs bg-gray-400 text-white rounded-full">
                            Closed {{ $deadlineCarbon->format('F j, Y') }} — {{ $deadlineCarbon->diffForHumans() }}
                        </span>
                    @endif
                </div>
            </div>
        </a>
    @endforeach
</div>
