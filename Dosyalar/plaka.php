<?php require('db.php');
$ek=$db->query("select * from ayarlar where ayar_id=1")->fetch(PDO::FETCH_ASSOC);
?>

<?php
$id = $_GET['id']; 
$sorgu = $db->query("select * from plakalar where id=$id");
$sorgu->execute();
if($sorgu->rowCount()){
$plaka = $sorgu->fetch(PDO::FETCH_ASSOC);
}else{
header('Location:index.php');
}
?> 

<!DOCTYPE html>
<html lang="az">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo $plaka['nomresec']; ?>-<?php echo $plaka['nomresecc']; ?><?php echo $plaka['nomreseccc']; ?>-<?php echo $plaka['nomresecyaz']; ?> : <?php echo $ek['siteadi']; ?></title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<?php require('header.php'); ?>

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php echo $plaka['nomresec']; ?>-<?php echo $plaka['nomresecc']; ?><?php echo $plaka['nomreseccc']; ?>-<?php echo $plaka['nomresecyaz']; ?></h2>
          <ol>
            <li><a href="index.php">Anasayfa</a></li>
            <li><?php echo $plaka['nomresec']; ?>-<?php echo $plaka['nomresecc']; ?><?php echo $plaka['nomreseccc']; ?>-<?php echo $plaka['nomresecyaz']; ?></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper" style="text-align: center;">

<div class="plaks" style="max-width: 25rem; height: 4rem; line-height: 3.5rem; font-size: 36px; background-size: 6%; background-position: 10px 20px;">
<?php echo $plaka['nomresec']; ?>-<?php echo $plaka['nomresecc']; ?><?php echo $plaka['nomreseccc']; ?>-<?php echo $plaka['nomresecyaz']; ?>
</div>

<style>
.l-post-top {
    position: relative;
    width: 100%;
    height: auto;
    overflow: hidden;
    padding: 15px;
}
.license_bg {
    background-image: url(https://autonet.az/web/img/nomre_l_bg.png);
    /* width: 450px;
    background-size: 450px;
    height: 96px;
    display: inline-block; */
  width: 425px !important;
    background-size: 325px !important;
    height: 78px !important;
    display: inline-block !important;
    background-repeat: no-repeat !important;
}
.plate_v {
/* position: absolute; */
    font-size: 48px;
    top: 10px;
    left: 225px;
}
.plate_v, .plate_v_big {
    font-family: 'Roboto';
    color: #000;
}
</style>

            </div>
          </div>


          <div class="col-lg-4">

<button type="button" class="btn btn-danger" style="width: 100%; margin-bottom: 15px;"><?php echo $plaka['parasi']; ?> <sup><?php echo $plaka['parasitl']; ?></sup></button>

            <div class="portfolio-info">
              <h3>
<?php
$kt = $plaka['kullanici'];
$sorgu=$db->query("select * from kullanicilar where id=$kt")->fetch(PDO::FETCH_ASSOC);
?>
<?php echo $sorgu['adsoyad']; ?>
              </h3>
              <ul>

<li style="text-align: right;"><strong style="float:left;">Telefon</strong> <?php echo $sorgu['telefon']; ?></li>
<li style="text-align: right;"><strong style="float:left;">Şəhər</strong> <?php echo $sorgu['sehir']; ?></li>
<li style="text-align: right;"><strong style="float:left;">Elanın nömrəsi</strong> 00<?php echo $plaka['id']; ?></li>
<li style="text-align: right;"><strong style="float:left;">Yerləşdirmə tarixi</strong> <?php echo $plaka['tarih']; ?></li>
              </ul>
            </div>

            <div class="portfolio-info">
              <h3>Əlavə məlumat</h3>
              <?php echo $plaka['aciklamasi']; ?>
            </div> 

          </div>

        </div>



      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

<style>

#img-1 {
  width: 100%;
  height: auto;
}

#img-zoomer-box:hover, #img-zoomer-box:active {
  cursor: zoom-in;
  display: block;
}

#img-zoomer-box:hover #img-2, #img-zoomer-box:active #img-2 {
  opacity: 1;
}
#img-2 {
  width: 340px;
  height: 340px;
  background: url(<?php echo $ek['sitelink']; ?>/yuklenen/<?php echo $arac['resim']; ?>) no-repeat #FFF;
  box-shadow: 0 5px 10px -2px rgba(0,0,0,0.3);
  pointer-events: none;
  position: absolute;
  opacity: 0;
  border: 4px solid whitesmoke;
  z-index: 99;
  border-radius: 100%;
  display: block;
  transition: opacity .2s;
}
</style>
<script>
let zoomer = function (){
  document.querySelector('#img-zoomer-box')
    .addEventListener('mousemove', function(e) {

    let original = document.querySelector('#img-1'),
        magnified = document.querySelector('#img-2'),
        style = magnified.style,
        x = e.pageX - this.offsetLeft,
        y = e.pageY - this.offsetTop,
        imgWidth = original.offsetWidth,
        imgHeight = original.offsetHeight,
        xperc = ((x/imgWidth) * 100),
        yperc = ((y/imgHeight) * 100);

    //lets user scroll past right edge of image
    if(x > (.01 * imgWidth)) {
      xperc += (.15 * xperc);
    };

    //lets user scroll past bottom edge of image
    if(y >= (.01 * imgHeight)) {
      yperc += (.15 * yperc);
    };

    style.backgroundPositionX = (xperc - 9) + '%';
    style.backgroundPositionY = (yperc - 9) + '%';

    style.left = (x - 180) + 'px';
    style.top = (y - 180) + 'px';

  }, false);
}();

</script>

<?php require('footer.php'); ?>

</body>

</html>