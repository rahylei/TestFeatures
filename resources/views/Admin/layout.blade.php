<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">            
            {{ __('Layout') }}            
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="my-4 mx-8">
                    <button onclick='Livewire.emit("openModal", "admin.modal", {{ json_encode(["seccion" => "home", "type" => "carousel"]) }})' class="font-bold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Carousel</button>

                    <button onclick='Livewire.emit("openModal", "admin.modal", {{ json_encode(["seccion" => "home", "type" => "difusion_universitaria"]) }})' class="font-bold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Difusion universitaria</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
