document.addEventListener('DOMContentLoaded', () => {

    // Line chart
    const ctx1 = document.getElementById('velvet-chart-line');
    if (ctx1) {
        new Chart(ctx1, {
            type: 'line',
            data: {
                labels: ['Jan','Feb','Mar','Apr','Mai','Jun','Jul','Aou','Sep','Oct','Nov','Dec'],
                datasets: [{
                    label: 'Bookings',
                    data: [2,1,4,3,5,6,3,4,6,7,4,8],
                    borderWidth: 2
                }]
            }
        });
    }

    // Donut chart
    const ctx2 = document.getElementById('velvet-chart-donut');
    if (ctx2) {
        new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['Plan', 'A Vérifier', 'Annulé'],
                datasets: [{
                    data: [12,5,3],
                }]
            }
        });
    }

});
