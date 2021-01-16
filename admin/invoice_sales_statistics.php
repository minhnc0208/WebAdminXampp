<?php
include('top.php');
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
    <div class="col-12">
        <div class="card">
            <div class="card-title">
                Day : <?php echo number_format($totalDay); ?>
                Month: <?php echo number_format($totalMonth); ?>
                Year: <?php echo number_format($totalYear); ?>
            </div>
            <div class="card-body">
                <div class="col-8">
                    <canvas id="myChart" width="400" height="400"></canvas>
                </div>
            </div>
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
                            label: 'STATICAL',
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

<?php include('footer.php');?>
