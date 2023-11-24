<?php require('db.php');
$ek=$db->query("select * from ayarlar where ayar_id=1")->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="az">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Kaydol - <?php echo $ek['siteadi']; ?></title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<?php require('header.php'); ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Kaydol</h2>
          <ol>
            <li><a href="index.php">Ana Sayfa</a></li>
            <li>Kaydol</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">

<div class="row">

<div class="col">

<form method="post">
<div class="form-group last mb-4">
<label for="password">Ad Soyad</label>
<input name="adsoyad" type="text" class="form-control" required>
</div>

<div class="form-group last mb-4">
<label for="username">email</label>
<input name="email" type="email" class="form-control" required>
</div>

<div class="form-group last mb-4">
<label for="password">Şəhər</label>
<input name="sehir" type="text" class="form-control" required>
</div>

<div class="form-group last mb-4">
<label for="password">Telefon nömrəsi </label>
<input name="telefon" type="text" class="form-control" required>
</div>

<div class="form-group last mb-4">
<label for="password">şifre</label>
<input name="password" type="password" class="form-control" required>
</div>

<input type="submit" name="ekkayitol" value="Kaydol" class="btn btn-block btn-primary">
<br />
</form>

<?php
if (isset($_POST['ekkayitol'])) {
$adsoyad   = $_POST['adsoyad'];
$email  = $_POST['email'];
$sehir  = $_POST['sehir'];
$telefon  = $_POST['telefon'];
$password  = md5($_POST['password']);
$tarih  = date('d/m/Y');

$sql = $db ->query("SELECT * FROM kullanicilar WHERE email = '$email'"); 
if ($sql->rowCount() != 0){
echo '<script>swal({ title: "Hata!", text: "Yazmış olduğunuz email bir başka kullanıcı tarafından kullanılıyor. Lütfen farklı bir email yazarak tekrar deneyin!", icon: "error", button: "Tekrar Dene!", });</script>';
}else{

 $gunce = $db->prepare("insert into kullanicilar set adsoyad=?, email=?, sehir=?, telefon=?, tarih=?, password=?");
 $gunce -> execute(array($adsoyad,$email,$sehir,$telefon,$tarih,$password));
 
 if ($gunce) {
echo '<script>swal("Təbriklər!", "Hesab yaradıldı, yönləndirilirsiz", "success");</script>';
header('refresh:2; url=giris.php');
}
}
}
?>

</div>

    <div class="col-lg-5" style="background: url(https://tema2.otogaleriscripti.com/images/banner/korfez-firat-dekorasyon-korfez-firat-dekorasyon-5-hakkimizda-banner-2.jpeg); height: 17.5rem; background-size: cover; background-repeat: no-repeat; border-radius: 5px;">
    </div>
</div>

      </div>
    </section>

  </main><!-- End #main -->

<?php require('footer.php'); ?>

</body>

</html>