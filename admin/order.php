<?php 
include('top.php');
if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['id']) && $_GET['id']>0){
	$type=$_GET['type'];
	$id=$_GET['id'];
	if($type=='delete'){
		mysqli_query($con,"delete from foods where id='$id'");
		redirect('order.php');
	}
	// if($type=='active' || $type=='deactive'){
	// 	$status=1;
	// 	if($type=='deactive'){
	// 		$status=0;
	// 	}
	// 	mysqli_query($con,"update category set status='$status' where id='$id'");
	// 	redirect('category.php');
	// }

}
$sql="select * from foods ORDER BY id DESC";
$res=mysqli_query($con,$sql);


?>
  <div class="card">
            <div class="card-body">
              <h1 class="grid_title">FOODS</h1>
			  <a href="manage_order.php" class="btn btn-warning btn-rounded">ADD FOODS</a>
			  <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="5%%">STT</th>
                            <th width="auto">NAME</th>
							<th width="auto">DESCRIPTION</th>
							<th width="auto">PRICE</th>
							<th width="50%">IMG</th>
							<th width="auto">ACTIONS</th>
							<!-- <th width="10%">Payment Type</th>
							<th width="10%">Payment Status</th>
							<th width="10%">Order Status</th>
                            <th width="15%">Added On</th> -->
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
							<td>
								
								<p><?php echo $row['img']?></p>
							</td>
							<td>
							<a href="manage_order.php?id=<?php echo $row['id']?>"><label class="badge badge-success hand_cursor">Edit</label></a>&nbsp;
							
							<a href="?id=<?php echo $row['id']?>&type=delete"><label class="badge badge-danger delete_red hand_cursor">Delete</label></a>&nbsp;
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