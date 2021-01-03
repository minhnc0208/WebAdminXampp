<?php 
include('top.php');

// if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['id']) && $_GET['id']>0){
// 	$type=get_safe_value($_GET['type']);
// 	$id=get_safe_value($_GET['id']);
// 	if($type=='delete'){
// 		mysqli_query($con,"delete from banner where id='$id'");
// 		redirect('banner.php');
// 	}
// 	if($type=='active' || $type=='deactive'){
// 		$status=1;
// 		if($type=='deactive'){
// 			$status=0;
// 		}
// 		mysqli_query($con,"update banner set status='$status' where id='$id'");
// 		redirect('banner.php');
// 	}

// }

$sql="select * from orderfoods";
$res=mysqli_query($con,$sql);

?>
  <div class="card">
            <div class="card-body">
              <h1 class="grid_title">ORDER FOOD</h1>
			  <a href="manage_banner.php" class="add_link">Add Banner</a>
              <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="10%">STT</th>
							<th width="10%">ID USER</th>
                            <th width="15%">ID PAYMENT</th>
                            <th width="25%">ID FOOD</th>
                            <th width="25%">DATE</th>
							<th width="25%">TOTAL</th>
							<th width="25%">STATUS</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(mysqli_num_rows($res)>0){
						$i=1;
						while($row=mysqli_fetch_assoc($res)){
						?>
						<tr>
                            <td><?php echo $row['id']?></td>
							<td><?php echo $row['iduser']?></td>
							<td><?php echo $row['idpayment']?></td>
							<td><?php echo $row['idfood']?></td>
							<td><?php echo $row['date']?></td>
							<td><?php echo $row['total']?></td>
							<td><?php echo $row['status']?></td>
                            
							
                           
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