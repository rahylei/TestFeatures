@forelse ($modules as $module)

<x-jet-dropdown align="right" width="48" >
    <x-slot name="trigger">            
        <button class="flex text-sm border-2 border-transparent transition">
            {{ __($module->name) }}
        </button>
    </x-slot>

    <x-slot name="content">
        
    {{-- <x-jet-responsive-nav-link href="{{ route($module->route, $module)}}{{-- route($module->route, $module) --}}" :active="request()->routeIs($module->route)">
        {{-- __($module->name) --}}
    {{--</x-jet-responsive-nav-link> --}}
        <li>uno</li>
        <li>dos</li>
        <li>tres</li>
        <li>cuatro</li>
        <li>cinco</li>
    </x-slot>
</x-jet-dropdown>

@empty

@endforelse