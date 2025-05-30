<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    public string $id;
    public ?string $title;
    public ?string $dialogClass;

    public function __construct($id, $title = null, $dialogClass = null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->dialogClass = $dialogClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal');
    }
}
