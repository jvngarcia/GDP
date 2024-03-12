<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Projects') }}
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-3">
                <livewire:projects.index />

                <div class="col-span-2 bg-white rounded-lg p-6">
                    <livewire:projects.action-handler />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
