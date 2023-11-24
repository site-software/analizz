<?php
@session_start();
if (!isset($_SESSION['usergirdi'])) {
echo header('location:giris.php');
}
?>
<?php require('db.php');
$ek=$db->query("select * from ayarlar where ayar_id=1")->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="az">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>E-Mail dəyişdir - <?php echo $ek['siteadi']; ?></title>
</head>

<body>
<?php require('header.php'); ?>

  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Profil</h2>
          <ol>
            <li><a href="index.php">Ana Səhifə</a></li>
            <li>Profil</li>
            <li>E-Mail dəyişdir</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">

<?php
$uye = $_SESSION["usergirdi"];
$sql = $db->query("SELECT * FROM kullanicilar WHERE email = '$uye'");
$a = $sql->fetch(PDO::FETCH_ASSOC);
$adsoyad = $a["adsoyad"];
$email = $a["email"];
$uyeninid = $a["id"];
$sehir = $a["sehir"];
$telefon = $a["telefon"];
?>
<div class="row">
<div class="col">
<div class="card">
  <div class="card-body">

<form method="post">
<table style="width: 100%;margin-bottom: 10px;">
<tr>
<td>E-Mail dəyişdir:<br /><input type="email" class="form-control" name="email" required></td>
</tr>
</table>
<button type="submit" class="btn btn-primary">dəyişdir</button>
</form>

<?php
if($_POST){
 $email = $_POST['email'];

 $gunce = $db->prepare("update kullanicilar set email=? where id=$uyeninid");
 $gunce -> execute(array($email));

 if ($gunce) {
echo '<script>swal("Təbriklər!", "Yönləndirilirsiz", "success");</script>';
header('refresh:1; url=cik.php');
 }
}
?>

</div>
  </div> <!-- üyelik bilgileri üst bitti -->
</div>
<div class="col-lg-3"><?php require('panelmenu.php'); ?></div>
</div>

      </div>
    </section>

  </main><!-- End #main -->

<?php require('footer.php'); ?>

</body>

</html>