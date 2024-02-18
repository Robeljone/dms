$(document.body).on(function() {
    alert("Sample Name");
    $('#list_record').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        button: true,
        paging: true,
        searching: true,
    });
});
