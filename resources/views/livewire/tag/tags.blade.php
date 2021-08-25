<x-modal>
    <div>
        <x-slot name="title">
            This Is The Form Example
        </x-slot>
        <x-slot name="content">
            <div class="modal-body grid grid-cols-24 gap-4 gap-y-3">
                <div class="col-span-12 sm:col-span-6">
                    @if ($is_delete == true)
                    <h1>Are You Sure?</h1>
                    @else
                    <label for="name" class="form-label">Name</label>
                    <input type="text" wire:model="name" class="form-control" placeholder="create multiple tags separate by comma (,)">
                    @endif
                </div>
            </div>
        </x-slot>
        <x-slot name="buttons">
            <button type="button" wire:click="$emit('closeModal')" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
            @if ($is_delete == true)
            <button type="submit" wire:click="deleteTag()" class="{{ $is_delete == false ? 'btn btn-primary' : 'btn btn-danger' }} w-20">Send</button>
            @else
            <button type="submit" wire:click="save()" class="{{ $is_delete == false ? 'btn btn-primary' : 'btn btn-danger' }} w-20">Send</button>
            @endif
        </x-slot>
    </div>
</x-modal>
