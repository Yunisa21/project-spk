<?php
include_once('../includes/header2.inc.php');

$id_alternatif = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

include_once('../includes/alternatif.inc.php');

$altObj = new Alternatif($db);
$altObj->id = $id_alternatif;
$altObj->readOne();
?>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <ol class="breadcrumb">
      <li><a href="index2.php">Beranda</a></li>
      <li><a href="data-alternatif.php">Data Alternatif</a></li>
      <li class="active">Ubah Data</li>
    </ol>
    <p style="margin-bottom:10px;">
      <strong style="font-size:18pt;"><span class="fa fa-pencil"></span> Ubah Alternatif</strong>
    </p>
      <div class="panel panel-default">
        <div class="panel-body">
          <form method="POST">
            <div class="form-group">
                <label for="id">ID Alternatif</label>
                <input type="text" name="id" id="id" class="form-control" autofocus="on" readonly="on" value="<?php echo $altObj->id; ?>">
            </div>
            <div class="form-group">
                <label for="no_kost">Nomor Kost</label>
                <input type="text" name="no_kost" id="no_kost" class="form-control" autofocus="on" required="on" value="<?php echo $altObj->no_kost; ?>">
            </div>
            <div class="form-group">
                <label for="nama_kost">Nama Kost</label>
                <input type="text" name="nama_kost" id="nama_kost" class="form-control" required="on" value="<?php echo $altObj->nama_kost; ?>">
            </div>
            <div class="form-group">
                <label for="nama_pemilik_kost">Nama Pemilik Kost</label>
                <input type="text" name="nama_pemilik_kost" id="nama_pemilik_kost" class="form-control" required="on" value="<?php echo $altObj->nama_pemilik_kost; ?>">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control datepicker" required="on" value="<?php echo $altObj->alamat; ?>">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" class="form-control" required="on" value="<?php echo $altObj->harga; ?>">
            </div>
			<div class="form-group">
        	<label for="gambar">Gambar</label>
            <td>
            <!--<input type="text" hidden="hidden" name="gambarlama" class="input" value="<?php //echo $altObj->gambar; ?>"/>-->
            	<input type="file" accept="..\assets\images\*" id="gambar" name="gambar" class="input" value="<?php echo $altObj->gambar; ?>"/>
            </td>
			</div>
			<div class="form-group">
                <label for="keterangan">Keterangan</label>
                <td><textarea input cols="22" name="keterangan" rows="4" placeholder="keterangan" class="form-control"><?php echo $altObj->keterangan; ?></textarea></td>
            </div>
            <div class="form-group">
                <label for="hasil_akhir">Hasil Akhir</label>
                <input type="text" name="hasil_akhir" id="hasil_akhir" class="form-control" autofocus="on" readonly="on" value="<?php echo $altObj->hasil_akhir; ?>">
            </div>
            <div class="btn-group">
              <button type="submit" class="btn btn-dark" >Ubah</button>
              <button type="button" onclick="location.href = 'data-alternatif.php'" class="btn btn-default">Kembali</button>
            </div>
          </form>
        </div>
      </div>
  </div>
</div>
<?php
if ($_POST) {
	$altObj->id = $_POST["id"];
  	$altObj->no_kost = $_POST["no_kost"];
  	$altObj->nama_kost = $_POST["nama_kost"];
  	$altObj->nama_pemilik_kost = $_POST["nama_pemilik_kost"];
  	$altObj->alamat = $_POST["alamat"];
  	$altObj->harga = $_POST["harga"];
	$altObj->keterangan = $_POST["keterangan"];
  	$altObj->hasil_akhir = $_POST["hasil_akhir"];
	$altObj->gambar = $_POST['gambar'];
	
	if ($altObj->update()) {
        echo "<script>location.href='data-alternatif.php'</script>";
    } else { ?>
      <script type="text/javascript">
        window.onload = function () {
          showStickyErrorToast();
        };
      </script> <?php
    }
}
?>
<?php include_once('../includes/footer.inc.php'); ?>
