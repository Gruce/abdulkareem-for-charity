<div>

    <div class="grid grid-cols-4 gap-6">
        @guest

        @forelse ($users as $item)
        @livewire('components.donors.card' , [
        'name' => $item->name,
        'type' => $item->type,
        'shares' => $item->shares_sum_share,
        'photo' => $item->profile_photo_path,
        'date' => $item->created_at,
        ])
        @empty
        لا يوجد متبرعين
        @endforelse


        @endguest


        @user

        @forelse ($users as $item)
        @livewire('components.donors.card' , [
        'name' => $item->name,
        'email' => $item->email,
        'type' => $item->type,
        'shares' => $item->shares_sum_share,
        'photo' => $item->profile_photo_path,
        'date' => $item->created_at,
        ])
        @empty
        هلو
        @endforelse

        @enduser


        @admin

        @forelse ($users as $item)
        @livewire('components.donors.card' , [
        'name' => $item->name,
        'email' => $item->email,
        'type' => $item->type,
        'shares' => $item->shares_sum_share,
        'photo' => $item->profile_photo_path,
        'date' => $item->created_at,
        'phone_number' => $item->phone_number,
        ])
        @empty
        هلو
        @endforelse

        @endadmin
    </div>
</div>
