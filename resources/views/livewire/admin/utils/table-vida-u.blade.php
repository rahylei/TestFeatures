
<div class="sm:basis-3/4 md:basis-full overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                @foreach ($cols as $col)
                    <th scope="col" class="py-3 px-6">
                        {{Str::headline($col)}}
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($items->where('active', $type)->get() as $item)
                
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    @foreach ($cols as $col)
                        @if ($col == "storage")
                            <td class="py-4 px-6">
                                <img class="w-[150px]" src="{{$item->$col}}" alt="">
                            </td>
                        @else
                            <td class="py-4 px-6">
                                {{$item->$col}}
                            </td>
                        @endif
                       
                    @endforeach
                    <td class="py-4 px-6">
                        <button wire:click='$emit("openModal", "admin.forms.{{$form}}", {{ json_encode(["action" => $action, $model => $item]) }})' class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Active</button>
                    </td>
                </tr>
            @endforeach
                    
        </tbody>
    </table>

</div>
