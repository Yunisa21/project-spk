<?php
include_once('includes/header.inc.php');
include_once('includes/user.inc.php');

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
  	<p style="margin-bottom:10px;">
  		<strong style="font-size:18pt;"><span class="fa fa-clone"></span> Registrasi</strong>
  	</p>
    <div class="panel panel-default">
		  <div class="panel-body">
				<form method="post" id="form">  
		<table width="500" height="138" class="kotak">
			<tr>
				<td height="18" colspan="3">&nbsp;</td>
			</tr>
			<div class="form-group">
            <label for="nl">Nama Lengkap</label>
            <input type="text" class="form-control" id="nl" name="nl" required>
          </div>
          <div class="form-group">
            <label for="rl">Role</label>
            <select class="form-control" name="rl" id="rl" required>
              <option value="">----</option>
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
            <input type="submit" class="btn btn-dark" value="Daftar"></input>
					<a href="login.php"  class="btn btn-default" role="button">Login</a>&nbsp;								
				</td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
		</table>
	</form>
	</div>	
<?php  
include_once('includes/config.php');
if(isset($_POST['enter'])) 
 {  
	$nama_lengkap=$_POST['nama_lengkap'];  
	$role=$_POST['role'];
	$username=$_POST['username'];
	$password=$_POST['password'];  	
	$cek=mysql_query("SELECT * FROM `pengguna` WHERE `username`='$username'");
	if(mysql_num_rows($cek) <> 0)
	{
		echo"<script>alert('data sudah ada');window.location='login.php';</script>";
	}

$daftar=mysql_query("INSERT INTO `spk_kost`.`pengguna`(`id_pengguna`, `nama_lengkap`, `role`, `username`, `password`) VALUES (NULL, '$nama_lengkap', '$role', '$username', '$password');");
	if($daftar)
		{ 
		  echo "<div class='alert alert-success'><strong>Pendaftaran Berhasil!</strong><i>Silahkan Login</i></div>";
		}
	else
	{ 
		echo "<div class='alert alert-danger'><strong>Pendaftaran Gagal!</strong></div>";
	}
 }  
 ?>
</body>
</html>