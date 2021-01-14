<?php 
include('top.php');
// $regex = "/^[a-zA-Z\d]+@[a-zA-Z\d]+\.[a-zA-Z\d\d.]{2,]+$/";
$msg="";
// $category="";
// $order_number="";
$name ="";
$img = "";
$id="";
$image_text ="";
if(isset($_GET['id']) && $_GET['id']>0){
	$id=get_safe_value($_GET['id']);
	$row=mysqli_fetch_assoc(mysqli_query($con,"select * from typefoods where id='$id'"));
	$name=$row['name'];
	$img=$row['img'];
}

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$img=$_POST['img'];
	// $added_on=date('Y-m-d h:i:s');
	
	if($id == ''){
		$sql="select * from typefoods where name='$name'";
	}else{
		$sql="select * from typefoods where name='$name' and id!='$id'";
	}	
	if(mysqli_num_rows(mysqli_query($con,$sql))>0){
		$msg="Type food already added";
	}else{
		if($id==''){
			mysqli_query($con,"insert into typefoods(id,name,img) VALUES (id,'$name','$img')");
		}else{
			mysqli_query($con,"update typefoods set name='$name', img='$img' where id='$id'");
		}
		
		redirect('category.php');
	}
}

?>

<div class="row">
			<h1 class="grid_title ml10 ml15">ADD TYPE FOODS </h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">NAME</label>
                      <input type="text" class="form-control" placeholder="NAME" name="name" required value="<?php echo $name?>">
					  <div class="error mt8"><?php echo $msg?></div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>IMG</label>
                      <input type="text" class="form-control" placeholder="IMG" name="img"required  value="<?php echo $img?>" accept="images/*">
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
					<button type="button" class="btn btn-dark"><a href="category.php">Back</a></button>

				  </form>
                </div>
              </div>
            </div>
            
		 </div>
        
<?php include('footer.php');?>