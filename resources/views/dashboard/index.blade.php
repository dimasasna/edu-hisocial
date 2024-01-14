@extends('layout-admin.index')
@section('container')
    <div class="w-full flex lg:flex-row flex-col gap-4">
        <!--  Users  -->
        <div class="flex w-full items-center bg-white border rounded-sm overflow-hidden shadow">
            <div class="p-4 bg-green-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                    </path>
                </svg></div>
            <div class="px-4 text-gray-700">
                <h3 class="text-sm tracking-wider">Total Users</h3>
                <p class="text-3xl">{{ $users->count() }}</p>
            </div>
        </div>
        <!--  Users  -->
        <!--  Portofolio -->
        <div class="flex w-full items-center bg-white border rounded-sm overflow-hidden shadow">
            <div class="p-4 bg-blue-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2">
                    </path>
                </svg></div>
            <div class="px-4 text-gray-700">
                <h3 class="text-sm tracking-wider">Total Portfolios</h3>
                <p class="text-3xl">{{ $portfolios->count() }}</p>
            </div>
        </div>
        <!--  Portofolio  -->
        <!--  Catgeory  -->
        <div class="flex w-full items-center bg-white border rounded-sm overflow-hidden shadow">
            <div class="p-4 bg-yellow-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-12 w-12 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                </svg>
            </div>
            <div class="px-4 text-gray-700">
                <h3 class="text-sm tracking-wider">Total Category</h3>
                <p class="text-3xl">{{ $categories->count() }}</p>
            </div>
        </div>
        <!--  Category  -->
        <!--  Testimonial  -->
        <div class="flex w-full items-center bg-white border rounded-sm overflow-hidden shadow">
            <div class="p-4 bg-red-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2">
                    </path>
                </svg>
            </div>
            <div class="px-4 text-gray-700">
                <h3 class="text-sm tracking-wider">Total Testimonial</h3>
                <p class="text-3xl">{{ $categories->count() }}</p>
            </div>
        </div>
        <!--  Testimonial  -->
    </div>
    <div>
        {{-- <img class="w-[500px]" src="{{ asset('storage/' . $lgb[0]->image) }}" alt="">
        @foreach ($lgb->skip(1) as $l)
            <img class="w-[200px]" src="{{ asset('storage/' . $l->image) }}" alt="">
        @endforeach --}}
    </div>
@endsection
