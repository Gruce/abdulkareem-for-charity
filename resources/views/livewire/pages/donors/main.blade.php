<div>
    <div class="grid grid-cols-3 gap-6">
        @for ($i = 0; $i < 3; $i++) @livewire('components.donors.card') @endfor </div>
    </div>
@guest
    <div class="hidden p-4 bg-[#d7e0e0] rounded-lg " id="requests" role="tabpanel" aria-labelledby="requests-tab">
        @livewire('company.request.requests' , ['state' => 1])
    </div>
@endguest

@admin
    
@endadmin
@user
    يوزر
@enduser