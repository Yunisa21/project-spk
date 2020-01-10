<?php
include_once('../includes/header2.inc.php');
include_once('../includes/nilai-awal.inc.php');
$pro = new NilaiAwal($db);
$stmt = $pro->readAll();

include_once('../includes/kriteria.inc.php');
$kriteriaObj = new Kriteria($db);
$kriteria = $kriteriaObj->readAll();


include_once('../includes/nilai-awal-detail.inc.php');
$nilAwDeObj = new NilaiAwalDetail($db);
// $nilAwDe = $nilAwDeObj->readAllByNik();

if (isset($_POST['hapus-contengan'])) {
    $imp = "('".implode("','", array_values($_POST['checkbox']))."')";
    $result = $pro->hapusell($imp);
    if ($result) { ?>
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
}
?>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <ol class="breadcrumb">
        <li><a href="index2.php">Beranda</a></li>
        <li class="active">Kost Awal</li>
      </ol>
      <form method="post">
        <div class="row">
          <div class="col-md-6 text-left">
            <strong style="font-size:18pt;"><span class="fa fa-modx"></span> Data Info Kost</strong>
          </div>
        </div>
        <br/>
        <table width="100%" class="table table-striped table-bordered" id="tabeldata">
          <thead>
            <tr>
              <!--<th width="10px"><input type="checkbox" name="select-all" id="select-all" /></th>-->
              <th>No Kost</th>
              <th>Nama Kost</th>
              <th>Harga</th>
              <th width="100px">Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php $no=1; while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
              <!--<td><input type="checkbox" value="<?//=$row['id_kost_awal']?>" name="checkbox[]" /></td>-->
              <td><?=$row['id_alternatif']?></td>
              <td><?=$row['nama_kost']?></td>
			  <td><?=$row['harga']?></td>
              <td class="text-center">
                <!--<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target=".modal" data-id-alternatif="<?=$row['id_alternatif']?>"><span class="fa fa-eye" aria-hidden="true"></span></button>-->
                <a href="nilai-awal-ubah.php?id=<?=$row['id_kost_awal']?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                <a href="nilai-awal-hapus.php?id=<?=$row['id_kost_awal']?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              </td>
            </tr>
          <?php endwhile; ?>
          </tbody>
        </table>
      </form>
    </div>
  </div>
<?php include_once('../includes/footer.inc.php'); ?>
