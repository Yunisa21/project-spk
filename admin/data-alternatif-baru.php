<?php
include_once('../includes/header2.inc.php');
include_once('../includes/alternatif.inc.php');

$altObj = new Alternatif($db);

if ($_POST) {
	$altObj->id_alternatif = $_POST['id_alternatif'];
	$altObj->no_kost = $_POST['no_kost'];
	$altObj->nama_kost = $_POST['nama_kost'];
	$altObj->nama_pemilik_kost = $_POST['nama_pemilik_kost'];
	$altObj->alamat = $_POST['alamat'];
	$altObj->harga = $_POST['harga'];
	//$altObj->hasil_akhir = $_POST['hasil_akhir'];
	$altObj->gambar = $_POST['gambar'];
	
	if ($altObj->insert()) { ?>
		<script type="text/javascript">
			window.onload=function(){
				showStickySuccessToast();
			};
		</script> <?php
	} else { ?>
		<script type="text/javascript">
			window.onload=function(){
				showStickyErrorToast();
			};
		</script> <?php
	}
}
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<ol class="breadcrumb">
			<li><a href="index2.php">Beranda</a></li>
			<li><a href="data-alternatif.php">Info Kost</a></li>
			<li class="active">Tambah Data</li>
		</ol>
		<p style="margin-bottom:10px;">
			<strong style="font-size:18pt;"><span class="fa fa-clone"></span> Tambah Kriteria</strong>
		</p>
		<div class="panel panel-default">
			<div class="panel-body">
				<form method="post" id="form">
					<div class="form-group">
						<label for="id_alternatif">ID Kriteria</label>
					  <input type="text" class="form-control" id="id_alternatif" name="id_alternatif" required readonly="on" value="<?=$altObj->getNewID()?>">
					</div>
					<div class="form-group">
						<label for="no_kost">No Kost</label>
						<input type="text" class="form-control" id="no_kost" name="no_kost" minlength="2" required="on">
					</div>
					<div class="form-group">
						<label for="nama_kost">Nama Kost</label>
						<input type="text" class="form-control" id="nama_kost" name="nama_kost" minlength="5" required="on">
					</div>
					<div class="form-group">
						<label for="nama_pemilik_kost">Nama Pemilik Kost</label>
						<input type="text" class="form-control" id="nama_pemilik_kost" name="nama_pemilik_kost" minlength="5" required="on">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="text" class="form-control" id="alamat" name="alamat" minlength="5" required="on">
					</div>
					<div class="form-group">
						<label for="harga">Harga</label>
						<input type="text" class="form-control" id="harga" name="harga" minlength="5" required="on">
					</div>
					<div class="form-group">
						<label for="gambar">Gambar</label>
						<input type="file" accept="..\assets\images\*" id="gambar" name="gambar" class="input" value="<?php echo $altObj->gambar; ?>"/>
						<!--<input type="file" accept="assets\images" id="gambar" name="gambar" required="on" class="input"/></td>-->
					</div>
					<!--<div class="form-group">
						<label for="hasil_akhir">Hasil Akhir</label>
						<input type="text" class="form-control" id="hasil_akhir"  readonly="on" name="hasil_akhir" minlength="5" required="on">
					</div>-->
					<div class="btn-group">
						<button type="submit" class="btn btn-dark">Simpan</button>
						<button type="button" onclick="location.href='data-alternatif.php'" class="btn btn-default">Kembali</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include_once('../includes/footer.inc.php'); ?>