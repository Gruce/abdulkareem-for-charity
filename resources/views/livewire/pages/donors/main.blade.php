<div>
    <div class="grid grid-cols-3 gap-6">
        @for ($i = 0; $i < 5; $i++) @livewire('components.donors.card') @endfor </div>
    </div>
@guest
   
@endguest

@admin
    
@endadmin
@user
    يوزر
@enduser