<div class="projects-swiper  swiper mx-auto">
    <div class="swiper-wrapper  my-16">
        @foreach ($projects as $project)
            <div class="swiper-slide">
                <a href="{{ route('insprojects.show', $project->id) }}" aria-label="View project {{ $project->title }}">
                    <div class="w-80 mx-auto transition duration-300 bg-white ease-in-out transform hover:-translate-y-1 hover:scale-105">
                        <div class="rounded-xl shadow hover:shadow-2xl overflow-hidden">
                            <img src="{{ $project->main_photo ? asset('storage/' . $project->main_photo) : asset('images/default.jpg') }}"
                                 alt="{{ $project->title }}"
                                 loading="lazy"
                                 class="w-full h-48 object-cover transition-opacity duration-300 hover:opacity-90">
                            <div class="p-4 space-y-2">
                                <h3 class="text-lg font-bold text-gray-800 hover:text-[#b45309] transition">
                                    {{ $project->title }}
                                </h3>
                                <p class="text-sm text-gray-600">{{ $project->location }}</p>
                                <p class="text-sm text-gray-600">{{ \Carbon\Carbon::parse($project->project_date)->format('M d, Y') }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    {{-- Optional Swiper controls --}}
    {{-- <div class="swiper-pagination mt-6"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> --}}
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.projects-swiper', {
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