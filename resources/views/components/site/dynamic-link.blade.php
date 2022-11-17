@forelse ($modules as $module)
    {{-- <x-jet-nav-link class="hover:bg-white hover:text-white" href="{{ route($module->route, $module)}}" :active="request()->routeIs($module->route)">
        {{ __($module->name) }}
    </x-jet-nav-link> --}}
    <x-jet-dropdown align="right" width="48" >
        <x-slot name="trigger">            
            <button class="flex text-sm border-2 border-transparent transition">
                {{ __($module->name) }}
            </button>
        </x-slot>

        <x-slot name="content">
            <li>uno</li>
            <li>dos</li>
            <li>tres</li>
            <li>cuatro</li>
            <li>cinco</li>
        </x-slot>
    </x-jet-dropdown>
@empty

@endforelse
