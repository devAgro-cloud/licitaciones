<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SearchRow extends Component
{
    public $type;
    public $classMain;
    public $class;
    public $name;
    public $value;
    public $placeholder;
    /**
     * Create a new component instance.
     */
    public function __construct(
        $type = 'text',
        $classMain = null, 
        $class = null,
        $name = null,
        $value = null,
        $placeholder = "Buscar...",
    ) {
        $this->type = $type;
        $this->classMain = $classMain;
        $this->class = $class;
        $this->name = $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.search-row');
    }
}
