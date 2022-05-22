<?php

namespace App\Http\Livewire\Pages\Donors;


use Livewire\Component;
use App\Models\User;
use App\Models\Share;
class Main extends Component
{
    public $search, $type = 0, $gender = 0, $state = 0 , $study_type = 0, $stage = 0, $department = 0, $division = 0;
    protected $listeners = [ 'search'];
    public function getType()
    {
        $this->emit(
            'getUserType',
            $this->type,
            $this->gender,
            $this->state,
            $this->study_type,
            $this->stage,
            $this->department,
            $this->division
        );
    }

    public function search($search)
    {
        $this->search = $search;
    }

    public function render()
    {
        $search = '%' . $this->search . '%';
        $this->users = User::with([
            'shares' => function ($query) {
                return $query->where('state', false)->get();
            }
        ]);
        $this->users = $this->users->where('name', 'LIKE', $search)->orderByDesc('id')->get();

        return view('livewire.pages.donors.main');
    }
}
