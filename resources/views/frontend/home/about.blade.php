{{-- <section class="">
    <div class="px-5 pt-10 mx-auto sm:px-6 lg:px-8 max-w-screen-2xl">

        <div class="slide-in-left">
        <div class="flex justify-between gap-x-0 items-center  ">
            <h2 class="max-sm:text-lg  text-2xl  text-primary text-left text-primary md:text-3xl font-semibold ">
                About Us
            </h2>
        </div>
        <div class="flex py-4">
            <div class="w-[10%] border border-[#ff2953]"></div>
            <div class="w-[90%] border"></div>
        </div>

    </div>


        <div class="grid  grid-cols-1 gap-8 md:grid-cols-2 fade-up">
            <div class="order-2  md:order-1">

                <p class="mt-4 text-lg text-gray-400 carttable mylist">{!! $about->description ?? '' !!}</p>

                @if (!request()->segment(1))
                    <div class="mt-8">
                        <a href="{{ route('about') }}" class="font-medium text-gray-800 hover:underline hover:text-gray-600">Know more
                            <span class="ml-2">&#8594;</span></a>
                    </div>
                @endif
            </div>
            <div class="order-1 md:order-2  md:mt-0">
                <img src="{{ asset('uploads/' . $about->mid_image ?? '') }}" alt="About Us Image"
                    class="object-cover rounded-lg shadow-md ">
            </div>
        </div>
    </div>
</section> --}}


  <section id="about" class="about py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2 animate-slide-left">
                    <div class="about-image">
                        <img src="{{ asset('uploads/' . $about->mid_image ?? '') }}" alt="About Apex BPO" class="rounded-xl shadow-2xl w-full">
                    </div>
                </div>
                <div class="md:w-1/2 animate-slide-right">
                <h2 class="text-4xl font-bold mb-6 text-secondary">
  We Help  <span id="typewriter"></span>
</h2>

<script>
  const text = " Organizations To Make Ultimate Businesses Growth Success.";
  const typewriter = document.getElementById("typewriter");
  let i = 0;

  function type() {
    if (i < text.length) {
      typewriter.innerHTML += text.charAt(i);
      i++;
      setTimeout(type, 100); // typing speed in ms
    } else {
      setTimeout(() => {  // after finishing, erase and start again
        typewriter.innerHTML = "";
        i = 0;
        type();
      }, 2000); // wait 2s before restarting
    }
  }

  type();
</script>

                    <p class="text-lg mb-4 text-gray-700">{!! $about->description ?? '' !!}</p>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-5">
                        <div class="stat-card bg-white p-4 rounded-lg shadow-md text-center transition-all duration-300 hover:shadow-lg">
                            <h3 class="text-3xl font-bold text-primary mb-1">500+</h3>
                            <p class="text-gray-600">Professionals</p>
                        </div>
                        <div class="stat-card bg-white p-4 rounded-lg shadow-md text-center transition-all duration-300 hover:shadow-lg">
                            <h3 class="text-3xl font-bold text-primary mb-1">15+</h3>
                            <p class="text-gray-600">Years Experience</p>
                        </div>
                        <div class="stat-card bg-white p-4 rounded-lg shadow-md text-center transition-all duration-300 hover:shadow-lg">
                            <h3 class="text-3xl font-bold text-primary mb-1">98%</h3>
                            <p class="text-gray-600">Client Satisfaction</p>
                        </div>
                        <div class="stat-card bg-white p-4 rounded-lg shadow-md text-center transition-all duration-300 hover:shadow-lg">
                            <h3 class="text-3xl font-bold text-primary mb-1">24/7</h3>
                            <p class="text-gray-600">Support Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
