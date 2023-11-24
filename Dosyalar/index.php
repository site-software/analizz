<?php require('db.php');
$ek=$db->query("select * from ayarlar where ayar_id=1")->fetch(PDO::FETCH_ASSOC);
$reklam=$db->query("select * from reklamlar where id=1")->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="az">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo $ek['siteadi']; ?></title>
</head>

<body>
<?php require('header.php'); ?>

  <main id="main">

    <!-- ======= REKLAM ALANI ======= -->
    <section id="featured-services" class="featured-services" style="text-align: center;padding: 30px 0;">
      <div class="container" data-aos="fade-up">

<?php echo $reklam['reklam2']; ?>

      </div>
    </section><!-- REKLAM ALANI BİTTİ -->

<section id="featured-services" class="featured-services" style="display:none">
<div class="container">
  <div class="row" style="align-items: center;">
    <div class="col">
      
<h2>Elan Ara</h2>
<div style="display: flex;">
<input class="form-control" name="ara" placeholder="Elanları göster" />
<a href="#" class="btn btn-primary">Ara</a>
</div><br />

    </div>
    <div class="col-lg-5" style="background: url(https://tema2.otogaleriscripti.com/images/banner/korfez-firat-dekorasyon-korfez-firat-dekorasyon-5-hakkimizda-banner-2.jpeg); height: 12rem; background-size: cover; background-repeat: no-repeat; border-radius: 5px;">
    </div>
  </div>
</div>
</section>

    <!-- ======= REKLAM ALANI ======= -->
    <section id="featured-services" class="featured-services" style="text-align: center;padding: 10px 0;">
      <div class="container" data-aos="fade-up">

<?php echo $reklam['reklam3']; ?>

      </div>
    </section><!-- REKLAM ALANI BİTTİ -->

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3><span>VIP</span> ELANLAR</h3>
        </div>

        <div class="row">

<?php $araclar=$db->query("select * from araclar where onay=1 and vipmi=1")->fetchAll(PDO::FETCH_ASSOC); foreach($araclar as $arac){ ?>
<div class="col-md-3">
<div class="former">
<a href="ilan?id=<?php echo $arac['id']; ?>">
<!-- <img loading="lazy" src="<?php echo $ek['sitelink']; ?>/yuklenen/<?php echo $arac['resim']; ?>" alt="<?php echo $ek['siteadi']; ?>" height="190"> //-->
<?php 
$json = $arac['resim'];
$data = json_decode($json, true);
$i = '0';
echo " <img src='".$data['resim'][$i]."'> ";
$i++; ?>

<div class="durum"><?php echo $arac['parasi']; ?> <?php echo $arac['parasitl']; ?></div>
<div class="fiyatil" style="background:var(--site-rengi2)">
<div>
<span><?php echo $arac['marka']; ?></span><br>
<?php echo $arac['model']; ?>
</div>
<div style="text-align:right; line-height:16px;">
<?php echo $arac['ilyil']; ?><br>
<?php echo $arac['suretler']; ?> - <?php echo $arac['yanacaq']; ?>
</div>
</div>
</a>
</div>
</div>
<?php } ?>

<?php $plakalar=$db->query("select * from plakalar where  onay=1 and vipmi=1")->fetchAll(PDO::FETCH_ASSOC); foreach($plakalar as $plaka){ ?>
<div class="col-md-3">
<div class="card" style="height: 12rem; display: flex; flex-direction: column; justify-content: center;">
<a href="plaka?id=<?php echo $plaka['id']; ?>">
<div class="plaks">
<?php echo $plaka['nomresec']; ?>-<?php echo $plaka['nomresecc']; ?><?php echo $plaka['nomreseccc']; ?>-<?php echo $plaka['nomresecyaz']; ?>
</div>
  <div class="card-body">
    <h5 class="card-title" style="text-align: center;color: var(--site-rengi2);"><?php echo $plaka['parasi']; ?> <sup><?php echo $plaka['parasitl']; ?></sup></h5>
    <p class="card-text" style="text-align: center;font-size: 13px;">
<?php
$kt = $plaka['kullanici'];
$sorgu=$db->query("select * from kullanicilar where id=$kt")->fetch(PDO::FETCH_ASSOC);
?>
<?php echo $sorgu['adsoyad']; ?>
    </p>
  </div>
</a> 
</div>
</div>
<?php } ?>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3><span>SON</span> ELANLAR</h3>
        </div>

<div class="row">

<?php $araclar=$db->query("select * from araclar where onay=1 ORDER BY rand()")->fetchAll(PDO::FETCH_ASSOC); foreach($araclar as $arac){ ?>
<div class="col-md-3">
<div class="former">
<a href="ilan?id=<?php echo $arac['id']; ?>">
<!-- <img loading="lazy" src="<?php echo $ek['sitelink']; ?>/yuklenen/<?php echo $arac['resim']; ?>" alt="<?php echo $ek['siteadi']; ?>" height="190"> //-->
<?php 
$json = $arac['resim'];
$data = json_decode($json, true);
$i = '0';
echo " <img src='".$data['resim'][$i]."'> ";
$i++; ?>

<div class="durum"><?php echo $arac['parasi']; ?> <?php echo $arac['parasitl']; ?></div>
<div class="fiyatil">
<div>
<span><?php echo $arac['marka']; ?></span><br>
<?php echo $arac['model']; ?>
</div>
<div style="text-align:right; line-height:16px;">
<?php echo $arac['ilyil']; ?><br>
<?php echo $arac['suretler']; ?> - <?php echo $arac['yanacaq']; ?>
</div>
</div>
</a>
</div>
</div>
<?php } ?>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= REKLAM ALANI ======= -->
    <section id="featured-services" class="featured-services" style="text-align: center;padding: 10px 0;">
      <div class="container" data-aos="fade-up">

<?php echo $reklam['reklam4']; ?>

      </div>
    </section><!-- REKLAM ALANI BİTTİ -->

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3><span>Qeydiyyat</span>  nişanı</h3>
        </div>

<div class="row">

<?php $plakalar=$db->query("select * from plakalar where onay=1 ORDER BY rand()")->fetchAll(PDO::FETCH_ASSOC); foreach($plakalar as $plaka){ ?>
<div class="col-md-3" style="padding: 10px;">
<div class="card">
<a href="plaka?id=<?php echo $plaka['id']; ?>">

<div class="plaks">
<?php echo $plaka['nomresec']; ?>-<?php echo $plaka['nomresecc']; ?><?php echo $plaka['nomreseccc']; ?>-<?php echo $plaka['nomresecyaz']; ?>
</div>

  <div class="card-body">
    <h5 class="card-title" style="text-align: center;color: var(--site-rengi2);"><?php echo $plaka['parasi']; ?> <sup><?php echo $plaka['parasitl']; ?></sup></h5>
    <p class="card-text" style="text-align: center;font-size: 13px;">
<?php
$kt = $plaka['kullanici'];
$sorgu=$db->query("select * from kullanicilar where id=$kt")->fetch(PDO::FETCH_ASSOC);
?>
<?php echo $sorgu['adsoyad']; ?>
    </p>
  </div>
</a> 
</div>
</div>
<?php } ?>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

  </main><!-- End #main -->

<?php require('footer.php'); ?>

</body>

</html>