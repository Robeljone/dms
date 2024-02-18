$("#loginfrm").on("submit", function(event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: "/login_user",
        data: $("#loginfrm").serialize(),
        success: function (response) {
            if (response.status === 'Success') {
                redirectToNewPage();
            } else {
                alert('Error: ' + response.message);
                // Additional logic for failure
            }
            // redirectToNewPage();
        },
        error: function (response) {
                alert(response.message);
        },
    });
});
function redirectToNewPage() {
    // Redirect to a specific URL
    window.location.href = 'http://localhost:8000/dashboard';
}
