<?php
include('top.php');

// if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['id']) && $_GET['id']>0){
// 	$type=get_safe_value($_GET['type']);
// 	$id=get_safe_value($_GET['id']);
// 	if($type=='delete'){
// 		mysqli_query($con,"delete from coupon_code where id='$id'");
// 		redirect('coupon_code.php');
// 	}
// 	if($type=='active' || $type=='deactive'){
// 		$status=1;
// 		if($type=='deactive'){
// 			$status=0;
// 		}
// 		mysqli_query($con,"update coupon_code set status='$status' where id='$id'");
// 		redirect('coupon_code.php');
// 	}

// }

$sql="SELECT idfood, SUM(quantity) AS total_quatity FROM orderfoods WHERE status = 2 GROUP BY idfood ORDER BY total_quatity DESC LIMIT 10";
$res=mysqli_query($con,$sql);
$foods = [];
while($row = mysqli_fetch_assoc($res)) {
    $foods[] = $row['idfood'];
}

$in = '(' . implode(',', $foods) .')';

$sql="SELECT * FROM foods WHERE  id IN". $in;
$res=mysqli_query($con,$sql);



?>

<div class="card">
    <div class="card-body">
        <h1 class="grid_title">TOP FOOD FAVOURITE</h1>
        <div class="row grid_box">

            <div class="col-12">
                <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>
                        <tr>
                            <th width="5%">STT</th>
                            <th width="auto">NAME</th>
                            <th width="auto">DESCRIPTION</th>
                            <th width="auto">PRICE</th>
                           

                        </tr>
                        </thead>
                        <tbody>
                        <?php if(mysqli_num_rows($res)>0){
                            $i=1;
                            while($row=mysqli_fetch_assoc($res)){
                                ?>
                                <tr>
                                    <td>
                                        <div class="div_order_id">
                                            <a href="order.php?id=<?php echo $row['id']?>"><?php echo $row['id']?></a>
                                        </div>
                                    </td>
                                    <td>
                                        <p><?php echo $row['name']?></p>

                                    <td>
                                        <p><?php echo $row['description']?></p>

                                    </td>
                                    <td>

                                        <p><?php echo $row['price']?></p>
                                    </td>
                                  
                                </tr>
                                <?php
                                // $i++;
                            } } else { ?>
                            <tr>
                                <td colspan="6">Không tìm thấy dữ liệu</td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php');?>
