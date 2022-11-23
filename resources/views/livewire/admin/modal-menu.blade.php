<div class="">

    <button onclick='Livewire.emit("openModal", "admin.forms.form-carousel", {{ json_encode(["action" => "create"]) }})' class=" m-4 font-bold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
    <div class="overflow-x-auto relative">
        <div class="flex flex-row">
            <livewire:admin.utils.table :items="$active"/>
            <livewire:admin.utils.table :items="$inactive"/>
        </div>
    </div>

</div>
