<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BidProposalCard extends Component
{

    public string $company;
    public string $statusColor;
    public string $statusTextColor;
    public string $statusText;
    public string $date;
    public string $price;
    public string $score;
    public string $description;



    public function __construct(
        $company,
        $statusText,
        $date,
        $price,
        $score,
        $description,
        $statusColor = '',
        $statusTextColor = '',
    ) {
        //
        $this->company = $company;
        $this->statusColor = $statusColor;
        $this->statusTextColor = $statusTextColor;
        $this->statusText = $statusText;
        $this->date = $date;
        $this->price = $price;
        $this->score = $score;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bid-proposal-card');
    }
}
