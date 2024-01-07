@extends('layouts.main')

@section('container')
    <!-- Hero -->
    <div class="relative">
        <div class="relative w-[100vw-1px] h-[calc(100vh-74px)] lg:h-[calc(100vh-200px)] xl:h-[calc(100vh-280px)] mx-auto bg-gradient-to-b from-[#75A1FF] to-white">

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
                <button id="menu-portofolio" data-menu="social media management"
                    class="relative flex-1 w-full h-full p-4 font-normal text-pb-normal-active hover:font-semibold hover:bg-[#ABD9FF] font-inter transition-all rounded-l-2xl border-r hover:after:absolute hover:after:inset-x-0 hover:after:-bottom-[70%] hover:after:mx-auto hover:after:content-[''] hover:after:w-[60px] hover:after:h-[60px] hover:after:rotate-45 hover:after:drop-shadow-none hover:after:bg-[#ABD9FF] after:delay-200 hover:after:z-0">
                    Social Media<br />Management
                </button>
                <button id="menu-portofolio" data-menu="branding identity visual"
                    class="relative flex-1 w-full h-full p-4 font-normal text-pb-normal-active hover:font-semibold hover:bg-[#ABD9FF] font-inter transition-all hover:after:absolute hover:after:inset-x-0 hover:after:-bottom-[70%] hover:after:mx-auto hover:after:content-[''] hover:after:w-[60px] hover:after:h-[60px] hover:after:rotate-45 hover:after:drop-shadow-none hover:after:bg-[#ABD9FF] after:delay-200 hover:after:z-0 border-r">
                    Branding Identity<br />Visual
                </button>
                <button id="menu-portofolio" data-menu="logo branding identity"
                    class="relative flex-1 w-full h-full p-4 font-normal text-pb-normal-active hover:font-semibold hover:bg-[#ABD9FF] font-inter transition-all hover:after:absolute hover:after:inset-x-0 hover:after:-bottom-[70%] hover:after:mx-auto hover:after:content-[''] hover:after:w-[60px] hover:after:h-[60px] hover:after:rotate-45 hover:after:drop-shadow-none hover:after:bg-[#ABD9FF] after:delay-200 hover:after:z-0 border-r">
                    Logo Branding<br />Identity
                </button>
                <button id="menu-portofolio" data-menu="website and system"
                    class="relative flex-1 w-full h-full p-4 font-normal text-pb-normal-active hover:font-semibold hover:bg-[#ABD9FF] font-inter transition-all hover:after:absolute hover:after:inset-x-0 hover:after:-bottom-[70%] hover:after:mx-auto hover:after:content-[''] hover:after:w-[60px] hover:after:h-[60px] hover:after:rotate-45 hover:after:drop-shadow-none hover:after:bg-[#ABD9FF] after:delay-200 hover:after:z-0 border-r">
                    Website And<br />System
                </button>
                <button id="menu-portofolio" data-menu="digital marketing startegy"
                    class="relative flex-1 w-full h-full p-4 font-normal text-pb-normal-active hover:font-semibold hover:bg-[#ABD9FF] font-inter transition-all hover:after:absolute hover:after:inset-x-0 hover:after:-bottom-[70%] hover:after:mx-auto hover:after:content-[''] hover:after:w-[60px] hover:after:h-[60px] hover:after:rotate-45 hover:after:drop-shadow-none hover:after:bg-[#ABD9FF] after:delay-200 hover:after:z-0 rounded-r-2xl">
                    Digital Marketing<br />Strategy
                </button>
            </div>

            <div style="opacity: 0;"
                class="toolbar absolute inset-x-0 -bottom-20 flex justify-center items-center w-full max-w-[1065px] h-[109px] mx-auto px-10 py-4 bg-[#ABD9FF] lg:rounded-2xl transition-all duration-500 z-40">
                <p class="lg:text-md xl:text-lg text-center font-inter"></p>
            </div>
        </div>
    </div>
    <!-- Akhir Hero -->

    <!-- Social Media Management -->
    <div id="social" class="relative w-full px-5 lg:px-32 xl:px-0 py-8 lg:py-11 lg:mt-14" >
        <div class="relative max-w-[1215px] w-full mx-auto lg:pb-12 border-b-2">
            <h1
                class="text-4xl text-center lg:text-left lg:text-6xl xl:text-7xl font-bold leading-none text-pb-normal-active mb-6">
                Portofolio</h1>
            <div class="flex justify-center flex-wrap gap-2 font-thin">
                <button
                    class="text-[#012A42] shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-[40px] p-3 hover:bg-black hover:text-white w-full lg:w-[233px] section-button"
                    data-target="socialmediamanagement" id="button-social" data-tabs-target="#socialmediamanagement">Social Media Management</button>
                <button
                    class="text-[#012A42] shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-[40px] p-3 hover:bg-[#012A42] hover:text-white w-full lg:w-[233px] section-button"
                    data-target="brandingidentityvisual" id="button-branding">Branding Identity Visual</button>
                <button
                    class="text-[#012A42] shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-[40px] p-3 hover:bg-[#012A42] hover:text-white w-full lg:w-[233px] section-button"
                    data-target="logobrandingidentity" id="button-logo">Logo
                    Branding Identity</button>
                <button
                    class="text-[#012A42] shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-[40px] p-3 hover:bg-[#012A42] hover:text-white w-full lg:w-[233px] section-button"
                    data-target="websitesystem" id="button-website">Website
                    and System</button>
                <button
                    class="text-[#012A42] shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-[40px] p-3 hover:bg-[#012A42] hover:text-white w-full lg:w-[233px] section-button"
                    data-target="digitalmarketingstrategy" id="button-digital">Digital
                    Marketing Strategy</button>
            </div>
            <div id="socialmediamanagement" class="content" role="tabpanel" aria-labelledby="button-social">
                <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-5 mt-6 lg:mt-8">
                    <button
                        class="group rounded-lg lg:rounded-xl row-start-1 col-start-1 col-span-2 lg:col-span-1 overflow-hidden">
                        <img src="{{ asset('storage/' . $smm[0]->image) }}"
                            class=" group-hover:scale-105 object-cover object-center transition-all duration-500"
                            alt="{{ $smm[0]->altimg }}">
                    </button>
                    @foreach ($smm->skip(1) as $social)
                        <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                            <img src="{{ asset('storage/' . $social->image) }}"
                                class=" group-hover:scale-110 object-cover object-center transition-all duration-500"
                                alt="{{ $social->altimg }}">
                        </button>
                    @endforeach
                </div>
                <div class="flex justify-center">
                    <a href="google.com">
                        <button
                            class="btn-blue px-6 lg:px-8 lg:py-3 xl:px-10 xl:py-4 mt-8 lg:mt-11 xl:mt-11 font-bold xl:text-xl rounded-full block">More
                            On Dribble
                            <span class="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="inline-block fill-black ml-1 -mt-1 w-4 h-4 p-[2px] bg-white rounded-full">
                                    <path fill-rule="evenodd"
                                        d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </button>
                    </a>
                </div>
            </div>
            <div id="brandingidentityvisual" class="content">
                <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-5 mt-6 lg:mt-8">
                    <button
                        class="group rounded-lg lg:rounded-xl row-start-1 col-start-1 col-span-2 lg:col-span-1 overflow-hidden">
                        <img src="{{ asset('storage/' . $biv[0]->image) }}"
                            class="w-full group-hover:scale-105 object-cover object-center transition-all duration-500"
                            alt="{{ $biv[0]->altimg }}">
                    </button>
                    @foreach ($biv->skip(1) as $branding)
                        <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                            <img src="{{ asset('storage/' . $branding->image) }}"
                                class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500"
                                alt="{{ $branding->altimg }}">
                        </button>
                    @endforeach
                </div>
                <div class="flex justify-center">
                    <a href="google.com">
                        <button
                            class="btn-blue px-6 lg:px-8 lg:py-3 xl:px-10 xl:py-4 mt-8 lg:mt-11 xl:mt-11 font-bold xl:text-xl rounded-full block">More
                            On Dribble
                            <span class="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="inline-block fill-black ml-1 -mt-1 w-4 h-4 p-[2px] bg-white rounded-full">
                                    <path fill-rule="evenodd"
                                        d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </button>
                    </a>
                </div>
            </div>
            <div id="logobrandingidentity" class="content">
                <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-5 mt-6 lg:mt-8">
                    <button
                        class="group rounded-lg lg:rounded-xl row-start-1 col-start-1 col-span-2 lg:col-span-1 overflow-hidden">
                        <img src="{{ asset('storage/' . $lbi[0]->image) }}"
                            class="w-full group-hover:scale-105 object-cover object-center transition-all duration-500"
                            alt="{{ $lbi[0]->altimg }}">
                    </button>
                    @foreach ($lbi->skip(1) as $logo)
                        <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                            <img src="{{ asset('storage/' . $logo->image) }}"
                                class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500"
                                alt="{{ $logo->altimg }}">
                        </button>
                    @endforeach
                </div>
                <div class="flex justify-center">
                    <a href="google.com">
                        <button
                            class="btn-blue px-6 lg:px-8 lg:py-3 xl:px-10 xl:py-4 mt-8 lg:mt-11 xl:mt-11 font-bold xl:text-xl rounded-full block">More
                            On Dribble
                            <span class="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="inline-block fill-black ml-1 -mt-1 w-4 h-4 p-[2px] bg-white rounded-full">
                                    <path fill-rule="evenodd"
                                        d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </button>
                    </a>
                </div>
            </div>
            <div id="websitesystem" class="content">
                <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-5 mt-6 lg:mt-8">
                    <button
                        class="group rounded-lg lg:rounded-xl row-start-1 col-start-1 col-span-2 lg:col-span-1 overflow-hidden">
                        <img src="{{ asset('storage/' . $ws[0]->image) }}"
                            class="w-full group-hover:scale-105 object-cover object-center transition-all duration-500"
                            alt="{{ $ws[0]->altimg }}">
                    </button>
                    @foreach ($ws->skip(1) as $website)
                        <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                            <img src="{{ asset('storage/' . $website->image) }}"
                                class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500"
                                alt="{{ $website->altimg }}">
                        </button>
                    @endforeach
                </div>
                <div class="flex justify-center">
                    <a href="google.com">
                        <button
                            class="btn-blue px-6 lg:px-8 lg:py-3 xl:px-10 xl:py-4 mt-8 lg:mt-11 xl:mt-11 font-bold xl:text-xl rounded-full block">More
                            On Dribble
                            <span class="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="inline-block fill-black ml-1 -mt-1 w-4 h-4 p-[2px] bg-white rounded-full">
                                    <path fill-rule="evenodd"
                                        d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </button>
                    </a>
                </div>
            </div>
            <div id="digitalmarketingstrategy" class="content">
                <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-5 mt-6 lg:mt-8">
                    <button
                        class="group rounded-lg lg:rounded-xl row-start-1 col-start-1 col-span-2 lg:col-span-1 overflow-hidden">
                        <img src="{{ asset('storage/' . $dms[0]->image) }}"
                            class="w-full group-hover:scale-105 object-cover object-center transition-all duration-500"
                            alt="{{ $dms[0]->altimg }}">
                    </button>
                    @foreach ($dms->skip(1) as $marketing)
                        <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                            <img src="{{ asset('storage/' . $marketing->image) }}"
                                class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500"
                                alt="{{ $marketing->altimg }}">
                        </button>
                    @endforeach
                </div>
                <div class="flex justify-center">
                    <a href="google.com">
                        <button
                            class="btn-blue px-6 lg:px-8 lg:py-3 xl:px-10 xl:py-4 mt-8 lg:mt-11 xl:mt-11 font-bold xl:text-xl rounded-full block">More
                            On Dribble
                            <span class="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="inline-block fill-black ml-1 -mt-1 w-4 h-4 p-[2px] bg-white rounded-full">
                                    <path fill-rule="evenodd"
                                        d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Social Media Management -->

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
                        class="bg-white hover:bg-slate-200 px-12 py-2 rounded-[74px] lg:text-[24px] font-medium">Contact Our Team</button>
                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Admin -->



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="module">
        $(document).ready(function() {
            $(".content").hide();
            $("#socialmediamanagement").show();
            $("#button-social").addClass("bg-[#012A42]");
            $("#button-social").addClass("text-white");
            $(".section-button").click(function() {
                var target = $(this).data("target");
                $(".content").hide();
                $(".section-button").removeClass("bg-[#012A42]");
                $(".section-button").removeClass("text-white");
                $("#" + target).show();
                $(this).addClass("bg-[#012A42]");
                $(this).addClass("text-white");
            });
        });
    </script>
@endsection
