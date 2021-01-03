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
// 		mysqli_query($con,"update user set status='$status' where id='$id'");
// 		redirect('user.php');
// 	}

// }

$sql="select * from users ";
$res=mysqli_query($con,$sql);

?>
  <div class="card">
            <div class="card-body">
              <h1 class="grid_title">User</h1>
			  <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="20%">STT</th>
                            <th width="20%">EMAIL</th>
                            <th width="20%">NAME</th>
						              	<th width="20%">PHONE</th>
                            <th width="20%">ADDRESS</th>
						              	<th width="20%">IMAGE</th>
							<!-- <th width="28%">ACTIONS</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(mysqli_num_rows($res)>0){
                          $i=1;
                          while($row=mysqli_fetch_assoc($res)){
                          ?>
                          <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['phone']?></td>
                            <td><?php echo $row['address']?></td>
                            <td><?php echo $row['img']?></td>
                            
                            <td>
                            
                            </td>
                            
                                        
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