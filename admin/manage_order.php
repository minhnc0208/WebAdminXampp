<?php 
include('top.php');
$msg="";

$idtype ="";
$name = "";
$description ="";
$price ="";
$img ="";
$id="";

if(isset($_GET['id']) && $_GET['id']>0){
	$id=get_safe_value($_GET['id']);
	$row=mysqli_fetch_assoc(mysqli_query($con,"select * from foods where id='$id'"));
    $idtype =$row['idtype'];
    $name=$row['name'];
    $description=$row['description'];
    $price=$row['price'];
	$img=$row['img'];
}

if(isset($_POST['submit'])){
    $idtype =$_POST['idtype'];
    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
	$img=$_POST['img'];
	// $added_on=date('Y-m-d h:i:s');
	
	if($id == ''){
		$sql="select * from foods where name='$name'";
	}else{
		$sql="select * from foods where name='$name' and id!='$id'";
	}	
	if(mysqli_num_rows(mysqli_query($con,$sql))>0){
		$msg="Food already added";
	}else{
		if($id==''){
			mysqli_query($con,"insert into foods(id,idtype,name,description,price,img) VALUES (id,$idtype,'$name','$description','$price','$img')");
		}else{
			mysqli_query($con,"update foods set id='$id',idtype='$idtype' ,name='$name',description = '$description',price='$price',img='$img' where id='$id'");
		}
		
		redirect('order.php');
	}
}
 
?>
<div class="row">
			<h1 class="grid_title ml10 ml15">ADD FOODS </h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">ID TYPE</label>
                      <input type="text" class="form-control" placeholder="ID TYPE" name="idtype" required value="<?php echo $idtype?>">
					  <div class="error mt8"><?php echo $msg?></div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName2">NAME</label>
                      <input type="text" class="form-control" placeholder="NAME" name="name" required value="<?php echo $name?>">
					  <div class="error mt8"><?php echo $msg?></div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName3">DESCRIPTION</label>
                      <input type="text" class="form-control" placeholder="DESCRIPTION" name="description" required value="<?php echo $description?>">
					  <div class="error mt8"><?php echo $msg?></div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName4">PRICE</label>
                      <input type="text" class="form-control" placeholder="PRICE" name="price" required value="<?php echo $price?>">
					  <div class="error mt8"><?php echo $msg?></div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName4" required>IMG</label>
                      <input type="file" class="form-control" name="img" required value="<?php echo $img?>" accept="image/*">
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            
		 </div>
        
<?php include('footer.php');?>