<div>
    @forelse ($modules as $module)
    <x-kuijet.sidebar.link :title="$module->name" href="{{ route(Str::slug($module->name, '_')) }}" :isActive="request()->routeIs(Str::slug($module->name, '_'))" />
    @empty
        
    @endforelse
</div>
