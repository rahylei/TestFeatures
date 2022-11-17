<div class="flex flex-row">
@forelse ($modules as $module)
    <x-jet-nav-link class="font-semibold basis-1/3" href="{{ route('admin.'.$module->route, $module) }}" :active="request()->routeIs('admin.'.$module->route)">
        {{ __($module->name) }}
    </x-jet-nav-link>    
@empty

@endforelse
</div>