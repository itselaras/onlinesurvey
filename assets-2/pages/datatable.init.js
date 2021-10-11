/*
 Template Name: Lexa - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesbrand
 File: Datatable js
 */

$(document).ready(function() {
    $('#datatable').DataTable();

    //Buttons examples
    var table = $('#datatable-buttons').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'colvis'],
        "scrollX": true,
    });

    table.buttons().container()
        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        
    //Buttons examples
    var table_soal = $('#datatable-soal').DataTable({
        scrollY:        "300px",
        scrollX:        false,
        scrollCollapse: true,
        paging:         false,
        buttons: ['copy', 'excel', 'colvis'],
        columnDefs: [
            { width: '20%', targets: 0 }
        ],
        fixedColumns: true
    });

    table_soal.buttons().container()
        .appendTo('#datatable-soal_wrapper .col-md-6:eq(0)');
} );