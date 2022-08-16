<div dir="ltr">
    @if ($paginator->hasPages())
        @php(isset($this->numberOfPaginatorsRendered[$paginator->getPageName()]) ? $this->numberOfPaginatorsRendered[$paginator->getPageName()]++ : ($this->numberOfPaginatorsRendered[$paginator->getPageName()] = 1))

        <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between mt-4">
            <div dir="ltr" class="flex justify-center flex-1 sm:hidden">
                <span>
                    @if ($paginator->onFirstPage())
                        <span
                            class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md select-none">
                            {!! __('pagination.previous') !!}
                        </span>
                    @else
                        <button wire:click="previousPage('{{ $paginator->getPageName() }}')"
                            wire:loading.attr="disabled"
                            dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before"
                            class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-primary-500 border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-primary focus:border-primary-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            {!! __('pagination.previous') !!}
                        </button>
                    @endif
                </span>

                <span>
                    @if ($paginator->hasMorePages())
                        <button wire:click="nextPage('{{ $paginator->getPageName() }}')" wire:loading.attr="disabled"
                            dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before"
                            class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-primary focus:border-primary-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            {!! __('pagination.next') !!}
                        </button>
                    @else
                        <span
                            class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md select-none">
                            {!! __('pagination.next') !!}
                        </span>
                    @endif
                </span>
            </div>

            <div class="hidden md:flex md:justify-between">

                <div>
                    <span class="relative z-0 inline-flex rounded-md shadow-sm">
                        <span>
                            {{-- Previous Page Link --}}
                            @if ($paginator->onFirstPage())
                                <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">

                                </span>
                            @else
                                <button wire:click="previousPage('{{ $paginator->getPageName() }}')"
                                    dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after"
                                    rel="prev"
                                    class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-primary-500 bg-white border border-primary-500 rounded-l-md leading-5 hover:text-white hover:bg-primary-500 focus:z-10 focus:outline-none focus:border-primary-300 focus:shadow-outline-primary active:bg-primary-600 transition ease-in-out duration-150"
                                    aria-label="{{ __('pagination.previous') }}">
                                    <svg class="" fill="currentColor" viewBox="0 0 20 20">
                                        <p>السابق</p>
                                    </svg>
                                </button>
                            @endif
                        </span>

                        {{-- Pagination Elements --}}
                        @foreach ($elements as $element)
                            {{-- "Three Dots" Separator --}}
                            @if (is_string($element))
                                <span aria-disabled="true">
                                    <span
                                        class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5 select-none">{{ $element }}</span>
                                </span>
                            @endif

                            {{-- Array Of Links --}}
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    <span
                                        wire:key="paginator-{{ $paginator->getPageName() }}-{{ $this->numberOfPaginatorsRendered[$paginator->getPageName()] }}-page{{ $page }}">
                                        @if ($page == $paginator->currentPage())
                                            <span aria-current="page">
                                                <span
                                                    class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-primary-500 border border-primary-500 cursor-default leading-5 select-none">{{ $page }}</span>
                                            </span>
                                        @else
                                            <button
                                                wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')"
                                                class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-primary-500 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-primary-300 focus:shadow-outline-primary active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                                                aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                                {{ $page }}
                                            </button>
                                        @endif
                                    </span>
                                @endforeach
                            @endif
                        @endforeach

                        <span>
                            {{-- Next Page Link --}}
                            @if ($paginator->hasMorePages())
                                <button wire:click="nextPage('{{ $paginator->getPageName() }}')"
                                    dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after"
                                    rel="next"
                                    class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-white bg-primary-500 border rounded-r-md leading-5 hover:text-primary-500 hover:bg-white hover:border-primary-500 focus:z-10 focus:outline-none focus:border-primary-300 focus:shadow-outline-primary active:bg-primary-100 active:text-green-500 transition ease-in-out duration-150"
                                    aria-label="{{ __('pagination.next') }}">
                                    <svg class="" fill="currentColor" viewBox="0 0 20 20">
                                        <p class="font-bold">التالي</p>
                                    </svg>
                                </button>
                            @else
                                <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">

                                </span>
                            @endif
                        </span>
                    </span>
                </div>
            </div>
        </nav>
    @endif
</div>
