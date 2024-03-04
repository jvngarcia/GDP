<div class="py-4 px-3">
    <div class="flex justify-between">
        <h1 class="text-2xl font-bold">Projects</h1>
        <div class="flex items-center gap-3">

            <input wire:model="search" type="text" class="border border-gray-300 rounded-full px-4 py-2"
                placeholder="Search...">

            <select wire:model="status" id="" class="border border-gray-300 rounded-full px-4 py-2">
                <option value="">All</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>


            <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-full" wire:click="$refresh">Search</a>
        </div>

    </div>


    <div class="mt-4">
        <div class="flex items-center justify-end">

        </div>
    </div>

    <div class="mt-4">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Code</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>
                            <div class="flex justify-center items-center h-full">
                                {{ $project->code }}
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center items-center h-full">
                                <div
                                    class="w-3 h-3 rounded-full {{ $project->status ? 'bg-green-600' : 'bg-red-600' }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center items-center gap-3">
                                <a href="#" class="text-blue-500">Edit</a>
                                <a href="#" class="text-red-500 ml-2">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-12">
            {{ $projects->links() }}
        </div>

    </div>
</div>
