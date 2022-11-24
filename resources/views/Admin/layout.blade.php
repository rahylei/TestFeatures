<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">            
            {{ __('Layout') }}            
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="my-2 mx-4">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            Navbar
                        </div>

                        <div class="p-6 md:border-l border-gray-200 dark:border-gray-700 sm:border-t md:border-t-0">
                            Carousel
                            <div class="flex flex-col-2 md:flex-col lg:flex-col-1">
                                
                                <livewire:admin.utils.form-home area="carousel"/>
                            
                            
                                <livewire:admin.utils.table 
                                :cols="collect(['storage', 'active'])" 
                                form="carousel-form"
                                model="carousel"/>
                                
                            </div>
                        </div>

                        {{-- <div class="p-6 border-t md:border-l-0 border-gray-200 dark:border-gray-700">
                            Difusion Universitaria
                        </div>

                        <div class="p-6 border-t md:border-l border-gray-200 dark:border-gray-700">
                            Redes sociales
                        </div> --}}

                        <div class="p-6 border-t md:border-l-0 border-gray-200 dark:border-gray-700">
                            Cidea
                        </div>

                        <div class="p-6 border-t md:border-l border-gray-200 dark:border-gray-700">
                            Recuerdos
                        </div>


                        <div class="p-6 border-t md:border-l-0 border-gray-200 dark:border-gray-700">
                            Vida universitaria
                        </div>

                        <div class="p-6 border-t md:border-l border-gray-200 dark:border-gray-700">
                            Footer
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
