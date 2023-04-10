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
        <h1>Tentang Kami</h1>
        <hr>
        <h2>Teknik Elektro Fakultas Teknik Universitas Diponegoro</h2>
        <ul>
            <li>Alamat</li>
            <p>Gedung A dan B Teknik Elektro, Jl. Prof. Sudarto, SH., Tembalang, Semarang</p>
            <li>Telepon</li>
            <p><a href="tel:+62247460057">024 - 7460057</a></p>
            <li>Email</li>
            <p><a href="mailto:prodisarjana@elektro.undip.ac.id">prodisarjana[at]elektro.undip.ac.id</a></p>
        </ul>
    </div>
    <?php $this->load->view('_partials/footer.php'); ?>
</body>
</html>
