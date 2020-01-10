<?php
include_once '../includes/header2.inc.php';

include_once '../includes/nilai.inc.php';
$pro3 = new Nilai($db);
$stmt3 = $pro3->readAll();

include_once '../includes/alternatif.inc.php';
$pro1 = new Alternatif($db);
$stmt1 = $pro1->readAll();
$stmt4 = $pro1->readByRank();

include_once '../includes/kriteria.inc.php';
$pro2 = new Kriteria($db);
$stmt2 = $pro2->readAll();

include_once '../includes/bobot.inc.php';
$pro5 = new Bobot($db);
$stmt5 = $pro5->readAll();
?>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div id="container2" style="min-width: 100%; height: 400px; margin: 0 auto"></div>
			<br/>
			<hr>
	</div>

	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/highcharts.js"></script>
	<script src="assets/js/exporting.js"></script>
	<script>
		var chart1; // globally available
		$(document).ready(function() {
			chart1 = new Highcharts.Chart({
			chart: {
				renderTo: 'container2',
				type: 'column'
			},
			title: {
				text: 'Grafik Usulan'
			},
			xAxis: {
				categories: ['Alternatif']
			},
			yAxis: {
				title: {
					text: 'Jumlah Nilai'
				}
			},
			series: [
				<?php while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)) : ?>
					//data yang diambil dari database dimasukan ke variable nama dan data
					{
						name: '<?php echo $row4['nama_kost']?>', 
						data: [<?php echo $row4['hasil_akhir'] ?>]
					},
				<?php endwhile; ?>
			]
			});
		});
	</script>
</body>
</html>
