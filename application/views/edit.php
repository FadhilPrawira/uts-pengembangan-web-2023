<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('_partials/header.php'); ?> 
    </head>
    <body>
 
        <?php $this->load->view('_partials/navbar.php'); ?>
		<div class="container my-5">

		<h1>Edit Data</h1>

        <?php echo form_open(''); ?>
		<!-- nama -->
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="nama" class="col-form-label">Nama Civitas</label>
  </div>
  <div class="col-auto">
    <input type="text" name="nama" value="<?= $user->nama_fadhil; ?>" id="nama" class="form-control" aria-labelledby="namaHelpInline">
  </div>
  <div class="col-auto">
    <span id="namaHelpInline" class="form-text">
      Nama Civitas maksimal 50 karakter.
    </span>
  </div>
</div>


<!-- username -->
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="username" class="col-form-label">Username</label>
  </div>
  <div class="col-auto">
    <input type="text" name="username" value="<?= $user->username_fadhil; ?>" id="username" class="form-control" aria-labelledby="usernameHelpInline">
  </div>
  <div class="col-auto">
    <span id="usernameHelpInline" class="form-text">
      username maksimal 50 karakter.
    </span>
  </div>
</div>

<!-- password -->
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="password" class="col-form-label">Password</label>
  </div>
  <div class="col-auto">
    <input type="text" name="password" value="<?= $user->password_fadhil; ?>" id="password" class="form-control" aria-labelledby="passwordHelpInline">
  </div>
  <div class="col-auto">
    <span id="usernameHelpInline" class="form-text">
      password maksimal 50 karakter.
    </span>
  </div>
</div>

<!-- level -->
<!-- <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="level" class="col-form-label">Level</label>
  </div>
  <div class="col-auto">
    <input type="text" name="level" value="<?= $user->level_fadhil; ?>" id="level" class="form-control" aria-labelledby="levelHelpInline">
  </div>
  <div class="col-auto">
    <span id="levelHelpInline" class="form-text">
    Level maksimal 70 karakter.
    </span>
  </div>
</div> -->

<!-- Level start here -->
<p class="mb-3 h4">Tipe civitas</p>
<!-- admin -->
<div class="form-check">
  <input class="form-check-input" type="radio" name="level" id="admin" value="0" <?php if($user->level_fadhil==0): echo "checked";endif;?>>
  <label class="form-check-label" for="admin">
    Admin
  </label>
</div>
<!-- dosen -->
<div class="form-check">
  <input class="form-check-input" type="radio" name="level" id="dosen" value="1" <?php if($user->level_fadhil==1): echo "checked";endif;?>>
  <label class="form-check-label" for="dosen">
    Dosen
  </label>
</div>
<!-- mhs -->
<div class="form-check">
  <input class="form-check-input" type="radio" name="level" id="mahasiswa" value="2" <?php if($user->level_fadhil==2): echo "checked";endif;?>>
  <label class="form-check-label" for="mahasiswa">
    Mahasiswa
  </label>
</div>

<!-- Level end here -->

<br>
            <input type="hidden" name="id" value="<?= $user->id_fadhil; ?>">
<br>
			<input type="submit" value="Update Data" class="btn btn-warning my-3">
			
        <?php echo form_close(); ?>			
		</div>
		<?php $this->load->view('_partials/footer.php'); ?>
</body>
</html>