@section('title', 'الحالات')

<div>
    @guest
        <livewire:pages.cases.guest.main />
    @endguest
    
    @user
        User
    @enduser

    @admin
        Admin
    @endadmin
</div>