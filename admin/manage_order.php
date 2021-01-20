<?php
include('top.php');
$msg = "";

$idtype = "";
$name = "";
$description = "";
$price = "";
$img = "";
$id = "";
$errors = array('name' => '');
$errors1 = array('idtype' => '');
$errors2 = array('description' => '');
$errors3 = array('price' => '');

if (isset($_GET['id']) && $_GET['id'] > 0) {
  $id = $_GET['id'];
  $row = mysqli_fetch_assoc(mysqli_query($con, "select * from foods where id='$id'"));
  $idtype = $row['idtype'];
  $name = $row['name'];
  $description = $row['description'];
  $price = $row['price'];
  $img = $row['img'];
}

if (isset($_POST['submit'])) {
  $idtype = $_POST['idtype'];
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $img = $_POST['img'];
  if (preg_match("/([%\$#\*!@^&]+)/", $name)) {
    $errors['name'] = 'Please fill name again';
   
  }
  if(preg_match("/([%\$#\*!@^&]+)/", $description)){
      $errors2['description'] = 'Please fill description again';
  }
  
  if(preg_match("/([%\$#\*!@^&]+)/", $idtype)){
    $errors1['idtype'] = 'Please fill idtype again';
  }
  if(preg_match("/([%\$#\*!@^&]+)/", $price)){
    $errors3['price'] = 'Please fill price again';
  }

  
  if (empty($errors['name'])) {
    if (empty($errors1['idtype'])){
      if (empty($errors2['description'])){
        if (empty($errors3['price'])){
          if ($id == '') {
            $sql = "select * from foods where name='$name'";
          } else {
            $sql = "select * from foods where name='$name' and id!='$id'";
          }
          if (mysqli_num_rows(mysqli_query($con, $sql)) > 0) {
            $msg = "Food already added";
          } else {
            if ($id == '') {
              mysqli_query($con, "insert into foods(id,idtype,name,description,price,img) VALUES (id,$idtype,'$name','$description','$price','$img')");
            } else {
              mysqli_query($con, "update foods set id='$id',idtype='$idtype' ,name='$name',description = '$description',price='$price',img='$img' where id='$id'");
            }
        
            redirect('order.php');
          }
        }
      }
    }
          

    // $idtype = $_POST['idtype'];
    // $name = $_POST['name'];
    // $description = $_POST['description'];
    // $price = $_POST['price'];
   
  }
}

?>
<div class="row">
  <h1 class="grid_title ml10 ml15">FOODS </h1>
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <form class="forms-sample" method="post">
          <div class="form-group">
            <label for="exampleInputName1">ID TYPE</label>
            <input type="text" class="form-control" placeholder="ID TYPE" name="idtype" required value="<?php echo $idtype ?>">
            <div class="error mt8"><?php  echo $errors1['idtype'] ?></div>
          </div>
          <div class="form-group">
            <label for="exampleInputName2">NAME</label>
            <input type="text" class="form-control" placeholder="NAME" name="name" required value="<?php echo $name ?>">
            <div class="error mt8"><?php echo $errors['name'] ?></div>
          </div>
          <div class="form-group">
            <label for="exampleInputName3">DESCRIPTION</label>
            <input type="text" class="form-control" placeholder="DESCRIPTION" name="description" required value="<?php echo $description ?>">
            <div class="error mt8"><?php echo $errors2['description'] ?></div>
          </div>
          <div class="form-group">
            <label for="exampleInputName4">PRICE</label>
            <input type="text" class="form-control" placeholder="PRICE" name="price" required value="<?php echo $price ?>">
            <div class="error mt8"><?php echo $errors3['price'] ?></div>
          </div>
          <div class="form-group">
            <label for="exampleInputName4" required>IMG</label>
            <input type="text" class="form-control" name="img" placeholder="IMG"required value="<?php echo $img ?>" accept="image/*">
          </div>

          <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
          <button type="button" class="btn btn-dark"><a href="order.php">Back</a></button>
        </form>
      </div>
    </div>
  </div>

</div>

<?php include('footer.php'); ?>