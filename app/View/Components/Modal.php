<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $target = '';

    public $title = '';

    public $body = '';

    public $footer = '';

    public $width = '';

    public $headColor = '';

    public $placement = '';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($target = '', $title = '', $body = '', $footer = '', $width = '2xl', $headColor = '', $placement = 'top-center')
    {
        $this->target = $target;
        $this->title = $title;
        $this->body = $body;
        $this->footer = $footer;
        $this->width = $width;
        $this->headColor = $headColor;
        $this->placement = $placement;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
