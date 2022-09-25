<?php

namespace App\View\Components\UI;

use Illuminate\View\Component;

class Button extends Component
{
    public $color;
    public $default;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color = "primary")
    {
        $this->default = 'text-white focus:ring-2 font-medium text-sm rounded-md px-5 py-2.5 focus:outline-none cursor-pointer ';

        if ($this->color = $color) {

            switch ($this->color) {
                case "primary":
                    $this->default .= 'bg-primary-500 hover:bg-primary-700 focus:ring-primary-300';
                    break;
                case "secondary":
                    $this->default .= 'bg-secondary-700 hover:bg-secondary-800 focus:ring-secondary-300';
                    break;
                case "success":
                    $this->default .= 'bg-success-700 hover:bg-success-800 focus:ring-success-300';
                    break;
                case "error":
                    $this->default .= 'bg-red-700 hover:bg-red-800 focus:ring-red-300';
                    break;
                case "warning":
                    $this->default .= 'bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-200';
                    break;
                case "light":
                    $this->default .= 'text-white bg-gray-600 border-gray-700 hover:bg-gray-900 focus:ring-gray-300';
                    break;
                case "light2":
                    $this->default .= 'text-gray-200 bg-gray-400 border-gray-600 hover:bg-gray-700 focus:ring-gray-300';
                    break;
            }
        } else
            $this->default .= 'bg-red-500 hover:bg-red-800 focus:ring-red-300';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.u-i.button');
    }
}
