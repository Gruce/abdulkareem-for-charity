<div>
    <div class="relative w-full my-24 mt-4 overflow-hidden rounded shadow-2xl">
        <div class="relative w-full h-64 overflow-hidden bg-blue-600 top">
            <img src="https://images.unsplash.com/photo-1503264116251-35a269479413?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                alt="" class="absolute z-0 object-cover object-center w-full h-full bg">
            <div class="relative flex flex-col items-center justify-center h-full text-white bg-black bg-opacity-50">
                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                    class="object-cover w-24 h-24 rounded-full">
                <h1 class="text-2xl font-semibold">محمد جواد</h1>
                <h4 class="text-sm font-semibold">انضم منذ 2022</h4>
            </div>
        </div>
        <div x-data="{isOpen: true}" class="grid grid-cols-12 bg-white ">

            <div 
                class="flex justify-start w-full col-span-12 px-3 py-6 space-x-4 border-b border-solid md:space-y-4 md:flex-col md:col-span-2 md:justify-start ">

                <button @click="isOpen = true"  class="w-40 p-2 text-sm font-bold text-center bg-indigo-200 rounded hover:bg-indigo-700 focus:bg-indigo-900 focus:text-white ">المعلومات
                    الاساسية</button>

                @if (auth()->user()->type == 1)
                <button @click="isOpen = false"
                    class="w-40 p-2 text-sm font-bold text-center bg-indigo-200 rounded hover:bg-indigo-700 focus:bg-indigo-900 focus:text-white ">معلومات
                    الطالب</button>
                @endif
                    

            </div>

            <div x-show="isOpen"
                class="h-full pb-12  md:border-solid md:border-l md:border-black md:border-opacity-25 md:col-span-10">
                <livewire:pages.profile.basic />
            </div>

            <div x-show="!isOpen"
                class="h-full pb-12  md:border-solid md:border-l md:border-black md:border-opacity-25 md:col-span-10">
                <livewire:pages.profile.student-info />
            </div>

            


        </div>
    </div>
</div>
