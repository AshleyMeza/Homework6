<h1>Library 1 - Bar Chart</h1>
<div>2023 Ballon d'Or Ranking by Votes</div>
<div>
  <canvas id="Barchart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('Barchart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Lionel Messi', 'Erling Haaland', 'Kylian Mbappe', 'Kevin De Bruyne', 'Rodri'],
      datasets: [{
        label: ' # of Votes',
        data: [462, 357, 270, 100, 57],
        borderWidth: 12
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
<h1>Library 2 - Line Chart</h1>
<h1>Library 3 - </h1>
<h1>Library 4 - </h1>
