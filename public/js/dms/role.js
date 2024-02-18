$(document).ready(function() {
    $('#dataTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        paging: true,
        searching: true,
    });
    $("#rolefrm").on("submit", function(event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: "/save_role",
            data: $("#rolefrm").serialize(),
            success: function (data) {
                if (response.status==='Success')
                {
                    const toast = document.getElementById('succ');
                    toast.classList.remove('hidden');
                    setTimeout(() => {
                        toast.classList.add('hidden');
                    }, 3000);
                }
                else if(respose.status==='Error')
                {
                    const toast = document.getElementById('err');
                    toast.classList.remove('hidden');
                    setTimeout(() => {
                        toast.classList.add('hidden');
                    }, 3000);
                }
            },
            error: function (data) {
                const toast = document.getElementById('err');
                toast.classList.remove('hidden');
                setTimeout(() => {
                    toast.classList.add('hidden');
                }, 3000);
            },
        });
    });
});
