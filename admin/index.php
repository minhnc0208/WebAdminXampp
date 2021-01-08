<?php include('top.php');
include('../database.inc.php');
?>

<div class="row">
	
	
	
	


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-primary shadow h-100 py-2">
	<div class="card-body">
	  <div class="row no-gutters align-items-center">
		<div class="col mr-2">
		  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total User Register</div>
		 	<br>
		  <div class="h5 mb-0 font-weight-bold text-gray-800">
		  

			<?php
				
				$query = "SELECT id from users ORDER BY id";
				$query_run = mysqli_query($con,$query);


				$row = mysqli_num_rows($query_run);

				echo '<h4> ' .$row. ' USERS </h4> ';
			 ?>

		  
		  
		  
		  </div>
		</div>
		<div class="col-auto">
		  <i class="fas fa-calendar fa-2x text-gray-300"></i>
		</div>
	  </div>
	</div>
  </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-success shadow h-100 py-2">
	<div class="card-body">
	  <div class="row no-gutters align-items-center">
		<div class="col mr-2">
		  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">TOTAL FOODS</div>
		  <br>
		  <div class="h5 mb-0 font-weight-bold text-gray-800">
		  <?php
				
				$query = "SELECT id from foods ORDER BY id";
				$query_run = mysqli_query($con,$query);


				$row = mysqli_num_rows($query_run);

				echo '<h4> ' .$row. ' FOODS </h4> ';
			 ?>
		  </div>
		</div>
		<div class="col-auto">
		  <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
		</div>
	  </div>
	</div>
  </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-info shadow h-100 py-2">
	<div class="card-body">
	  <div class="row no-gutters align-items-center">
		<div class="col mr-2">
		  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">TOTAL TYPE FOODS</div>
		 	<br>
		  <div class="row no-gutters align-items-center">
			<div class="col-auto">
			  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
			  
			  <?php
				
				$query = "SELECT id from typefoods ORDER BY id";
				$query_run = mysqli_query($con,$query);


				$row = mysqli_num_rows($query_run);

				echo '<h4> ' .$row. ' TYPE FOODS </h4> ';
			 ?>
			  </div>
			</div>
			<!-- <div class="col">
			  <div class="progress progress-sm mr-2">
				<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			</div> -->
		  </div>
		</div>
		<div class="col-auto">
		  <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
		</div>
	  </div>
	</div>
  </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-warning shadow h-100 py-2">
	<div class="card-body">
	  <div class="row no-gutters align-items-center">
		<div class="col mr-2">
		  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">TOTAL PAYMENT METHODS</div>
		  <br>
		  <div class="h5 mb-0 font-weight-bold text-gray-800">
		  <?php
				
				$query = "SELECT id from paymentmethods ORDER BY id";
				$query_run = mysqli_query($con,$query);


				$row = mysqli_num_rows($query_run);

				echo '<h4> ' .$row. ' PAYMENT METHODS </h4> ';
			 ?>
		  </div>
		</div>
		<div class="col-auto">
		  <i class="fas fa-comments fa-2x text-gray-300"></i>
		</div>
	  </div>
	</div>
  </div>
</div>
</div>
	

  <?php
$sql="select * from orderfoods ORDER BY id DESC";
$res=mysqli_query($con,$sql);
  ?>
  <div class="row">
	<div class="col-12">
	  <div class="card">
		<div class="card-body">
		  <h4 class="card-title">Latest 5 Order</h4>
		  <div class="table-responsive">
			<table class="table table-hover">
			  <thead>
				<tr>
				   	<th width="5%">ID</th>
					<th width=auto>ID USER</th>
					<th width=auto>ID PAYMENT</th>
					<th width=auto>ID FOOD</th>
					<th width=auto>DATE</th>
					<th width=auto>TOTAL</th>
					<th width=auto>STATUS</th>
					<!-- <th width="15%">Added On</th> -->
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
									<a href="banner.php?id=<?php echo $row['id']?>"><?php echo $row['id']?></a>
								</div>
							</td>
							
							<td><?php echo $row['iduser']?></td>
							<td><?php echo $row['idpayment']?></td>
							<td><?php echo $row['idfood']?></td>
							<td><?php echo $row['date']?></td>
							<td><?php echo $row['total']?></td>
							<td><?php echo $row['status']?></td>
							
                           
							
							
							
							
                        </tr>
                        <?php 
						$i++;
						} } else { ?>
						<tr>
							<td colspan="6">No data found</td>
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