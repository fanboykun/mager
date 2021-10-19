<input
id="range"
    {{-- x-data --}}
    {{-- x-ref="input" --}}
    {{-- x-init="$picker = new Litepicker({
    element: $refs.input,
        zIndex: 100000,
        autoApply: false,
        singleMode: true,
        autoRefresh: true,
        numberOfColumns: 1,
        numberOfMonths: 1,
        showWeekNumbers: true,
        format: 'DD-MM-YYYY',
        dropdowns: {
            minYear: 1990,
            maxYear: null,
            months: true,
            years: true,
        },
})" --}}
type="text" class="datepicker form-control" placeholder="range date">

@section('scripts')

<script>
document.addEventListener('livewire:load', function(){
    // cash("#range").each(function () {
    //     let options = {
    //         zIndex: 100000,
    //         autoApply: false,
    //         singleMode: true,
    //         autoRefresh: true,
    //         numberOfColumns: 1,
    //         numberOfMonths: 1,
    //         showWeekNumbers: true,
    //         format: "DD-MM-YYYY",
    //         dropdowns: {
    //             minYear: 1990,
    //             maxYear: null,
    //             months: true,
    //             years: true,
    //         },
    //     };

        const picker = new Litepicker({
            element: document.getElementById("range"),
            // ...options,
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
        });

        setup: (picker) => {
                picker.on('selected', (date1, date2) => {
                    // Livewire.emit('from-selected', date1)
                    // alert(date1);
                    @this.range = date1;
                });
            }
    // });
});
</script>

@endsection
