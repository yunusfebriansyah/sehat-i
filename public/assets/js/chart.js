$(document).ready(function() {


    const data = {
        datasets: [{
          data: dataCovid,
          backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(26, 206, 163)',
            'rgb(255, 205, 86)',
            'rgb(54, 162, 235)'
          ],
          hoverOffset: 4
        }]
      };

      const config = {
        type: 'doughnut',
        data: data,
      };

      const myChart = new Chart(
        document.getElementById('covid_chart'),
        config
      );


});
