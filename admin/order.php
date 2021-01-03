<?php 
include('top.php');

$sql="select * from foods";
$res=mysqli_query($con,$sql);

?>
  <div class="card">
            <div class="card-body">
              <h1 class="grid_title">FOODS</h1>
			  <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="5%%">STT</th>
                            <th width="auto">NAME</th>
							<th width="auto">DESCRIPTION</th>
							<th width="auto">PRICE</th>
							<!-- <th width="10%">Payment Type</th>
							<th width="10%">Payment Status</th>
							<th width="10%">Order Status</th>
                            <th width="15%">Added On</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(mysqli_num_rows($res)>0){
						$i=1;
						while($row=mysqli_fetch_assoc($res)){
						?>
						<tr>
                            <td>
								<div class="div_order_id">
									<a href="order.php?id=<?php echo $row['id']?>"><?php echo $row['id']?></a>
								</div>
							</td>
                            <td>
							<p><?php echo $row['name']?></p>
								
							<td>
								<p><?php echo $row['description']?></p>
								
							</td>
							<td>
								
								<p><?php echo $row['price']?></p>
							</td>
							
							
                        </tr>
                        <?php 
						$i++;
						} } else { ?>
						<tr>
							<td colspan="6">Không tìm thấy dữ liệu</td>
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