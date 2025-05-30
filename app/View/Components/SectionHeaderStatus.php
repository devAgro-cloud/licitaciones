<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionHeaderStatus extends Component
{
    public string $title;
    public ?string $titleButton;
    public ?string $href;
    public ?string $iconButton;
    public ?string $status;
    public ?string $textStatus;
    public bool $showSecondButton;
    public ?string $secondButtonTitle;
    public ?string $secondButtonIcon;
    public ?string $secondButtonId;

    public function __construct(
        string $title,
        ?string $titleButton = null,
        ?string $href = null,
        ?string $iconButton = null,
        ?string $status = null,
        ?string $textStatus = null,
        bool $showSecondButton = false,
        ?string $secondButtonTitle = null,
        ?string $secondButtonIcon = null,
        ?string $secondButtonId = null
    ) {
        $this->title = $title;
        $this->titleButton = $titleButton;
        $this->href = $href;
        $this->iconButton = $iconButton;
        $this->status = $status;
        $this->textStatus = $textStatus;
        $this->showSecondButton = $showSecondButton;
        $this->secondButtonTitle = $secondButtonTitle;
        $this->secondButtonIcon = $secondButtonIcon;
        $this->secondButtonId = $secondButtonId;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.section-header-status');
    }
}
