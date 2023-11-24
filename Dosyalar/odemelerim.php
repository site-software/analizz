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
  <title>Ödənişlərim - <?php echo $ek['siteadi']; ?></title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<?php require('header.php'); ?>

  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Ödənişlərim</h2>
          <ol>
            <li><a href="index.php">Ana Sayfa</a></li>
            <li>Profil</li>
            <li>Ödənişlərim</li>
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

<div class="table-responsive text-nowrap">
<table class="table table-hover table-responsive table-striped">
  <thead>
    <tr>
      <th scope="col">Elan</th>
      <th scope="col">Vəziyyət</th>
      <th scope="col">Elan nömrəsi</th>
      <th scope="col">Məbləğ</th>
      <th scope="col">Tarix</th>
    </tr>
  </thead>
  <tbody>

<?php $odemeler=$db->query("SELECT * FROM odemeler WHERE kullanici='$uyeninid' ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC); foreach($odemeler as $odeme){ ?>
    <tr>
      <td><?php echo $odeme['ellan']; ?></td>
      <td><?php echo $odeme['durumu']; ?></td>
      <td><?php echo $odeme['ilanid']; ?></td>
      <td><?php echo $odeme['tutar']; ?></td>
      <td><?php echo $odeme['tarih']; ?></td>
    </tr>
<?php } ?>

  </tbody>
</table>
</div>

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