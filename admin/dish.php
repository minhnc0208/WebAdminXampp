<?php 
include('top.php');

if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['id']) && $_GET['id']>0){
	$type=$_GET['type'];
	$id=$_GET['id'];
	if($type=='delete'){
		mysqli_query($con,"delete from paymentmethods where id='$id'");
		redirect('dish.php');
	}

}

$sql="select * from paymentmethods ORDER BY id DESC";
$res=mysqli_query($con,$sql);

?>
  <div class="card">
            <div class="card-body">
              <h1 class="grid_title">PAYMENT METHODS</h1>
			  <a href="manage_dish.php" class="btn btn-warning btn-rounded">ADD PAYMENT METHODS</a>
			  <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="5%">STT</th>
                            <th width=auto>NAME</th>
                            <th width=auto>IMG</th>
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
                            <td><?php echo $row['name']?></td>
                          
                            <td>
                            <a href="manage_dish.php?id=<?php echo $row['id']?>"><label class="badge badge-success hand_cursor">Edit</label></a>&nbsp;
                            <a href="?id=<?php echo $row['id']?>&type=delete"><label class="badge badge-danger delete_red hand_cursor">Delete</label></a>&nbsp;
                            </td>
                           
                        </tr>
                        <?php 
                        //  $i++;
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