<div>
    @switch($action)
        @case("create")
            
            <form class="px-4 py-8" wire:submit.prevent="save">

                @if ($photo)

                    Photo Preview:

                    <img src="{{ $photo->temporaryUrl() }}">

                @endif

                <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" type="file" wire:model="photo">
                <div wire:loading wire:target="photo">Uploading...</div>       

                @error('photo') <span class="error">{{ $message }}</span> @enderror

                <button type="submit" wire:click="$emit('closeModal')" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Save Photo</button>

            </form>
            @break

        @case("list")
                <livewire:admin.utils.table-vida-u 
                :type="collect([false])"
                :cols="collect(['storage', 'active' ])" 
                form="vida-u-form"
                action="status"
                model="vidauniversitaria"/>
            @break
{{-- 
        @case("inactive")
            <form wire:submit.prevent="inactive({{$carousel}})" action="">
                <button wire:click="$emit('closeModal')" class="text-white bg-red-800 hover:bg-red-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Cancel</button>
                <button type="submit" wire:click="$emit('closeModal')" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Change Status?</button>
            </form>
            @break
        
        @case("active")
            <form wire:submit.prevent="active({{$carousel}})" action="">
                <button wire:click="$emit('closeModal')" class="text-white bg-red-800 hover:bg-red-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Cancel</button>
                <button type="submit" wire:click="$emit('closeModal')" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Change Status?</button>
            </form>
            @break     --}}

        @case("status")
            <form class="px-4 py-8" wire:submit.prevent="" action="">
                <button wire:click="$emit('closeModal')" class="text-white bg-red-800 hover:bg-red-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Cancel</button>
                <button type="submit" wire:click="status({{$vidauniversitaria}})" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Change Status?</button>
            </form>
            @break

        @case("delete")
            <form class="px-4 py-8" wire:submit.prevent="" action="">
                <button wire:click="close" class="text-white bg-red-800 hover:bg-red-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Cancel</button>
                <button type="submit" wire:click="delete({{$vidauniversitaria}})" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Are you sure?</button>
            </form>
            @break
        
        $@default
            
    @endswitch
</div>