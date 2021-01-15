<?php
include('top.php');



$sql = "select * from orderfoods ORDER BY id DESC";
$res = mysqli_query($con, $sql);

?>
<div class="card">
  <div class="card-body">
    <h1 class="grid_title">ORDER FOOD DETAILS</h1>
    <!-- <a href="manage_banner.php" class="add_link">Add Banner</a> -->
    <div class="row grid_box">

      <div class="col-12">
        <div class="table-responsive">
          <table id="order-listing" class="table">
            <thead>
              <tr>
                <th width="10%">STT</th>
                <th width="10%">Total</th>
                <!-- <th width="15%">ID PAYMENT</th>
                            <th width="25%">ID FOOD</th>
                            <th width="25%">DATE</th>
                            <th width="25%">TOTAL</th>
                            <th width="25%">STATUS</th>
                            <th width=auto>ACTIONS</th> -->
              </tr>
            </thead>
            <tbody>
              <?php if (mysqli_num_rows($res) > 0) {
                $i = 1;
                while ($row = mysqli_fetch_assoc($res)) {
              ?>
                  <tr>
                    <td><?php echo $row['id'] ?></td>

                    <td><?php echo $row['total'] ?></td>

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