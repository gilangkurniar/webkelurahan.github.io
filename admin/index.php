<?php
session_start();
include('../include/koneksi.php');

if(isset($_POST['submit'])){

	global $connect;

	$username = mysqli_real_escape_string($connect,$_POST['username']);
	$password = mysqli_real_escape_string($connect,$_POST['password']);

	$sql = "SELECT * FROM administrator WHERE username = '".$username."' AND password = '".$password."' ";

	$result = mysqli_query($connect,$sql);
	$numrow = mysqli_num_rows($result);

	$r = mysqli_fetch_array($result);

	if ($numrow > 0){
		$_SESSION['loginadmin'] = $r['username'];
		$_SESSION['loginadminid'] = $r['id'];
		$_SESSION['loginadminemail'] = $r['email'];
		$_SESSION['loginadminnama'] = $r['nama'];
    $_SESSION['loginadmingambar'] = $r['gambar'];

		echo "<script>
                    alert('Login Berhasil');
                    document.location.href = 'beranda.php';
                  </script>";
	} else{
		echo "<script>alert('Username atau Passsword salah, silahkan coba lagi');</script>";
	}
}

if(empty($_SESSION['loginadmin']))
{
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="icon" href="../images/stikom.jpg">
</head>
<body style="background-image:url(../images/bwx.jpg);
             background-repeat:no-repeat;
             background-size: cover;
             background-position: center;">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center mx-auto">

      <div class="col-lg-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <div class="text-dark">
                      <h3><b><b>ADMIN PANEL</h3></b></b>
                    </div>
                    <!-- <img class="img-responsive" width="100px" src="../images/stikom.jpg"></img> -->
                    <p class="login-box-msg my-3">Silahkan login untuk memulai sesi</p>
                  </div>

                  <div class="dropdown-divider"></div><br>

                  <form class="user" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" placeholder="Masukkan Username..." value="" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user form-password" id="password" placeholder="Masukkan Password..." required>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input form-checkbox" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Show Password</label>
                      </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                     Login
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function(){   
    $('.form-checkbox').click(function(){
      if($(this).is(':checked')){
        $('.form-password').attr('type','text');
      }else{
        $('.form-password').attr('type','password');
      }
    });
  });
</script>
</body>
</html>
<?php
exit;
} else{
  echo "<script>alert('Anda sudah login atau berada di sesi terkini');document.location.href= 'beranda.php';</script>";
}
?>