@extends('layout-admin.index')

@section('container')
    @if (session()->has('success'))
        <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-100" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                {{ session('success') }}
            </div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8  :bg-gray-800  :text-green-400  :hover:bg-gray-700"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif

    {{-- Modal Add --}}
    <div class="w-full flex flex-col-reverse lg:flex-row justify-between items-center mb-4 gap-4">
        <form class="lg:w-[600px] w-full" action="/register">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only  :text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500  :text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  :bg-gray-700  :border-gray-600  :placeholder-gray-400  :text-white  :focus:ring-blue-500  :focus:border-blue-500"
                    placeholder="Search Users" name="search" value="{{ request('search') }}">
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2  :bg-blue-600  :hover:bg-blue-700  :focus:ring-blue-800">Search</button>
            </div>
        </form>

        <!-- Modal toggle -->
        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
            class="block h-auto w-full lg:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 text-xs focus:outline-none focus:ring-blue-300 font-medium rounded-lg lg:text-sm px-5 py-2.5 text-center"
            type="button">
            Add Users
        </button>

        <!-- Main modal -->
        <div id="authentication-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow  :bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                        <h3 class="text-xl font-semibold text-gray-900  :text-white">
                            Register User
                        </h3>
                        <button type="button"
                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  :hover:bg-gray-600  :hover:text-white"
                            data-modal-hide="authentication-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <form class="space-y-4" action="/register" method="post">
                            @csrf
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900  :text-white">Your
                                    name</label>
                                <input
                                    @error('name')
                                class="bg-gray-50 border border-red-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                @enderror
                                    type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="John Doe" required value="{{ old('name') }}">
                                @error('name')
                                    <p class="mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="username" class="block mb-2 text-sm font-medium text-gray-900  :text-white">Your
                                    username</label>
                                <input
                                    @error('username')
                                class="bg-gray-50 border border-red-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                @enderror
                                    type="text" name="username" id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="johndoe" value="{{ old('username') }}" required>
                                @error('name')
                                    <p class="mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900  :text-white">Your
                                    email</label>
                                <input
                                    @error('email')
                                class="bg-gray-50 border border-red-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                @enderror
                                    type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="name@company.com" value="{{ old('email') }}" required>
                                @error('email')
                                    <p class="mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900  :text-white">Your
                                    password</label>
                                <input
                                    @error('password')
                                class="bg-gray-50 border border-red-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                @enderror
                                    type="password" name="password" id="password" placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    required>
                                @error('password')
                                    <p class="mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center  :bg-blue-600  :hover:bg-blue-700  :focus:ring-blue-800">Register
                                Your Account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- End Modal --}}

    {{-- Table --}}
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500  :text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50  :bg-gray-700  :text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Position
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Last Seen
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="bg-white border-b  :bg-gray-800  :border-gray-700 hover:bg-gray-50  :hover:bg-gray-600">
                        <td class="w-4 p-4">
                            {{ $loop->iteration }}
                        </td>
                        <th scope="row"
                            class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap  :text-white">
                            <img class="w-10 h-10 rounded-full" src="https://source.unsplash.com/featured/?portrait&sig={{ $user->id }}"
                                alt="Jese image">
                            <div class="ps-3">
                                <div class="text-base font-semibold">{{ $user->name }}</div>
                                <div class="font-normal text-gray-500">{{ $user->email }}</div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            Admin
                        </td>
                        <td class="px-6 py-4">
                            <span class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded me-2  border border-gray-500 ">
                                <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                                </svg>
                                {{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}
                                </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="h-2.5 w-2.5 rounded-full bg-{{ $user->last_seen >= now()->subMinutes(1) ? 'green-400' : 'red-500' }} me-2"></div>{{ $user->last_seen >= now()->subMinutes(1) ? 'Online' : 'Offline' }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <form id="deleteForm" action="/register/{{ $user->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button id="deleteButton" type="submit"
                                    class="font-medium text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- End Table --}}

    {{-- pagination --}}
    <div class="mt-8 flex justify-end">
        {{ $users->links('vendor.pagination.default') }}
    </div>

    {{-- End pagination --}}
@endsection
