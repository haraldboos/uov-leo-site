<div class="events-swiper  swiper mx-auto">
    <div class="swiper-wrapper my-16 ">
        @foreach ($events as $event)
            <div class="swiper-slide">
                <a href="{{ route('insevent.show', $event->id) }}" aria-label="View event {{ $event->title }}">
                    <div class="w-80 mx-auto transition duration-300 bg-white ease-in-out transform hover:-translate-y-1 hover:scale-105">
                        <div class="rounded-xl shadow hover:shadow-2xl overflow-hidden">
                            <img src="{{ $event->main_photo ? asset('storage/' . $event->main_photo) : asset('images/default.jpg') }}"
                                 alt="{{ $event->title }}"
                                 loading="lazy"
                                 class="w-full h-48 object-cover transition-opacity duration-300 hover:opacity-90">
                                 <div class="p-4 space-y-2">
                                <h3 class="text-lg font-bold text-gray-800 hover:text-[#b45309] transition">
                                {{ $event->title }}</h3>
                                <p class="text-sm text-gray-600">{{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</p>
                                <p class="text-sm text-gray-600">{{ Str::limit($event->description, 100) }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    {{-- <!-- Add these -->
    <div class="swiper-pagination mt-6"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> --}}
</div>


@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.events-swiper', {
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        slidesPerView: 1,
        spaceBetween: 16,
        breakpoints: {
            480: { slidesPerView: 1.2, spaceBetween: 20 },
            640: { slidesPerView: 2, spaceBetween: 24 },
            768: { slidesPerView: 2.5, spaceBetween: 28 },
            1024: { slidesPerView: 3, spaceBetween: 32 },
            1280: { slidesPerView: 4, spaceBetween: 36 },
        },
    });
});
</script>
@endpush
