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
  <title>Qeydiyyat nişanı - <?php echo $ek['siteadi']; ?></title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<?php require('header.php'); ?>

  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Qeydiyyat nişanı</h2>
          <ol>
            <li><a href="index.php">Ana Sayfa</a></li>
            <li>Profil</li>
            <li>Qeydiyyat nişanı</li>
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
      <th scope="col">Qeydiyyat nişanı</th>
      <th scope="col" style="text-align: center;">VİP ?</th>
      <th scope="col" style="text-align: center;">Təsdiq</th>
      <th scope="col">Elan Tarixi</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>

<?php $plakalar=$db->query("SELECT * FROM plakalar WHERE kullanici=$uyeninid ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC); foreach($plakalar as $plaka){ ?>
    <tr>
      <th><?php echo $plaka['id']; ?></th>
      <td><?php echo $plaka['nomresec']; ?> <?php echo $plaka['nomresecc']; ?><?php echo $plaka['nomreseccc']; ?> <?php echo $plaka['nomresecyaz']; ?></td>
      <td style="text-align: center;"><?php echo $plaka['vipmi']; ?></td>
      <td style="text-align: center;"><?php echo $plaka['onay']; ?></td>
      <td><?php echo $plaka['tarih']; ?></td>
      <td style="display: flex;">

<a href="plakavip.php?id=<?php echo $plaka['id']; ?>" title="V.I.P">
<button type="submit" class="btn btn-danger"><i class="bi bi-trophy"></i></button>
</a>

<?php if ($plaka['onay'] == "1") { ?>
<form method="post" enctype="multipart/form-data">
<button type="submit" name="sguncelle" class="btn btn-success" title="yayından kaldır"><i class="bi bi-eye-slash"></i></button>
<input name="plakaid" type="hidden" value="<?php echo $plaka['id']; ?>">
</form>
<?php
if (isset($_POST['sguncelle'])) {
$onay = $_POST['onay'];
$plakaid = $_POST['plakaid'];

$gunce = $db->prepare("update plakalar set onay=? where id=?");
$gunce -> execute(array("0",$plakaid));
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