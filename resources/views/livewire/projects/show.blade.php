<div class="px-4 flex flex-col gap-6">

    <div class="flex justify-between items-center">
        <h1 wire:loading.remove class="text-2xl font-semibold">{{ $project->name }} </h1>
        <span wire:loading class=" w-96">
            <div class="animate-pulse flex">
                <div class="flex-1 space-y-6 py-1">
                    <div class="h-4 bg-slate-200 rounded w-full"></div>
                </div>
            </div>
        </span>

        <div class="flex gap-4">
            <button type="button" wire:click="$dispatch('projectUpdater', {id: {{ $project->id }} })"
                class="px-6 py-2 bg-indigo-200 dark:bg-gray-900 hover:bg-indigo-100 transition-all duration-300 rounded-md">
                <div class="flex justify-between items-center">
                    <div class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="18"
                            height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                            <path d="M16 5l3 3" />
                        </svg>
                        <h6 class="text-md font-semibold">Edit</h6>
                    </div>
                </div>
            </button>
            <button type="button" wire:click="$dispatch('projectDeleter', {id: {{ $project->id }} })"
                class="px-6 py-2 bg-red-200 dark:bg-gray-900 hover:bg-red-100 transition-all duration-300 rounded-md">
                <div class="flex justify-between items-center">

                    <div class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash"
                            width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 7l16 0" />
                            <path d="M10 11l0 6" />
                            <path d="M14 11l0 6" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                        </svg>
                        <h6 class="text-md font-semibold">Delete</h6>
                    </div>
                </div>
            </button>
        </div>
    </div>


    <div class="grid grid-cols-4">
        <div class="flex flex-col gap-2">
            <h6 class="text-lg font-semibold">Project Code</h6>
            {{-- Icon copy --}}
            <div class="flex gap-2 items-center">
                <button type="button"
                    class="p-2 bg-gray-100 dark:bg-gray-900 hover:bg-white transition-all duration-300 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clipboard"
                        width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                        <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="flex flex-col gap-2">
            <h6 class="text-lg font-semibold">Status</h6>
            <div wire:loading.remove class="flex gap-2 items-center">
                <div class="w-3 h-3 rounded-full {{ $project->status ? 'bg-green-600' : 'bg-red-600' }}">
                </div>
                <p class="text-gray-500">{{ $project->status ? 'Active' : 'Inactive' }}</p>
            </div>

            <span wire:loading class=" w-4/5 ">
                <div class="animate-pulse flex">
                    <div class="flex-1 space-y-6 py-1">
                        <div class="h-4 bg-slate-200 rounded w-full"></div>
                    </div>
                </div>
            </span>
        </div>

        <div class="flex flex-col gap-2">
            <h6 class="text-lg font-semibold">Created At</h6>
            <p wire:loading.remove class="text-gray-500">
                {{ $project->created_at ? $project->created_at->format('M d, Y') : '' }}
            </p>
            <span wire:loading class=" w-4/5 ">
                <div class="animate-pulse flex">
                    <div class="flex-1 space-y-6 py-1">
                        <div class="h-4 bg-slate-200 rounded w-full"></div>
                    </div>
                </div>
            </span>
        </div>
        <div class="flex flex-col gap-2">
            <h6 class="text-lg font-semibold">Updated At</h6>
            <p wire:loading.remove class="text-gray-500">
                {{ $project->updated_at ? $project->updated_at->format('M d, Y') : '' }}
            </p>

            <span wire:loading class=" w-4/5 ">
                <div class="animate-pulse flex">
                    <div class="flex-1 space-y-6 py-1">
                        <div class="h-4 bg-slate-200 rounded w-full"></div>
                    </div>
                </div>
            </span>
        </div>

    </div>

    <div>
        <h6 class="text-lg font-semibold">Description</h6>
        <p wire:loading.remove class="text-gray-500">{{ $project->description }}</p>

        <span wire:loading class="w-full">
            <div class="animate-pulse flex">
                <div class="flex-1 space-y-2 py-1">
                    <div class="h-4 bg-slate-200 rounded w-full"></div>
                    <div class="h-4 bg-slate-200 rounded w-1/2"></div>
                </div>
            </div>
        </span>
    </div>




    <div class="flex justify-between items-center">
        <h2 class="text-xl font-semibold">Usuarios registrados</h2>
        <button type="button" wire:click="$dispatch('projectUpdater', {id: {{ $project->id }} })"
            class="px-2 py-2 bg-indigo-200 dark:bg-gray-900 hover:bg-indigo-100 transition-all duration-300 rounded-md">
            <div class="flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-apps" width="18"
                    height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                    <path d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                    <path d="M14 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                    <path d="M14 7l6 0" />
                    <path d="M17 4l0 6" />
                </svg>
            </div>
        </button>
    </div>


    <div class="w-full">
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="text-left">Nombre</th>
                    <th class="text-left">Email</th>
                    <th class="text-left">Acciones</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($project->users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <button type="button" wire:click="$dispatch('userDeleter', {id: {{ $user->id }} })"
                                class="px-2 py-1 bg-red-200 dark:bg-gray-900 hover:bg-red-100 transition-all duration-300 rounded-md">
                                <div class="flex justify-between items-center">
                                    <div class="flex gap-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash"
                                            width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                        <h6 class="text-md font-semibold">Delete</h6>
                                    </div>
                                </div>
                            </button>
                        </td>
                    </tr>
                @endforeach --}}

                <tr>
                    <td>Angel García</td>
                    <td>angel@ejemplo.com</td>
                    <td>

                        <button type="button" wire:click="$dispatch('userDeleter', {id: {{ 0 }} })"
                            class="px-2 py-1 bg-indigo-200 dark:bg-gray-900 hover:bg-indigo-100 transition-all duration-300 rounded-md">
                            <div class="flex justify-between items-center">
                                <div class="flex gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit"
                                        width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="#000000" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path
                                            d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                    </svg>
                                </div>
                            </div>
                        </button>
                        <button type="button" wire:click="$dispatch('userDeleter', {id: {{ 0 }} })"
                            class="px-2 py-1 bg-red-200 dark:bg-gray-900 hover:bg-red-100 transition-all duration-300 rounded-md">
                            <div class="flex justify-between items-center">
                                <div class="flex gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash"
                                        width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="#000000" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 7l16 0" />
                                        <path d="M10 11l0 6" />
                                        <path d="M14 11l0 6" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg>
                                </div>
                            </div>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="flex justify-between items-center">
        <h2 class="text-xl font-semibold">Roles y permisos</h2>

    </div>

</div>
