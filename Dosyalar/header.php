<?php require('db.php');
$ek=$db->query("select * from ayarlar where ayar_id=1")->fetch(PDO::FETCH_ASSOC);
$reklam=$db->query("select * from reklamlar where id=1")->fetch(PDO::FETCH_ASSOC);
?>

  <meta content="<?php echo $ek['siteaciklama']; ?>" name="description">
  <meta content="<?php echo $ek['siteanahtar']; ?>" name="keywords">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

<!-- reklam -->
  <section id="topbar" class="d-flex align-items-center" style="background: #f1f1f1; color: #000;text-align: center;">
    <div class="container">
<?php echo $reklam['reklam1']; ?>
    </div>
  </section>
<!-- reklam -->

  <section id="topbar" class="d-flex align-items-center" style="background: var(--site-rengi1);">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        &nbsp;
      </div>
      <div class="social-links d-md-flex align-items-center">
        <a href="<?php echo $ek['sitelink']; ?>/aracsat" class="twitter"><i class="bi bi-send"></i> Avtomobil sat</a>
        <a href="<?php echo $ek['sitelink']; ?>/plakasat" class="twitter"><i class="bi bi-send"></i> Qeydiyyat nişanı sat</a>

<? if ($_SESSION['usergirdi'] == ""){ ?>

<a class="twitter" href="<?php echo $ek['sitelink']; ?>/giris"><i class="bi bi-person-circle"></i> Giriş & Qeydiyyat</a>

<? } else {
$uye = $_SESSION['usergirdi'];
$sql = $db->query("SELECT * FROM kullanicilar WHERE id = '$uye'");
$a = $sql->fetch(PDO::FETCH_ASSOC);
$y1 = $a["username"];

?>
<a class="twitter" href="<?php echo $ek['sitelink']; ?>/panel">Profil</a>
<a class="twitter" href="<?php echo $ek['sitelink']; ?>/cik">Çıxış</a>

            <? } ?>


      </div>
    </div>
  </section>

  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="<?php echo $ek['sitelink']; ?>/index" class="logo"><img loading="lazy" src="<?php echo $ek['sitelink']; ?>/yuklenen/<?php echo $ek['resim']; ?>" alt="<?php echo $ek['siteadi']; ?>"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo $ek['sitelink']; ?>/index">Ana Səhifə</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $ek['sitelink']; ?>/hakkimizda">Haqqımızda</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $ek['sitelink']; ?>/hizmetlerimiz">Xidmətlər</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $ek['sitelink']; ?>/araclar">Avtomobil elanları</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $ek['sitelink']; ?>/plakalar">Qeydiyyat nişanı elanları</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $ek['sitelink']; ?>/iletisim">Əlaqə</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->