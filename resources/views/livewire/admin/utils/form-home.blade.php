<div class="basis-1/4 px-2 py-4">
    @switch($area)
        @case("carousel")
            <button onclick='Livewire.emit("openModal", "admin.forms.carousel-form", {{ json_encode(["action" => "create"]) }})' class=" sm:my-4 md:my-0 font-bold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>

            <button onclick='Livewire.emit("openModal", "admin.forms.carousel-form", {{ json_encode(["action" => "list"]) }})' class=" sm:my-4 md:my-0 font-bold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">List all</button>
            @break
        @case("vida_universitaria")
            <button onclick='Livewire.emit("openModal", "admin.forms.vida-u-form", {{ json_encode(["action" => "create"]) }})' class=" sm:my-4 md:my-0 font-bold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>

            <button onclick='Livewire.emit("openModal", "admin.forms.vida-u-form", {{ json_encode(["action" => "list"]) }})' class=" sm:my-4 md:my-0 font-bold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">List all</button>
            @break
            
        @default
            
    @endswitch
</div>
