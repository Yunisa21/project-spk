<?php
include_once('../includes/header2.inc.php');
$id_kost_awal = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

include_once('../includes/nilai-awal.inc.php');
$eks = new NilaiAwal($db);
$eks->id_kost_awal = $id_kost_awal;
$eks->readOne();

if($_POST){
	$eks->nama_kost = $_POST['nama_kost'];
	$eks->harga = $_POST['harga'];
	if($eks->update()){
		echo "<script>location.href='nilai-awal.php'</script>";
	} else{ ?>
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
		  <li><a href="nilai-awal.php">Nilai</a></li>
		  <li class="active">Ubah Data</li>
		</ol>
  	<p style="margin-bottom:10px;">
  		<strong style="font-size:18pt;"><span class="fa fa-pencil"></span> Ubah Nilai Preferensi</strong>
  	</p>
  	<div class="panel panel-default">
			<div class="panel-body">
		    <form method="post">
				  <div class="form-group">
				    <label for="nama_kost">Nama Kost</label>
				    <input type="text" class="form-control" id="nama_kost" name="nama_kost" value="<?php echo $eks->nama_kost; ?>">
				  </div>
				  <div class="form-group">
				    <label for="harga">Harga</label>
				    <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $eks->harga; ?>">
				  </div>
					<div class="btn-group">
					  <button type="submit" class="btn btn-dark">Ubah</button>
					  <button type="button" onclick="location.href='nilai-awal.php'" class="btn btn-default">Kembali</button>
					</div>
				</form>
			  </div>
			</div>
	</div>
  <div class="col-xs-12 col-sm-12 col-md-2"> </div>
</div>

<?php include_once('../includes/footer.inc.php');?>
