@extends('layouts.main')

@section('container')
    <!-- Hero -->
    <div class="relative">
        <div
            class="relative w-[100vw-1px] h-[calc(100vh-74px)] lg:h-[calc(100vh-200px)] xl:h-[calc(100vh-280px)] mx-auto bg-gradient-to-b from-[#75A1FF] to-white">
            <img src="assets/img/portofolio/Background.png" class="absolute w-full h-full object-cover object-center z-10"
                alt="gambar hero">
            <div
                class="absolute flex flex-col justify-center h-[80%] px-6 lg:px-0 text-left inset-0 my-auto md:text-center space-y-4 lg:space-y-6 xl:space-y-7 z-20">
                <h1
                    class="lg:pb-20 text-3xl lg:text-5xl xl:text-6xl font-bold lg:leading-tight xl:leading-tight text-pb-normal-active">
                    Explore Our Portfolio of <br class="hidden md:block" /><span class="text-p-normal">Digital
                        Excellence</span></h1>
            </div>
        </div>

        <div class="hidden lg:block relative px-6 lg:px-0 lg:w-[70%] max-w-[1065px] mx-auto">
            <div
                class="relative -top-16 z-40 lg:flex w-full max-w-[1065px] h-[109px] bg-white drop-shadow-[0px_5px_20px_rgba(0,0,0,0.15)] lg:rounded-2xl">
                <div class="h-full w-full">
                    <button id="button-social" data-menu="socialmediamanagement"
                        class="section-button relative flex-1 w-full h-full p-4 font-normal text-pb-normal-active hover:font-semibold hover:bg-[#0081E6] font-inter transition-all rounded-l-2xl border-r hover:text-white">
                        Social Media<br />Marketing
                    </button>
                    <div
                        class="arrow-socialmediamanagement w-20 h-20 border-t-32 border-r-16 border-b-32 border-l-16 border-blue-900 transform rotate-45 bg-[#0081E6] mx-auto mt-[20px] hidden">
                    </div>
                </div>
                <div class="h-full w-full">
                    <button id="button-branding" data-menu="brandingidentityvisual"
                        class="section-button relative flex-1 w-full h-full p-4 font-normal text-pb-normal-active hover:font-semibold hover:bg-[#0081E6] font-inter transition-all  border-r hover:text-white">
                        Branding Identity<br />Visual
                    </button>
                    <div
                        class="arrow-brandingidentityvisual w-20 h-20 border-t-32 border-r-16 border-b-32 border-l-16 border-blue-900 transform rotate-45 bg-[#0081E6] mx-auto mt-[20px] hidden">
                    </div>
                </div>
                <div class="h-full w-full">
                    <button id="button-logo" data-menu="logobrandingidentity"
                        class="section-button relative flex-1 w-full h-full p-4 font-normal text-pb-normal-active hover:font-semibold hover:bg-[#0081E6] font-inter transition-all border-r hover:text-white">
                        Logo Branding<br />Identity
                    </button>
                    <div
                        class="arrow-logobrandingidentity w-20 h-20 border-t-32 border-r-16 border-b-32 border-l-16 border-blue-900 transform rotate-45 bg-[#0081E6] mx-auto mt-[20px] hidden">
                    </div>
                </div>
                <div class="h-full w-full">
                    <button id="button-website" data-menu="websitesystem"
                        class="section-button relative flex-1 w-full h-full p-4 font-normal text-pb-normal-active hover:font-semibold hover:bg-[#0081E6] font-inter transition-all border-r hover:text-white">
                        Website And<br />System
                    </button>
                    <div
                        class="arrow-websitesystem w-20 h-20 border-t-32 border-r-16 border-b-32 border-l-16 border-blue-900 transform rotate-45 bg-[#0081E6] mx-auto mt-[20px] hidden">
                    </div>
                </div>
                <div class="h-full w-full">
                    <button id="button-design" data-menu="design"
                        class="section-button relative flex-1 w-full h-full p-4 font-normal text-pb-normal-active hover:font-semibold hover:bg-[#0081E6] font-inter transition-all rounded-r-2xl border-r hover:text-white">
                        Design Interior &<br />Exterior
                    </button>
                    <div
                        class="arrow-design w-20 h-20 border-t-32 border-r-16 border-b-32 border-l-16 border-blue-900 transform rotate-45 bg-[#0081E6] mx-auto mt-[20px] hidden">
                    </div>
                </div>
            </div>
            <div style="opacity: 1;"
                class="toolbar absolute inset-x-0 -bottom-20 flex justify-center items-center w-full max-w-[1065px] h-[109px] mx-auto px-10 py-4 bg-[#0081E6] lg:rounded-2xl transition-all duration-500 z-40">
                <p class="texts-socialmediamanagement lg:text-md xl:text-lg text-center text-white font-inter hidden">Where
                    strategy meets engagement, and your brand's digital narrative unfolds with purpose. Driving both
                    engagement and conversion.</p>
                <p class="texts-brandingidentityvisual lg:text-md xl:text-lg text-center text-white font-inter hidden">We
                    define a visual narrative that speaks volumes about your brand's essence. Ready to convert your Leads
                    into Prospects.</p>
                <p class="texts-logobrandingidentity lg:text-md xl:text-lg text-center text-white font-inter hidden">Where
                    strategy meets engagement, and your brand's digital narrative unfolds with purpose. Driving both
                    engagement and conversion.</p>
                <p class="texts-websitesystem lg:text-md xl:text-lg text-center text-white font-inter hidden">From
                    Sleek-modern to Classic-timeless layouts, we prioritize cleanliness to ensure functionality and positive
                    UX in your system.</p>
                <p class="texts-digitalmarketing lg:text-md xl:text-lg text-center text-white font-inter hidden">our service
                    places a strong emphasis on strategic Multi-channel marketing. We calculate cohesive campaigns for
                    unified digital presence.</p>
                <p class="texts-design lg:text-md xl:text-lg text-center text-white font-inter hidden">From contemporary
                    living spaces to inviting outdoor havens, let HiSocial redefine your interior and exterior experience
                </p>
            </div>
        </div>
    </div>
    <!-- Akhir Hero -->

    <!-- Social Media Management -->
    <div id="social" class="relative w-full px-5 lg:px-32 xl:px-0 py-8 lg:py-11 lg:mt-6">
        <div class="max-w-[1065px] mx-auto lg:pb-12 border-b-2">

            <div id="socialmediamanagement" class="content" role="tabpanel" aria-labelledby="button-social">
                <h1
                    class="lg:hidden block text-center text-[24px] mt-[60px] mb-[24px] bg-[#0081E6] text-white p-2 rounded-lg">
                    Social Media Marketing</h1>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 lg:gap-5 mt-6 lg:mt-8">
                    @foreach ($smm as $social)
                        <div class="">
                            <img src="{{ asset('storage/' . $social->image) }}" alt="">
                            <p class="text-center mt-4 text-[18px]">{{ $social->description }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="flex lg:flex-row flex-col justify-center lg:gap-4">
                    <button
                        class="text-white mt-5 lg:mt-10 bg-[#008FFF] hover:bg-blue-600 shadow-3xl rounded-[30px] shadow-blue-400 w-full h-[50px] lg:h-13 lg:w-[263px] flex justify-center items-center font-medium text-[20px]">More
                        On Dribbble <img class="ml-4" src="assets/icons/arrow-bg.svg" alt=""></button>
                    <button
                        class="text-white mt-5 lg:mt-10 bg-[#008FFF] hover:bg-blue-600 shadow-3xl rounded-[30px] shadow-blue-400 w-full h-[50px] lg:h-13 lg:w-[263px] flex justify-center items-center font-medium text-[20px]">More
                        On Behance <img class="ml-4" src="assets/icons/arrow-bg.svg" alt=""></button>
                </div>
            </div>
            <div id="brandingidentityvisual" class="content" role="tabpanel" aria-labelledby="button-branding">
                <h1
                    class="lg:hidden block text-center text-[24px] mt-[60px] mb-[24px] bg-[#0081E6] text-white p-2 rounded-lg">
                    Branding Identity Visual</h1>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 lg:gap-5 mt-6 lg:mt-8">
                    @foreach ($biv as $branding)
                        <div class="">
                            <img src="{{ asset('storage/' . $branding->image) }}" alt="">
                            <p class="text-center mt-4 text-[18px]">{{ $branding->description }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="flex lg:flex-row flex-col justify-center lg:gap-4">
                    <button
                        class="text-white mt-5 lg:mt-10 bg-[#008FFF] hover:bg-blue-600 shadow-3xl rounded-[30px] shadow-blue-400 w-full h-[50px] lg:h-13 lg:w-[263px] flex justify-center items-center font-medium text-[20px]">More
                        On Dribbble <img class="ml-4" src="assets/icons/arrow-bg.svg" alt=""></button>
                    <button
                        class="text-white mt-5 lg:mt-10 bg-[#008FFF] hover:bg-blue-600 shadow-3xl rounded-[30px] shadow-blue-400 w-full h-[50px] lg:h-13 lg:w-[263px] flex justify-center items-center font-medium text-[20px]">More
                        On Behance <img class="ml-4" src="assets/icons/arrow-bg.svg" alt=""></button>
                </div>
            </div>
            <div id="logobrandingidentity" class="content" role="tabpanel" aria-labelledby="button-logo">
                <h1
                    class="lg:hidden block text-center text-[24px] mt-[60px] mb-[24px] bg-[#0081E6] text-white p-2 rounded-lg">
                    Logo Branding Identity</h1>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 lg:gap-5 mt-6 lg:mt-8">
                    @foreach ($lbi as $logo)
                        <div class="">
                            <img src="{{ asset('storage/' . $logo->image) }}" alt="">
                            <p class="text-center mt-4 text-[18px]">{{ $logo->description }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="flex lg:flex-row flex-col justify-center lg:gap-4">
                    <button
                        class="text-white mt-5 lg:mt-10 bg-[#008FFF] hover:bg-blue-600 shadow-3xl rounded-[30px] shadow-blue-400 w-full h-[50px] lg:h-13 lg:w-[263px] flex justify-center items-center font-medium text-[20px]">More
                        On Dribbble <img class="ml-4" src="assets/icons/arrow-bg.svg" alt=""></button>
                    <button
                        class="text-white mt-5 lg:mt-10 bg-[#008FFF] hover:bg-blue-600 shadow-3xl rounded-[30px] shadow-blue-400 w-full h-[50px] lg:h-13 lg:w-[263px] flex justify-center items-center font-medium text-[20px]">More
                        On Behance <img class="ml-4" src="assets/icons/arrow-bg.svg" alt=""></button>
                </div>
            </div>
            <div id="websitesystem" class="content" role="tabpanel" aria-labelledby="button-website">
                <h1
                    class="lg:hidden block text-center text-[24px] mt-[60px] mb-[24px] bg-[#0081E6] text-white p-2 rounded-lg">
                    Website & System</h1>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 lg:gap-5 mt-6 lg:mt-8">
                    @foreach ($ws as $website)
                        <div class="">
                            <img src="{{ asset('storage/' . $website->image) }}" alt="">
                            <p class="text-center mt-4 text-[18px]">{{ $website->description }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="flex lg:flex-row flex-col justify-center lg:gap-4">
                    <button
                        class="text-white mt-5 lg:mt-10 bg-[#008FFF] hover:bg-blue-600 shadow-3xl rounded-[30px] shadow-blue-400 w-full h-[50px] lg:h-13 lg:w-[263px] flex justify-center items-center font-medium text-[20px]">More
                        On Dribbble <img class="ml-4" src="assets/icons/arrow-bg.svg" alt=""></button>
                    <button
                        class="text-white mt-5 lg:mt-10 bg-[#008FFF] hover:bg-blue-600 shadow-3xl rounded-[30px] shadow-blue-400 w-full h-[50px] lg:h-13 lg:w-[263px] flex justify-center items-center font-medium text-[20px]">More
                        On Behance <img class="ml-4" src="assets/icons/arrow-bg.svg" alt=""></button>
                </div>
            </div>
            <div id="design" class="content" role="tabpanel" aria-labelledby="button-design">
                <h1
                    class="lg:hidden block text-center text-[24px] mt-[60px] mb-[24px] bg-[#0081E6] text-white p-2 rounded-lg">
                    Design Interior & Exterior</h1>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 lg:gap-5 mt-6 lg:mt-8">
                    @foreach ($di as $design)
                        <div class="">
                            <img src="{{ asset('storage/' . $design->image) }}" alt="">
                            <p class="text-center mt-4 text-[18px]">{{ $design->description }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="flex lg:flex-row flex-col justify-center lg:gap-4">
                    <button
                        class="text-white mt-5 lg:mt-10 bg-[#008FFF] hover:bg-blue-600 shadow-3xl rounded-[30px] shadow-blue-400 w-full h-[50px] lg:h-13 lg:w-[263px] flex justify-center items-center font-medium text-[20px]">More
                        On Dribbble <img class="ml-4" src="assets/icons/arrow-bg.svg" alt=""></button>
                    <button
                        class="text-white mt-5 lg:mt-10 bg-[#008FFF] hover:bg-blue-600 shadow-3xl rounded-[30px] shadow-blue-400 w-full h-[50px] lg:h-13 lg:w-[263px] flex justify-center items-center font-medium text-[20px]">More
                        On Behance <img class="ml-4" src="assets/icons/arrow-bg.svg" alt=""></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Social Media Management -->

    <!-- Testimonial -->
    <section class="mx-auto mb-20 mt-8 px-4 lg:px-0 bg-cover py-12"
        style="background-image: url('assets/img/portofolio/Background-blur.png');">
        <div class="flex flex-row gap-1 mx-auto w-fit">
            <img class="w-10" src="assets/icons/arrow-service.svg" alt="">
            <h1 class="text-[32px] font-extrabold">Testimonial</h1>
        </div>
        <h1 class="lg:text-[48px] text-[28px] w-fit text-center mx-auto">What our Happy Client say.</h1>
        <div class="swiper swiper-porto">
            <div class="swiper-wrapper">
                @foreach ($testimonials as $testi)
                <div class="swiper-slide w-fit mx-auto mt-6 flex flex-col justify-center items-center gap-6">
                    <img class="w-[300px]" src="assets/icons/star.svg" alt="">
                    <p class="lg:text-[24px] text-[18px] lg:w-[794px] w-full text-center mb-6">{{ $testi->comment }}</p>
                    <img class="w-[160px] h-[160px] rounded-full mb-6" src="{{ asset('storage/' . $testi->image_testi) }}" alt="">
                    <h1 class="text-[24px] text-[#008FFF] font-medium">{{ $testi->name }}
                    </h1>
                </div>
                @endforeach
            </div>
            <div class="mt-14">
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- Akhir Testimonial -->

    <!-- Contact Admin -->
    <section class="max-w-[1215px] mx-auto mt-8 px-4 lg:px-0">
        <div class="w-full rounded-[20px]  bg-[#002B4C] text-white relative">
            <div
                class="h-full w-[221px] bg-[#187CFF] z-0 right-0 absolute rounded-l-[100px] object-cover rounded-r-[20px] hidden lg:block">
            </div>
            <div class="flex flex-col lg:flex-row z-10 relative lg:p-12 px-12 py-6">
                <h1 class="text-[16px] lg:text-[25px] text-center lg:text-left lg:w-[50%] w-full font-medium">
                    Confused about determining the program according to your
                    company's needs?</h1>
                <div
                    class="lg:w-[50%] w-full flex justify-center mt-6 lg:mt-0 lg:justify-end mr-20 items-center text-black">
                    <button
                        class="bg-white hover:bg-slate-200 px-12 py-2 rounded-[74px] lg:text-[24px] font-medium">Contact
                        Our Team</button>
                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Admin -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'
        const swiper1 = new Swiper('.swiper-porto', {
            spaceBetween: 70,
            slidesPerView: 1,
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

        });

        var isPortofolioInitialized = false;

        function Portofolio() {
            var contentElements = document.querySelectorAll(".content");
            var socialManagement = document.getElementById("socialmediamanagement");
            var arrowSocialManagement = document.querySelectorAll(".arrow-socialmediamanagement");
            var textsSocialManagement = document.querySelectorAll(".texts-socialmediamanagement");
            var buttonSocial = document.getElementById("button-social");
            var sectionButtons = document.querySelectorAll(".section-button");

            // Sembunyikan semua konten kecuali socialmediamanagement
            for (var i = 0; i < contentElements.length; i++) {
                contentElements[i].style.display = "none";
            }
            socialManagement.style.display = "block";

            // Tampilkan arrow dan texts pada socialmediamanagement
            for (var j = 0; j < arrowSocialManagement.length; j++) {
                arrowSocialManagement[j].style.display = "block";
            }
            for (var k = 0; k < textsSocialManagement.length; k++) {
                textsSocialManagement[k].style.display = "block";
            }

            // Tambahkan kelas ke button-social
            buttonSocial.classList.add("!text-white");
            buttonSocial.classList.add("bg-[#0081E6]");

            // Tambahkan event listener untuk setiap section-button
            for (var l = 0; l < sectionButtons.length; l++) {
                sectionButtons[l].addEventListener("click", function() {
                    var target = this.getAttribute("data-menu");

                    var arrowElements = document.querySelectorAll("[class^='arrow-']");
                    for (var m = 0; m < arrowElements.length; m++) {
                        arrowElements[m].style.display = "none";
                    }

                    var textsElements = document.querySelectorAll("[class^='texts-']");
                    for (var n = 0; n < textsElements.length; n++) {
                        textsElements[n].style.display = "none";
                    }

                    for (var o = 0; o < contentElements.length; o++) {
                        contentElements[o].style.display = "none";
                    }
                    for (var p = 0; p < sectionButtons.length; p++) {
                        sectionButtons[p].classList.remove("bg-[#0081E6]");
                        sectionButtons[p].classList.remove("!text-white");
                    }

                    document.getElementById(target).style.display = "block";
                    this.classList.add("bg-[#0081E6]");
                    this.classList.add("!text-white");
                    document.querySelector(".arrow-" + target).style.display = "block";
                    document.querySelector(".texts-" + target).style.display = "block";
                });
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            window.addEventListener("resize", function() {
                if (window.innerWidth > 1024 && !isPortofolioInitialized) {
                    Portofolio();
                    isPortofolioInitialized = true;
                } else if (window.innerWidth <= 1024) {
                    var contentElements = document.querySelectorAll(".content");
                    for (var i = 0; i < contentElements.length; i++) {
                        contentElements[i].style.display = "block";
                    }
                    isPortofolioInitialized = false;
                }
            });

            Portofolio();
        });
    </script>
@endsection
