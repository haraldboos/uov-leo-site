<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class announsment extends Component
{
    /**
     * Create a new component instance.
     */
    public $announcements;    // $announunsment =  
    public function __construct($announcements)
    {
        $this->announcements = $announcements ;      //
        //    $this->announcements = \App\Models\Announsment::latest()->take(6)->get(); 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.announsment' );
    }
}
