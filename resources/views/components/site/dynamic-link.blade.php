@forelse ($modules as $module)

    <x-site.drop-down class="hover:bg-white hover:text-black" :name="$module->name" >
        <x-slot:content>
            caracoles
        </x-slot>
    </x-site.drop-down>

@empty

@endforelse
