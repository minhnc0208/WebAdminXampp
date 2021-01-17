<?php
include('top.php');
$sql = "SELECT `id`, `iduser`, `idpayment`, `date`, SUM(`total`) as total, `name`, `phone`, `address`, `status` FROM `orderfoods` GROUP BY id, idpayment, iduser, date, name, phone, address, status ORDER BY date DESC";
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
                                <th width="15%">NAME</th>
                                <th width="25%">PHONE</th>
                                <th width="25%">ADDRESS</th>
                                <th width="15%">ID PAYMENT</th>
                                <th width="35%">DATE</th>
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
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $row['iduser'] ?></td>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['phone'] ?></td>
                                        <td><?php echo $row['address'] ?></td>
                                        <td><?php echo $row['idpayment'] ?></td>
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
                                            <a href="bannerdetails.php?id=<?php echo $row['id'] ?>&date=<?php echo $row['date'];?>&iduser=<?php echo $row['iduser'] ?>"><label
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
