<div class="w-screen overflow-hidden">
    <div class="swiper mySwiper w-full h-[60vh] sm:h-[70vh] md:h-[90vh] lg:h-screen">
        <div class="swiper-wrapper">
            @foreach($slides as $slide)
                <div class="swiper-slide">
                    <img src="{{ asset('storage/' . $slide) }}" alt="Slide"
                         class="w-full h-full object-cover" />
                </div>
            @endforeach
        </div>

        {{-- <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> --}}
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.mySwiper', {
            loop: true,
            effect: 'fade', //
            // fadeEffect: {
            //     crossFade: true
            // },
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
            slidesPerView: 1,
            centeredSlides: true,
        });
    });
</script>


@endpush
