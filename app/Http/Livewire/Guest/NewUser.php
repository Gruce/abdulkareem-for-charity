<?php

namespace App\Http\Livewire\Guest;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class NewUser extends Component
{
    public $name, $email, $password, $password_confirmation, $type, $gender, $department, $study_type, $stage, $division;
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
        'password_confirmation' => 'required|same:password',
        'type' => 'required',
        'gender' => 'required',
    ];

    public function save()
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'password_confirmation' => Hash::make($this->password_confirmation),
            'type' => $this->type,
            'gender' => $this->gender,
        ];
        $user = new User;
        $user->add($data);
        if ($this->type == 1) {
            $user->student()->create([
                'department' => $this->department,
                'study_type' => $this->study_type,
                'stage' => $this->stage,
                'division' => $this->division,
            ]);
        }
        if ($user) {
            redirect('/login');
        }
    }
    public function render()
    {
        return view('livewire.guest.new-user');
    }
}
