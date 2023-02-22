<?php

namespace App\View\Components\Movie;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShowMovieMiddleRightCard extends Component
{
    /**
     * Create a new component instance.
     */

    public $movie;
    public function __construct($movie)
    {
        $this->movie = $movie;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.movie.show-movie-middle-right-card');
    }
}