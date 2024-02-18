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
    $("#subcityfrm").on("submit", function(event) {
        event.preventDefault();
        var form = document.getElementById("subcityfrm");
        var fileInput = document.getElementById('fileInput');
        var file = fileInput.files[0];
        let formData = new FormData(form);
        formData.append("fname","name");
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.post({
            url: "/new_profile_subcity",
            data: $("#subcityfrm").serialize(),
            processData: false,
            contentType: false,
            async: true,
            success: function(data) {
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
            error: function(data) {
                const toast = document.getElementById('err');
                        toast.classList.remove('hidden');
                        setTimeout(() => {
                            toast.classList.add('hidden');
                        }, 3000);
            },
        });
        // $.ajax({
        //     type: "POST",
        //     url: "/new_profile_subcity",
        //     data: $("#subcityfrm").serialize(),
        //     success: function (respose) {
        //         if (respose.status==='Success')
        //         {
        //             const toast = document.getElementById('succ');
        //             toast.classList.remove('hidden');
        //             setTimeout(() => {
        //                 toast.classList.add('hidden');
        //                 $("#subcityfrm").clean();
        //             }, 3000);
        //         }
        //         else if(respose.status==='Error')
        //         {
        //             const toast = document.getElementById('err');
        //             toast.classList.remove('hidden');
        //             setTimeout(() => {
        //                 toast.classList.add('hidden');
        //                 $("#subcityfrm").clean();
        //             }, 3000);
        //         }
        //     },
        //     error: function (data) {
        //         const toast = document.getElementById('err');
        //         toast.classList.remove('hidden');
        //         setTimeout(() => {
        //             toast.classList.add('hidden');
        //             $("#subcityfrm").clean();
        //         }, 3000);
        //     },
        // });
    });
});
