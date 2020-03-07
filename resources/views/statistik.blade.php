<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik</title>
    <link rel="stylesheet" type="text/css" href="{{ url('assets/dashboard/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/dashboard/css/site.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script type="text/javascript" src="{{ url('assets/chart/Chart.js')}}"></script>
</head>
<body>
@include('menu')
    <div class="container-fluid pt-3">
        <div class="text-sm-left">
            <p><span class="fas fa-line-chart"></span> Statistic</p>
            <!-- <p>BUZZERPANEL.ID - SMM Panel Social Media Marketing Termurah <span class="fas fa-chevron-right"></span> <i class="fa fa-home"></i> Dashboard</p> -->
        </div>
        
        <h1 class="text-wrap pt-2 pb-4">Halaman Statistik Penjualan</h1>

        <div class="card card-chart p-4">
            <h4>Generated Report</h4>
            <canvas id="myChart"></canvas>
        </div>

    </div>
</body>

<footer>   
    <p class="text-center">Copyright &copy;2020 Created by Rifqi Ardhian. All Right Reserved</p>
</footer>

<script type="text/javascript">
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["High Budget", "Low Budget", "VIP", "Wholesaler"],
			datasets: [{
				label: '# of Votes',
				data: [500, 500, 10000, 6000],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>

<script type="text/javascript" src="{{ url('assets/dashboard/js/main.js')}}"></script>

<script src="{{ url('assets/dashboard/vendor/jquery-3.4.1.js')}}"></script>
</html>