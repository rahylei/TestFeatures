@forelse ($modules as $module)
    <x-jet-responsive-nav-link class="font-semibold" href="{{ route('admin.'.$module->route, $module) }}" :active="request()->routeIs('admin.'.$module->route)">
        {{ __($module->name) }}
    </x-jet-responsive-nav-link>    
@empty

@endforelse
