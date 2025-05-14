<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardList extends Component
{
    public $title;
    public $items;

    /**
     * Create a new component instance.
     *
     * @param string $title
     * @param array $items
     */

    public function __construct($title, $items = [])
    {
        $this->title = $title;
        $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-list');
    }
}
