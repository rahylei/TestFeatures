<div class="px-3 flex-shrink-0 lg:hidden">
    <x-kuijet.button 
        type="button" 
        iconOnly 
        variant="secondary" 
        x-show="!isSidebarOpen"
        @click="isSidebarOpen = !isSidebarOpen"
        srText="Toggle sidebar"
    >
        <x-kuijet.icons.menu-fold-left x-show="isSidebarOpen" class="w-6 h-6" />
        <x-kuijet.icons.menu-fold-right x-show="!isSidebarOpen" class="w-6 h-6" />
    </x-kuijet.button>
</div>
