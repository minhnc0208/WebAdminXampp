<?php
include('top.php');
$id = $_GET['id'];
$date = $_GET['date'];
$date = str_replace('-', '', $date);
$year = substr($date,0 , 4);
$month = substr($date,4 , 2);
$day = substr($date,6 , 2);
$iduser = $_GET['iduser'];
$sql="select idfood,namefood, quantity, total, note from orderfoods  where id = {$id} and iduser = {$iduser} and Day(date) = {$day} And Month(date) = {$month} and Year(date) = {$year} ";
$res=mysqli_query($con,$sql);
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
                            <th width="15%">ID FOOD</th>
                            <th width="20%">NAME FOOD</th>
                            <th width="25%">QUANTITY</th>
                            <th width="15%">TOTAL</th>
                            <th width="15%">NOTE</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php if(mysqli_num_rows($res)>0){
						$i=1;
						while($row=mysqli_fetch_assoc($res)){
						?>
						<tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $row['idfood']?></td>
                            <td><?php echo $row['namefood']?></td>
                            <td><?php echo $row['quantity']?></td>
							<td><?php echo $row['total']?></td>
							<td><?php echo $row['note']?></td>
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
