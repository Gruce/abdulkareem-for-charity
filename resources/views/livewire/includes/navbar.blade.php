<div>
    <nav class="bg-gray-100 w-100 px-8 md:px-auto">
        <div class="md:h-16 h-28 md:px-4  flex items-center justify-between flex-wrap md:flex-nowrap ">
            <!-- Logo -->
            <div class="text-indigo-500 md:order-1 flex items-center">
                <!-- Heroicon - Chip Outline -->
                <img src="{{ asset('/img/logo.png') }}" class="h-16 ">
                <span class="text-xl font-bold text-gray-700  ">صندوق الأستاذ عبدالكريم</span>

            </div>
            <div class="text-gray-500 order-3 w-full md:w-auto md:order-2">
                <ul class="flex font-semibold justify-between">

                    @foreach ($menu as $menuitem)
                    @if ($menuitem->route == 'login' || $menuitem->route == 'register')
                    @continue
                    @endif
                    <li
                        class="md:px-4 md:py-2  @if ($menuitem->active) text-primary-100  rounded-full    @else text-gray-700 hover:text-primary-100 @endif">
                        <a href="{{ route($menuitem->route) }}">
                            {{ $menuitem->name }}@if ($menuitem->active)<i class="{{ $menuitem->icon }} mr-1"></i>@endif
                        </a>

                    </li>
                    @endforeach

                </ul>
            </div>
            <div class="order-2 md:order-3 flex gap-2">
                @foreach ($menu as $menuitem)
                @if ($menuitem->route == 'login' || $menuitem->route == 'register')
                @if ($menuitem->route == 'login')
                <a href="{{ route($menuitem->route) }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded-xl flex items-center gap-2">

                    <span>تسجيل الدخول</span>
                    <i class="fa-solid fa-right-to-bracket"></i>

                </a>
                @else
                <a href="{{ route($menuitem->route) }}"
                    class="px-4 py-2 bg-primary-100 hover:bg-indigo-600 text-white rounded-xl flex items-center gap-2">

                    <span>انشاء حساب</span>
                    <i class="fa-solid fa-user"></i>

                </a>
                @endif
                @endif
                @endforeach
            </div>
        </div>
    </nav>
</div>