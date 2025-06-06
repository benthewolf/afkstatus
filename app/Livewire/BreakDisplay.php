<?php

namespace App\Livewire;

use Livewire\Component;

class BreakDisplay extends Component
{
    public $displayText = 'BREAK';
    public $isInserting = false;
    public $customText = '';
    public $hero;

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
        return view('livewire.break-display');
    }
}
