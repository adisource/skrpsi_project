<script>
<?php foreach ($data4 as $data4) {
  # code...
}?>
<?php foreach ($data5 as $data5) {
  # code...
}?>
<?php foreach ($data6 as $data6) {
  # code...
}?>
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Wiating", "Diterima", "Ditolak"],
    datasets: [{
      data: [<?php echo $data4?>, <?php echo $data5?>, <?php echo $data6 ?>],
      backgroundColor: ['#4e73df', '#1cc88a', '#e74a3b'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#e74a3b'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

</script>