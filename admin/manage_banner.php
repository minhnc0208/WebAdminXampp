<?php 
include('top.php');
$msg="";
$iduser="";
$idpayment="";
$idfood="";
$date="";
$total="";
$status="";
$id="";
// $image_status='required';
// $image_error="";
if(isset($_GET['id']) && $_GET['id']>0){
	$id=get_safe_value($_GET['id']);
	$row=mysqli_fetch_assoc(mysqli_query($con,"select * from orderfoods where id='$id'"));
	$iduser=$row['iduser'];
	$idpayment=$row['idpayment'];
	$date=$row['date'];
	$total=$row['total'];
	$status=$row['status'];
	// $order_number=$row['order_number'];
	// $image_status='';
}

if(isset($_POST['submit'])){
	$iduser=$_POST['iduser'];
	$idpayment=$_POST['idpayment'];
	$date=$_POST['date'];
	$total=$_POST['total'];
	$status=$_POST['status'];
	// $added_on=date('Y-m-d h:i:s');
	
		
	if($id == ''){
		$sql="select * from orderfoods where iduser='$iduser'";
	}else{
		$sql="select * from orderfoods where iduser='$iduser' and id!='$id'";
	}	
	if(mysqli_num_rows(mysqli_query($con,$sql))>0){
		$msg="Order food already added";
	}else{
		if($id==''){
			mysqli_query($con,"insert into orderfoods(id,iduser,idpayment,date,total,quantity,status) VALUES (id,iduser,idpayment,idfood,'$date',total,quantity,status)");
		}else{
			mysqli_query($con,"update orderfoods set status='$status' where id='$id'");
		}
		
		redirect('banner.php');
	}
	
	
}
?>
<div class="row">
			<h1 class="grid_title ml10 ml15">Manage Banner</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post" enctype="multipart/form-data">
					
                    <div class="form-group">
                      <label for="exampleInputName1">Status</label>
                      <input type="text" class="form-control" placeholder="Status" name="status" required value="<?php echo $status?>">
                    </div>
					
                    
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            
		 </div>
        
<?php include('footer.php');?>