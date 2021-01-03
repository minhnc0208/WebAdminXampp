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

$sql="select * from vouchers";
$res=mysqli_query($con,$sql);

?>
  <div class="card">
            <div class="card-body">
              <h1 class="grid_title">VOUCHERS</h1>
			  <a href="manage_coupon_code.php" class="add_link">ADD VOUCHERS</a>
			  <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="5%">STT</th>
                            <th width=auto>NAME</th>
                       
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(mysqli_num_rows($res)>0){
						$i=1;
						while($row=mysqli_fetch_assoc($res)){
						?>
						<tr>
                            <td><?php echo $row['id']?></td>
							<td><?php echo $row['name']?></td>
							
                        </tr>
                        <?php 
						$i++;
						} } else { ?>
						<tr>
							<td colspan="5">Không tìm thấy dữ liệu</td>
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