<div>
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Calendar Schedule</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="btn btn-primary shadow-md mr-2"
             {{-- wire:click='$emit("openModal", "schedule.add-schedule")' --}}
             wire:click='$emit("goModal")'
             >Add New {{ $start }}</button>
            <div class="dropdown ml-auto sm:ml-0">
                <button class="dropdown-toggle btn px-2 box text-gray-700 dark:text-gray-300" aria-expanded="false">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-feather="plus"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                            <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                        </a>
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                            <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-5 mt-5">
        <!-- END: Calendar Side Menu -->
        <!-- BEGIN: Calendar Content -->
        <div class="col-span-12 xl:col-span-12 xxl:col-span-12">
            <div class="box p-5" id="calendar-container" wire:ignore>
                <div class="full-calendar" id="calendar"></div>
            </div>
        </div>
        <!-- END: Calendar Content -->
    </div>

    {{-- modal --}}
        <div x-data x-on:endModal.window="killIt()" id="modal" class="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- BEGIN: Modal Header -->
                    <div class="modal-header">
                        <h2 class="font-medium text-base mr-auto">Create New Schedule</h2>
                        {{-- <button class="btn btn-outline-secondary hidden sm:flex">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs
                        </button> --}}
                        <div class="dropdown sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-600"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                    <a href="javascript:;" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Modal Header -->
                    <!-- BEGIN: Modal Body -->
                {{-- <form wire:submmit.prevent="saveSchedule"> --}}
                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                        <div class="col-span-12 sm:col-span-12">
                            <label class="form-label">Tile</label>
                            <input type="text" wire:model.lazy="title" class="form-control" placeholder="input title">
                        </div>
                        <div class="col-span-12 sm:col-span-12">
                            <label class="form-label">Range Date {{ $range }}</label>
                            <input type="text" id="range" class="datepicker form-control" placeholder="date">
                        </div>
                    </div>
                    <!-- END: Modal Body -->
                    <!-- BEGIN: Modal Footer -->
                    <div class="modal-footer text-right">
                        <button type="buttom" wire:click='$emit("endModal")' class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                        <button type="submit" wire:click.prevent="saveSchedule" class="btn btn-primary w-20 mr-1">Send
                            @if ($process = true)
                            <i data-loading-icon="circles" class="w-4 h-4 ml-2"></i>
                            @endif
                        </button>
                    </div>
                    <!-- END: Modal Footer -->
                {{-- </form> --}}
                </div>
            </div>
        </div>
    {{-- end modal --}}

</div>
@once
@push('styles')
<link rel="stylesheet" href="{{ asset('css/main-fc.css') }}">
@endpush
@endonce
@push('scripts')
{{-- <script>
    window.addEventListener('endModal', () => {
    cash("#modal").modal("hide");
    alert("hayoo");
})
</script> --}}

<script src="{{ asset('js/main-calendar.js') }}"></script>
<script>
    document.addEventListener('livewire:load', function(){
        function killIt(){
            cash("#modal").modal("hide");
        }
        var Calendar = FullCalendar.Calendar;
        // var Draggable = FullCalendar.Draggable;
        var calendarEl = document.getElementById('calendar');
        var calendar =  new Calendar(calendarEl, {
            droppable: true,
            headerToolbar: {
                left: "prev,next today",
                center: "title",
                right: "dayGridMonth,timeGridWeek,timeGridDay,listWeek",
            },
            navLinks: true,
            editable: true,
            selectable: true,
            dayMaxEvents: true,
            events: @this.events,

            eventClick: function(info) {
                Livewire.emit('openModal', 'schedule.edit-schedule', {schedule_id : info.event.id});
            },
            dateClick: function(info) {
                var date = info.dateStr
                Livewire.emit('openModal', 'schedule.add-to-the-date', { start_at : date });
            },

            eventDrop: function(info) {
                var schedule = info.event.id;
                var start = info.event.start.toISOString();
                var end = info.event.end.toISOString();
                // alert(info.event.title + " was dropped on " + info.event.start.toISOString() + " end will end at " + info.event.end.toISOString());

                // if (!confirm("Are you sure about this change?")) {
                // info.revert();
                // }
                Livewire.emit('rearrangeDate',schedule, start, end);
            },
        });

        calendar.render();
        Livewire.on('refreshCalendar', () => {
            @this.render
            calendar.render();
        });

        @this.on('goModal', () => {
            cash("#modal").modal("toggle");
        });

        // Livewire.on('endModal', () => {
        //     cash("#modal").modal("toggle");
        // });

        const picker = new Litepicker({
            element: document.getElementById("range"),
            zIndex: 100000,
            autoApply: false,
            singleMode: false,
            autoRefresh: true,
            numberOfColumns: 1,
            numberOfMonths: 1,
            showWeekNumbers: true,
            format: "DD-MM-YYYY",
            dropdowns: {
                minYear: 1990,
                maxYear: null,
                months: true,
                years: true,
            },
            setup: (picker) => {
                picker.on('selected', (date1, date2) => {
                    var start = picker.getStartDate().toLocaleString("en-US", {"timezone": "Asia/Jakarta"});
                    var end = picker.getEndDate().toLocaleString("en-US", {"timezone": "Asia/Jakarta"});
                    // var start = picker.getStartDate();
                    // var end = picker.getEndDate();
                    console.log(start, end);
                    // picker.preventClick = true;
                    Livewire.emit('dateSetted',start, end);
                });
            },
        });
});

</script>
@endpush
