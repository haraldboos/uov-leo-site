<section id="about" class="py-16 px-6 sm:px-10 lg:px-20 text-white bg-cover bg-center bg-no-repeat"
         style="background-image: url('{{ asset('storage/banr.png') }}'); background-attachment: fixed;">
    <div class="max-w-5xl mx-auto text-center">
        <h2 class="text-4xl font-bold text-white mb-6">Who We Are</h2>

        <div class="flex flex-col md:flex-row items-center gap-8 md:text-left">
            <!-- Text Column -->
              <div class="h-40">
                <img src="{{ asset('storage/leo-logo-none.png') }}" alt="Leo Club Logo" class="h-40 max-w-xs mx-auto md:mx-0 rounded-full"/>
            </div>
            <div class="">
                <p class="text-lg leading-relaxed">
                    The <span class="font-semibold text-yellow-600">Leo Club of University of Vavuniya</span> is a beacon of youth-driven change, 
                    where leadership meets compassion. United by a shared purpose, we harness energy, creativity, and service 
                    to uplift our campus and communities. From educational programs to eco-driven missions, we champion causes 
                    that matter—one initiative, one smile, and one step at a time.

                     <p class="text-lg leading-relaxed mt-6">
            Every Leo is a leader in the making, a builder of unity, and a voice for the future. 💛 Whether you're here to serve, 
            learn, or lead—we welcome you to be part of the story.
        </p>
                </p>
            </div>

          
        </div>

       

        <a href="{{ url('/projects') }}" 
           class="mt-8 inline-block bg-yellow-500 text-white font-semibold py-3 px-6 rounded shadow hover:bg-yellow-600 transition">
            Explore Our Projects
        </a>
    </div>
</section>
