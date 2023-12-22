<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow  :bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                <h3 class="text-xl font-semibold text-gray-900  :text-white">
                    Add Portfolio
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
                <form class="space-y-4" action="/dashboard/portfolio" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900  :text-white">Name</label>
                        <input
                            @error('name')
                    class="bg-gray-50 border border-red-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    @enderror
                            type="text" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Car Image" required value="{{ old('name') }}">
                        @error('name')
                            <p class="mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="altimg" class="block mb-2 text-sm font-medium text-gray-900  :text-white">Alt
                            Image</label>
                        <input
                            @error('altimg')
                    class="bg-gray-50 border border-red-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    @enderror
                            type="text" name="altimg" id="altimg"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="carimage" value="{{ old('altimg') }}" required>
                        @error('name')
                            <p class="mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900  :text-white">Select
                            an
                            category</label>
                        <select
                            @error('category_id')
                            class="bg-gray-50 border border-red-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            @enderror
                            id="category" name="category_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('name')
                            <p class="mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 :text-white" for="image">Upload
                            Image</label>
                        <img src="" class="img-preview w-56 my-2" id="frame">
                        <input
                            class="block w-full text-[16px] text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50"
                            id="image" type="file" name="image" onchange="previewImage()">
                        @error('image')
                            <p class="mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900  :text-white">Your
                            message</label>
                        <textarea id="description" name="description" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500  :bg-gray-700  :border-gray-600  :placeholder-gray-400  :text-white  :focus:ring-blue-500  :focus:border-blue-500"
                            placeholder="Description"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center  :bg-blue-600  :hover:bg-blue-700  :focus:ring-blue-800">Add
                        Portfolio</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
function previewImage() {
    frame.src=URL.createObjectURL(event.target.files[0]);
}
</script>
