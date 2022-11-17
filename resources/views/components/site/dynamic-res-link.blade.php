@forelse ($modules as $module)
    
    <x-site.drop-down-res class="cursos-pointer"  :name="$module->name" >
        <x-slot:content>
            caracoles
        </x-slot>
    </x-site.drop-down-res>

@empty

@endforelse