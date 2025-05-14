<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonNav extends Component
{
    public $title;
    public $count;
    public $isActive;
    /**
     * Create a new component instance.
     *
     * @param array $buttons
     */
    public function __construct($title, $count = null, $isActive = false)
    {
        $this->title = $title;
        $this->count = $count;
        $this->isActive = $isActive;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button-nav');
    }
}
