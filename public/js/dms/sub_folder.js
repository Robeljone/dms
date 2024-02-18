$(document.body).on(function() {
    $("#folderFrm").on("submit", function(event) {
        event.preventDefault();
        alert("Sample Name");
        // $.ajax({
        //     type: "POST",
        //     url: "/save_folder",
        //     data: $("#folderFrm").serialize(),
        //     success: function (response)
        //     {
        //         if (response.status==='Success')
        //         {
        //             const toast = document.getElementById('succ');
        //             toast.classList.remove('hidden');
        //             setTimeout(() => {
        //                 toast.classList.add('hidden');
        //             }, 3000);
        //         }
        //         else if(response.status==='Error')
        //         {
        //             const toast = document.getElementById('err');
        //             toast.classList.remove('hidden');
        //             setTimeout(() => {
        //                 toast.classList.add('hidden');
        //             }, 3000);
        //         }
        //     },
        //     error: function (data) {
        //         const toast = document.getElementById('err');
        //         toast.classList.remove('hidden');
        //         setTimeout(() => {
        //             toast.classList.add('hidden');
        //         }, 3000);
        //     },
        // });
    });
});
