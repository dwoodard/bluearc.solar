<main x-data="app()" wire:key="power-outage" wire:ignore>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/mask@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


    <form wire:submit="save">
        <div class="swiper-container" x-ref="container">




            <div class="swiper-wrapper noSwipingClass">
                {{-- Zip --}}
                <section class="swiper-slide">
                    <div
                         class="relative isolate h-screen overflow-hidden bg-gray-900 bg-cover bg-no-repeat px-6 py-24 sm:py-32 lg:px-8">
                        <img style=" filter: brightness(40%);" src="images/power-outage-home.jpg" alt=""
                             class="absolute inset-0 -z-10 h-full w-full object-cover">
                        <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl"
                             aria-hidden="true">
                            <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                                 style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                            </div>
                        </div>
                        <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
                             aria-hidden="true">
                            <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                                 style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                            </div>
                        </div>
                        <div class="mx-auto max-w-2xl text-center">
                            <div class="container mx-auto px-4">
                                <div class="bg-gradient-green rounded-3xl px-8 py-20 text-center">
                                    <div class="mx-auto md:max-w-xl">
                                        <h2
                                            class="font-heading mb-12 text-4xl font-black tracking-tight text-white md:text-5xl">
                                            Keep the lights on, even during power outages
                                        </h2>
                                        <p class="text-white">
                                            Rechargeable battery systems keep
                                            the power running so you stay uninterrupted during outages
                                        </p>
                                        <div class="-m-3 my-2 flex flex-col items-center">
                                            <div class="w-full p-3 md:flex-1">

                                                <input x-model="zip" x-mask="99999"
                                                       class="rounded-full bg-white px-6 py-4 text-center font-bold text-gray-500 placeholder-gray-500 outline-none focus:ring-4 focus:ring-blue-200"
                                                       type="phone" placeholder="Zip Code">

                                                {{-- error --}}
                                                @error("zip")
                                                    <div
                                                         class="mx-auto mt-2 w-64 rounded-md bg-white bg-opacity-80 text-sm text-red-500">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                            </div>

                                            <div class="w-full p-3 md:w-auto">
                                                <div class="-m-2 flex flex-wrap justify-center">
                                                    <div class="w-full p-2 md:w-auto">

                                                        <a x-on:click="
                                                          if(zip.length == 5){
                                                            swiper.slideNext();
                                                        }"
                                                           class="block w-full rounded-full bg-green-600 px-8 py-3.5 text-center text-lg font-bold text-white hover:bg-green-600 focus:ring-4 focus:ring-blue-200"
                                                           href="#">See What I Can Save</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- Own Hom --}}
                <section class="swiper-slide">
                    <div class="h-screen">
                        <div class="bg-white px-6 py-24 sm:py-32 lg:px-8">

                            <div class="mx-auto max-w-2xl text-center">
                                <div>
                                    Step 1:
                                </div>
                                <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                                    Do you own your home?
                                </h2>
                                <div class="flex justify-center p-10">

                                    <div class="text-grey-300 flex flex-col items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             class="h-24 w-24 stroke-current text-gray-500 hover:text-green-600"
                                             name="own_home-yes" x-on:click="own_home = true;swiper.slideNext();">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <label for="own_home-yes">Yes</label>
                                    </div>
                                    <div class="text- flex flex-col items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             class="h-24 w-24 stroke-current text-gray-500 hover:text-red-600"
                                             x-on:click="own_home = false;swiper.slideNext();">

                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <label for="">No</label>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- Electric Bill --}}
                <section class="swiper-slide">
                    <div class="h-screen">
                        <div class="bg-white px-6 py-24 sm:py-32 lg:px-8">
                            <div class="mx-auto max-w-2xl text-center">
                                <div>
                                    Step 2:
                                </div>
                                <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                                    What is your average monthly electric bill?
                                </h2>
                                <div class="flex flex-col justify-center p-10">

                                    <div class="m-auto flex h-32 w-64 items-center justify-center">
                                        <div class="relative min-w-full py-1">
                                            <div class="slidecontainer noSwipingClass">
                                                <p class="text-center text-2xl font-bold text-gray-900">
                                                    I spend: $<span x-text="avg_electric_bill_monthly"></span>
                                                </p>


                                                <input type="range" x-model="avg_electric_bill_monthly" min="50"
                                                       max="800" class="w-full">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full p-3 md:w-auto">
                                        <div class="-m-2 flex flex-wrap justify-center">
                                            <div class="w-full p-2 md:w-auto">
                                                <a x-on:click="  if(avg_electric_bill_monthly > 0){
                                                    swiper.slideNext();
                                                }"
                                                   class="block w-full rounded-full bg-green-600 px-8 py-3.5 text-center text-lg font-bold text-white hover:bg-green-600 focus:ring-4 focus:ring-blue-200"
                                                   href="#">Next</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- What email --}}
                <section class="swiper-slide">
                    <div class="h-screen">
                        <div class="bg-white px-6 py-24 sm:py-32 lg:px-8">
                            <div class="mx-auto max-w-2xl text-center">
                                <div>
                                    Step 3:
                                </div>
                                <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                                    Where can we send your free solar quote?
                                </h2>
                                <div class="flex flex-col justify-center p-10">

                                    {{-- input email --}}
                                    <div class="text-grey-300 flex flex-col items-center">
                                        <input x-model="email"
                                               class="rounded-full bg-white px-6 py-4 text-center font-bold text-gray-500 placeholder-gray-500 outline-none focus:ring-4 focus:ring-blue-200"
                                               type="email" placeholder="Email">
                                    </div>

                                    <div class="w-full p-3 md:w-auto">
                                        <div class="-m-2 flex flex-wrap justify-center">
                                            <div class="w-full p-2 md:w-auto">

                                                <a x-on:click="  if(email.length > 0){ swiper.slideNext();$wire.save() }"
                                                   class="block w-full rounded-full bg-green-600 px-8 py-3.5 text-center text-lg font-bold text-white hover:bg-green-600 focus:ring-4 focus:ring-blue-200"
                                                   href="#">Next</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- Who is this for --}}
                <section class="swiper-slide">
                    <div class="h-screen">
                        <div class="bg-white px-6 py-24 sm:py-32 lg:px-8">
                            <div class="mx-auto max-w-2xl text-center">
                                <div>
                                    Step 3:
                                </div>
                                <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                                    Who is this for?
                                </h2>
                                <div class="flex flex-col justify-center px-20 py-10">

                                    {{-- input email --}}
                                    <div
                                         class="text-grey-300 mx-auto flex w-full flex-row items-center justify-between">
                                        <input x-model="first_name" name="first_name"
                                               class="rounded-full bg-white px-6 py-4 text-center font-bold text-gray-500 placeholder-gray-500 outline-none focus:ring-4 focus:ring-blue-200"
                                               type="text" placeholder="First Name">
                                        <input x-model="last_name" name="last_name"
                                               class="rounded-full bg-white px-6 py-4 text-center font-bold text-gray-500 placeholder-gray-500 outline-none focus:ring-4 focus:ring-blue-200"
                                               type="text" placeholder="Last Name">
                                    </div>

                                    <div class="w-full py-10 md:w-auto">
                                        <div class="-m-2 flex flex-wrap justify-center">
                                            <div class="w-full p-2 md:w-auto">
                                                <a x-on:click="  if(first_name.length > 0 && last_name.length > 0){ swiper.slideNext();$wire.save() }"
                                                   class="block w-full rounded-full bg-green-600 px-8 py-3.5 text-center text-lg font-bold text-white hover:bg-green-600 focus:ring-4 focus:ring-blue-200"
                                                   href="#">Next</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- Phone Number --}}
                <section class="swiper-slide">
                    <div class="h-screen">
                        <div class="bg-white px-6 py-24 sm:py-32 lg:px-8">
                            <div class="mx-auto max-w-2xl text-center">
                                <div>
                                    Step 4:
                                </div>
                                <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                                    Enter Phone Number
                                </h2>
                                <div class="flex flex-col justify-center p-10">

                                    <div
                                         class="text-grey-300 mx-auto flex w-full flex-col items-center justify-between">
                                        <input x-model="phone"
                                               class="rounded-full bg-white px-6 py-4 text-center font-bold text-gray-500 placeholder-gray-500 outline-none focus:ring-4 focus:ring-blue-200"
                                               type="text" placeholder="Phone">
                                    </div>

                                    <div class="text-grey-300 flex flex-row items-center justify-center py-10">
                                        <input x-model="was_refered"
                                               class="rounded-full bg-white px-6 py-4 text-center font-bold text-gray-500 placeholder-gray-500 outline-none focus:ring-4 focus:ring-blue-200"
                                               type="checkbox" placeholder="Phone">
                                        <label
                                               class="ml-2 rounded-full bg-white text-center font-bold text-gray-500 placeholder-gray-500 outline-none focus:ring-4 focus:ring-blue-200"
                                               for="">
                                            I was referred by a friend or family member
                                        </label>
                                    </div>

                                    <div class="w-full py-10 md:w-auto">
                                        <div class="-m-2 flex flex-wrap justify-center">
                                            <div class="w-full p-2 md:w-auto">
                                                <a x-on:click="  if(!!phone.length){ swiper.slideNext();$wire.save() }"
                                                   class="block w-full rounded-full bg-green-600 px-8 py-3.5 text-center text-lg font-bold text-white hover:bg-green-600 focus:ring-4 focus:ring-blue-200"
                                                   href="#">Next</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- Schedule a call --}}
                <section class="swiper-slide">
                    <div class="h-screen w-full">
                        <div class="bg-white px-3 py-24 sm:py-32">
                            <div class="text-center">
                                <div>
                                    Step 5:
                                </div>
                                <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                                    Let's talk about <br> <span class="italic underline">your</span> solar savings
                                </h2>
                                <p class="my-10">
                                    Select how you would like to move forward
                                </p>
                                <div class="mx-auto flex w-[50%] justify-between">


                                    <div class="py-10">
                                        <div class="-m-2 flex flex-wrap justify-center">
                                            <div class="w-full p-2 md:w-auto">
                                                <a class="block w-full rounded-full bg-green-600 px-8 py-3.5 text-center text-lg font-bold text-white hover:bg-green-600 focus:ring-4 focus:ring-blue-200"
                                                   href="#">Phone</a>

                                                <p>
                                                    A friendly and knowledgeable solar professional is ready to spend a
                                                    few minutes with you
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full py-10 md:w-auto">
                                        <div class="-m-2 flex flex-wrap justify-center">
                                            <div class="w-full p-2 md:w-auto">
                                                <a class="block w-full rounded-full bg-green-600 px-8 py-3.5 text-center text-lg font-bold text-white hover:bg-green-600 focus:ring-4 focus:ring-blue-200"
                                                   href="#">Calendar</a>

                                                <p>
                                                    Unable to speak right now? No problem. Select Calendar to find a
                                                    time that works for you.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <iframe src="https://ghl_api.leadweb.pro/widget/booking/WS4Fg84uv4d5mNOxv41r" width="100%" height="700" frameborder="0"></iframe> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>


            <div class="swiper-pagination"></div>
            <div class="swiper-scrollbar"></div>

        </div>
    </form>


    <div class="prev-next-buttons hidden">
        <div class="absolute inset-y-0 left-0 z-10 flex items-center">
            <button @click="swiper.slidePrev()"
                    class="-ml-2 flex h-10 w-10 items-center justify-center rounded-full bg-white shadow focus:outline-none lg:-ml-4">
                <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left h-6 w-6">
                    <path fill-rule="evenodd"
                          d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>


        <div class="absolute inset-y-0 right-0 top-0 z-10 flex items-center p-10">
            <button @click="swiper.slideNext()"
                    class="-mr-2 flex h-10 w-10 items-center justify-center rounded-full bg-white shadow focus:outline-none lg:-mr-4">
                <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right h-6 w-6">
                    <path fill-rule="evenodd"
                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

    </div>


    <script>
        function app() {
            return {
                swiper: null,
                init: init,

                zip: @entangle("zip"),
                first_name: @entangle("first_name"),
                last_name: @entangle("last_name"),
                email: @entangle("email"),
                phone: @entangle("phone"),
                credit_score: @entangle("credit_score"),
                avg_electric_bill_monthly: @entangle("avg_electric_bill_monthly"),
                was_refered: @entangle("was_refered"),
                own_home: @entangle("own_home"),

            }
        }

        function init() {

            //console log all the data in alpine


            this.swiper = new Swiper(this.$refs.container, {

                direction: 'horizontal',
                initialSlide: 0,
                slidesPerView: 1,
                spaceBetween: 0,
                loop: false,
                speed: 1000,
                noSwiping: true,

                // no dragging
                draggable: false,

                // no touch
                touchStartPreventDefault: false,


                allowTouchMove: false,

                pagination: {
                    el: '.swiper-pagination',
                    clickable: false,
                    enabled: false,
                },
                scrollbar: {
                    el: '.swiper-scrollbar',
                    enabled: false,
                    draggable: false
                },
                mousewheel: {
                    enabled: false,

                },
                freeMode: false,
            })

            //in alpine call swiper.slideNext() to go to next slide
            swiper.lockSwipes();

        }
    </script>

    <style>
        body {
            overflow: hidden;
        }
    </style>
</main>
