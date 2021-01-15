<?php 
include('top.php');
$id ="";
if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['id']) && $_GET['id']>0){
	$type=$_GET['type'];
	$id=$_GET['id'];
	if($type=='view'){
    
    mysqli_query($con,"update orderfoods set status='1' where id=$id");
		// redirect('bannerdetails.php');
	}


}

$sql="select * from orderfoods ORDER BY id DESC";
$res=mysqli_query($con,$sql);

?>
  <div class="card">
            <div class="card-body">
              <h1 class="grid_title">ORDER FOOD</h1>
			  <!-- <a href="manage_banner.php" class="add_link">Add Banner</a> -->
              <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width=auto>STT</th>
							              <th width=auto>DATE</th>
                            <th width=auto>NAME</th>
                            <th width=auto>PHONE</th>
                            <th width=auto>ADDRESS</th>
                            <th width=auto>TOTAL</th>
                            <th width=auto>NOTE</th>
                            <th width=auto>ACTIONS</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(mysqli_num_rows($res)>0){
						$i=1;
						while($row=mysqli_fetch_assoc($res)){
						?>
						<tr>
              <td><?php echo $row['id']?></td>
							<td><?php echo $row['date']?></td>
							<td><?php echo $row['name']?></td>
							<td><?php echo $row['phone']?></td>
							<td><?php echo $row['address']?></td>
							<td><?php echo $row['total']?></td>
              <td><?php echo $row['note']?></td>
                    <td>
                    
                    <a href="?id=<?php echo $row['id']?>&type=view"><label class="badge badge-success hand_cursor">Commit</label></a>&nbsp;
                    
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