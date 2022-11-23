<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400  basis-1/2">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="py-3 px-6">
                Banner
            </th>
            <th scope="col" class="py-3 px-6">
                Edit
            </th>
            <th scope="col" class="py-3 px-6">
                Status
            </th>
            <th scope="col" class="py-3 px-6">
                Delete
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse ($items as $item)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <img class="w-[200px]" src="{{ asset($item->storage) }}" alt="">
            </th>
            <td class="py-4 px-6">
                <button type="button" onclick='Livewire.emit("openModal", "admin.forms.form-carousel", {{ json_encode(["action" => "edit",  "carousel" => $item] ) }})' class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Edit</button>
            </td>
            <td class="py-4 px-6">
                @if ($item->active)
                    <button type="button" onclick='Livewire.emit("openModal", "admin.forms.form-carousel", {{ json_encode(["action" => "inactive",  "carousel" => $item]) }})' class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Inactive</button>
                @else
                    <button type="button" onclick='Livewire.emit("openModal", "admin.forms.form-carousel", {{ json_encode(["action" => "active", "carousel" => $item]) }})' class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900">Active</button>    
                @endif
            </td>
            <td class="py-4 px-6">
                <button type="button" onclick='Livewire.emit("openModal", "admin.forms.form-carousel", {{ json_encode(["action" => "delete", "carousel" => $item]) }})' class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
            </td>
        </tr>
        @empty
            
        @endforelse
    </tbody>
</table>