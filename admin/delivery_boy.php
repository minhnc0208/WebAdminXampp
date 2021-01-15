<?php
include('top.php');

// if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['id']) && $_GET['id']>0){
// 	$type=get_safe_value($_GET['type']);
// 	$id=get_safe_value($_GET['id']);
// 	if($type=='active' || $type=='deactive'){
// 		$status=1;
// 		if($type=='deactive'){
// 			$status=0;
// 		}
// 		mysqli_query($con,"update delivery_boy set status='$status' where id='$id'");
// 		redirect('delivery_boy.php');
// 	}

// }

$sql = "select * from ratings";
$res = mysqli_query($con, $sql);

?>
<div class="card">
  <div class="card-body">
    <h1 class="grid_title">RATING</h1>
    <!-- <a href="manage_delivery_boy.php" class="add_link">Add Delivery</a> -->
    <div class="row grid_box">

      <div class="col-12">
        <div class="table-responsive">
          <table id="order-listing" class="table">
            <thead>
              <tr>
                <th width="10%">ID USER</th>
                <th width=auto>ID FOOD</th>
                <th width=auto>RATE</th>
                <th width=auto>DATE</th>

              </tr>
            </thead>
            <tbody>
              <?php if (mysqli_num_rows($res) > 0) {
                $i = 1;
                while ($row = mysqli_fetch_assoc($res)) {
              ?>
                  <tr>
                    <td><?php echo $row['iduser'] ?></td>
                    <td><?php echo $row['idfood'] ?></td>
                    <td><?php echo $row['rate'] ?></td>
                    <td><?php echo $row['date'] ?></td>


                  </tr>
                <?php
                  $i++;
                }
              } else { ?>
                <tr>
                  <td colspan="5">No data found</td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>