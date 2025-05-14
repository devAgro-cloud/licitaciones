<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardInfo extends Component
{
    public $title;
    public $statusColor;
    public $statusText;
    public $descriptionText;
    public $valueDescriptionText;
    public $labels;
    // public $buttonText;
    public function __construct(
        // $href = null,
        $title = null,
        $statusColor = null,
        $statusText = null,
        $descriptionText = null,
        $valueDescriptionText = null,
        $labels = [],
        // $buttonText = 'Ver detalles'
    ) {
        //  $this->href = $href;
        $this->title = $title;
        $this->statusColor = $statusColor;
        $this->statusText = $statusText;
        $this->descriptionText = $descriptionText;
        $this->valueDescriptionText = $valueDescriptionText;
        $this->labels = $labels;
        // $this->buttonText = $buttonText;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-info');
    }
}
