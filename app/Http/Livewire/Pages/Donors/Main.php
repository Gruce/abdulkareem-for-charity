<?php

namespace App\Http\Livewire\Pages\Donors;


use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\User;
use App\Models\Share;
class Main extends Component
{protected $listeners = ['search','$refresh'];
    public $search ,$type = 0, $gender = 0, $state = 0 , $study_type = 0, $stage = 0, $department = 0, $division = 0;

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
    {$search = '%' . $this->search . '%';

        $this->users = User::with([
            'shares' => function ($query) {
                return $query->where('state', false)->get();
            }
        ]);
        if ($this->type) $this->users = $this->users->where('type', $this->type);

        if ( $this->gender) $this->users = $this->users->where('gender', $this->gender);

        if ($this->state != 1 && $this->state != 0 ) {
            $this->users = $this->users->whereHas('shares',  function ($query) {
                $query->where('state', $this->state);
            });
        }

        if ($this->study_type) {
            $this->users = $this->users->whereHas('student', function ($query) {
                $query->where('study_type', $this->study_type);
            });
        }

        if ($this->stage) {
            $this->users = $this->users->whereHas('student', function ($query) {
                $query->where('stage', $this->stage);
            });
        }

        if ($this->division) {
            $this->users = $this->users->whereHas('student', function ($query) {
                $query->where('division', $this->division);
            });
        }

        if ($this->department) {
            $this->users = $this->users->whereHas('student', function ($query) {
                $query->where('department', $this->department);
            });
        }
        $this->users = $this->users->where('name', 'LIKE', $search)->get();


        return view('livewire.pages.donors.main');
    }
}
