<div class="projects-swiper swiper mx-auto">
    <div class="swiper-wrapper my-16">
        @foreach ($projects as $project)
            <div class="swiper-slide">
                <a href="{{ route('insprojects.show', $project->id) }}" aria-label="View project {{ $project->title }}" class="block h-full">
                    <div class="w-80 mx-auto transition duration-300 bg-white ease-in-out transform hover:-translate-y-1 hover:scale-105">
                        <div class="rounded-xl shadow hover:shadow-2xl overflow-hidden h-[420px] flex flex-col">
                            
                            <!-- Fixed image height -->
                            <div class="h-48 w-full overflow-hidden">
                                <img src="{{ $project->main_photo ? asset('storage/' . $project->main_photo) : asset('images/default.jpg') }}"
                                     alt="{{ $project->title }}"
                                     loading="lazy"
                                     class="w-full h-full object-cover object-center transition-opacity duration-300 hover:opacity-90">
                            </div>

                            <!-- Fixed body that fills remaining space -->
                            <div class="flex-1 p-4 flex flex-col gap-2">
                                <!-- Reserve space for up to 2 lines -->
                                <h3 class="text-lg font-bold text-gray-800 hover:text-[#b45309] transition leading-tight line-clamp-2 min-h-[3rem]">
                                    {{ $project->title }}
                                </h3>

                                <!-- Reserve space for 1 line (truncate) -->
                                <p class="text-sm text-gray-600 truncate leading-snug min-h-[1.25rem]">
                                    {{ $project->location ?? 'Location not specified' }}
                                </p>

                                <!-- Stick date to bottom with reserved height -->
                                <div class="mt-auto">
                                    <p class="text-sm text-gray-600 leading-snug min-h-[1.25rem]">
                                        {{ $project->project_date ? \Carbon\Carbon::parse($project->project_date)->format('M d, Y') : 'Date not available' }}
                                    </p>
                                </div>
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

@push('styles')
<style>
/* Ensure slides don’t auto-stretch; the card controls height */
.projects-swiper .swiper-slide { height: auto; display: flex; }
.projects-swiper .swiper-slide > a { flex: 1; display: flex; }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.projects-swiper', {
        loop: true,
        autoplay: { delay: 3500, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', clickable: true, dynamicBullets: true },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        slidesPerView: 1,
        spaceBetween: 16,
        breakpoints: {
            480: { slidesPerView: 1.2, spaceBetween: 20 },
            640: { slidesPerView: 2, spaceBetween: 24 },
            768: { slidesPerView: 2.5, spaceBetween: 28 },
            1024: { slidesPerView: 3, spaceBetween: 32 },
            1280: { slidesPerView: 4, spaceBetween: 36 },
        },
        observer: true,
        observeParents: true,
    });
});
</script>
@endpush
