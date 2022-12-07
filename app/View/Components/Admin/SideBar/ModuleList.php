<?php

namespace App\View\Components\Admin\SideBar;

use Illuminate\View\Component;
use App\Models\Admin\Modules\Module;

class ModuleList extends Component
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
        return view('components.admin.side-bar.module-list');
    }
}
