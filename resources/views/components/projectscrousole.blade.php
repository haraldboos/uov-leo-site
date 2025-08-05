<div class="projects-swiper swiper mx-auto ">
    <div class="swiper-wrapper py-10">
        @foreach ($projects as $project)
        <div class="swiper-slide">
            <div class="w-80 mx-auto transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                <div class=" rounded-xl shadow hover:shadow-2xl overflow-hidden">
                    <img src="{{ asset('storage/' . $project->main_photo) }}"
                         alt="{{ $project->title }}"
                         class="w-full h-48 object-cover transition-opacity duration-300 hover:opacity-90">
                    <div class="p-4 space-y-1">
                        <h3 class="text-lg font-bold ">{{ $project->title }}</h3>
                        <p class="text-sm ">{{ $project->location }}</p>
                        <p class="text-sm ">{{ \Carbon\Carbon::parse($project->project_date)->format('M d, Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- <div class="swiper-pagination mt-4"></div> --}}
</div>


@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
       new Swiper('.projects-swiper', {
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