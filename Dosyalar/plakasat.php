<?php
@session_start();
if (!isset($_SESSION['usergirdi'])) {
echo header('location:giris.php');
}
?>
<?php require('db.php');
$ek=$db->query("select * from ayarlar where ayar_id=1")->fetch(PDO::FETCH_ASSOC);
$reklam=$db->query("select * from reklamlar where id=1")->fetch(PDO::FETCH_ASSOC);
?>
<?php
$uye = $_SESSION["usergirdi"];
$sql = $db->query("SELECT * FROM kullanicilar WHERE email = '$uye'");
$a = $sql->fetch(PDO::FETCH_ASSOC);
$uyeninid = $a["id"];
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

  <main id="main">

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

    <!-- ======= REKLAM ALANI ======= -->
    <section id="featured-services" class="featured-services" style="text-align: center;padding: 30px 0;">
      <div class="container" data-aos="fade-up">

<?php echo $reklam['reklam9']; ?>

      </div>
    </section><!-- REKLAM ALANI BİTTİ -->

    <section class="inner-page">
      <div class="container">

<form method="post" enctype="multipart/form-data">

<div class="row">
<label>Nömrə <span style="color:var(--site-rengi2)">*</span></label>
<div class="col" style="padding: 10px;">
<select class="form-select" name="nomresec" required>
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

<div class="col" style="padding: 10px;">
<select class="form-select" name="nomresecc" required>
<option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option><option value="F">F</option><option value="G">G</option><option value="H">H</option><option value="J">J</option><option value="K">K</option><option value="L">L</option><option value="M">M</option><option value="N">N</option><option value="O">O</option><option value="P">P</option><option value="R">R</option><option value="S">S</option><option value="T">T</option><option value="U">U</option><option value="V">V</option><option value="W">W</option><option value="X">X</option><option value="Y">Y</option><option value="Z">Z</option>
</select>
</div>

<div class="col" style="padding: 10px;">
<select class="form-select" name="nomreseccc" required>
<option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option><option value="F">F</option><option value="G">G</option><option value="H">H</option><option value="J">J</option><option value="K">K</option><option value="L">L</option><option value="M">M</option><option value="N">N</option><option value="O">O</option><option value="P">P</option><option value="R">R</option><option value="S">S</option><option value="T">T</option><option value="U">U</option><option value="V">V</option><option value="W">W</option><option value="X">X</option><option value="Y">Y</option><option value="Z">Z</option>
</select>
</div>

<div class="col" style="padding: 10px;">
<input class="form-control" name="nomresecyaz" required>
</div>
</div>

<!-- -->
<div class="row">
<div class="col" style="padding: 10px;">
<label>Qiyməti <span style="color:var(--site-rengi2)">*</span></label>
<input class="form-control" name="parasi" required>
</div>

<div class="col" style="padding: 10px;">
<label>Qiyməti <span style="color:var(--site-rengi2)">*</span></label>
<select class="form-select" name="parasitl" required>
<option value="AZN">AZN</option>
<option value="USD">USD</option>
<option value="EUR">EUR</option>
</select>
</div>
</div>

<div class="row">
<div class="col" style="padding: 10px;">
<label>Əlavə məlumat <span style="color:var(--site-rengi2)">*</span></label>
<textarea class="form-control" name="aciklamasi" rows="6" required></textarea>

</div>
</div>


<div class="col-lg-12" style="padding: 10px;">
<button type="submit" name="ekarac" class="btn btn-secondary">Davam et</button>
</div>

<input class="form-control" name="kullanici" value="<?php echo $uyeninid; ?>" hidden>


</form>

<?php
if (isset($_POST['ekarac'])) {
$kullanici = $_POST['kullanici'];
$nomresec = $_POST['nomresec'];
$nomresecc = $_POST['nomresecc'];
$nomreseccc = $_POST['nomreseccc'];
$nomresecyaz = $_POST['nomresecyaz'];
$parasi = $_POST['parasi'];
$parasitl = $_POST['parasitl'];
$aciklamasi = $_POST['aciklamasi'];
$tarih = date('d/m/Y');
$vipmi = $_POST['vipmi'];
$onay = $_POST['onay'];

 $gunce = $db->prepare("insert into plakalar set kullanici=?, nomresec=?, nomresecc=?, nomreseccc=?, nomresecyaz=?, parasi=?, parasitl=?, aciklamasi=?, tarih=?, vipmi=?, onay=?");
 $gunce -> execute(array($kullanici,$nomresec,$nomresecc,$nomreseccc,$nomresecyaz,$parasi,$parasitl,$aciklamasi,$tarih,"0","0"));

 if ($gunce) {
echo '<script>swal("Təbriklər!", "Əlavə edilir, Xahiş edirik gözləyin.", "success");</script>';
header('refresh:1; url=plakailan.php');
 }
}
?>

      </div>
    </section>

  </main><!-- End #main -->

<?php require('footer.php'); ?>

</body>

</html>