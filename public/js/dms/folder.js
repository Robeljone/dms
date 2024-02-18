$(document.body).on(function() {
    var rightClickDiv = document.getElementById('rightClickDiv');

    // Add a right-click event listener
    rightClickDiv.addEventListener('contextmenu', function (event) {
        event.preventDefault(); // Prevent the default context menu
        alert('Right-click event triggered!');
        // Add your custom right-click logic here
    });

    var data1 = {
        labels: ['January', 'February', 'March', 'April', 'May'],
        datasets: [{
            label: 'Dataset 1',
            data: [65, 59, 80, 81, 56],
            fill: false,
            borderColor: 'rgb(75, 192, 192)',
            tension: 0.1
        }]
    };

    var data2 = {
        labels: ['January', 'February', 'March', 'April', 'May'],
        datasets: [{
            label: 'Dataset 2',
            data: [25, 45, 70, 90, 42],
            fill: false,
            borderColor: 'rgb(255, 99, 132)',
            tension: 0.1
        }]
    };

    // Initialize charts
    var ctx1 = document.getElementById('dashboard1').getContext('2d');
    new Chart(ctx1, {
        type: 'line',
        data: data1,
    });

    var ctx2 = document.getElementById('dashboard2').getContext('2d');
    new Chart(ctx2, {
        type: 'line',
        data: data2,
    });
});
