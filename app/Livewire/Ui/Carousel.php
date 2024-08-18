<?php

namespace App\Livewire\Ui;

use Livewire\Component;

class Carousel extends Component
{
    public $images = [
        "assets/restaurant1.jpg",
        "assets/restaurant2.jpg",
        "assets/restaurant3.jpg",
    ];

    public $currentIndex = 0;

    public function nextSlide()
    {
        $this->currentIndex = ($this->currentIndex + 1) % count($this->images);
    }

    public function previousSlide()
    {
        $this->currentIndex = ($this->currentIndex - 1 + count($this->images)) % count($this->images);
    }
    public function render()
    {
        return view('livewire.ui.carousel');
    }
}
