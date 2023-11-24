<?php require('db.php');
$ek=$db->query("select * from ayarlar where ayar_id=1")->fetch(PDO::FETCH_ASSOC);
?>

<?php
$id = $_GET['id']; 
$sorgu = $db->query("select * from araclar where id=$id");
$sorgu->execute();
if($sorgu->rowCount()){
$arac = $sorgu->fetch(PDO::FETCH_ASSOC);
}else{
header('Location:index.php');
}
?> 

<!DOCTYPE html>
<html lang="az">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo $arac['marka']; ?> <?php echo $arac['model']; ?> - <?php echo $ek['siteadi']; ?></title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<?php require('header.php'); ?>

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php echo $arac['marka']; ?> <?php echo $arac['model']; ?></h2>
          <ol>
            <li><a href="index.php">Anasayfa</a></li>
            <li><?php echo $arac['marka']; ?> <?php echo $arac['model']; ?></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div id="img-zoomer-box">
                  <img id="img-1" src="<?php echo $ek['sitelink']; ?>/yuklenen/<?php echo $arac['resim']; ?>" alt="<?php echo $arac['marka']; ?> <?php echo $arac['model']; ?> - <?php echo $ek['siteadi']; ?>">
                  <div id="img-2"></div>
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>


          <div class="col-lg-4">

<button type="button" class="btn btn-danger" style="width: 100%; margin-bottom: 15px;"><?php echo $arac['parasi']; ?> <sup><?php echo $arac['parasitl']; ?></sup></button>

            <div class="portfolio-info">
              <h3>
<?php
$kt = $arac['kullanici'];
$sorgu=$db->query("select * from kullanicilar where id=$kt")->fetch(PDO::FETCH_ASSOC);
?>
<?php echo $sorgu['adsoyad']; ?>
              </h3>
              <ul>
                <li><strong>Şəhər</strong>: <?php echo $sorgu['sehir']; ?></li>
                <li style="font-size: 20px; text-align: center; color: var(--bs-danger);"><strong><i class="bi bi-telephone-fill"></i></strong> <?php echo $sorgu['telefon']; ?></li>
              </ul>
            </div>

            <div class="portfolio-info">
              <h3>Əlavə məlumat</h3>
              <?php echo $arac['ilanaciklama']; ?>
            </div> 

          </div>

        </div>
<br /><br />
<div class="row">
<div class="col-lg-6">

<div class="portfolio-info">
<ul>
<li style="text-align: right;"><strong style="float:left;">Elanın nömrəsi</strong> 00<?php echo $arac['id']; ?></li>
<li style="text-align: right;"><strong style="float:left;">Yeniləndi</strong> <?php echo $arac['tarih']; ?></li>
<li style="text-align: right;"><strong style="float:left;">Marka</strong> <?php echo $arac['marka']; ?></li>
<li style="text-align: right;"><strong style="float:left;">Model</strong> <?php echo $arac['model']; ?></li>
<li style="text-align: right;"><strong style="float:left;">Buraxılış ili</strong> <?php echo $arac['ilyil']; ?></li>
<li style="text-align: right;"><strong style="float:left;">Ban növü</strong> <?php echo $arac['bannovu']; ?></li>

<li style="text-align: right;"><strong style="float:left;">Rəng</strong> <?php echo $arac['rengi']; ?></li>
<li style="text-align: right;"><strong style="float:left;">Mühərrikin həcmi</strong> <?php echo $arac['muherrikin']; ?></li>
<li style="text-align: right;"><strong style="float:left;">Mühərrikin gücü</strong> <?php echo $arac['mgucu']; ?></li>
<li style="text-align: right;"><strong style="float:left;">Yanacaq növü</strong> <?php echo $arac['yanacaq']; ?></li>
<li style="text-align: right;"><strong style="float:left;">Yürüş</strong> <?php echo $arac['yurus']; ?> km</li>
<li style="text-align: right;"><strong style="float:left;">Sürətlər qutusu</strong> <?php echo $arac['suretler']; ?></li>
<li style="text-align: right;"><strong style="float:left;">Ötürücü</strong> <?php echo $arac['oturucu']; ?></li>
<li style="text-align: right;"><strong style="float:left;">Neçənci sahibisiniz?</strong> <?php echo $arac['sahip']; ?></li>
<li style="text-align: right;"><strong style="float:left;">Yerlərin sayı</strong> <?php echo $arac['yersayisi']; ?></li>
<li style="text-align: right;"><strong style="float:left;">Vəziyyəti</strong> 

<?php 
$json = $arac['vaziyeti'];
$data = json_decode($json, true);
foreach($data['vaziyeti']  as $vaziyeti){
echo "

<div>$vaziyeti</div>

";
}
?>

</li>
<li style="text-align: right;"><strong style="float:left;">Qiymət</strong> 
<?php echo $arac['parasi']; ?> <sup><?php echo $arac['parasitl']; ?></sup>
<span>(<?php echo $arac['aasec']; ?>)</span>
</li>

</ul>
</div>

</div>
<div class="col-lg-6">

<div class="portfolio-info">
  <h3>Avtomobilin təchizatı</h3>
<ul>

<?php 
$json = $arac['altsecenek'];
$data = json_decode($json, true);
foreach($data['ozellik']  as $item){
echo "

<li><i style='color: var(--site-rengi2);' class='bi bi-check2-circle'></i> $item</li>

";
}
?>
</ul>
</div>

<div class="portfolio-info">
  <h3>Paylaşın</h3>

<a style="background: #3f51b5; color: #FFF; padding: 8px 12px; font-size: 20px; border-radius: 5px; margin-right: 10px;" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $ek['sitelink']; ?>/ilan.php?id=<?php echo $arac['id']; ?>" target="_blank"><i class="bi bi-facebook"></i></a>

<a style="background: #00bcd4; color: #FFF; padding: 8px 12px; font-size: 20px; border-radius: 5px; margin-right: 10px;" href="https://twitter.com/share?url=<?php echo $ek['sitelink']; ?>/ilan.php?id=<?php echo $arac['id']; ?>&text=<?php echo $arac['ilanaciklama']; ?>" target="_blank"><i class="bi bi-twitter"></i></a>

<a style="background: #f44336; color: #FFF; padding: 8px 12px; font-size: 20px; border-radius: 5px; margin-right: 10px;" href="http://pinterest.com/pin/create/button/?url=<?php echo $ek['sitelink']; ?>/ilan.php?id=<?php echo $arac['id']; ?>&media=<?php echo $ek['sitelink']; ?>/yuklenen/<?php echo $arac['resim']; ?>&description=<?php echo $arac['ilanaciklama']; ?>" target="_blank"><i class="bi bi-pinterest"></i></a>

<a style="background: var(--bs-green); color: #FFF; padding: 8px 12px; font-size: 20px; border-radius: 5px; margin-right: 10px;" href="whatsapp://send?text=<?php echo $ek['sitelink']; ?>/ilan.php?id=<?php echo $arac['id']; ?>" target="_blank"><i class="bi bi-whatsapp"></i></a>

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