<?php

namespace App\Http\Livewire\Components\Donors;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\User;
use App\Models\Student;
use Livewire\Component;
use App\Models\Share;


class Card extends Component
{
    use LivewireAlert;
    public $name, $type, $shares, $share, $photo, $date, $email, $phone_number, $gender , $state;

    public $search,$user_type, $user_gender, $user_request ,$stage, $user_stage;

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

    public function getUserType ($type, $gender, $state , $stage)
    {
        $this->user_type = $type;
        $this->user_gender = $gender;
        $this->user_request = $state;
        $this->user_stage = $stage;
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
        if($this->user_gender != 0 && $this->user_gender <= 2){
            $this->users = $this->users->where('gender', $this->user_gender);
        }
        if($this->user_request == 1 ){
            $this->users = $this->users->with([
                'shares' => function($query){
                    return $query->where('state',$this->user_request)->get();
                }
            ]);
            dd($this->user_request);
        }
        
        $this->users = $this->users->where('name', 'LIKE', $search)->orderByDesc('id')->get();
        return view('livewire.components.donors.card');
    }
}
