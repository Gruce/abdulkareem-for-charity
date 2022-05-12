<?php

namespace App\Http\Livewire\Components\Donors;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\User;
use Livewire\Component;
use App\Models\Share;


class Card extends Component
{
    public $name, $type, $shares, $share, $photo, $date, $email, $phone_number;
    use LivewireAlert;

    public $share_id, $search;

    protected $rules = [
        'name' => 'required',
        'shares' => 'required',
    ];

    protected $listeners = ['delete', '$refresh', 'search'];

    public function mount(){
        $this->shares = User::orderByDesc('id')->get();

    }

    function search($string)
    {
        $this->search = $string;
    }

    public function delete(){
        User::findOrFail($this->share_id)->delete();
        $this->alert('success', 'تم حذف الحالة', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitSelf('$refresh');
    }

    public function confirm($id){
        $this->share_id = $id;
        $this->alert('warning', 'هل انت متأكد من حذف الحالة؟', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'delete',
            'showCancelButton' => true,
            'onDismissed' => '',
        ]);
    }

    public function add($id){

        $data = [
            'user_id' => $id,
            'share' => $this->share,
        ];
        $this->alert('success', 'تمت الاضافة', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        $share = new Share();
        $share->add($data);
        $this->reset();

    }

    public function render(){
        $search = '%' . $this->search . '%';
        // $this->shares = User::where('name', 'LIKE', $search)->orderByDesc('id')->get();
        $this->users= User::withSum('shares','share')->orderByDesc('shares_sum_share')->get();
        return view('livewire.components.donors.card');
    }
}
