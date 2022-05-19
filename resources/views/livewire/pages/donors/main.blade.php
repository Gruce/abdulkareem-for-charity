@section('title', 'المتبرعين')
<div>

    <div class="w-full md:w-full shadow p-5 rounded-lg bg-white">
        
        <div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-3 gap-4 mt-4">
                <div class="col-span-2">
                    @livewire('ui.search')
                </div>
                <select 
                    class="px-10 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                    <option value="">حالة التبرع</option>
                    <option value="">ارسل طلب تبرع جديد</option>
                    <option value="">لم يرسل طلب جديد</option>
                    
                </select>

                <select wire:change="x" wire:model="type"
                    class="px-10 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                    <option value="0">النوع</option>
                    <option value="1">طالب</option>
                    <option value="2">تدريسي</option>
                    <option value="3">موظف</option>
                    <option value="4">اخرى</option>
                </select>
                <select
                    class="px-10 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                    <option value="">الجنس</option>
                    <option value="">ذكر</option>
                    <option value="">أنثى</option>
                    <option value=""></option>
                </select>

                
                <select
                    class="px-10 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                    <option value="">نوع الدراسة</option>
                    <option value="">صباحي</option>
                    <option value="">مسائي</option>

                </select>

                <select
                    class="px-10 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                    <option value="">المرحلة</option>
                    <option value="">الاولى</option>
                    <option value="">الثانية</option>
                    <option value="">الثالثة</option>
                    <option value="">الرابعة</option>
                </select>

                <select
                    class="px-10 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                    <option value="">الشعبة</option>
                    <option value="">A</option>
                    <option value="">B</option>
                    <option value="">C</option>
                    <option value="">D</option>
                    <option value="">E</option>

                </select>
                <select
                    class=" px-10 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                    <option value="">القسم</option>
                    <option value="">علوم الحاسوب</option>
                    <option value="">نظم المعلومات</option>

                </select>

<<<<<<< Updated upstream



=======
>>>>>>> Stashed changes
            </div>
        </div>
        <div class="mt-4">
            @livewire('components.donors.card')
        </div>
    </div>

</div>
