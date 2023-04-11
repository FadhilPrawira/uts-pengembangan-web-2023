<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<!-- Head start here -->
	<head>
		<?php $this->load->view('_partials/header.php'); ?>
	</head>
	<!-- Head end here -->

	<!-- Body start here -->
	<body>
		<?php $this->load->view('_partials/navbar.php'); ?>


		<!-- Content start here -->
		<div class="container my-5">
			<div class="p-5 mb-4 bg-body-tertiary rounded-3">
				<div class="container-fluid py-1">
					<h1 class="display-5 fw">Selamat datang di</h1>
					<h2 class="fw-bold">Teknik Elektro</h2>
					<h2 class="fw-bold">Fakultas Teknik</h2>
					<h2 class="fw-bold">Universitas Diponegoro</h2>


					<!-- content elektro card start here -->
					<div class="container my-5">
						<div class="row">
						<div class="card-group">
							<div class="card">
								<img src="http://elektro.ft.undip.ac.id/v3/wp-content/uploads/2016/08/ISO_9001-2015.jpg" class="card-img-top" alt="...">
								<div class="card-body">
								<h5 class="card-title">ISO 9001:2015</h5>
								<p class="card-text">Teknik Elektro Universitas Diponegoro telah memenuhi standar ISO 9001:2015 sebagai salah satu standar internasional dibidang sistem manajemen mutu.</p>
								</div>
						
							</div>
							<div class="card">
								<img src="http://elektro.ft.undip.ac.id/v3/wp-content/uploads/2016/08/tuevrl-58147low.jpg" class="card-img-top" alt="...">
								<div class="card-body">
								<h5 class="card-title">TÜV Rheinland Certified</h5>
								<p class="card-text">Teknik Elektro Universitas Diponegoro telah tersertifikasi TÜV Rheinland dalam penerapan standar mutu ISO 9001:2015</p>
								</div>
								
							</div>
							<div class="card">
								<img src="http://elektro.ft.undip.ac.id/v3/wp-content/uploads/2016/08/logobanFIXsize.png" class="card-img-top" alt="Akreditasi Unggul BAN-PT">
								<div class="card-body">
								<h5 class="card-title">AKREDITASI UNGGUL BAN-PT</h5>
								<p class="card-text">Teknik Elektro Universitas Diponegoro merupakan salah satu program studi Teknik Elektro terbaik di Indonesia dengan terus mempertahankan akreditasi Unggul.</p>
								</div>
							
							</div>
							</div>
						</div>
					</div>
					<!-- content elektro card end here -->
			
					<a href="<?= site_url('civitas/dashboard');?>" class="text-white">  
						<button class="btn btn-primary btn-lg" type="button">Lihat Data Civitas</button>
					</a>
				</div>
			</div>	
		</div>
		<!-- Content end here -->

		<?php $this->load->view('_partials/footer.php'); ?>

	</body>
	<!-- Body end here -->
</html>
