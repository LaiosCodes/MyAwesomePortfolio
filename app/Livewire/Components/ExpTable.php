<?php

namespace App\Livewire\Components;

use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Livewire\Component;

class ExpTable extends Component
{
    public $exps = [];

    public function mount()
    {
        $this->exps = \App\Models\Exp::orderBy('date', 'asc')->get();
    }

    public function expDate(CarbonImmutable $date)
    {
        return 'drw-rw---- 1 root root 4.0K ' . $date->format('M j Y');
    }
    public function render()
    {
        return view('components.exp-table');
    }
}
