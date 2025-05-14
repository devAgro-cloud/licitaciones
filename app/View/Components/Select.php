<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    public $class;
    public $options;
    public $name;
    public $id;

    /**
     * Create a new component instance.
     *
     * @param array $options
     * @param string|null $name
     * @param string|null $class
     */
    public function __construct($class = null, $options = [], $name = null, $id = null)
    {
        $this->class = $class;
        $this->options = $options;
        $this->name = $name;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select');
    }
}
