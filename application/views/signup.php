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
		<div class="container my-5">

		<h1>Sign Up</h1>
		<?php if ($this->session->flashdata('message_alert')): ?>
					<?php echo $this->session->flashdata('message_alert'); ?>
		<?php endif; ?>

<hr>
		<?php echo form_open('civitas/signup'); ?>

		<div class="my-3 h4">
		<label for="namacivitas" class="form-label">Nama Civitas</label>
		<input type="text" name="nama" class="form-control" aria-labelledby="namacivitasHelpBlock" id="namacivitas" placeholder="Contoh: Hamengkubuwono IX" value="<?php echo set_value('nama');?>">
		</div>
		<div id="namacivitasHelpBlock" class="form-text">
			<p>Panjang nama maksimal 50 karakter.</p>
		</div>
		<div class="mb-3 h4">
		<label for="username" class="form-label">Username</label>
		<input type="text" name="username" class="form-control" aria-labelledby="usernameHelpBlock" id="username" placeholder="Contoh: teknik_elektro" value="<?php echo set_value('username');?>">
		</div>
		<div id="usernameHelpBlock" class="form-text">
			<p>Panjang username maksimal 50 karakter.</p>
		</div>

		<div class="mb-3 h4">
		<label for="password" class="form-label">Password</label>
		<input type="password" name="password" class="form-control" aria-labelledby="passwordHelpBlock" id="password" placeholder="Password sesuai keinginan Anda">
		</div>
		<div id="passwordHelpBlock" class="form-text">
			<p>Panjang password minimal 8 karakter. Harus dilengkapi tanda baca/simbol seperti !, @. #, $, %, dsb.</p>
		</div>
		
<!-- Level start here -->
<p class="mb-3 h4">Tipe civitas</p>
<!-- admin -->
<div class="form-check">
  <input class="form-check-input" type="radio" name="level" id="admin" value="0">
  <label class="form-check-label" for="admin">
    Admin
  </label>
</div>
<!-- dosen -->
<div class="form-check">
  <input class="form-check-input" type="radio" name="level" id="dosen" value="1">
  <label class="form-check-label" for="dosen">
    Dosen
  </label>
</div>
<!-- mhs -->
<div class="form-check">
  <input class="form-check-input" type="radio" name="level" id="mahasiswa" value="2">
  <label class="form-check-label" for="mahasiswa">
    Mahasiswa
  </label>
</div>

<!-- Level end here -->

				<button type="submit" class="btn btn-success my-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
				<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"></path>
				</svg>
				Sign Up
            	</button>
			<?php echo form_close(); ?>
		</div>
		<?php $this->load->view('_partials/footer.php'); ?>
	</body>
</html>
