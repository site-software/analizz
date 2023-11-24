<?php require('db.php');
$ek=$db->query("select * from ayarlar where ayar_id=1")->fetch(PDO::FETCH_ASSOC);
?>

<?php
$id = $_GET['id']; 
$sorgu = $db->query("SELECT * FROM araclar WHERE id=$id");
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

<div class="row">
<?php
require('db.php') ;
$json = $arac['resim'];
$asd = json_decode($json, true);
foreach($asd['resim'] as $resim){
echo "
<div class='col-lg-6' style='padding:10px'><a href='$resim' data-gallery='portfolioGallery' class='portfolio-lightbox preview-link'>
<img src='$resim' style='max-width:100%'>
</a></div>
";
}
?>
</div>

          </div>


          <div class="col-lg-4">

<button type="button" class="btn btn-danger" style="width: 100%; margin-bottom: 15px;"><?php echo $arac['parasi']; ?> <sup><?php echo $arac['parasitl']; ?></sup></button>

            <div class="portfolio-info">
              <h3>
<?php
$kt = $arac['kullanici'];
$sorgu=$db->query("select * from kullanicilar where id='$kt'")->fetch(PDO::FETCH_ASSOC);
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
.slider, 
.slider > div {
    /* Images default to Center Center. Maybe try 'center top'? */
    background-position: center center;
    display: block;
    width: 100%;
    height: 500px;
    /* height: 100vh; *//* If you want fullscreen */
    position: relative;
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #000;
    overflow: hidden;
    -moz-transition: transform .4s;
    -o-transition: transform .4s;
    -webkit-transition: transform .4s;
    transition: transform .4s;
}

.slider > div {
    position: absolute;
}

.slider > i {
    color: #5bbd72;
    position: absolute;
    font-size: 60px;
    margin: 20px;
    top: 40%;
    text-shadow: 0 10px 2px #223422;
    transition: .3s;
    width: 30px;
    padding: 10px 13px;
    background: #fff;
    background: rgba(255, 255, 255, .3);
    cursor: pointer;
    line-height: 0;
    box-sizing: content-box;
    border-radius: 3px;
    z-index: 4;
}

.slider > i svg {
    margin-top: 3px;
}

.slider > .left {
    left: -100px;
}
.slider > .right {
    right: -100px;
}
.slider:hover > .left {
    left: 0;
}
.slider:hover > .right {
    right: 0;
}

.slider > i:hover {
    background:#fff;
    background: rgba(255, 255, 255, .8);
    transform: translateX(-2px);
}

.slider > i.right:hover {
    transform: translateX(2px);
}

.slider > i.right:active,
.slider > i.left:active {
    transform: translateY(1px);
}

.slider:hover > div {
    transform: scale(1.01);
}

.hoverZoomOff:hover > div {
    transform: scale(1);
}

.slider > ul {
    position: absolute;
    bottom: 10px;
    left: 50%;
    z-index: 4;
    padding: 0;
    margin: 0;
    transform: translateX(-50%);
}

.slider > ul > li {
    padding: 0;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    list-style: none;
    float: left;
    margin: 10px 10px 0;
    cursor: pointer;
    border: 1px solid #fff;
    -moz-transition: .3s;
    -o-transition: .3s;
    -webkit-transition: .3s;
    transition: .3s;
}

.slider > ul > .showli {
    background-color: #7EC03D;
    -moz-animation: boing .5s forwards;
    -o-animation: boing .5s forwards;
    -webkit-animation: boing .5s forwards;
    animation: boing .5s forwards;
}

.slider > ul > li:hover {
    background-color: #7EC03D;
}

.slider > .show {
    z-index: 1;
}

.hideDots > ul {
    display: none;
}

.showArrows > .left {
    left: 0;
}

.showArrows > .right {
    right: 0;
}

.titleBar {
    z-index: 2;
    display: inline-block;
    background: rgba(0,0,0,.5);
    position: absolute;
    width: 100%;
    bottom: 0;
    transform: translateY(100%);
    padding: 20px 30px;
    transition: .3s;
    color: #fff;
}

.titleBar * {
    transform: translate(-20px, 30px);
    transition: all 700ms cubic-bezier(0.37, 0.31, 0.2, 0.85) 200ms;
    opacity: 0;
}

.titleBarTop .titleBar * {
    transform: translate(-20px, -30px);
}

.slider:hover .titleBar,
.slider:hover .titleBar * {
    transform: translate(0);
    opacity: 1;
}

.titleBarTop .titleBar {
    top: 0;
    bottom: initial;
    transform: translateY(-100%);
}

.slider > div span {
    display: block;
    background: rgba(0,0,0,.5);
    position: absolute;
    bottom: 0;
    color: #fff;
    text-align: center;
    padding: 0;
    width: 100%;
}


@keyframes boing {
    0% {
        transform: scale(1.2);
    }
    40% {
        transform: scale(.6);
    }
    60% {
        transform: scale(1.2);
    }
    80% {
        transform: scale(.8);
    }
    100% {
        transform: scale(1);
    }
}

/* -------------------------------------- */

#slider2 {
    max-width: 30%;
    margin-right: 20px;
}

.row2Wrap {
    display: flex;
}
</style>
<script>

(function($) {
  "use strict";
  $.fn.sliderResponsive = function(settings) {
    
    var set = $.extend( 
      {
        slidePause: 5000,
        fadeSpeed: 800,
        autoPlay: "on",
        showArrows: "off", 
        hideDots: "off", 
        hoverZoom: "on",
        titleBarTop: "off"
      },
      settings
    ); 
    
    var $slider = $(this);
    var size = $slider.find("> div").length; //number of slides
    var position = 0; // current position of carousal
    var sliderIntervalID; // used to clear autoplay
      
    // Add a Dot for each slide
    $slider.append("<ul></ul>");
    $slider.find("> div").each(function(){
      $slider.find("> ul").append('<li></li>');
    });
      
    // Put .show on the first Slide
    $slider.find("div:first-of-type").addClass("show");
      
    // Put .showLi on the first dot
    $slider.find("li:first-of-type").addClass("showli")

     //fadeout all items except .show
    $slider.find("> div").not(".show").fadeOut();
    
    // If Autoplay is set to 'on' than start it
    if (set.autoPlay === "on") {
        startSlider(); 
    } 
    
    // If showarrows is set to 'on' then don't hide them
    if (set.showArrows === "on") {
        $slider.addClass('showArrows'); 
    }
    
    // If hideDots is set to 'on' then hide them
    if (set.hideDots === "on") {
        $slider.addClass('hideDots'); 
    }
    
    // If hoverZoom is set to 'off' then stop it
    if (set.hoverZoom === "off") {
        $slider.addClass('hoverZoomOff'); 
    }
    
    // If titleBarTop is set to 'on' then move it up
    if (set.titleBarTop === "on") {
        $slider.addClass('titleBarTop'); 
    }

    // function to start auto play
    function startSlider() {
      sliderIntervalID = setInterval(function() {
        nextSlide();
      }, set.slidePause);
    }
    
    // on mouseover stop the autoplay
    $slider.mouseover(function() {
      if (set.autoPlay === "on") {
        clearInterval(sliderIntervalID);
      }
    });
      
    // on mouseout starts the autoplay
    $slider.mouseout(function() {
      if (set.autoPlay === "on") {
        startSlider();
      }
    });

    //on right arrow click
    $slider.find("> .right").click(nextSlide)

    //on left arrow click
    $slider.find("> .left").click(prevSlide);
      
    // Go to next slide
    function nextSlide() {
      position = $slider.find(".show").index() + 1;
      if (position > size - 1) position = 0;
      changeCarousel(position);
    }
    
    // Go to previous slide
    function prevSlide() {
      position = $slider.find(".show").index() - 1;
      if (position < 0) position = size - 1;
      changeCarousel(position);
    }

    //when user clicks slider button
    $slider.find(" > ul > li").click(function() {
      position = $(this).index();
      changeCarousel($(this).index());
    });

    //this changes the image and button selection
    function changeCarousel() {
      $slider.find(".show").removeClass("show").fadeOut();
      $slider
        .find("> div")
        .eq(position)
        .fadeIn(set.fadeSpeed)
        .addClass("show");
      // The Dots
      $slider.find("> ul").find(".showli").removeClass("showli");
      $slider.find("> ul > li").eq(position).addClass("showli");
    }

    return $slider;
  };
})(jQuery);


 
//////////////////////////////////////////////
// Activate each slider - change options
//////////////////////////////////////////////
$(document).ready(function() {
  
  $("#slider1").sliderResponsive({
  // Using default everything
    // slidePause: 5000,
    // fadeSpeed: 800,
    // autoPlay: "on",
    // showArrows: "off", 
    // hideDots: "off", 
    // hoverZoom: "on", 
    // titleBarTop: "off"
  });
  
  $("#slider2").sliderResponsive({
    fadeSpeed: 300,
    autoPlay: "off",
    showArrows: "on",
    hideDots: "on"
  });
  
  $("#slider3").sliderResponsive({
    hoverZoom: "off",
    hideDots: "on"
  });
  
}); 
</script>

<?php require('footer.php'); ?>

</body>
</html>