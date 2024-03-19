<?php

namespace App\View\Components;

use App\Models\Movie;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class CarouselComponent extends Component
{
    public Collection $movies;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->movies = Movie::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.carousel-component');
    }
}
