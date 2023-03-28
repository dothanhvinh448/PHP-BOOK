
<canvas id="myChart" style="width:100%;max-width:600px"></canvas>
    <script>
    var xValues = ["sach1", "sach2", "sach3", "sach4", "sach5"];
    var yValues = [200, 49, 44, 24, 15];
    var barColors = [
      "#b91d47",
      "#00aba9",
      "#2b5797",
      "#e8c3b9",
      "#1e7145"
    ];
    
    new Chart("myChart", {
      type: "pie",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        title: {
          display: true,
          text: "World Wide Wine Production 2018"
        }
      }
    });
    </script>; 
    