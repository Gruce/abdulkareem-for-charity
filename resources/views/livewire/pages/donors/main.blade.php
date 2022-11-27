@section('title', 'المتبرعين')
<div>

    <div class="w-full md:w-full  p-5 rounded-lg bg-white text-gray-800">

        <div>

            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-3 gap-4 mt-4">
                <div @admin @if ($type == 1) class="col-span-2" @endif class="col-span-2 md:col-span-3 "@endadmin  class="col-span-2 md:col-span-1" >
                    @livewire('ui.search', 'name')
                </div>
                @admin
                <select wire:change="getType" wire:model="state"
                    class="col-span-2 md:col-span-1 px-10 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-primary-500 focus:bg-white focus:ring-0 text-sm">
                    <option value="0">حالة التبرع </option>
                    <option value="">أرسلَ طلب تبرع جديد</option>
                </select>
                @endadmin

                <select wire:change="getType" wire:model="type"
                    class="px-10 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-primary-500 focus:bg-white focus:ring-0 text-sm">
                    <option value="0">النوع</option>
                    <option value="1">طالب</option>
                    <option value="2">تدريسي</option>
                    <option value="3">موظف</option>
                    <option value="4">اخرى</option>
                </select>
                <select wire:change="getType" wire:model="gender"
                    class="px-10 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-primary-500 focus:bg-white focus:ring-0 text-sm">
                    <option value="0">الجنس</option>
                    <option value="2">ذكر</option>
                    <option value="1">أنثى</option>
                </select>
                @admin
                @if ($type == 1)
                    <select wire:change="getType" wire:model="study_type"
                        class="px-10 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-primary-500 focus:bg-white focus:ring-0 text-sm">
                        <option value="">نوع الدراسة</option>
                        <option value="1">صباحي</option>
                        <option value="2">مسائي</option>

                    </select>

                    <select wire:change="getType" wire:model="stage"
                        class="px-10 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-primary-500 focus:bg-white focus:ring-0 text-sm">
                        <option value="">المرحلة</option>
                        <option value="1">الاولى</option>
                        <option value="2">الثانية</option>
                        <option value="3">الثالثة</option>
                        <option value="4">الرابعة</option>
                    </select>

                    <select wire:change="getType" wire:model="division"
                        class="px-10 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-primary-500 focus:bg-white focus:ring-0 text-sm">
                        <option value="">الشعبة</option>
                        <option value="1">A</option>
                        <option value="2">B</option>
                        <option value="3">C</option>
                        <option value="4">D</option>
                        <option value="5">E</option>

                    </select>
                    <select wire:change="getType" wire:model="department"
                        class=" px-10 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-primary-500 focus:bg-white focus:ring-0 text-sm">
                        <option value="">القسم</option>
                        <option value="1">علوم الحاسوب</option>
                        <option value="2">نظم المعلومات</option>

                    </select>
                @endif
                @endadmin
            </div>
        </div>
        <div class="mt-4 grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4  group ">
            @forelse($users as $item)
                <livewire:pages.donors.card :item="$item" key="{{ now() }}" />
            @empty
                <div class="text-2xl font-medium text-gray-700">
                    لايوجد متبرعين
                </div>
            @endforelse
        </div>
        <div>
            {{ $users->links() }}
        </div>
    </div>

</div>
