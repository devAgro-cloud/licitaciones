<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderRow extends Component
{
    public $title;
    public $icon;
    public $buttonText;
    public $subtitle;

    /**
     * Create a new component instance.
     *
     * @param string $title
     * @param string $buttonText
     * @param string $description
     */

    public function __construct($title, $icon = null, $buttonText = null, $subtitle = null)
    {
        $this->title = $title;
        $this->icon = $icon;
        $this->buttonText = $buttonText;
        $this->subtitle = $subtitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header-row');
    }
}
