<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UserLayout extends Component
{
    public $title;
    public function __construct($title = null)
    {
        $this->title = $title ?? 'Dashboard SPMB IT DEL';
    }

    public function render()
    {
        return view('theme.app.main');
    }
}
