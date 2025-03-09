<article class="testimonials-item swiper-slide shadow rounded-sm max-w-[400px] h-[300px] p-4 bg-gray-100">
    <div class="info flex items-center">
        <img src="https://thispersondoesnotexist.com" class="max-w-[80px] rounded-[50%] mr-[20px] align-middle"/>
        <div class="text-box">
            <h3 class="name text-xl uppercase font-bold text-black">{{$testimonial['name']}}</h3>
        </div>
    </div>

    <x-mary-rating deacvated class="bg-warning mt-3" :total="$testimonial['rating']" />

    <p class="mt-3 text-gray-500">
        {{$testimonial['text']}}
    </p>
</article>
