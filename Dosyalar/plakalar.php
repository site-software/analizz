<?php require('db.php');
$ek=$db->query("select * from ayarlar where ayar_id=1")->fetch(PDO::FETCH_ASSOC);
$reklam=$db->query("select * from reklamlar where id=1")->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="az">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Qeydiyyat nişanı - <?php echo $ek['siteadi']; ?></title>
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
            <li>Qeydiyyat nişanı</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">

<div class="row">
<div class="col-lg-3">

<!-- arama yeri -->
<div class="card">
  <div class="card-header" style="background: var(--site-rengi1); color: #FFF; font-weight: bold;">
    Filtr
  </div>
  <div class="card-body">

<form method="post" action="plakara.php" id="searchform" class="search-form" _lpchecked="1">
<div class="row">
<div class="col-lg-12" style="padding: 10px;">
<label>Nömrə</label>

<select class="form-select" name="nomresec">
<option value="01">01-Abşeron</option>
<option value="02">02-Ağdam</option>
<option value="03">03-Ağdaş</option>
<option value="04">04-Ağcabədi</option>
<option value="05">05-Ağstafa</option>
<option value="06">06-Ağsu</option>
<option value="07">07-Astara</option>
<option value="08">08-Balakən</option>
<option value="09">09-Bərdə</option>
<option value="10">10-Bakı</option>
<option value="11">11-Beyləqan</option>
<option value="12">12-Biləsuvar</option>
<option value="14">14-Cəbrayıl</option>
<option value="15">15-Cəlilabad</option>
<option value="16">16-Daşkəsən</option>
<option value="17">17-Şabran</option>
<option value="18">18-Şirvan</option>
<option value="19">19-Füzuli</option>
<option value="20">20-Gəncə</option>
<option value="21">21-Gədəbəy</option>
<option value="22">22-Goranboy</option>
<option value="23">23-Göyçay</option>
<option value="24">24-Hacıqabul</option>
<option value="25">25-Xanlar</option>
<option value="26">26-Xankəndi</option>
<option value="27">27-Xaçmaz</option>
<option value="28">28-Xocavənd</option>
<option value="29">29-Xızı</option>
<option value="30">30-İmişli</option>
<option value="31">31-İsmayıllı</option>
<option value="32">32-Kəlbəcər</option>
<option value="33">33-Kürdəmir</option>
<option value="34">34-Qax</option>
<option value="35">35-Qazax</option>
<option value="36">36-Qəbələ</option>
<option value="37">37-Qobustan</option>
<option value="38">38-Qusar</option>
<option value="39">39-Qubadlı</option>
<option value="40">40-Quba</option>
<option value="41">41-Laçın</option>
<option value="42">42-Lənkəran</option>
<option value="43">43-Lerik</option>
<option value="44">44-Masallı</option>
<option value="45">45-Mingəçevir</option>
<option value="46">46-Naftalan</option>
<option value="47">47-Neftçala</option>
<option value="48">48-Oğuz</option>
<option value="49">49-Saatlı</option>
<option value="50">50-Sumqayıt</option>
<option value="51">51-Samux</option>
<option value="52">52-Salyan</option>
<option value="53">53-Siyəzən</option>
<option value="54">54-Sabirabad</option>
<option value="55">55-Şəki</option>
<option value="56">56-Şamaxı</option>
<option value="57">57-Şəmkir</option>
<option value="58">58-Şuşa</option>
<option value="59">59-Tərtər</option>
<option value="60">60-Tovuz</option>
<option value="61">61-Ucar</option>
<option value="62">62-Zaqatala</option>
<option value="63">63-Zərdab</option>
<option value="64">64-Zəngilan</option>
<option value="65">65-Yardımlı</option>
<option value="66">66-Yevlax</option>
<option value="67">67-Babək</option>
<option value="68">68-Şərur</option>
<option value="69">69-Ordubad</option>
<option value="70">70-Naxçıvan</option>
<option value="71">71-Şahbuz</option>
<option value="72">72-Culfa</option>
<option value="73">73-Sədərək </option>
<option value="74">74-Kəngərli</option>
<option value="75">75-Naxçıvan</option>
<option value="85">85-Naxçıvan</option>
<option value="90">90-Bakı</option>
<option value="99">99-Azərbaycan</option>
<option value="77">77-Bakı</option>
</select>
</div>

<div class="col-lg-6" style="padding: 10px;">
<select class="form-select" name="nomresecc">
<option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option><option value="F">F</option><option value="G">G</option><option value="H">H</option><option value="J">J</option><option value="K">K</option><option value="L">L</option><option value="M">M</option><option value="N">N</option><option value="O">O</option><option value="P">P</option><option value="R">R</option><option value="S">S</option><option value="T">T</option><option value="U">U</option><option value="V">V</option><option value="W">W</option><option value="X">X</option><option value="Y">Y</option><option value="Z">Z</option>
</select>
</div>
<div class="col-lg-6" style="padding: 10px;">
<select class="form-select" name="nomreseccc" required="">
<option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option><option value="F">F</option><option value="G">G</option><option value="H">H</option><option value="J">J</option><option value="K">K</option><option value="L">L</option><option value="M">M</option><option value="N">N</option><option value="O">O</option><option value="P">P</option><option value="R">R</option><option value="S">S</option><option value="T">T</option><option value="U">U</option><option value="V">V</option><option value="W">W</option><option value="X">X</option><option value="Y">Y</option><option value="Z">Z</option>
</select>
</div>

<div class="col-lg-12" style="padding: 10px;"><input class="form-control" type="text" placeholder="" name="nomresecyaz"></div>

<label>Qiymət</label>
<div class="col-lg-6" style="padding: 10px;"><input class="form-control" type="text" placeholder="Qiymət min" name="fiyat1"></div>
<div class="col-lg-6" style="padding: 10px;"><input class="form-control" type="text" placeholder="Qiymət max" name="fiyat2"></div>

<div class="col-lg-12" style="padding: 10px;">
<div class="d-grid gap-2">
  <button class="btn btn-primary" type="submit">Nəticələri Göstər</button>
</div>
</div>
</div>
</form>

  </div>
</div>
<!-- arama bitti -->

</div>
  
  <div class="col">

    <!-- ======= REKLAM ALANI ======= -->
    <section id="featured-services" class="featured-services" style="text-align: center;padding: 30px 0;">
      <div class="container" data-aos="fade-up">

<?php echo $reklam['reklam7']; ?>

        <div class="section-title">
          <h3><span>VIP</span> ELANLAR</h3>
        </div>

      </div>
    </section><!-- REKLAM ALANI BİTTİ -->

<div class="row">

<?php $plakalar=$db->query("select * from plakalar where onay=1 and vipmi=1")->fetchAll(PDO::FETCH_ASSOC); foreach($plakalar as $plaka){ ?>
<div class="col-md-3">
<div class="card" style="margin-bottom: 15px;">
<a href="plaka.php?id=<?php echo $plaka['id']; ?>">
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

        <div class="section-title">
          <h3><span>NORMAL</span> ELANLAR</h3>
        </div>

<?php $plakalar=$db->query("select * from plakalar where onay=1 ORDER BY rand()")->fetchAll(PDO::FETCH_ASSOC); foreach($plakalar as $plaka){ ?>
<div class="col-md-3">
<div class="card" style="margin-bottom: 15px;">
<a href="plaka.php?id=<?php echo $plaka['id']; ?>">
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
</div>

      </div>
    </section>

  </main><!-- End #main -->

<?php require('footer.php'); ?>

</body>

</html>