<?php

namespace App\Http\Livewire\Components\Donors;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\User;
use Livewire\Component;
use App\Models\Share;


class Card extends Component
{
    use LivewireAlert;
    public $name, $type, $shares, $share, $photo, $date, $email, $phone_number;

    public $search,$user_type;

    public $share_id;

    protected $rules = [
        'name' => 'required',
        'shares' => 'required',
    ];

    protected $listeners = ['delete', '$refresh', 'search' ,'getUserType'];



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
        $this->alert('warning', 'هل انت متأكد من حذف المتبرع؟', [
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
    public function accept($id, $state){
        $share = Share::findOrFail($id);
        $share->state($state);
        $this->alert('success', 'تم القبول', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
    public function deleteShare($id){
        $share = Share::findOrFail($id);
        $share->delete();
        $this->alert('success', 'تم الرفض', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
    public function search($search)
    {
        $this->search = $search;
    }

    public function getUserType ($type)
    {
        $this->user_type = $type;
    }

    public function render(){
        $search = '%' . $this->search . '%';

        $this->users= User::with([
            'shares' => function($query){
                return $query->where('state', false)->get();
            }
        ]);
        if($this->user_type != 0 && $this->user_type <= 4){
            $this->users = $this->users->where('type', $this->user_type);
        }
        $this->users = $this->users->where('name', 'LIKE', $search)->orderByDesc('id')->get();
        return view('livewire.components.donors.card');
    }
}
