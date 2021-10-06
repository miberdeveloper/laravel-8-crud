<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class ButtonCustom extends Component
{
    public $name;
    public $background;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $background = null)
    {
        $this->name = $name;
        $this->background = $background;
    }

    /**
     * Get the view / contents that represent the component.
	     *                  
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $category = Category::all();
        return view('components.button-custom', compact('category'));
    }
}
