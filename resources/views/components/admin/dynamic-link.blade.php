@forelse ($modules as $module)
    <x-jet-nav-link href="{{ route('admin.'.$module->route, $module) }}" :active="request()->routeIs('admin.'.$module->route)">
        {{ __($module->name) }}
    </x-jet-nav-link>    
@empty

@endforelse
