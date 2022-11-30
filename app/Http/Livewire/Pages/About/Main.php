<?php

namespace App\Http\Livewire\Pages\About;

use App\Models\Developer;
use Livewire\Component;

class Main extends Component
{

    public function render()
    {
        // $this->developers = Developer::where('type', 1)->get();
        // $this->managers = Developer::where('type', 2)->get();
        $this->developers = [
            [
                'name' => 'محمد جواد',
                'job_title' => 'Backend Developer',
                'photo' => '/img/dev1.jpg',
                'photo' => "/img/dev1.jpg",
                'github' => "https://github.com/MohammedJ18",
                'email' => "jawad6686@gmail.com",
                'type' => 1,
            ],
            [
                'name' => 'حسين نجاح',
                'job_title' => 'Frontend Developer',
                'photo' => "/img/dev2.jpg",
                'github' => "https://github.com/i1Zeus",
                'email' => "husseinnajah123@gmail.com",
                'type' => 1,
            ],
            [
                'name' => 'منار ناصر',
                'job_title' => 'Backend Developer',
                'photo' => "/img/dev3.jpg",
                'github' => "https://github.com/6vnar",
                'email' => 'manarnaseerabdulla@gmail.com',
                'type' => 1,
            ],
            [
                'name' => 'أحمد عبدالكريم',
                'job_title' => 'Frontend Developer',
                'photo' => "/img/dev4.jpg",
                'github' => "https://github.com/a7med3bd",
                'email' => "mr.darkboss1@gmail.com",
                'type' => 1,
            ],
            [
                'name' => 'موسى نمير',
                'job_title' => 'Frontend Developer',
                'photo' => "/img/dev5.jpg",
                'github' => "https://github.com/MosaNameer",
                'email' => "mosa.mn777@gmail.com",
                'type' => 1,
            ],
            [
                'name' => 'زينب أمجد',
                'job_title' => 'Backend Developer',
                'photo' => "/img/dev6.jpg",
                'github' => "https://github.com/zal3",
                'email' => "zainabamjedlatef31@gmail.com",
                'type' => 1,
            ],
            [
                'name' => 'فاطمة نوفل',
                'job_title' => 'Frontend Developer',
                'photo' => '/img/dev7.jpg',
                'email' => 'fatma.nawfal.abdalrazak@gmail.com',
                'github' => 'https://github.com/fatmanawfal',
                'type' => 1,
            ],
        ];
        $this->contributors = [
            [
                'name' => 'حسن خالد',
                'photo' => '/img/hassan.jpg',
                'job_title' => 'Fullstack Developer',
                'type' => 2,
            ],
            [
                'name' => 'مصطفى معتز',
                'photo' => '/img/mustafa.jpg',
                'job_title' => 'project executor',
            ],
            [
                'name' => 'حسن عبدالكريم',
                'photo' => '/img/hasan_graphics.jpg',
                'job_title' => 'Logo designer',
                'type' => 2,
            ],
            [
                'name' => 'عزالدين حكيم',
                'photo' => '/img/az_aldeen.jpg',
                'job_title' => 'Logo designer',
                'type' => 2,
            ],
            [
                'name' => 'أيمن احمد',
                'photo' => '/img/ayman.jpg',
                'job_title' => 'Motion Graphic',
                'type' => 2,
            ],
        ];
        // dd($this->developers);
        return view('livewire.pages.about.main');
    }
}
