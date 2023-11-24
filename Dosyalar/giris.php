<?php require('db.php');
$ek=$db->query("select * from ayarlar where ayar_id=1")->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="az">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Giriş et - <?php echo $ek['siteadi']; ?></title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<?php require('header.php'); ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Giriş</h2>
          <ol>
            <li><a href="index.php">Ana Sayfa</a></li>
            <li>Giriş</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">

<div class="row">

<div class="col">

<form method="post">
              <div class="form-group first">
                <label for="username">Email</label>
                <input name="email" type="email" class="form-control">

              </div><br />
              <div class="form-group last mb-4">
                <label for="password">Şifrə</label>
                <input name="password" type="password" class="form-control">
                
              </div>

              <input type="submit" value="Giriş et" class="btn btn-block btn-primary">
<br />
<div class="d-grid gap-2">
  <br /><a href="kaydol.php" class="btn btn-danger"> Pulsuz qeydiyyat</a>
</div>
</form>

<?php
@session_start();
$usergirdi  = $db->prepare("SELECT * FROM kullanicilar WHERE email=? and password=?");
if ($_POST) {
$email = $_POST['email'];
$password = md5($_POST['password']);
$usergirdi->execute(array($email,$password));
$parcala = $usergirdi->fetch(PDO::FETCH_ASSOC);
$kontrol = $usergirdi->rowCount();
}
if ($kontrol) {
   $_SESSION['usergirdi'] = $parcala['email'];

echo '<script>swal("Təbriklər!", "Giriş edildi! Yönləndirilirsiz", "success");</script>';
header('refresh:1; url=panel.php');
}
?>

</div>

    <div class="col-lg-5" style="background: url(https://tema2.otogaleriscripti.com/images/banner/korfez-firat-dekorasyon-korfez-firat-dekorasyon-5-hakkimizda-banner-2.jpeg); height: 12rem; background-size: cover; background-repeat: no-repeat; border-radius: 5px;">
    </div>
</div>

      </div>
    </section>

  </main><!-- End #main -->

<?php require('footer.php'); ?>

</body>

</html>