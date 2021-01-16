<?php
include('top.php');
$id = "";
if (isset($_GET['type']) && $_GET['type'] !== '' && isset($_GET['id']) && $_GET['id'] > 0) {
    $type = $_GET['type'];
    $id = $_GET['id'];
    if ($type == 'view') {
        // mysqli_query($con,"delete from orderfoods where id='$id'");
        mysqli_query($con, "SELECT id, SUM(total) AS Total
    FROM orderfoods WHERE id = $id
    GROUP BY id");
        redirect('bannerdetails.php');
    }
// 	// if($type=='active' || $type=='deactive'){
// 	// 	$status=1;
// 	// 	if($type=='deactive'){
// 	// 		$status=0;
// 	// 	}
// 	// 	mysqli_query($con,"update banner set status='$status' where id='$id'");
// 	// 	redirect('banner.php');
// 	// }

}

$sql = "select * from orderfoods ORDER BY id DESC";
$res = mysqli_query($con, $sql);

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
                                <th width="10%">STT</th>
                                <th width="10%">ID USER</th>
                                <th width="15%">ID PAYMENT</th>
                                <th width="25%">ID FOOD</th>
                                <th width="25%">DATE</th>
                                <th width="25%">TOTAL</th>
                                <th width="25%">STATUS</th>
                                <th width=auto>ACTIONS</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (mysqli_num_rows($res) > 0) {
                                $i = 1;
                                while ($row = mysqli_fetch_assoc($res)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['iduser'] ?></td>
                                        <td><?php echo $row['idpayment'] ?></td>
                                        <td><?php echo $row['idfood'] ?></td>
                                        <td><?php echo $row['date'] ?></td>
                                        <td><?php echo $row['total'] ?></td>
                                        <td><?php echo $row['status'] ?></td>
                                        <td>
                                            <?php if ($row['status'] != 2) : ?>
                                                <a href="manage_banner.php?id=<?php echo $row['id'] ?>"><label
                                                            class="badge badge-success hand_cursor">Confirm</label></a>
                                            <?php else : ?>
                                                <a href="javascript:void(0)" ><label style="background-color:#767e86;"
                                                            class="badge badge-success hand_cursor">Confirm</label></a>
                                            <?php endif; ?>
                                            <a href="?id=<?php echo $row['id'] ?>&type=view"><label
                                                        class="badge badge-danger delete_red hand_cursor">View</label></a>&nbsp;
                                        </td>


                                    </tr>
                                    <?php
                                    $i++;
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
