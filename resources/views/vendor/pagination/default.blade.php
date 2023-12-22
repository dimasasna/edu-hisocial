<ul class="inline-flex -space-x-px text-sm">
    {{-- Tampilkan tombol "Previous" --}}
    @if ($paginator->onFirstPage())
        <li>
            <a href="#"
                class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700  :bg-gray-800  :border-gray-700  :text-gray-400  :hover:bg-gray-700  :hover:text-white">Previous</a>
        </li>
    @else
        <li>
            <a href="{{ $paginator->previousPageUrl() }}"
                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  :bg-gray-800  :border-gray-700  :text-gray-400  :hover:bg-gray-700  :hover:text-white">Previous</a>
        </li>
    @endif

    {{-- Tampilkan elemen pagination --}}
    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            <li>
                <span
                    class="flex items-center justify-center px-3 h-8 text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  :bg-gray-800  :border-gray-700  :text-gray-400  :hover:bg-gray-700  :hover:text-white">{{ $element }}</span>
            </li>
        @endif

        {{-- Array of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li>
                        <span
                            class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-200 hover:bg-blue-100 hover:text-blue-700  :border-gray-700  :bg-gray-700  :text-white">{{ $page }}</span>
                    </li>
                @else
                    <li>
                        <a href="{{ $url }}"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  :bg-gray-800  :border-gray-700  :text-gray-400  :hover:bg-gray-700  :hover:text-white">{{ $page }}</a>
                    </li>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Tampilkan tombol "Next" --}}
    @if ($paginator->hasMorePages())
        <li>
            <a href="{{ $paginator->nextPageUrl() }}"
                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  :bg-gray-800  :border-gray-700  :text-gray-400  :hover:bg-gray-700  :hover:text-white">Next</a>
        </li>
    @else
        <li>
            <span
                class="flex items-center justify-center px-3 h-8 text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700  :bg-gray-800  :border-gray-700  :text-gray-400  :hover:bg-gray-700  :hover:text-white">Next</span>
        </li>
    @endif
</ul>
