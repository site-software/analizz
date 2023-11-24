<?php
@session_start();
if (!isset($_SESSION['usergirdi'])) {
echo header('location:giris.php');
}
?>
<?php require('db.php');
$ek=$db->query("select * from ayarlar where ayar_id=1")->fetch(PDO::FETCH_ASSOC);
?>

<?php
 $id = $_GET['id']; 
 $sorgu = $db->query("select * from araclar where id=$id");
 $sorgu->execute();
 if($sorgu->rowCount()){
$odeme = $sorgu->fetch(PDO::FETCH_ASSOC);
}else{
header('Location:aracilan.php');
}
?> 

<!DOCTYPE html>
<html lang="az">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Ödənişi bildirin - <?php echo $ek['siteadi']; ?></title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<?php require('header.php'); ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Ödənişi bildirin</h2>
          <ol>
            <li><a href="index.php">Ana Sayfa</a></li>
            <li>Profil</li>
            <li>Ödənişi bildirin</li>
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
<div class="card-header" style="background: var(--site-rengi1); color: #FFF;">Bank məlumatları</div>
  <div class="card-body">

<p>Salam, Ödəniş üçün bank məlumatlarımız aşağıda verilmişdir.</p>

<?php $bankabilgileri=$db->query("SELECT * FROM bankabilgileri ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC); foreach($bankabilgileri as $banka){ ?>
<div style="border: 1px solid #ddd; padding: 10px; border-radius: 5px; margin-bottom: 10px;"><?php echo $banka['banka']; ?></div>
<?php } ?>

</div>
</div><br />

<div class="card">
<div class="card-header" style="background: var(--site-rengi1); color: #FFF;">Ödənişi bildirin</div>
  <div class="card-body">

<form method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-lg-6" style="padding: 10px;"><label>Ödəyicinin Adı Soyadı <span style="color:var(--site-rengi2)">*</span></label><input class="form-control" name="adsoyad" required></div>
<div class="col-lg-6" style="padding: 10px;"><label>Ödəniş məbləği <span style="color:var(--site-rengi2)">*</span></label>
<input type="text" class="form-control" name="tutar" placeholder="XX AZN/EUR/USD" required>
</div>

<div class="col-lg-12" style="padding: 10px;"><label>Ödəniş qeydi <span style="color:var(--site-rengi2)">*</span></label>
<textarea class="form-control" name="odemenotu" required></textarea>
<input class="form-control" name="ilanid" value="<?php echo $odeme['id']; ?>" hidden>
<input class="form-control" name="kullanici" value="<?php echo $uyeninid; ?>" hidden>
</div>

<div class="col-lg-12" style="padding: 10px;"><button type="submit" name="odemebildir" class="btn btn-success">Ödənişi bildirin <i class="bi bi-arrow-right"></i></button></div>
</div>
</form>
<?php
if (isset($_POST['odemebildir'])) {
$kullanici = $_POST['kullanici'];
$adsoyad = $_POST['adsoyad'];
$tutar = $_POST['tutar'];
$ilanid = $_POST['ilanid'];
$odemenotu = $_POST['odemenotu'];
$tarih = date('d/m/Y');
$durumu = "<span style='background: var(--site-rengi1); color: #FFF; padding: 3px 5px; font-size: 13px; border-radius: 4px;'>gözləyir</span>";
$ellan = "Avtomobil";

$gunce = $db->prepare("insert into odemeler set kullanici=?, adsoyad=?, tutar=?, ilanid=?, odemenotu=?, tarih=?, durumu=?, ellan=?");
$gunce -> execute(array($kullanici,$adsoyad,$tutar,$ilanid,$odemenotu,$tarih,$durumu,$ellan));
if ($gunce) {
echo '<script>swal("Təbriklər!", "Ödəniş məlumatı göndərildi.", "success");</script>';
header("Refresh: 1; url=odemelerim.php");
}else {
  echo '<script>swal("Hata!", "Bir sorun oluştu, tekrar deneyin!", "error");</script>';
  header("Refresh: 1; url=odemelerim.php");
}
}
?>

</div>
</div>

</div>
<div class="col-lg-3"><?php require('panelmenu.php'); ?></div>
</div>

      </div>
    </section>

  </main><!-- End #main -->

<?php require('footer.php'); ?>

</body>

</html>