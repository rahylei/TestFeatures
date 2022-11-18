<?php

namespace App\View\Components\Site;

use Illuminate\View\Component;
use App\Models\Home\Carousel;

class CarouselE extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $carousels;
    public function __construct(Carousel $carousels)
    {
        $this->carousels = $carousels->all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site.carousel-e');
    }
}
