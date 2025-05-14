<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $valueTitle;
    public $subtitle;
    public $icon;

    public function __construct($title, $valueTitle = '', $subtitle = null, $icon = null)
    {
        $this->title = $title;
        $this->valueTitle = $valueTitle;
        $this->subtitle = $subtitle;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
