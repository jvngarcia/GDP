<div class="px-4">

    <input wire:model.live="search" type="text" class="border border-transparent rounded-full px-4 py-2 w-full"
        placeholder="Search...">

    <div class="mt-4 flex gap-4 flex-col min-h-[60vh] max-h-[60vh] overflow-y-auto">
        <button type="button" wire:click="$dispatch('projectCreator')"
            class="px-6 py-3 bg-gray-100 dark:bg-gray-900 hover:bg-white transition-all duration-300 rounded-xl">
            <div class="flex justify-between items-center">
                <div class="flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="28"
                        height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 5l0 14" />
                        <path d="M5 12l14 0" />
                    </svg>
                    <h6 class="text-lg font-semibold">Add new project</h6>
                </div>
            </div>
        </button>

        {{-- Add new --}}

        @foreach ($projects as $project)
            <button type="button" wire:transition wire:key="{{ $project->id }}"
                wire:click="$dispatch('projectUpdater', {id: {{ $project->id }} })"
                class="px-6 py-3 bg-gray-100 dark:bg-gray-900 hover:bg-white transition-all duration-300 rounded-xl">
                <div class="flex justify-between items-center">
                    <div class="text-left">
                        <h1 class="text-lg font-semibold">{{ $project->name }}</h1>
                        <p class="text-sm text-gray-500">{{ $project->code }}</p>
                    </div>
                    <div>
                        <div class="w-3 h-3 rounded-full {{ $project->status ? 'bg-green-600' : 'bg-red-600' }}">
                        </div>
                    </div>
                </div>
            </button>
        @endforeach

    </div>
</div>
