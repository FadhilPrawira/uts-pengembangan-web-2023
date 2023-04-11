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
    <hr>
		<?php if ($this->session->flashdata('message_alert')){
      echo $this->session->flashdata('message_alert');}
      ?>

  <?php echo form_open(''); ?>
  <!-- nama -->
  <div class="row mb-3">
    <label for="nama_edit" class="col-sm-2 col-form-label">Nama Civitas</label>
    <div class="col-auto">
      <input type="text" class="form-control" id="nama_edit" aria-labelledby="nama_editHelpInline" value="<?= $user->nama_fadhil; ?>" name="nama_edit">
    </div>
    <div class="col-auto">
    <span id="nama_editHelpInline" class="form-text">
      Nama Civitas maksimal 50 karakter.
    </span>
  </div>
  </div>

  <!-- username -->
  <div class="row mb-3">
    <label for="username_edit" class="col-sm-2 col-form-label">Username</label>
    <div class="col-auto">
      <input type="text" class="form-control" id="username_edit" aria-labelledby="username_editHelpInline" value="<?= $user->username_fadhil; ?>" name="username_edit">
    </div>
    <div class="col-auto">
    <span id="username_editHelpInline" class="form-text">
      username maksimal 50 karakter.
    </span>
  </div>
  </div>

  <!-- password -->
  <div class="row mb-3">
    <label for="password_edit" class="col-sm-2 col-form-label">Password</label>
    <div class="col-auto">
      <input type="password" class="form-control" id="password_edit" aria-labelledby="password_editHelpInline" name="password_edit">
    </div>
    <div class="col-auto">
    <span id="password_editHelpInline" class="form-text">
      Password maksimal 50 karakter.
    </span>
  </div>
  </div>

  <!-- level -->
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Tipe Civitas</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="level_edit" id="admin" value="0" <?php if($user->level_fadhil==0): echo "checked";endif;?>>
        <label class="form-check-label" for="admin">
          Admin
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="level_edit" id="dosen" value="1" <?php if($user->level_fadhil==1): echo "checked";endif;?>>
        <label class="form-check-label" for="dosen">
          Dosen
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="level_edit" id="mahasiswa" value="2" <?php if($user->level_fadhil==2): echo "checked";endif;?>>
        <label class="form-check-label" for="mahasiswa">
          Mahasiswa
        </label>
      </div>
    </div>
  </fieldset>
  
  <!-- id -->
  <input type="hidden" name="id" value="<?= $user->id_fadhil; ?>">

  <!-- submit -->
  <button type="submit" class="btn btn-warning" value="Update Data">Update Data</button>	
  <?php echo form_close(); ?>			
		</div>
		<?php $this->load->view('_partials/footer.php'); ?>
</body>
</html>