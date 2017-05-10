jQuery(function ($) {
    var table = $('#coursesTable').DataTable({
        dom: 'lrtip',
        initComplete: function () {
            this.api().columns([2]).every( function () {
                var column = this;
                console.log(column);
                var select = $("#instructorFltr");
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
            this.api().columns([3]).every( function () {
                var column = this;
                console.log(column);
                var select = $("#courseNumberFltr");
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
            $("#instructorFltr,#courseNumberFltr").material_select();
        },
        "dom": '<"dt-buttons"Bf><"clear">lirtp',
        "paging": true,
        "autoWidth": true,
        "responsive": true,
        "buttons": [
            'colvis',
            'pdfHtml5',
            'print',
        ]
    });

    $('#instructorFltr').on('change', function(){
        var search = [];

        $.each($('#instructorFltr option:selected'), function(){
            search.push($(this).val());
        });

        search = search.join('|');
        table.column(2).search(search, true, false).draw();
    });

    $('#courseNumberFltr').on('change', function(){
        var search = [];

        $.each($('#courseNumberFltr option:selected'), function(){
            search.push($(this).val());
        });

        search = search.join('|');
        table.column(3).search(search, true, false).draw();
    });
});
 