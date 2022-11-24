<div>
    @switch($action)
        @case("create")
            
            <form wire:submit.prevent="save">

                @if ($photo)

                    Photo Preview:

                    <img src="{{ $photo->temporaryUrl() }}">

                @endif

                <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" type="file" wire:model="photo">
                <div wire:loading wire:target="photo">Uploading...</div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="text" name="name" id="name" class="pt-4 block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="" wire:model="url">
                    <label for="name" class="pt-4 peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Url</label>
                </div>        

                @error('photo') <span class="error">{{ $message }}</span> @enderror

                <button type="submit" wire:click="$emit('closeModal')" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Save Photo</button>

            </form>
            @break
        
        @case("edit")

                    
            <form wire:submit.prevent="update({{$carousel}})">

                @if ($photo)

                    Photo Preview:

                    <img src="{{ $photo->temporaryUrl() }}">
                @else
                    Photo Preview:

                    <img src="{{ asset($carousel->storage) }}">
                @endif


                <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" type="file" wire:model="photo">
                <div wire:loading wire:target="photo">Uploading...</div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="text" name="name" id="name" class="pt-4 block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="" wire:model="url" value="{{$carousel->url}}">
                    <label for="name" class="pt-4 peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Url</label>
                </div>        

                @error('photo') <span class="error">{{ $message }}</span> @enderror

                <button type="submit" wire:click="$emit('closeModal')" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Save Photo</button>

            </form>
            @break

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
            @break    


        @case("delete")
            <form wire:submit.prevent="delete({{$carousel}})" action="">
                <button wire:click="$emit('closeModal')" class="text-white bg-red-800 hover:bg-red-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Cancel</button>
                <button type="submit" wire:click="$emit('closeModal')" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Are you sure?</button>
            </form>
            @break
        
        $@default
            
    @endswitch
</div>
