<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<!-- Head start here -->
	<head>
		<?php $this->load->view('_partials/header.php'); ?>	</head>
	<!-- Head end here -->

	<!-- Body start here -->
	<body>
		<?php $this->load->view('_partials/navbar.php'); ?>

		<!-- Content start here -->
		<div class="container my-5">
			<h1>Dashboard</h1>
			<hr>
			<!-- Table start here -->
			<table class="table table-striped table-hover table-bordered rounded-5">
				<!-- Table head start here -->
				<thead class="table-dark text-center">
					<tr>
						<th>No.</th>
						<th>Nama Civitas</th>
						<th>Username</th>
						<th>Status (dosen/mhs)</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<!-- Table head end here -->
				
				<!-- Table body start here -->
				<tbody><?php
			$nomor =1;
			foreach ($users as $user):
			?>	
					<tr>
						<td class="text-center"><?= $nomor.".";?></td>
						<td><?= $user->nama_fadhil;?></td>
						<td><?= $user->username_fadhil;?></td>
						<!-- TODO : Change level to readable form (0=superadmin/1=dosen/2=mhs)  -->
						<td>
							<?php 
							if($user->level_fadhil==0){
								echo "Admin";
							} elseif($user->level_fadhil==1) {
								echo "Dosen";
							} elseif($user->level_fadhil==2) {
								echo "Mahasiswa";
							}
							?>
						</td>
						<td class="text-center"><a href="<?= site_url('civitas/edit/').$user->id_fadhil;?>" class="btn btn-warning">Edit</a>  <a href="<?= site_url('civitas/delete/').$user->id_fadhil;?>" class="btn btn-danger">Delete</a></td>
					</tr><?php $nomor++;endforeach;?>
				
				</tbody>
				<!-- Table body end here -->
			</table>
			<!-- Table end here -->
		</div>
		<!-- Content end here -->
			
		<?php $this->load->view('_partials/footer.php'); ?>
			
	</body>
	<!-- Body end here -->
</html>
