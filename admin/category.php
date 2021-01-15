<?php
include('top.php');

if (isset($_GET['type']) && $_GET['type'] !== '' && isset($_GET['id']) && $_GET['id'] > 0) {
  $type = $_GET['type'];
  $id = $_GET['id'];
  if ($type == 'delete') {
    mysqli_query($con, "delete from typefoods where id='$id'");
    redirect('category.php');
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

$sql = "select * from typefoods ORDER BY id DESC";
$res = mysqli_query($con, $sql);

?>
<div class="card">
  <div class="card-body">
    <h1 class="grid_title">TYPE FOOD MASTER</h1>
    <a href="manage_category.php" class="btn btn-warning btn-rounded">ADD TYPE FOOD</a>
    <div class="row grid_box">

      <div class="col-12">
        <div class="table-responsive">
          <table id="order-listing" class="table">
            <thead>
              <tr>
                <th width="10%">STT</th>
                <th width="25%">NAME</th>
                <th width="25%">IMG</th>
                <th width="25%">ACTIONS</th>
                <!-- <th width="25%">Actions</th> -->
              </tr>
            </thead>
            <tbody>
              <?php if (mysqli_num_rows($res) > 0) {
                $i = 1;
                while ($row = mysqli_fetch_assoc($res)) {
              ?>
                  <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['img'] ?></td>
                    <td>
                      <a href="manage_category.php?id=<?php echo $row['id'] ?>"><label class="badge badge-success hand_cursor">Edit</label></a>&nbsp;
                      <a href="?id=<?php echo $row['id'] ?>&type=delete"><label class="badge badge-danger delete_red hand_cursor">Delete</label></a>&nbsp;

                    </td>

                  </tr>
                <?php
                  // $i++;
                }
              } else { ?>
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

<?php include('footer.php'); ?>