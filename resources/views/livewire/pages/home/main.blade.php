<div>
    {{-- @guest
    <livewire:pages.home.guest.main />
    @endguest

    @user
    User
    @enduser

    @admin
    <livewire:pages.home.admin.main />
    @endadmin --}}

    <div class="container mx-auto grid grid-cols-2 grid-rows-6"><div class="row-span-2 bg-red-200">02</div>
        <div class="row-span-2 bg-yellow-200 relative h-[36rem]">
            
                <p>Relative parent</p>
                <div class="absolute bottom-0 right-0  ">
                    <div class="h-[30rem] w-[38rem] ">
                        <img class="rounded-md h-full" src="/img/ppp.jpg" alt="">
                    </div>
                </div>
              
        </div>
        
        <div class="col-span-2 row-span-1 bg-teal-200">03</div>
        <div class="col-span-2 row-span-3 bg-purple-200">04</div>
    </div>


</div>