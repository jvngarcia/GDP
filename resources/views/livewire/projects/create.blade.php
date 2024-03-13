<div>
    {{-- FORM --}}

    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-semibold">Add new project</h1>
        <button wire:click="$dispatch('hideWindow')" class="text-gray-500 dark:text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
            </svg>
        </button>
    </div>
    <form wire:submit.prevent="save">
        <div class="mt-4">
            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Name</label>
            <input wire:model="name" type="text" id="name"
                class="mt-1 block
                    w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200
                    focus:ring-opacity-50 dark:bg-gray-800 dark:text-gray-200">
            @error('name')
                <span class="text-red-500 dark:text-red-400">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-4">
            <label for="description"
                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Description</label>
            <textarea wire:model="description" type="text" id="description"
                class="mt-1 block
                    w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200
                    focus:ring-opacity-50 dark:bg-gray-800 dark:text-gray-200"></textarea>
            @error('description')
                <span class="text-red-500 dark:text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-4">

            <div class="flex items-center">
                <input type="checkbox" id="status" wire:model.live="status"
                    class="relative w-[35px] h-[21px] bg-gray-100 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-indigo-600 checked:border-indigo-600 focus:checked:border-indigo-600 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-indigo-500 dark:checked:border-indigo-500 dark:focus:ring-offset-gray-600

                before:inline-block before:size-4 before:bg-white checked:before:bg-indigo-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-indigo-200">
                <label for="status"
                    class="text-sm text-gray-500 ms-3 dark:text-gray-400">{{ $status ? 'Active' : 'Inactive' }}</label>
            </div>

        </div>

        <div class="mt-4 flex justify-end">
            <button type="submit"
                class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 transition-all duration-300 rounded-xl text-white">
                Save
            </button>
        </div>
    </form>
</div>
