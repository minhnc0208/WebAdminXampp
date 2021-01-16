<?php include('top.php');
include('../database.inc.php');
$day = date('d');
$month = date('m');
$year = date('Y');
$sql="SELECT idfood, SUM(total) as total FROM orderfoods WHERE Day(date) = {$day} And Month(date) = {$month} and Year(date) = {$year} and status = 2 GROUP BY idfood ";
$res=mysqli_query($con,$sql);
$foods = [];
$totalDay = 0;
$totalMonth = 0;
$totalYear = 0;
if (mysqli_num_rows($res) > 0) {
    while($row = mysqli_fetch_assoc($res)) {
        $totalDay += $row['total'];
    }
}

$sql="SELECT idfood, SUM(total) as total FROM orderfoods WHERE Month(date) = {$month} and Year(date) = {$year} and status = 2 GROUP BY idfood";
$res=mysqli_query($con,$sql);
if (mysqli_num_rows($res) > 0) {
    while($row = mysqli_fetch_assoc($res)) {
        $totalMonth += $row['total'];
    }
}

$sql="SELECT idfood, SUM(total) as total FROM orderfoods WHERE Year(date) = {$year} and status = 2 GROUP BY idfood";
$res=mysqli_query($con,$sql);
if (mysqli_num_rows($res) > 0) {
    while($row = mysqli_fetch_assoc($res)) {
        $totalYear += $row['total'];
    }
}
?>

<div class="row">






	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total User Register</div>
						<br>
						<div class="h5 mb-0 font-weight-bold text-gray-800">


							<?php

							$query = "SELECT id from users ORDER BY id";
							$query_run = mysqli_query($con, $query);


							$row = mysqli_num_rows($query_run);

							echo '<h4> ' . $row . ' USERS </h4> ';
							?>




						</div>
						<br>
						<br>
					</div>
					<div class="col-auto">
						<i class="mdi mdi-account icon-lg text-primary ml-auto"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-success shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-success text-uppercase mb-1">TOTAL FOODS</div>
						<br>
						<div class="h5 mb-0 font-weight-bold text-gray-800">
							<?php

							$query = "SELECT id from foods ORDER BY id";
							$query_run = mysqli_query($con, $query);


							$row = mysqli_num_rows($query_run);

							echo '<h4> ' . $row . ' FOODS </h4> ';
							?>
						</div>
						<br>
					</div>
					<div class="col-auto">
						<i class="mdi mdi-food icon-lg text-primary ml-auto"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-info shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-info text-uppercase mb-1">TOTAL TYPE FOODS</div>
						<br>
						<div class="row no-gutters align-items-center">
							<div class="col-auto">
								<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">

									<?php

									$query = "SELECT id from typefoods ORDER BY id";
									$query_run = mysqli_query($con, $query);


									$row = mysqli_num_rows($query_run);

									echo '<h4> ' . $row . ' TYPE FOODS </h4> ';
									?>
								</div>
							</div>
							<!-- <div class="col">
			  <div class="progress progress-sm mr-2">
				<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			</div> -->
						</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Pending Requests Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">TOTAL PAYMENT METHODS</div>
						<br>
						<div class="h5 mb-0 font-weight-bold text-gray-800">
							<?php

							$query = "SELECT id from paymentmethods ORDER BY id";
							$query_run = mysqli_query($con, $query);


							$row = mysqli_num_rows($query_run);

							echo '<h4> ' . $row . ' PAYMENT METHODS </h4> ';
							?>
						</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-comments fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">TOTAL DAY</div>
						<br>
						<div class="card-title">
						<h4 style="color:blue;">
						 <?php echo number_format($totalDay); ?> VND

						</h4>
							
						</div>
					</div>
					<div class="col-auto">
					<!-- <i class="mdi mdi-account icon-lg text-primary ml-auto"></i> -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<br>
	<br>
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">TOTAL MONTH</div>
						<br>
						<div class="card-title">
						<h4 style="color:green;">
						 <?php echo number_format($totalMonth); ?> VND

						</h4>
							
						</div>
					</div>
					<div class="col-auto">
					<!-- <i class="mdi mdi-account icon-lg text-primary ml-auto"></i> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">TOTAL YEAR</div>
						<br>
						<div class="card-title">
						<h4 style="color:red;">
						
						 <?php echo number_format($totalYear); ?> VND
						</h4>	
						</div>
					</div>
					<div class="col-auto">
					<!-- <i class="mdi mdi-account icon-lg text-primary ml-auto"></i> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<div class="card-body">
		<div class="col-12">
			<canvas id="myChart" width="400" height="200"></canvas>
		</div>
	</div>
</div>



<script>
    $(document).ready(function() {
        showChart();
    });

    function showChart() {
        $.post("handle_data_order.php",
            function(data, status){
                data = JSON.parse(data);
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: data.month ,
                        datasets: [{
                            label: 'MONEY',
                            data: data.data,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            fill: false,

                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                stacked: true
                            }]
                        }
                    }
                });
            });
    }
</script>

<?php include('footer.php'); ?>