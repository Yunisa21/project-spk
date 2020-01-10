<?php
include_once('../includes/header2.inc.php');
include_once('../includes/user.inc.php');

$usObj = new User($db);

if ($_POST) {
  //$usObj->id = $_POST['id'];
  $usObj->nl = $_POST['nl'];
  $usObj->rl = $_POST['rl'];
  $usObj->un = $_POST['un'];
  $usObj->pw = $_POST['pw'];

	if ($usObj->insert()) { ?>
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
  } else { ?>
    <script type="text/javascript">
      window.onload=function(){
        showStickyWarningToast();
      };
    </script> <?php
  }
?>

<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
	  <ol class="breadcrumb">
		  <li><a href="index2.php">Beranda</a></li>
		  <li><a href="user.php">Data Pengguna</a></li>
		  <li class="active">Tambah Data</li>
		</ol>
  	<p style="margin-bottom:10px;">
  		<strong style="font-size:18pt;"><span class="fa fa-clone"></span> Tambah Pengguna</strong>
  	</p>
    <div class="panel panel-default">
		  <div class="panel-body">
				<form method="post" id="form">  
		  <!--<div class="form-group">
			<label for="id">ID Kriteria</label>
			<input type="text" class="form-control" id="id" name="id" required readonly="on" value="<?//=$usObj->getNewID()?>">
		  </div>-->
		  <div class="form-group">
            <label for="nl">Nama Lengkap</label>
            <input type="text" class="form-control" id="nl" name="nl" required>
          </div>
          <div class="form-group">
            <label for="rl">Role</label>
            <select class="form-control" name="rl" id="rl" required>
              <option value="">----</option>
              <option value="admin">admin</option>
              <option value="user">user</option>
            </select>
          </div>
          <div class="form-group">
            <label for="un">Username</label>
            <input type="text" class="form-control" id="un" name="un" required>
          </div>
          <div class="form-group">
            <label for="pw">Password</label>
            <input type="password" class="form-control" id="pw" name="pw" required>
          </div>
          <div class="btn-group">
            <button type="submit" class="btn btn-dark">Simpan</button>
      		  <button type="button" onclick="location.href='user.php'" class="btn btn-default">Kembali</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include_once('../includes/footer.inc.php'); ?>
