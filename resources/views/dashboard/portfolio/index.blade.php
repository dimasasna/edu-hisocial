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
        <form class="lg:w-[800px] w-full flex flex-col lg:flex-row gap-4" action="/dashboard/portfolio">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full h-auto flex items-center ">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 :text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                    </svg>
                </div>
                <input type="text" id="simple-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                    placeholder="Search Portofolio" name="search" value="{{ request('search') }}">
            </div>
            <div class="relative w-full  flex items-center h-auto">
                <select id="countries" name="search_category"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected disabled>Filter By Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit"
                class="p-2.5 ms-2 text-sm  font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </form>

        <!-- Modal toggle -->
        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
            class="block w-full lg:w-auto h-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 text-xs focus:outline-none focus:ring-blue-300 font-medium rounded-lg lg:text-sm px-5 py-2.5 text-center"
            type="button">
            Add Portfolio
        </button>
        @include('dashboard.portfolio.create')
    </div>
    {{-- End Modal --}}

    {{-- Table --}}
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500  :text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50  :bg-gray-700  :text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Portfolio name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alt Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($portfolios as $portfolio)
                    <tr class="bg-white border-b  :bg-gray-800  :border-gray-700 hover:bg-gray-50  :hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap  :text-white">
                            {{ $portfolio->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $portfolio->altimg }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $portfolio->category->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $portfolio->description }}
                        </td>
                        <td class="px-6 py-4">
                            <img class="w-14 h-14" src="{{ asset('storage/' . $portfolio->image) }}"
                                alt="{{ $portfolio->altimg }}">
                        </td>
                        <td class="px-6 py-4 text-right flex gap-1">
                            <button type="button"
                                class="flex p-1 bg-yellow-500 rounded-xl hover:rounded-3xl hover:bg-yellow-600 transition-all duration-300 text-white"
                                data-modal-toggle="authentication-modal-edit{{ $portfolio->id }}"
                                data-modal-target="authentication-modal-edit{{ $portfolio->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                            </button>
                            @include('dashboard.portfolio.edit', ['portfolioId' => $portfolio->id])
                            <form id="deleteForm" action="/dashboard/portfolio/{{ $portfolio->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button id="deleteButton" type="submit"
                                    class="flex p-1 bg-red-500 rounded-xl hover:rounded-3xl hover:bg-red-600 transition-all duration-300 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>
                                </button>
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
        {{ $portfolios->links('vendor.pagination.default') }}
    </div>

    {{-- End pagination --}}
@endsection
