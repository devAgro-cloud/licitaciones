<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ToggleRow extends Component
{

    public $title;
    public $description;
    public $id;
    public $checked;



    public function __construct(
        $title,
        $description,
        $id,
        $checked = true,
    ) {

        $this->title = $title;
        $this->description = $description;
        $this->id = $id;
        $this->checked = $checked;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.toggle-row');
    }
}
