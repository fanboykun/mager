<x-modal form-action="addScheduleToTheDate">
    <div>
        <x-slot name="title">
            Add New Schedule to {{ $start }}
        </x-slot>
        <x-slot name="content">
            <div class="modal-body grid grid-cols-24 gap-4 gap-y-3">
                <div class="col-span-12 sm:col-span-6">
                    <div>
                        <label for="name" class="form-label">Title</label>
                        <input type="text" wire:model="title" class="form-control" placeholder="title">
                    </div>
                    <div data-simple-toolbar="true" class="editor mt-5">
                            <label for="description" class="form-label">Description</label>
                            <textarea wire:model="description" class="form-control"></textarea>
                    </div>
                    <div class="grid grid-cols-12 gap-4 gap-y-3 mt-5">
                        <div class="col-span-12 sm:col-span-6">
                            <label for="modal-datepicker-1" class="form-label">From</label>
                            <input type="date" wire:model="start_at" id="modal-datepicker-1" class="datepicker form-control" data-single-mode="true">
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label for="modal-datepicker-2" class="form-label">To</label>
                            <input type="date" wire:model="end_at" id="modal-datepicker-2" class="datepicker form-control" data-single-mode="true">
                        </div>
                    </div>
                </div>
            </div>
        </x-slot>
        <x-slot name="buttons">
            <button type="button" wire:click="$emit('closeModal')" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
            <button type="submit" wire:click="addScheduleToTheDate()" class="btn btn-primary w-20">Send</button>
        </x-slot>
    </div>
</x-modal>


