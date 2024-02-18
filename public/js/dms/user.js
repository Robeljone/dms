$(document).ready(function() {
    $('#dataTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        button: true,
        paging: true,
        searching: true,
    });
    $("#userfrm").on("submit", function(event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: "/new_user",
            data: $("#userfrm").serialize(),
            success: function (data) {
              alert(data);
            },
            error: function (data) {
                alert(data);
            },
        });
    });
});
