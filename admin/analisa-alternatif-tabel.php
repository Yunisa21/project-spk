<?php
include_once('../includes/header2.inc.php');
include_once('../includes/skor.inc.php');
include_once('../includes/alternatif.inc.php');

$skoObj = new Skor($db);
$altObj = new Alternatif($db);
$altkriteria = isset($_POST['kriteria']) ? $_POST['kriteria'] : $_GET['kriteria'];
$count = $skoObj->countAll();

if (isset($altkriteria)) {
	$skoObj->readKri($altkriteria);
	$count = $skoObj->countAll();

	if (isset($_POST['submit'])) {
		$altCount = $altObj->countByFilter();

		$no=1; $r = []; $no_kost = [];
		$alt1 = $altObj->readByFilter();
		while ($row = $alt1->fetch(PDO::FETCH_ASSOC)){
			$alt2 = $altObj->readByFilter();
			while ($roww = $alt2->fetch(PDO::FETCH_ASSOC)) {
				$no_kost[$row['id_alternatif']][] = $roww['id_alternatif'];
			}
			$total = $altCount-$no;
			if ($total>=1) {
				$r[$row['id_alternatif']] = $total;
			}
			$no++;
		}

		$ni=1;
		foreach ($no_kost as $key => $value) {
			array_splice($no_kost[$key], 0, $ni++);
		}
		$ne = count($no_kost)-1;
		array_splice($no_kost, $ne, 1);

		 //print_r($r);
		 //print_r($nid);
		 //die();

		$no=1; foreach ($r as $k => $v) {
			 $j=0; for ($i=1; $i<=$v; $i++) {
				// $rows = $altObj->readSatu($k); while ($row = $rows->fetch(PDO::FETCH_ASSOC)){
					if ($skoObj->insert($_POST[$k.$no], $_POST['nl'.$no], $_POST[$no_kost[$k][$j].$no], $altkriteria)) {
						// ...
					} else {
						$skoObj->update($_POST[$k.$no], $_POST['nl'.$no], $_POST[$no_kost[$k][$j].$no], $altkriteria);
					}

					if ($skoObj->insert($_POST[$no_kost[$k][$j].$no], 1/$_POST['nl'.$no], $_POST[$k.$no], $altkriteria)) {
						// ...
					} else {
						$skoObj->update($_POST[$no_kost[$k][$j].$no], 1/$_POST['nl'.$no], $_POST[$k.$no], $altkriteria);
					}
					$no++; $j++;
				// }
			}
		}
	}

	if (isset($_POST['hapus'])) {
		$skoObj->delete();
		echo "<script>location.href='analisa-alternatif.php'</script>";
		exit;
	}
	?>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<ol class="breadcrumb">
			  <li><a href="index2.php">Beranda</a></li>
			  <li><a href="analisa-alternatif.php">Analisa Alternatif</a></li>
			  <li class="active">Tabel Analisa Alternatif</li>
			</ol>
			<div class="row">
				<div class="col-md-6 text-left">
					<strong style="font-size:18pt;"><span class="fa fa-table"></span> Alternatif Menurut Kriteria</strong>
				</div>
				<div class="col-md-6 text-right">
					<form method="post">
	          <button name="hapus" class="btn btn-danger">Hapus Semua Data</button>
					</form>
				</div>
			</div>
			<br/>
			<table width="100%" class="table table-striped table-bordered">
        <thead>
					<tr>
						<th><?=$skoObj->kri?></th>
						<?php $alt1a = $altObj->readByFilter(); while ($row = $alt1a->fetch(PDO::FETCH_ASSOC)): ?>
							<th><?=$row['nama_kost']?></th>
						<?php endwhile; ?>
					</tr>
        </thead>
				<tbody>
					<?php $alt2a = $altObj->readByFilter(); while ($baris = $alt2a->fetch(PDO::FETCH_ASSOC)): ?>
						<tr>
							<th class="active"><?=$baris['nama_kost']?></th>
							<?php $alt3a = $altObj->readByFilter(); while ($kolom = $alt3a->fetch(PDO::FETCH_ASSOC)): ?>
								<td>
								<?php
									if ($baris['id_alternatif'] == $kolom['id_alternatif']) {
										echo '1';
										if (!$skoObj->insert($baris['id_alternatif'], '1', $kolom['id_alternatif'], $altkriteria)) {
											$skoObj->update($baris['id_alternatif'], '1', $kolom['id_alternatif'], $altkriteria);
										}
									} else {
										$skoObj->readAll1($baris['id_alternatif'], $kolom['id_alternatif'], $altkriteria);
										echo number_format($skoObj->kp, 4, '.', ',');
									}
								?>
								</td>
							<?php endwhile; ?>
						</tr>
					<?php endwhile; ?>
				</tbody>
        <tfoot>
         	<tr class="info">
						<th>Jumlah</th>
						<?php $alt4a = $altObj->readByFilter(); while ($row = $alt4a->fetch(PDO::FETCH_ASSOC)): ?>
						<th>
							<?php
								$skoObj->readSum1($row['id_alternatif'], $altkriteria);
								echo number_format($skoObj->nak, 4, '.', ',');
								if (!$skoObj->insert3($row['id_alternatif'], $altkriteria, $skoObj->nak)) {
									$skoObj->insert5($skoObj->nak, $row['id_alternatif'], $altkriteria);
								}
							?>
						</th>
					<?php endwhile;?>
          </tr>
        </tfoot>
		 	</table>

			<table width="100%" class="table table-striped table-bordered">
	      <thead>
		      <tr>
	          <th>Perbandingan</th>
	          <?php $alt1b = $altObj->readByFilter(); while ($row = $alt1b->fetch(PDO::FETCH_ASSOC)): ?>
		          <th><?=$row['nama_kost']?></th>
	          <?php endwhile; ?>
			  <th class="info">Jumlah</th>
	          <th class="success">Prioritas</th>
		      </tr>
	      </thead>
	      <tbody>
					<?php $alt2b = $altObj->readByFilter(); while ($baris = $alt2b->fetch(PDO::FETCH_ASSOC)): ?>
		        <tr>
		          <th class="active"><?=$baris['nama_kost']?></th>
		          <?php $alt3b = $altObj->readByFilter(); while ($kolom = $alt3b->fetch(PDO::FETCH_ASSOC)): ?>
		            <td>
		            	<?php
		                $skoObj->readAll3($kolom['id_alternatif'], $altkriteria);
										$jumlahBobot = $skoObj->jak;
			            	if ($baris['id_alternatif'] == $kolom['id_alternatif']) {
			            		$n = 1/$jumlahBobot;
			            		$skoObj->insert2($n, $baris['id_alternatif'], $kolom['id_alternatif'], $altkriteria);
			            		echo number_format($n, 4, '.', ',');
			            	} else {
			            		$skoObj->readAll1($baris['id_alternatif'], $kolom['id_alternatif'], $altkriteria);
								$bobot = $skoObj->kp;
			            		$n = $bobot/$jumlahBobot;
			            		$skoObj->insert2($n, $baris['id_alternatif'], $kolom['id_alternatif'], $altkriteria);
			            		echo number_format($n, 4, '.', ',');
			            	}
		            	?>
		            </td>
		          <?php endwhile; ?>
				  <th class="info">
							<?php
							$skoObj->readSum2($baris['id_alternatif'], $altkriteria);
							$jum = $skoObj->nak;
							echo number_format($jum, 4, '.', ',');
							?>
						</th>
							<th class="success">	
								<!--gak tau gak mau berubah-->
								<?php
								$skoObj->readAvg($baris['id_alternatif'], $altkriteria);
								$prioritas=$jum/6;
								$skoObj->insert4($prioritas, $baris['id_alternatif'], $altkriteria);
								echo number_format($prioritas, 4, '.', ',');
								?>
							</th>
		        </tr>
					<?php endwhile; ?>
	      </tbody>
		  </table>
		</div>
	</div>
<?php } else {
	echo "<script>location.href='analisa-alternatif.php'</script>";
}
include_once('../includes/footer.inc.php');
?>
