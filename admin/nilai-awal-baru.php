<?php
include_once('../includes/header2.inc.php');

include_once('../includes/alternatif.inc.php');
$altObj = new Alternatif($db);
$alt = $altObj->readAll();

include_once('../includes/kriteria.inc.php');
$kriObj = new Kriteria($db);
$kri = $kriObj->readAll();

if ($_POST) {
    include_once('../includes/nilai-awal.inc.php');
    $nilObj = new NilaiAwal($db);
    $nilObj->id_alternatif = $_POST['id_alternatif'];
    $harga = (array_sum($_POST["id_kriteria"]) / $kriObj->countAll());
    $nilObj->harga = $harga;

    if ($nilObj->insert()) {
      $id = $db->lastInsertId();
      include_once('../includes/nilai-awal-detail.inc.php');
      $nilDObj = new KostAwalDetail($db);
			foreach ($_POST["id_kriteria"] as $k => $v) {
        $nilDObj->id_nilai = $id;
        $nilDObj->id_kriteria = $k;
        $nilDObj->harga = $_POST["id_kriteria"][$k];
				if (!$nilDObj->insert()) {
          echo "<script type=\"text/javascript\">
  						window.onload=function(){
  							showStickyErrorToast();
  						};
  				</script>";
				}
			}
			echo "<script type=\"text/javascript\">
						window.onload=function(){
							showStickySuccessToast();
						};
				</script>";
    } else {
				echo "<script type=\"text/javascript\">
						window.onload=function(){
							showStickyErrorToast();
						};
				</script>";
		}
}
?>
<div class="row">
	  <div class="col-xs-12 col-sm-12 col-md-12">
			  <ol class="breadcrumb">
					  <li><a href="index2.php">Beranda</a></li>
					  <li><a href="nilai-awal.php">Kost Awal</a></li>
					  <li class="active">Tambah Data</li>
				</ol>
		  	<p style="margin-bottom:10px;">
			  		<strong style="font-size:18pt;"><span class="fa fa-clone"></span> Tambah Data Kost</strong>
		  	</p>
	  	<div class="panel panel-default">
					<div class="panel-body">
						<form method="post">
                <div class="form-group">
                    <label for="id_alternatif">Nama Kost</label>
                    <select class="form-control" id="id_alternatif" name="id_alternatif">
                        <option value="">---</option>
                        <?php while ($row = $alt->fetch(PDO::FETCH_ASSOC)) : ?>
                            <option value="<?=$row["id_alternatif"]?>"><?=$row["nama_kost"]?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <?php while ($row = $kri->fetch(PDO::FETCH_ASSOC)) : ?>
               
                <?php endwhile; ?>
								<div class="btn-group">
										<button type="submit" class="btn btn-dark">Simpan</button>
										<button type="button" onclick="location.href='nilai-awal.php'" class="btn btn-default">Kembali</button>
								</div>
						</form>
					</div>
			</div>
	  </div>
</div>

<?php include_once('../includes/footer.inc.php');?>
