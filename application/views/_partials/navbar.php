	<!-- Navbar start here -->
		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #001349;">
			<div class="container-fluid">
				<a class="navbar-brand" href="<?php echo site_url('civitas/index'); ?>">
				<img src="<?= site_url('assets/images/logobaru.png');?>" width="235" height="55" alt="Website UPT civitas dan Percetakan" id="logo" data-height-percentage="60" data-actual-width="235" data-actual-height="55">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-tabs">
					<li class="nav-item">
					<a class="nav-link<?php if($active == 'index') echo ' text-dark active';else echo ' text-white'; ?>" <?php if($active == 'index') echo 'aria-current="page"';?> href="<?php echo site_url('civitas/index'); ?>">Home </a>
					</li>
					<li class="nav-item">
					<a class="nav-link<?php if($active == 'dashboard') echo ' text-dark active';else echo ' text-white';?>" <?php if($active == 'dashboard') echo 'aria-current="page"';?> href="<?php echo site_url('civitas/dashboard'); ?>">Lihat Data </a>
					</li>
					<li class="nav-item">
					<a class="nav-link<?php if($active == 'search') echo ' text-dark active';else echo ' text-white';?>" <?php if($active == 'search') echo 'aria-current="page"';?> href="<?php echo site_url('civitas/search'); ?>">Cari Data </a>
					</li>
					<li class="nav-item">
					<a class="nav-link<?php if($active == 'add') echo ' text-dark active';else echo ' text-white';?>" <?php if($active == 'add') echo 'aria-current="page"';?> href="<?php echo site_url('civitas/add'); ?>">Tambah Data </a>
					</li>
					<li class="nav-item">
					<a class="nav-link<?php if($active == 'about_us') echo ' text-dark active';else echo ' text-white';?>" <?php if($active == 'about_us') echo 'aria-current="page"';?> href="<?php echo site_url('civitas/about_us'); ?>">About Us </a>
					</li>
					<li class="nav-item">
					<a class="nav-link<?php if($active == 'contact_me') echo ' text-dark active';else echo ' text-white' ?>" <?php if($active == 'contact_me') echo 'aria-current="page"';?> href="<?php echo site_url('civitas/contact_me'); ?>">Contact Me </a>
					</li>
				</ul>
				<ul class="navbar-nav d-flex me-2 nav-tabs">
					<li class="nav-item">
					<a class="nav-link<?php if($active == 'login') echo ' text-dark active';else echo ' text-white';?>" <?php if($active == 'login') echo 'aria-current="page"';?> href="<?php echo site_url('civitas/login'); ?>">Login</a>
					</li>
					<li class="nav-item">
					<a class="nav-link<?php if($active == 'sign up') echo ' text-dark active';else echo ' text-white';?>" <?php if($active == 'sign up') echo 'aria-current="page"';?> href="<?php echo site_url('civitas/signup'); ?>">Sign Up</a>
					</li>
				</ul>
				</div>
			</div>
		</nav>		
		<!-- Navbar end here -->

		<!-- Breadcrumb start here -->
		<div class="container pt-5">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb py-3 px-3 rounded-3" style="background-color: #e9ecef">
					<?php if($active=='index'):?><li class="breadcrumb-item">
						<a href="<?= site_url('civitas')?>">Home</a>
					</li>
				<?php elseif ($active=='dashboard'): ?><li class="breadcrumb-item">
						<a href="<?= site_url('civitas')?>">Home</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page"><?= 'Dashboard';?></li>
				<?php elseif ($active=='search'): ?><li class="breadcrumb-item">
						<a href="<?= site_url('civitas')?>">Home</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page"><?= 'Search Data';?></li>
				<?php elseif ($active=='add') :?><li class="breadcrumb-item">
						<a href="<?= site_url('civitas')?>">Home</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page"><?= 'Add Data';?></li>
				<?php elseif ($active=='edit') :?><li class="breadcrumb-item">
						<a href="<?= site_url('civitas')?>">Home</a>
					</li>
					<li class="breadcrumb-item"><a href="<?= site_url('civitas/dashboard')?>">Lihat Data</a></li>
					<li class="breadcrumb-item active" aria-current="page"><?= 'Edit Data';?></li>
				<?php elseif ($active=='delete') :?><li class="breadcrumb-item">
						<a href="<?= site_url('civitas')?>">Home</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page"><?= 'Delete Data';?></li>
				<?php elseif ($active=='contact_me') :?><li class="breadcrumb-item">
						<a href="<?= site_url('civitas')?>">Home</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page"><?= 'Contact Me';?></li>
				<?php elseif ($active=='login') :?><li class="breadcrumb-item">
						<a href="<?= site_url('civitas')?>">Home</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page"><?= 'Login';?></li>
				<?php elseif ($active=='sign up') :?><li class="breadcrumb-item">
						<a href="<?= site_url('civitas')?>">Home</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page"><?= 'Sign up';?></li>
				<?php else :?><li class="breadcrumb-item">
						<a href="<?= site_url('civitas')?>">Home</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page"><?= 'About Us';?></li>
				<?php endif;?></ol>
			</nav>
		</div>
		<!-- Breadcrumb end here -->