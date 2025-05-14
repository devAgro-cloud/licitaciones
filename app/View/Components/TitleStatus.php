<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TitleStatus extends Component
{
    public $statusColor;
    public $statusText;
    /**
     * Create a new component instance.
     */
    public function __construct($statusColor, $statusText)
    {
        $this->statusColor = $statusColor;
        $this->statusText = $statusText;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.title-status');
    }
}
