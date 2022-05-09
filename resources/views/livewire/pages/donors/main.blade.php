<div>
    @guest
    <livewire:pages.donors.guest.main />
    @endguest

    @user
    <livewire:pages.donors.user.main />
    @enduser

    @admin
    <livewire:pages.donors.admin.main />
    @endadmin


</div>







{{-- x-data="{isOpen: false}"
 @admin
                <button @click="isOpen = !isOpen" class="bg-primary-50">اضغطني عفيه</button>
                <div x-show="isOpen">
                    <form action="">
                        <label for="">ادخل عدد الاسهم </label>
                        <input type="number" placeholder="ادخل عدد الاسهم">
                        <button type"submit">اضغط اقوى</button>
                    </form>

                </div>
                @endadmin --}}