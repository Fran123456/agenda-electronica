$("#avatar").dataTable({
      "language": {
        "url": "DataTables/lenguaje.js"
      },
      dom: 'Bfrtip',
        buttons: [

              {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [0, 1, 2 ]
                }
              },

              {
                extend: 'excel',
                exportOptions: {
                    columns: [0, 1, 2 ]
                }
              },
              
             
              {
                extend: 'pdfHtml5',
                  download: 'open',
                  exportOptions: {
                    columns: [ 0, 1, 2]
                }
              }
              ,'colvis'

              
          ],
    }); 