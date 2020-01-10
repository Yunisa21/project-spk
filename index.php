<?php
include_once 'includes/header.inc.php';

include_once 'includes/nilai.inc.php';
$pro3 = new Nilai($db);
$stmt3 = $pro3->readAll();

include_once 'includes/alternatif.inc.php';
$pro1 = new Alternatif($db);
$stmt1 = $pro1->readAll();
$stmt4 = $pro1->readByFilter();

include_once 'includes/kriteria.inc.php';
$pro2 = new Kriteria($db);
$stmt2 = $pro2->readAll();

include_once 'includes/bobot.inc.php';
$pro5 = new Bobot($db);
$stmt5 = $pro5->readAll();
?>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="jumbotron">
			    <h2 align="center">Selamat Datang di Sistem Pendukung Keputusan <br> Pemilihan Tempat Kost dengan Menggunakan Metode AHP</h2>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="jumbotron">
			    <p align="justify"><?php include_once('isi.php'); ?></p>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Nilai Preferensi</h3>
						</div>
						<div class="panel-body">
							<ol>
								<?php while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) : ?>
									<li><?php echo $row3['ket_nilai'] ?> (<?php echo $row3['jum_nilai'] ?>)</li>
								<?php endwhile; ?>
							</ol>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Kriteria & Bobot</h3>
						</div>
						<div class="panel-body">
							<ol>
							<?php while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) : ?>
								<li><?php echo $row2['nama_kriteria'] ?></li>
							<?php endwhile; ?>
							</ol>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Skor Alternatif & Hasil</h3>
						</div>
						<div class="panel-body">
							<ol>
							<?php while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) :?>
								<li><?php echo $row1['nama_kost'] ?></li>
							<?php endwhile; ?>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<hr>
	<footer class="text-center">Copyright &copy; 2018</footer>

	</div>

	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/highcharts.js"></script>
	<script src="assets/js/exporting.js"></script>
	
</body>
</html>
