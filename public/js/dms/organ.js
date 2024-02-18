$(document).ready(function() {
    $("#orgfrm").on("submit", function(event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: "/save_organization",
            data: $("#orgfrm").serialize(),
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
