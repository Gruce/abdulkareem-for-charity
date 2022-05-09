<div>
    {{-- <div class="grid grid-cols-3 gap-6">
        @for ($i = 0; $i < 5; $i++) @livewire('components.donors.card') @endfor </div>
    </div> --}}
    @guest
    <div class="grid grid-cols-3 gap-6" >
        @forelse ($users as $item)
        @livewire('components.donors.card' , [
            'name' => $item->name,
            'type' => $item->type,
            'shares' => $item->shares_sum_share,
            'photo' => $item->profile_photo_path,
            'date' => $item->created_at,
            ])
        @empty
            هلو
        @endforelse
        
    </div>
    @endguest

    @admin

    @endadmin
    @user
    يوزر
    @enduser
</div>