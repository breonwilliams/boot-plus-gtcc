(function($){
  $('#coursesTable').DataTable(
      {
        "dom": '<"dt-buttons"Bf><"clear">lirtp',
        "paging": true,
        "autoWidth": true,
        "buttons": [
          'pdfHtml5',
          'print'
        ]
      }
  );
})(jQuery);
