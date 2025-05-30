<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardSection extends Component
{
    public string $title;
    public string $valueTitle;
    public $icon;
    public string $subtitle;


    public function __construct($title, $valueTitle = '', $icon = null, $subtitle = '')
    {
        $this->title = $title;
        $this->valueTitle = $valueTitle;
        $this->icon = $icon;
        $this->subtitle = $subtitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-section');
    }
}
