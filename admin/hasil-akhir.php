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
		<br/>
		<div class="row">
			<div class="col-md-6 text-left">
				<h3>Data Bobot</h3>
			</div>
			<div class="col-md-6 text-right">
	      <button type="button" onclick="location.href='index2.php'" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</button>
			</div>
		</div>
		<br/>
		<table width="100%" class="table table-striped table-bordered">
	    <thead>
	      <tr>
	        <th rowspan="3" class="text-center active">Alternatif</th>
	        <th colspan="<?php $kri1a = $kriObj->readAll(); echo $kri1a->rowCount(); ?>" class="text-center">Kriteria</th>
	      </tr>
				<tr>
					<?php $kri2a = $kriObj->readAll(); while ($row = $kri2a->fetch(PDO::FETCH_ASSOC)): ?>
						<th><?=$row['nama_kriteria']?></th>
					<?php endwhile; ?>
				</tr>
				<tr class="success">
					<?php $bobot1 = $ranObj->readBob(); while ($row = $bobot1->fetch(PDO::FETCH_ASSOC)): ?>
						<td><?=number_format($row['bobot_kriteria'], 4, '.', ',')?></td>
					<?php endwhile; ?>
				</tr>
	    </thead>
			<tbody>
				<?php $alt1a = $altObj->readByFilter(); while ($row1 = $alt1a->fetch(PDO::FETCH_ASSOC)): ?>
					<tr>
						<th class="active"><?=$row1['nama_kost']?></th>
						<?php $a = $row1['id_alternatif']; ?>
						<?php	$kri2a = $kriObj->readAll(); while ($row2 = $kri2a->fetch(PDO::FETCH_ASSOC)): ?>
							<?php $b = $row2['id_kriteria']; ?>
							<?php $ran1a = $ranObj->readR($a, $b); while ($row3 = $ran1a->fetch(PDO::FETCH_ASSOC)): ?>
								<td>
									<?php
										echo $nor = number_format($row3['skor_alt_kri'], 4, '.', ',');
									?>
								</td>
							<?php endwhile; ?>
						<?php endwhile; ?>
					</tr>
				<?php endwhile; ?>
				</tr>
			</tbody>
	  </table>
		<hr>

		<h3>Hasil Akhir</h3>
		<br/>
		<table width="100%" class="table table-striped table-bordered">
	    <thead>
	      <tr>
	        <th rowspan="2" class="text-center active">Alternatif</th>
	        <th colspan="<?php $kri1b = $kriObj->readAll(); echo $kri1b->rowCount(); ?>" class="text-center">Kriteria</th>
	        <th rowspan="2" class="text-center warning">Hasil Akhir</th>
	      </tr>
	      <tr>
	        <?php $kri2b = $kriObj->readAll(); while ($row = $kri2b->fetch(PDO::FETCH_ASSOC)): ?>
	          <th><?=$row['nama_kriteria']?></th>
	        <?php endwhile; ?>
	      </tr>
	    </thead>
	    <tbody>
				<?php $alt1b = $altObj->readByFilter(); while ($row1 = $alt1b->fetch(PDO::FETCH_ASSOC)): ?>
	        <tr>
	          <th class="active"><?=$row1['nama_kost']?></th>
	          <?php $a1 = $row1['id_alternatif']; ?>
						<?php $kri2b = $kriObj->readAll(); while ($row2 = $kri2b->fetch(PDO::FETCH_ASSOC)): ?>
							<?php $b2 = $row2['id_kriteria']; ?>
							<?php $ran1b = $ranObj->readR($a1, $b2); while ($row3 = $ran1b->fetch(PDO::FETCH_ASSOC)): ?>
	              <td>
	              	<?php
	                	$norx = $row3['skor_alt_kri'] * $row2['bobot_kriteria'];
										//pow($row3['skor_alt_kri'],$bobot);
										echo number_format($norx, 4, '.', ',');
										$ranObj->ia = $a1;
										$ranObj->ik = $b2;
										$ranObj->nn4 = $norx;
										$ranObj->normalisasi1();
	              	?>
	              </td>
							<?php endwhile; ?>
	          <?php endwhile; ?>
						<td class="warning">
							<?php
							$stmthasil = $ranObj->readHasil1($a1);
							$hasil = $stmthasil->fetch(PDO::FETCH_ASSOC);
							echo number_format($hasil['bbn'], 4, '.', ',');
							$ranObj->ia = $a1;
							$ranObj->has1 = $hasil['bbn'];
							$ranObj->hasil1();
							?>
						</td>
	        </tr>
				<?php endwhile; ?>
	    </tbody>
	  </table>
		<hr>

	</div>
</div>

<?php include_once('../includes/footer.inc.php'); ?>