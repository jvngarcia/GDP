<div>
    <div class="{{ $create ? 'block' : 'hidden' }}">
        <livewire:projects.create />
    </div>

    <div class="{{ $update ? 'block' : 'hidden' }}">
        <livewire:projects.show />
    </div>

</div>
