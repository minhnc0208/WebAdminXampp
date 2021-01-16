<?php
session_start();
include('../database.inc.php');
include('../function.inc.php');
include('../constant.inc.php');
$year = date('Y');
$months = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
$result = [];

foreach ($months as $item) {
    $amount = 0;
    $sql="SELECT idfood, SUM(total) as total FROM orderfoods WHERE Month(date) = {$item} and Year(date) = {$year} and status = 2 GROUP BY idfood";
    $res=mysqli_query($con,$sql);
    if (mysqli_num_rows($res) > 0) {
        while($row = mysqli_fetch_assoc($res)) {
            $amount += $row['total'];
        }
    }
    $result['data'][] = $amount;
}
$result['month'] = $months;
echo json_encode($result);
