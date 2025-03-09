<div class="mt-4">
    <div class="testimonials-slider js-testimonials-slider swiper">
        <div class="swiper-wrapper">
            @foreach($testimonials as $testimonial)
                <livewire:components.testimonial-card :testimonial="$testimonial"/>
            @endforeach
        </div>
    </div>
{{--    <div class="swiper-pagination js-testimonials-pagination"></div>--}}
</div>

<script>
    const swiper = new Swiper('.js-testimonials-slider', {
        grabCursor: true,
        spaceBetween: 30,
        // pagination: {
        //     el: '.js-testimonials-pagination',
        //     clickable: true,
        // },
        breakpoints: {
            767: {
                slidePerView: 4
            }
        }
    })
</script>
