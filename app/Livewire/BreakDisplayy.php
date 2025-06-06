<?php

namespace App\Livewire;

use Livewire\Component;

class BreakDisplayy extends Component
{
    public $displayText = 'BREAK';
    public $isInserting = false;
    public $customText = '';
    public $hero;

    public $dateColor = 'text-black';
    public $statusColor = 'text-[#192945]';
    public $btnColor = 'bg-[#e9c494]';
    public $btnText = '';
    public $btntxtHover = '';
    public $btnHoverbg = 'hover:bg-[#3088b1]';

    public function mount($hero)
    {
        $this->hero = $hero;
    }

    public function setBreak()
    {
        $this->displayText = 'BREAK';
        $this->isInserting = false;
    }

    public function setLunch()
    {
        $this->displayText = 'LUNCH';
        $this->isInserting = false;
    }

    public function enableInsert()
    {
        $this->isInserting = true;
    }

    public function saveCustomText()
    {
        if (!empty($this->customText)) {
            $this->displayText = $this->customText;
            $this->isInserting = false;
            $this->customText = '';
        }
    }

    public function render()
    {
        return view('livewire.break-displayy');
    }
}
