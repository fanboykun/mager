<x-modal form-action="addCategory">
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
                    <input type="text" wire:model="name" class="form-control" placeholder="create category name">
                    @endif
                </div>
            </div>
        </x-slot>
        <x-slot name="buttons">
            <button type="button" wire:click="$emit('closeModal')" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
            @if ($is_delete == false)
            <button type="submit" wire:click="save()" class="btn btn-primary w-20">Send</button>
            @else
            <button type="submit" wire:click="deleteCategory()" class="btn btn-danger w-20">Send</button>
            @endif
        </x-slot>
    </div>
</x-modal>
