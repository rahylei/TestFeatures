<?php

namespace App\View\Components\Site;

use Illuminate\View\Component;
use App\Models\Module;

class DynamicResLink extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $modules;
    public function __construct(Module $modules)
    {
        $this->modules = $modules->all();
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site.dynamic-res-link');
    }
}
