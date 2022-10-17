@extends('layout.mainlayout')
@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <!-- <h1 class="h2">Dashboard</h1> -->
      <div id="piechart" style="width: 900px; height: 500px;"></div>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
  
        function drawChart() {
  
          var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            <?php echo $hasil ?>
          ]);
          
  
          var options = {
            title: 'Data Pemebelian'
          };
  
          var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  
          chart.draw(data, options);
        }
      </script>



    
@endsection