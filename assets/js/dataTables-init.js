(function($){
  $('#coursesTable').DataTable(
      {
        "dom": '<"dt-buttons"Bf><"clear">lirtp',
        "paging": true,
        "autoWidth": true,
        "buttons": [
          'copyHtml5',
          'csvHtml5',
          'excelHtml5',
          'pdfHtml5',
          'print'
        ]
      }
  );
})(jQuery);
