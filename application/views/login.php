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
        <div class="container text-center my-5">
        <?php if ($this->session->flashdata('message_login_error')): ?>
				<div class="alert alert-danger mt-4" role="alert">
					<?php echo $this->session->flashdata('message_login_error'); ?>
				</div>
				<?php endif; ?>
        <main class="form-signin w-100 m-auto">
            <form method="POST" action="">
                <img class="mb-4" src="<?= site_url('assets/images/Undip.png');?>" alt="" width="100">
                <h1 class="h3 mb-3 fw-normal">Please log in</h1>

                <div class="form-floating">
                <input type="username" class="form-control" id="floatingInput" placeholder="Username" name="username">
                <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
                </div>

                <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember_me" name="remember_me"> Remember me
                </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit" value="login">Log in</button>
            </form>
        </main>
        </div>
        <?php $this->load->view('_partials/footer.php'); ?>

</body>
</html>