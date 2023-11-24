<?php require('db.php');
$ek=$db->query("select * from ayarlar where ayar_id=1")->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="az">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Əlaqə - <?php echo $ek['siteadi']; ?></title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<?php require('header.php'); ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Əlaqə</h2>
          <ol>
            <li><a href="index.php">Ana Sayfa</a></li>
            <li>Əlaqə</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">

<div class="row">

<!-- sol taraf -->
<div class="col-lg-6">

<h3>Bizimlə əlaqə</h3>
<div class="ilkutu"><div class="icon"><i class="bi bi-geo-alt"></i></div> <strong>Ünvan</strong> <?php echo $ek['adres']; ?></div>
<div class="ilkutu"><div class="icon"><i class="bi bi-telephone"></i></div> <strong>Telefon</strong> <?php echo $ek['telefon']; ?></div>
<div class="ilkutu"><div class="icon"><i class="bi bi-envelope"></i></div> <strong>E-mail</strong> <?php echo $ek['email']; ?></div>
</div>
<!-- sol bitti -->

<!-- sağ taraf -->
<div class="col-lg-6">

<form method="post" enctype="multipart/form-data">
<input type="text" class="form-control" name="adsoyad" placeholder="Ad Soyad" required><br />
<input type="email" class="form-control" name="email" placeholder="E-mail" required><br />
<input type="text" class="form-control" name="konu" placeholder="Mövzu" required><br />
<textarea class="form-control" name="mesaj" rows="5" placeholder="Mesaj" required></textarea><br />
<button type="submit" name="mesajgonder" class="btn btn-success">Göndər</button>
</form>
<?php
if (isset($_POST['mesajgonder'])) {
$adsoyad = $_POST['adsoyad'];
$email = $_POST['email'];
$konu = $_POST['konu'];
$mesaj = $_POST['mesaj'];
$tarih = date('d/m/Y');

$gunce = $db->prepare("insert into mesajlar set adsoyad=?, email=?, konu=?, mesaj=?, tarih=?");
$gunce -> execute(array($adsoyad,$email,$konu,$mesaj,$tarih));
if ($gunce) {
echo '<script>swal("Başarılı!", "Mesaj göndərildi.", "success");</script>';
header("Refresh: 1; url=iletisim.php");
}else {
  echo '<script>swal("Hata!", "Bir sorun oluştu, tekrar deneyin!", "error");</script>';
  header("Refresh: 1; url=iletisim.php");
}
}
?>

</div>
<!-- sağ bitti -->

</div>

      </div>
    </section>

  </main><!-- End #main -->

<?php require('footer.php'); ?>

</body>
</html>
<style>
.ilkutu {
  display: flex; align-items: center;padding: 10px; margin-bottom: 10px;
}
.ilkutu strong {
  margin-right: 10px;
}
.ilkutu .icon {
  width: 45px;
    height: 45px;
    text-align: center;
    color: var(--site-rengi2);
    line-height: 42px;
    font-size: 24px;
    border-radius: 100px;
    border: 2px dashed var(--site-rengi1);
    margin-right: 15px;
    transition: 0.8s;
}
.ilkutu .icon:hover {
      background: var(--site-rengi2);
    border: 2px;
    color: #FFF;
    line-height: 45px;
    transition: 0.8s;
}
</style>