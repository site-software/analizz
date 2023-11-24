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
  <title>Araç Elanlar - <?php echo $ek['siteadi']; ?></title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
            <li><a href="index.php">Ana Sayfa</a></li>
            <li>Profil</li>
            <li>Araç Elanlar</li>
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
      <th scope="col">ID</th>
      <th scope="col">Marka</th>
      <th scope="col" style="text-align: center;">VİP ?</th>
      <th scope="col" style="text-align: center;">Təsdiq</th>
      <th scope="col">Elan Tarixi</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>

<?php $araclar=$db->query("SELECT * FROM araclar WHERE kullanici='$uyeninid' ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC); foreach($araclar as $arac){ ?>
    <tr>
      <th><?php echo $arac['id']; ?></th>
      <td><?php echo $arac['marka']; ?></td>
      <td style="text-align: center;"><?php echo $arac['vipmi']; ?></td>
      <td style="text-align: center;"><?php echo $arac['onay']; ?></td>
      <td><?php echo $arac['tarih']; ?></td>
      <td style="display: flex;">

<a href="aracvip.php?id=<?php echo $arac['id']; ?>" title="V.I.P">
<button type="submit" class="btn btn-danger"><i class="bi bi-trophy"></i></button>
</a>

<?php if ($arac['onay'] == "1") { ?>
<form method="post" enctype="multipart/form-data">
<button type="submit" name="sguncelle" class="btn btn-success" title="yayından kaldır"><i class="bi bi-eye-slash"></i></button>
<input name="aracid" type="hidden" value="<?php echo $arac['id']; ?>">
</form>
<?php
if (isset($_POST['sguncelle'])) {
$onay = $_POST['onay'];
$aracid = $_POST['aracid'];

$gunce = $db->prepare("update araclar set onay=? where id=?");
$gunce -> execute(array("0",$aracid));
if ($gunce) {
echo '<script>swal("Başarılı!", "Güncellenmiştir.", "success");</script>';
header("Refresh: 1;");
}else {
  echo '<script>swal("Hata!", "Bir sorun oluştu, tekrar deneyin!", "error");</script>';
  header("Refresh: 1;");
}
}
?>
<?php } ?>

      </td>
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