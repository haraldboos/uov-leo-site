<div class="events-swiper swiper mx-auto ">
    <div class="swiper-wrapper py-8">
        @foreach ($events as $event)
            <div class="swiper-slide">
                <div class="w-80 mx-auto transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                    <div class="bg-white rounded-xl shadow hover:shadow-2xl overflow-hidden">
                        <img src="{{ asset('storage/' . $event->main_photo) }}"
                             alt="{{ $event->title }}"
                             class="w-full h-48 object-cover transition-opacity duration-300 hover:opacity-90">
                        <div class="p-4 space-y-1">
                            <h3 class="text-lg font-bold text-gray-800">{{ $event->title }}</h3>
                            <p class="text-sm text-gray-600">{{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</p>
                            <p class="text-sm text-gray-500">{{ Str::limit($event->description, 100) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
{{-- 
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination mt-4"></div> --}}
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
new Swiper('.events-swiper', {
    loop: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    slidesPerView: 3,
    spaceBetween: 30,
    breakpoints: {
        640: { slidesPerView: 2 },
        768: { slidesPerView: 3 },
        1024: { slidesPerView: 4 },
    },
});


    });
</script>


@endpush
