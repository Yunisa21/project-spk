<?php
include_once('../includes/header2.inc.php');
include_once('../includes/alternatif.inc.php');
include_once('../includes/kriteria.inc.php');
include_once('../includes/ranking.inc.php');

$altObj = new Alternatif($db);

$kriObj = new Kriteria($db);

$ranObj = new Ranking($db);
$stmt = $ranObj->readKhusus();
$stmty = $ranObj->readKhusus();
$count = $ranObj->countAll();
$stmtx1y = $ranObj->readBob();
$stmtx2y = $ranObj->readBob();
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">

		<?php include 'grafik.php'; ?>
			<table width="100%" class="table table-striped table-bordered">
			    <thead>
					<tr>
						<th>Nama Kost</th>
						<th>Hasil Akhir</th>
						<th class="success">Ranking</th>
					</tr>
			    </thead>
			    <tbody>
					<?php $rank = 1; $alt1c = $altObj->readByRank(); while ($row = $alt1c->fetch(PDO::FETCH_ASSOC)): ?>
				        <tr>
							<td><?=$row["nama_kost"]?></td>
							<td><?=number_format($row["hasil_akhir"], 4, '.', ',')?></td>
							<td class="success"><?=$rank++?></td>
				        </tr>
					<?php endwhile; ?>
			    </tbody>
		  </table>
		  <br>
	</div>
</div>
	<p align="center">
    <input value="Print" onClick="window.print()" class="btn btn-dark btn-block"></input><br>
<?php include_once('../includes/footer.inc.php'); ?>
</p>
