<?php
include_once('../includes/header2.inc.php');
include_once('../includes/alternatif.inc.php');
$altObj = new Alternatif($db);
$count = $altObj->countAll();

if (isset($_POST)) { ?>
        <script type="text/javascript">
          window.onload=function(){
              showSuccessToast();
              setTimeout(function(){
                  window.location.reload(1);
                  history.go(0)
                  location.href = location.href
              }, 5000);
          };
        </script> <?php
    } else { ?>
        <script type="text/javascript">
          window.onload=function(){
              showErrorToast();
              setTimeout(function(){
                  window.location.reload(1);
                  history.go(0)
                  location.href = location.href
              }, 5000);
          };
        </script> <?php
    }
?>

<div class="row">
	<div class="col-xs-13 col-sm-13 col-md-12">
  	<ol class="breadcrumb">
  	  <li><a href="index2.php">Beranda</a></li>
  	  <li class="active">Info Kost</li>
  	</ol>
    <form method="post">
    	<div class="row">
    		<div class="col-md-6 text-left">
    			<strong style="font-size:18pt;"><span class="fa fa-book"></span> Info Kost</strong>
    		</div>
    		<div class="col-md-6 text-right">
          <div class="btn-group">
            <button type="button" onclick="location.href='data-alternatif-baru.php'" class="btn btn-primary"><span class="fa fa-clone"></span> Tambah Data</button>
          </div>
    		</div>
    	</div>
    	<br/>

    	<table width="100%" class="table table-striped table-bordered" id="tabeldata">
        <thead>
          <tr>
            <td align="center" width="100px"><b>Nama Kost</b></td>
            <td align="center" width="100px"><b>Nama Pemilik Kost</b></td>
            <td align="center" width="100px"><b>Alamat</b></td>
            <td align="center" width="100px"><b>Harga</b></td>
			<td align="center" width="200px"><b>Keterangan</b></td>
			<td align="center" width="80px"><b>Gambar</b></td>
			<?php if ($_SESSION["role"] == "admin"): ?>
			<td align="center" width="80px"><b>Aksi</b></td>
			<?php endif; ?>
		  </tr>
        </thead>
        <tbody>
          <?php $no=1; $alt1a = $altObj->readAll(); while ($row = $alt1a->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
              <td align="left"><?=$row['nama_kost']?></td>
              <td align="left"><?=$row['nama_pemilik_kost']?>
              <td align="left"><?=$row['alamat']?></td>
              <td align="left"><?=$row['harga']?></td>
			  <td align="justify"><?=$row['keterangan']?></td>
			  <td align="center"><img src="..\assets\images\<?php echo $row['gambar']; ?>" width="150" height="150"/></td>
			  <!--<td align="center"><?//=$row['gambar']?></td>-->
			  </td>
			  <?php if ($_SESSION["role"] == "admin"): ?>
              <td class="text-center">
            		<a href="data-alternatif-ubah.php?id=<?=$row['id_alternatif']?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            		<a href="data-alternatif-hapus.php?id=<?=$row['id_alternatif']?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              </td>
			   <?php endif; ?>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </form>
  </div>
</div>

<?php include_once('../includes/footer.inc.php'); ?>
