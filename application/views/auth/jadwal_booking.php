
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="<?= base_url('assets/as/');?>https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/as/');?>css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/as/');?>css/style.css" />

	

</head>

<body>

	<!--  -->
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>JADWAL BOOKING</h1>
						</div>
						<form action="<?php echo base_url('index.php/auth/booking');?>" method="post">
							<div class="row">
								<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nama lapang</th>
										<th>Nama pemesan</th>
										<th>Waktu</th>
										<th>Tanggal</th>
									</tr>
								</thead>
						                <tbody>
						                <?php foreach ($sewa_lapang->result() as $data): ?>
															<tr>										<td>
																	<?php echo $data->id_lapang ?>
																</td>
																<td>
																	<?php echo $data->lapangan ?>
																</td>
																<td>
																	<?php echo $data->name ?>
																</td>
																<td>
																	<?php echo $data->our ?>
																</td>
																<td>
																	<?php echo $data->pickup_date ?>
																</td>
															</tr>
						                  <?php endforeach; ?>
								</tbody>
							</table>
							</div>




							
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>