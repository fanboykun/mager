<script>
    document.addEventListener('livewire:load', function(){
        cash("#range").each(function () {
            let options = {
                zIndex: 100000,
                autoApply: true,
                singleMode: false,
                autoRefresh: true,
                numberOfColumns: 2,
                numberOfMonths: 1,
                showWeekNumbers: true,
                format: "DD-MM-YYYY",
                onSelect: function(start, end) {
                    @this.range = start
                },
                dropdowns: {
                    minYear: 1990,
                    maxYear: null,
                    months: true,
                    years: true,
                },
            };

            var picker = new Litepicker({
                element: this,
                ...options,
            });

            // setup: (picker) => {
            //         picker.on('selected', (start, end) => {
            //             // Livewire.emit('from-selected', date1)
            //             // @this.range = date1;
            //             console.log('asu');
            //         });
            // }
        });
    });
</script>
