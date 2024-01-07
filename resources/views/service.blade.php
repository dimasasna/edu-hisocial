@extends('layouts.main')

@section('container')
    <!-- Hero -->
    <div class="relative w-[100vw-1px] h-[calc(100vh-74px)] lg:h-screen mx-auto lg:mb-[200px] ">
        <div class="w-full h-full overflow-hidden">
            <img src="assets/img/service/bg.png" class="relative w-full h-full object-cover object-center z-10"
                alt="gambar hero">
            <div
                class="absolute flex flex-col justify-center h-[80%] px-6 lg:px-0 inset-0 -top-[140px] lg:-top-20 my-auto text-center space-y-5 lg:space-y-6 xl:space-y-7 z-20">
                <span
                    class="px-6 py-1 lg:w-[400px] lg:py-1 xl:w-[480px] mx-auto xl:py-2 lg:text-center lg:text-lg xl:text-xl bg-[rgba(255,255,255,0.6)] border lg:border-2 rounded-full">Improve
                    Your Business With us</span>
                <h1
                    class="lg:pb-1 text-3xl lg:text-5xl xl:text-6xl font-bold lg:leading-tight font-plus-jakarta-sans xl:leading-tight text-pb-normal-active">
                    Designing Success With Our<br/><span
                        class="text-p-normal font-semibold">Digital Mastery</span></h1>
                    <div class="flex justify-center items-center">
                        <img class="lg:w-96 w-56 lg:-mt-16 -mt-10" src="assets/icons/gariskuning.svg" alt="">
                    </div>
                <p
                    class="md:w-[76%] md:mx-auto font-normal leading-relaxed lg:leading-relaxed xl:leading-relaxed text-md lg:text-2xl xl:text-3xl text-[rgba(82,82,91,1)]">
                    All our dedication is carried out with heart and research so that our <br />partners achieve the goals
                    of the company.</p>
                <div class="space-x-2 lg:space-x-4">
                    <button
                        class="btn-blue md:w-auto lg:px-8 lg:py-3 xl:px-12 xl:py-4 font-normal xl:text-xl rounded-xl">Join
                        Our Partner</button>
                    <button
                        class="btn-blue md:w-auto lg:px-8 lg:py-3 xl:px-12 xl:py-4 font-normal xl:text-xl bg-[#E9C927] rounded-xl">Learn
                        More</button>
                </div>
            </div>
        </div>
        <div class="relative inset-x-0 -top-[16%] lg:-top-[20%] w-full h-auto overflow-hidden z-30">
            <img src="assets/img/service/element.svg" class="w-full h-auto scale-150 lg:scale-100" alt="element">
        </div>
    </div>
    <!-- Akhir Hero -->

    <!-- Service -->
    <div class="max-w-[1215px] mx-auto mt-8 px-4 lg:px-0 mb-[70px]">
        <div class="w-full border-b border-black py-2 flex flex-row items-center gap-2">
            <img src="assets/icons/arrow-service.svg" alt="">
            <h1 class="text-[20px] font-extrabold">SERVICES</h1>
        </div>
        <h1 class="lg:text-[36px] text-[24px] font-bold mt-8 text-center">Find out how we can help you succeed with our full range of services.</h1>
        <div class="flex flex-row flex-wrap mt-10 justify-center items-center gap-6">
            <div class="w-[344px] h-[488px] shadow-xl border-2 rounded-[20px] p-6">
                <img class="-ml-4 mb-3" src="assets/icons/icon-scm.svg" alt="">
                <h1 class="text-[24px] ">Social Media Management</h1>
                <p class="leading-tight mt-2">We specialize in crafting and executing strategies to foster meaningful connections with your target audience.</p>
                <div class="divide-y divide-slate-700 mt-2  flex flex-col justify-end">
                    <p class="py-2 opacity-60">Increased engagement</p>
                    <p class="py-2 opacity-60">Brand Awareness</p>
                    <p class="py-2 opacity-60">Audience growth</p>
                    <button class="w-full p-2 bg-[#008FFF] rounded-[37px] text-[18px] text-white font-medium mt-4">Contact Us</button>
                </div>
            </div>
            <div class="w-[344px] h-[488px] shadow-xl border-2 rounded-[20px] p-6">
                <img class="-ml-4 mb-3" src="assets/icons/icon-biv.svg" alt="">
                <h1 class="text-[24px] ">Branding Identity Visual</h1>
                <p class="leading-tight mt-2">Seeking refresh or starting from scratch, we are here for the intricate process of discovering your personalized visual identity.</p>
                <div class="divide-y divide-slate-700 mt-2  flex flex-col justify-end">
                    <p class="py-2 opacity-60">Target Behavior</p>
                    <p class="py-2 opacity-60">Optimation Branding</p>
                    <p class="py-2 opacity-60">Rating, Review, Recommendation</p>
                    <button class="w-full p-2 bg-[#008FFF] rounded-[37px] text-[18px] text-white font-medium mt-4">Contact Us</button>
                </div>
            </div>
            <div class="w-[344px] h-[488px] shadow-xl border-2 rounded-[20px] p-6">
                <img class="-ml-4 mb-3" src="assets/icons/icon-lbi.svg" alt="">
                <h1 class="text-[24px] ">Logo Branding Identity</h1>
                <p class="leading-tight mt-2">We delve deep into understanding your brand personality, values, and unique selling propositions.</p>
                <div class="divide-y divide-slate-700 mt-7 h-fit flex flex-col justify-end">
                    <p class="py-2 opacity-60">Increased engagement</p>
                    <p class="py-2 opacity-60">Brand Awareness</p>
                    <p class="py-2 opacity-60">Audience growth</p>
                    <button class="w-full p-2 bg-[#008FFF] rounded-[37px] text-[18px] text-white font-medium mt-4">Contact Us</button>
                </div>
            </div>
            <div class="w-[344px] h-[488px] shadow-xl border-2 rounded-[20px] p-6">
                <img class="-ml-4 mb-3" src="assets/icons/icon-ws.svg" alt="">
                <h1 class="text-[24px] ">Website And System </h1>
                <p class="leading-tight mt-2">We offer diverse design templates, prioritizing clean, intuitive interfaces that ensure an optimal user experience.</p>
                <div class="divide-y divide-slate-700 mt-2 h-fit flex flex-col justify-end">
                    <p class="py-2 opacity-60">Company Profile</p>
                    <p class="py-2 opacity-60">E-Commerce</p>
                    <p class="py-2 opacity-60">front-end & Mobile App</p>
                    <button class="w-full p-2 bg-[#008FFF] rounded-[37px] text-[18px] text-white font-medium mt-4">Contact Us</button>
                </div>
            </div>
            <div class="w-[344px] h-[488px] shadow-xl border-2 rounded-[20px] p-6">
                <img class="-ml-4 mb-3" src="assets/icons/icon-dms.svg" alt="">
                <h1 class="text-[24px] ">Digital Marketing Strategy</h1>
                <p class="leading-tight mt-2">Our experts leverage cutting-edge analytics tools for a continuously optimized effort and maximum impact.</p>
                <div class="divide-y divide-slate-700 mt-7 h-fit flex flex-col justify-end">
                    <p class="py-2 opacity-60">Social Media Marketing</p>
                    <p class="py-2 opacity-60">SEO & SEM</p>
                    <p class="py-2 opacity-60">Influencer Marketing</p>
                    <button class="w-full p-2 bg-[#008FFF] rounded-[37px] text-[18px] text-white font-medium mt-4">Contact Us</button>
                </div>
            </div>
            <div class="w-[344px] h-[488px] shadow-xl border-2 rounded-[20px] p-6">
                <img class="-ml-4 mb-3" src="assets/icons/icon-ied.svg" alt="">
                <h1 class="text-[24px] ">Interior & Exterior Design</h1>
                <p class="leading-tight mt-2">We create designs that don't just look good on paper but seamlessly integrate into your daily operations, solving real-world challenges.
                </p>
                <div class="divide-y divide-slate-700 mt-2 h-fit flex flex-col justify-end">
                    <p class="py-2 opacity-60">Commercial Design</p>
                    <p class="py-2 opacity-60">Furnishing and Styling</p>
                    <p class="py-2 opacity-60">Exterior Façade Design</p>
                    <button class="w-full p-2 bg-[#008FFF] rounded-[37px] text-[18px] text-white font-medium mt-4">Contact Us</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Service -->

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
@endsection
