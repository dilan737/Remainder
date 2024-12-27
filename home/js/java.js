window.onload = function() {
    const ctx1 = document.getElementById('trackedItemsChart').getContext('2d');
    const ctx2 = document.getElementById('contactsChart').getContext('2d');
    const ctx3 = document.getElementById('creditBalanceChart').getContext('2d');

    new Chart(ctx1, {
        type: 'doughnut',
        data: {
            labels: ['Tracked Items'],
            datasets: [{
                data: [60, 240],
                backgroundColor: ['#4CAF50', '#ddd'],
            }]
        },
        options: {
            responsive: true,
        }
    });

    new Chart(ctx2, {
        type: 'doughnut',
        data: {
            labels: ['Contacts'],
            datasets: [{
                data: [5, 15],
                backgroundColor: ['#FF9800', '#ddd'],
            }]
        },
        options: {
            responsive: true,
        }
    });

    new Chart(ctx3, {
        type: 'doughnut',
        data: {
            labels: ['Credit Balance'],
            datasets: [{
                data: [2225, 7054],
                backgroundColor: ['#2196F3', '#ddd'],
            }]
        },
        options: {
            responsive: true,
        }
    });
};
