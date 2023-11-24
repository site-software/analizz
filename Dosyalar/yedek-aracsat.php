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
  <title>Yeni Elan - <?php echo $ek['siteadi']; ?></title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<?php require('header.php'); ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Yeni Elan</h2>
          <ol>
            <li><a href="index.php">Ana Sayfa</a></li>
            <li>Yeni Elan</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= REKLAM ALANI ======= -->
    <section id="featured-services" class="featured-services" style="text-align: center;padding: 30px 0;">
      <div class="container" data-aos="fade-up">

<?php echo $reklam['reklam8']; ?>

      </div>
    </section><!-- REKLAM ALANI BİTTİ -->

    <section class="inner-page">
      <div class="container">

<form method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-lg-6" style="padding: 10px;">
<label>Marka <span style="color:var(--site-rengi2)">*</span></label>
<!-- <input class="form-control" name="marka" required> //-->

<script>



function findObj(n, d) { //v4.01
  var p,i,x;
  if(!d) d = document;
  if((p = n.indexOf("?"))>0&&parent.frames.length) {
    d = parent.frames[n.substring(p+1)].document;
    n = n.substring(0,p);
  }
  if(!(x = d[n])&&d.all) x = d.all[n];
  for (i = 0; !x&&i<d.forms.length;i++) x = d.forms[i][n];
  for (i = 0; !x&&d.layers&&i<d.layers.length;i++) x = MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x = d.getElementById(n);
  return x;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}


var ilceler = new Array(new Array('Abarth','124 Spider'),
new Array('Abarth','595'),
new Array('Abarth','695'),
new Array('ABM','911 Targa 4 GTS'),
new Array('ABM','C'),
new Array('ABM','Clipper'),
new Array('ABM','Volcan 150'),
new Array('ACG Cars','Cadillac Escalade'),
new Array('ACG Cars','California Roadster'),
new Array('ACG Cars','Hummer H3'),
new Array('ACG Cars','Roadster E39'),
new Array('ACG Cars','T Sport'),
new Array('Acura','CA6100SH2'),
new Array('Acura','CA6350'),
new Array('Acura','Daily 35C12H'),
new Array('Acura','ILX'),
new Array('Acura','MDX'),
new Array('Acura','RDX'),
new Array('Acura','RSX'),
new Array('Acura','TL'),
new Array('Acura','TSX'),
new Array('Acura','Venture'),
new Array('Acura','ZDX'),
new Array('Alfa Romeo','145'),
new Array('Alfa Romeo','146'),
new Array('Alfa Romeo','147'),
new Array('Alfa Romeo','155'),
new Array('Alfa Romeo','156'),
new Array('Alfa Romeo','159'),
new Array('Alfa Romeo','164'),
new Array('Alfa Romeo','166'),
new Array('Alfa Romeo','33'),
new Array('Alfa Romeo','4C'),
new Array('Alfa Romeo','GT'),
new Array('Alfa Romeo','GTV'),
new Array('Alfa Romeo','Giulia'),
new Array('Alfa Romeo','Giulietta'),
new Array('Alfa Romeo','Mito'),
new Array('Alfa Romeo','Stelvio'),
new Array('Alke','ATX 210E'),
new Array('Alke','XT 320E'),
new Array('AMC','Matador'),
new Array('Aprilia','Dorsoduro 1200 ABS'),
new Array('Aprilia','Leonardo'),
new Array('Aprilia','RS 125'),
new Array('Aprilia','RSV4'),
new Array('Aprilia','SR 300 MAX'),
new Array('Aprilia','SR 50'),
new Array('Aprilia','Shiver 750 ABS'),
new Array('Arctic Cat','ATV XR550 LIMITED'),
new Array('Arctic Cat','Prowler 700'),
new Array('Arctic Cat','TRV 500'),
new Array('Arctic Cat','TRV 700 Limited EPS'),
new Array('Arctic Cat','WILDCAT 700 SPORT LIMITED'),
new Array('Arctic Cat','WILDCAT 700 TRAIL'),
new Array('Arctic Cat','XR 500'),
new Array('Arctic Cat','XR 550'),
new Array('Arctic Cat','XR 550 XT EPS'),
new Array('Arctic Cat','XR 700 XT EPS'),
new Array('Argo','HDI 750'),
new Array('ARO','10'),
new Array('ARO','244'),
new Array('ARO','Spartana'),
new Array('Arora','AR100-62 Kartal'),
new Array('Ashok Leyland','Eagle 816'),
new Array('Asia','Kombi'),
new Array('Asia','Topic'),
new Array('Asia','Towner'),
new Array('Aston Martin','DB11'),
new Array('Aston Martin','DB9'),
new Array('Aston Martin','DBS'),
new Array('Aston Martin','Rapide'),
new Array('Aston Martin','V12 Vantage S'),
new Array('Aston Martin','V8 Vantage S'),
new Array('Aston Martin','Vanquish'),
new Array('Aston Martin','Vantage'),
new Array('ATV','150'),
new Array('ATV','Hummer 250'),
new Array('Audi','100'),
new Array('Audi','200'),
new Array('Audi','80'),
new Array('Audi','90'),
new Array('Audi','A1'),
new Array('Audi','A2'),
new Array('Audi','A3'),
new Array('Audi','A4'),
new Array('Audi','A5'),
new Array('Audi','A5 Sportback'),
new Array('Audi','A7'),
new Array('Audi','A7 Sportback'),
new Array('Audi','A8'),
new Array('Audi','Allroad'),
new Array('Audi','Q2'),
new Array('Audi','Q2 e-tron'),
new Array('Audi','Q3'),
new Array('Audi','Q3 Sportback'),
new Array('Audi','Q4 e-tron'),
new Array('Audi','Q5'),
new Array('Audi','Q5 Sportback'),
new Array('Audi','Q7'),
new Array('Audi','Q8'),
new Array('Audi','R8'),
new Array('Audi','RS Q3'),
new Array('Audi','RS Q3'),
new Array('Audi','RS Q3 Sportback'),
new Array('Audi','RS e-tron GT'),
new Array('Audi','RS3'),
new Array('Audi','RS4'),
new Array('Audi','RS6'),
new Array('Audi','RS7'),
new Array('Audi','S4'),
new Array('Audi','S5'),
new Array('Audi','S6'),
new Array('Audi','S7'),
new Array('Audi','S8'),
new Array('Audi','SQ5'),
new Array('Audi','SQ5 Sportback'),
new Array('Audi','TT'),
new Array('Audi','TT RS'),
new Array('Audi','TTS'),
new Array('Audi','V8'),
new Array('Audi','e-tron'),
new Array('Audi','e-tron GT'),
new Array('Audi','e-tron S'),
new Array('Audi','e-tron S Sportback'),
new Array('Audi','e-tron Sportback'),
new Array('Avia','31'),
new Array('Baic','A113/A115'),
new Array('Baic','A520T/A523T'),
new Array('Baic','BJ 20'),
new Array('Baic','BJ 40'),
new Array('Baic','BJ 80'),
new Array('Baic','D 20'),
new Array('Baic','EC3'),
new Array('Baic','M 20'),
new Array('Baic','M 60'),
new Array('Baic','Senova D50'),
new Array('Baic','Senova D70'),
new Array('Baic','X 25'),
new Array('Baic','X 3'),
new Array('Baic','X 55'),
new Array('Baic','X 65'),
new Array('Baic','X 7'),
new Array('Bajaj','Avenger 220'),
new Array('Bajaj','CT'),
new Array('Bajaj','Discover'),
new Array('Bajaj','Dominar 400'),
new Array('Bajaj','Platina'),
new Array('Bajaj','Pulsar NS200'),
new Array('Bajaj','RS200'),
new Array('Bajaj','V'),
new Array('Baotian','BT49QT-9F'),
new Array('BAW','Fenix BJ1044'),
new Array('BAZ','8031 KC'),
new Array('Belka','V-902'),
new Array('Benelli',' Imperiale 400'),
new Array('Benelli','180S'),
new Array('Benelli','752S'),
new Array('Benelli','BX 505 Enduro'),
new Array('Benelli','BX 570 Motard'),
new Array('Benelli','TnT 1130 Century Racer'),
new Array('Benelli','TnT 899 s'),
new Array('Benelli','Tornado Tre RS'),
new Array('Benelli','Tre 1130K'),
new Array('Bentley','Arnage'),
new Array('Bentley','Azure'),
new Array('Bentley','Bentayga'),
new Array('Bentley','Brooklands'),
new Array('Bentley','Continental Flying Spur'),
new Array('Bentley','Continental GT'),
new Array('Bentley','Flying Spur'),
new Array('Bentley','Mulsanne'),
new Array('Bestune','B70'),
new Array('Bestune','E01'),
new Array('Bestune','NAT'),
new Array('Bestune','T33'),
new Array('Bestune','T55'),
new Array('Bestune','T77'),
new Array('Bestune','T99'),
new Array('BMC','Fatih'),
new Array('BMC','Pro 620'),
new Array('BMC','Pro 827'),
new Array('BMC','Pro 832'),
new Array('BMC','Pro 935'),
new Array('BMW','114'),
new Array('BMW','116'),
new Array('BMW','118'),
new Array('BMW','120'),
new Array('BMW','123'),
new Array('BMW','125'),
new Array('BMW','130'),
new Array('BMW','135'),
new Array('BMW','214'),
new Array('BMW','216'),
new Array('BMW','218'),
new Array('BMW','220'),
new Array('BMW','225'),
new Array('BMW','228'),
new Array('BMW','235'),
new Array('BMW','315'),
new Array('BMW','316'),
new Array('BMW','318'),
new Array('BMW','320'),
new Array('BMW','320 GT'),
new Array('BMW','321'),
new Array('BMW','323'),
new Array('BMW','324'),
new Array('BMW','325'),
new Array('BMW','325 GT'),
new Array('BMW','328'),
new Array('BMW','328 GT'),
new Array('BMW','330'),
new Array('BMW','335'),
new Array('BMW','340'),
new Array('BMW','418'),
new Array('BMW','420'),
new Array('BMW','425'),
new Array('BMW','428'),
new Array('BMW','430'),
new Array('BMW','435'),
new Array('BMW','M440i'),
new Array('BMW','518'),
new Array('BMW','520'),
new Array('BMW','520 GT'),
new Array('BMW','523'),
new Array('BMW','524'),
new Array('BMW','525'),
new Array('BMW','528'),
new Array('BMW','530'),
new Array('BMW','530e'),
new Array('BMW','535'),
new Array('BMW','535 GT'),
new Array('BMW','540'),
new Array('BMW','545'),
new Array('BMW','550'),
new Array('BMW','630'),
new Array('BMW','630 GT'),
new Array('BMW','635'),
new Array('BMW','640'),
new Array('BMW','645'),
new Array('BMW','650'),
new Array('BMW','725'),
new Array('BMW','728'),
new Array('BMW','730'),
new Array('BMW','732'),
new Array('BMW','735'),
new Array('BMW','740'),
new Array('BMW','745'),
new Array('BMW','745Le'),
new Array('BMW','750'),
new Array('BMW','760'),
new Array('BMW','L7'),
new Array('BMW','840'),
new Array('BMW','850'),
new Array('BMW','C 600 Sport'),
new Array('BMW','C 650 GT'),
new Array('BMW','F 650 GS'),
new Array('BMW','F 700 GS'),
new Array('BMW','F 800 GS'),
new Array('BMW','F 800 GT'),
new Array('BMW','F 800 R'),
new Array('BMW','F 800 ST'),
new Array('BMW','G 650 GS'),
new Array('BMW','G 650 GS SERTAO'),
new Array('BMW','HP4'),
new Array('BMW','K 1100 LT'),
new Array('BMW','K 1200 LT'),
new Array('BMW','K 1200 S'),
new Array('BMW','K 1300 R'),
new Array('BMW','K 1300 S'),
new Array('BMW','K 1600 GT'),
new Array('BMW','K 1600 GTL'),
new Array('BMW','R 1200 GS'),
new Array('BMW','R 1200 GS'),
new Array('BMW','R 1200 GS Adventure'),
new Array('BMW','R 1200 R'),
new Array('BMW','R 1200 RT'),
new Array('BMW','R 90 S'),
new Array('BMW','R Nine T'),
new Array('BMW','S 1000 R'),
new Array('BMW','S 1000 RR'),
new Array('BMW','M6'),
new Array('BMW','M760'),
new Array('BMW','M8'),
new Array('BMW','X4 M'),
new Array('BMW','X5 M'),
new Array('BMW','X6 M'),
new Array('BMW','Z3 M'),
new Array('BMW','Z4 M'),
new Array('BMW','M5'),
new Array('BMW','M550'),
new Array('BMW','M4'),
new Array('BMW','M37'),
new Array('BMW','M3'),
new Array('BMW','M340'),
new Array('BMW','M1'),
new Array('BMW','M135'),
new Array('BMW','M140'),
new Array('BMW','M235'),
new Array('BMW','X1'),
new Array('BMW','X2'),
new Array('BMW','X3'),
new Array('BMW','X4'),
new Array('BMW','X5'),
new Array('BMW','X6'),
new Array('BMW','X7'),
new Array('BMW','Z3'),
new Array('BMW','Z4'),
new Array('BMW','Z8'),
new Array('BMW','i3'),
new Array('BMW','i4'),
new Array('BMW','i8'),
new Array('BMW','iX'),
new Array('BMW','iX3'),
new Array('BMW Alpina','B10'),
new Array('BMW Alpina','B11'),
new Array('BMW Alpina','B12'),
new Array('BMW Alpina','B3'),
new Array('BMW Alpina','B4'),
new Array('BMW Alpina','B5'),
new Array('BMW Alpina','B5 S'),
new Array('BMW Alpina','B6'),
new Array('BMW Alpina','B7'),
new Array('BMW Alpina','B8'),
new Array('BMW Alpina','D10'),
new Array('BMW Alpina','D3'),
new Array('BMW Alpina','D5'),
new Array('BMW Alpina','Roadster'),
new Array('Brilliance','A1'),
new Array('Brilliance','BS6'),
new Array('Brilliance','H 230'),
new Array('Brilliance','H 320'),
new Array('Brilliance','H 330'),
new Array('Brilliance','H 350'),
new Array('Brilliance','H 530'),
new Array('Brilliance','M1'),
new Array('Brilliance','M2'),
new Array('Brilliance','M3 Coupe'),
new Array('Brilliance','V3'),
new Array('Brilliance','V5'),
new Array('Brilliance','V7'),
new Array('Buell','1125CR'),
new Array('Buick','Century'),
new Array('Buick','Enclave'),
new Array('Buick','Encore'),
new Array('Buick','Excelle'),
new Array('Buick','GL 8'),
new Array('Buick','LaCrosse'),
new Array('Buick','LeSabre'),
new Array('Buick','Lucerne'),
new Array('Buick','Park Avenue'),
new Array('Buick','Rainier'),
new Array('Buick','Regal'),
new Array('Buick','Rendezvous'),
new Array('Buick','Riviera'),
new Array('Buick','Skylark'),
new Array('Buick','Terraza'),
new Array('Buick','Verano'),
new Array('Bull Motors','Hunter 125'),
new Array('Bull Motors','Quadriciclo 525 125 CC'),
new Array('Bull Motors','BM-S 180'),
new Array('Bull Motors','BM-T 180'),
new Array('Bull Motors','JOG SPIRIT SE'),
new Array('Bull Motors','LIV 125'),
new Array('Bull Motors','LIV 150'),
new Array('Bull Motors','Nova Max'),
new Array('BYD','F0'),
new Array('BYD','F3'),
new Array('BYD','F6'),
new Array('BYD','Flyer'),
new Array('BYD','G3'),
new Array('BYD','L3'),
new Array('BYD','S6'),
new Array('C.Moto','CMR-F7'),
new Array('C.Moto','CMR-F8'),
new Array('C.Moto','CMR-H8'),
new Array('C.Moto','CMR-RZ'),
new Array('C.Moto','CMR-SY'),
new Array('C.Moto','CMR-YZ'),
new Array('Cadillac','ATS'),
new Array('Cadillac','BLS'),
new Array('Cadillac','Brougham'),
new Array('Cadillac','CT6'),
new Array('Cadillac','CTS'),
new Array('Cadillac','CTS-V'),
new Array('Cadillac','Catera'),
new Array('Cadillac','DTS'),
new Array('Cadillac','De Ville'),
new Array('Cadillac','Escalade'),
new Array('Cadillac','Fleetwood'),
new Array('Cadillac','SRX'),
new Array('Cadillac','STS'),
new Array('Cadillac','Seville'),
new Array('Cadillac','XT5'),
new Array('Cadillac','XTS'),
new Array('Can-Am','Commander'),
new Array('Can-Am','Maverick'),
new Array('Can-Am','Renegade'),
new Array('Can-Am','Spyder F3'),
new Array('Can-Am','Spyder RS'),
new Array('Can-Am','Spyder RT'),
new Array('Can-Am','Spyder ST'),
new Array('Celimo','CLM150'),
new Array('CFMOTO','CFORCE 1000 OVERLAND'),
new Array('CFMOTO','CFORCE 400'),
new Array('CFMOTO','CFORCE 450L'),
new Array('CFMOTO','CFORCE 500'),
new Array('CFMOTO','CFORCE 520L'),
new Array('CFMOTO','CFORCE 600'),
new Array('CFMOTO','CFORCE 600 TOURING'),
new Array('CFMOTO','CFORCE 800 XC'),
new Array('CFMOTO','CFORCE-ATV-625'),
new Array('CFMOTO','CFORCE-ATV-800'),
new Array('CFMOTO','150 NK'),
new Array('CFMOTO','250 NK'),
new Array('CFMOTO','250 SR'),
new Array('CFMOTO','300 NK'),
new Array('CFMOTO','300 SR'),
new Array('CFMOTO','650 ADVENTURA'),
new Array('CFMOTO','650 GT'),
new Array('CFMOTO','650 MT'),
new Array('CFMOTO','650 NK'),
new Array('CFMOTO','700 CL-X Heritage'),
new Array('CFMOTO','700 CL-X Sport'),
new Array('CFMOTO','800 MT Sport'),
new Array('CFMOTO','800 MT Touring'),
new Array('CFMOTO','Papio'),
new Array('CFMOTO','UTV-UFORCE-800'),
new Array('CFMOTO','UTV-ZFORCE-800'),
new Array('CFMOTO','ZFORCE 550 Trail'),
new Array('CFMOTO','ZFORCE 800 EX'),
new Array('CFMOTO','ZFORCE 800 Trail'),
new Array('CFMOTO','ZFORCE 950 H.O.EX'),
new Array('CFMOTO','ZFORCE 950 H.O.SPORT'),
new Array('CFMOTO','ZFORCE 950 Sport'),
new Array('Changan','Alsvin'),
new Array('Changan','Alsvin V3'),
new Array('Changan','Alsvin V5'),
new Array('Changan','Alsvin V7'),
new Array('Changan','Benni'),
new Array('Changan','CM8'),
new Array('Changan','CS 15'),
new Array('Changan','CS 35'),
new Array('Changan','CS 55 Plus'),
new Array('Changan','CS 75'),
new Array('Changan','CS 85'),
new Array('Changan','CS 95'),
new Array('Changan','CX 20'),
new Array('Changan','CX 30'),
new Array('Changan','EU-Love'),
new Array('Changan','Eado'),
new Array('Changan','Eado DT'),
new Array('Changan','Eado Plus'),
new Array('Changan','F70'),
new Array('Changan','Honor'),
new Array('Changan','Q20'),
new Array('Changan','Raeton'),
new Array('Changan','Star'),
new Array('Changan','Uni-K'),
new Array('Changan','Uni-T'),
new Array('Chery','A-15 Cowin/Amulet'),
new Array('Chery','A1-13/Kimo'),
new Array('Chery','Arrizo 5'),
new Array('Chery','Arrizo 7'),
new Array('Chery','B11/Eastar'),
new Array('Chery','E5'),
new Array('Chery','Eastar V5'),
new Array('Chery','Fora'),
new Array('Chery','Fulwin 2'),
new Array('Chery','Kimo S12'),
new Array('Chery','Oriental Son'),
new Array('Chery','QQ'),
new Array('Chery','Tiggo'),
new Array('Chery','Tiggo 2'),
new Array('Chery','Tiggo 2 Pro'),
new Array('Chery','Tiggo 3'),
new Array('Chery','Tiggo 4'),
new Array('Chery','Tiggo 4 Pro'),
new Array('Chery','Tiggo 5'),
new Array('Chery','Tiggo 7'),
new Array('Chery','Tiggo 7 Pro '),
new Array('Chery','Tiggo 8'),
new Array('Chery','Tiggo 8 Pro'),
new Array('Chery','Tiggo 8 Pro Max'),
new Array('Chevrolet','Alero'),
new Array('Chevrolet','Astra'),
new Array('Chevrolet','Astro'),
new Array('Chevrolet','Avalanche'),
new Array('Chevrolet','Aveo'),
new Array('Chevrolet','Blazer'),
new Array('Chevrolet','Bolt'),
new Array('Chevrolet','Camaro'),
new Array('Chevrolet','Caprice'),
new Array('Chevrolet','Captiva'),
new Array('Chevrolet','Cavalier'),
new Array('Chevrolet','Celebrity'),
new Array('Chevrolet','Chevy Van'),
new Array('Chevrolet','Cobalt'),
new Array('Chevrolet','Colorado'),
new Array('Chevrolet','Corsica'),
new Array('Chevrolet','Corvette'),
new Array('Chevrolet','Cruze'),
new Array('Chevrolet','Damas'),
new Array('Chevrolet','Epica'),
new Array('Chevrolet','Equinox'),
new Array('Chevrolet','Evanda'),
new Array('Chevrolet','Express'),
new Array('Chevrolet','HHR'),
new Array('Chevrolet','Impala'),
new Array('Chevrolet','Kalos'),
new Array('Chevrolet','Labo'),
new Array('Chevrolet','Lacetti'),
new Array('Chevrolet','Lanos'),
new Array('Chevrolet','Lumina'),
new Array('Chevrolet','Malibu'),
new Array('Chevrolet','Matiz'),
new Array('Chevrolet','Nexia'),
new Array('Chevrolet','Niva'),
new Array('Chevrolet','Nubira'),
new Array('Chevrolet','Orlando'),
new Array('Chevrolet','Rezzo'),
new Array('Chevrolet','S-10'),
new Array('Chevrolet','Silverado'),
new Array('Chevrolet','Sonic'),
new Array('Chevrolet','Spark'),
new Array('Chevrolet','Sprinter'),
new Array('Chevrolet','Suburban'),
new Array('Chevrolet','Tacuma'),
new Array('Chevrolet','Tahoe'),
new Array('Chevrolet','Tracker'),
new Array('Chevrolet','TrailBlazer'),
new Array('Chevrolet','Traverse'),
new Array('Chevrolet','Trax'),
new Array('Chevrolet','Venture'),
new Array('Chevrolet','Viva'),
new Array('Chevrolet','Volt'),
new Array('Chituma','CTM150-7A'),
new Array('Chrysler','200'),
new Array('Chrysler','300'),
new Array('Chrysler','300C'),
new Array('Chrysler','300M'),
new Array('Chrysler','AS 250'),
new Array('Chrysler','Acclaim'),
new Array('Chrysler','Concorde'),
new Array('Chrysler','Crossfire'),
new Array('Chrysler','DeSoto'),
new Array('Chrysler','Grand Voyager'),
new Array('Chrysler','Intrepid'),
new Array('Chrysler','LHS'),
new Array('Chrysler','LeBaron'),
new Array('Chrysler','Neon'),
new Array('Chrysler','New Yorker'),
new Array('Chrysler','PT Cruiser'),
new Array('Chrysler','Pacifica'),
new Array('Chrysler','Prowler'),
new Array('Chrysler','Sebring'),
new Array('Chrysler','Stratus'),
new Array('Chrysler','Town & Country'),
new Array('Chrysler','Vision'),
new Array('Chrysler','Voyager'),
new Array('Citroen','AX Fashion'),
new Array('Citroen','AX Top'),
new Array('Citroen','BX'),
new Array('Citroen','Berlingo'),
new Array('Citroen','Berlingo VP'),
new Array('Citroen','Berlingo VU'),
new Array('Citroen','C-Crosser'),
new Array('Citroen','C-Elysee'),
new Array('Citroen','C-Triomphe'),
new Array('Citroen','C1'),
new Array('Citroen','C15'),
new Array('Citroen','C2'),
new Array('Citroen','C3'),
new Array('Citroen','C3 Aircross'),
new Array('Citroen','C3 Picasso'),
new Array('Citroen','C3 Pluriel'),
new Array('Citroen','C4'),
new Array('Citroen','C4 Aircross'),
new Array('Citroen','C4 Grand Picasso'),
new Array('Citroen','C4 L'),
new Array('Citroen','C4 Picasso'),
new Array('Citroen','C5'),
new Array('Citroen','C5 Aircross'),
new Array('Citroen','C6'),
new Array('Citroen','C8'),
new Array('Citroen','DS3'),
new Array('Citroen','DS4'),
new Array('Citroen','DS5'),
new Array('Citroen','Evasion'),
new Array('Citroen','FVR34Q'),
new Array('Citroen','Jumper'),
new Array('Citroen','Jumpy'),
new Array('Citroen','NPR75K'),
new Array('Citroen','NPR75L'),
new Array('Citroen','Nemo'),
new Array('Citroen','Saxo'),
new Array('Citroen','Visa'),
new Array('Citroen','XM'),
new Array('Citroen','Xantia'),
new Array('Citroen','Xsara'),
new Array('Citroen','Xsara Picasso'),
new Array('Citroen','ZX'),
new Array('CNG Bus','CJQ6110S'),
new Array('Coles','Hydra Truck 45/50 T'),
new Array('CZ','125'),
new Array('Daica','1304'),
new Array('Daica','1310'),
new Array('Daica','1325'),
new Array('Daica','1410'),
new Array('Daica','Dokker'),
new Array('Daica','Duster'),
new Array('Daica','Lodgy'),
new Array('Daica','Logan'),
new Array('Daica','Nova'),
new Array('Daica','Sandero'),
new Array('Dadi','Bliss'),
new Array('Dadi','City Leading'),
new Array('Dadi','City Steed'),
new Array('Dadi','Shuttle'),
new Array('Dadi','Smoothing'),
new Array('Dadi','Unisonous'),
new Array('Daewo','Alpheon'),
new Array('Daewo','Arcadia'),
new Array('Daewo','BC 212'),
new Array('Daewo','BH117 '),
new Array('Daewo','BS090'),
new Array('Daewo','Brouqham'),
new Array('Daewo','Chairman'),
new Array('Daewo','Damas'),
new Array('Daewo','Espero'),
new Array('Daewo','Evanda'),
new Array('Daewo','FX 212'),
new Array('Daewo','G2X'),
new Array('Daewo','G2X'),
new Array('Daewo','Istana'),
new Array('Daewo','Kalos'),
new Array('Daewo','Korando'),
new Array('Daewo','Labo'),
new Array('Daewo','Lacetti'),
new Array('Daewo','Lanos'),
new Array('Daewo','Leganza'),
new Array('Daewo','Lublin '),
new Array('Daewo','Magnus'),
new Array('Daewo','Matiz'),
new Array('Daewo','Musso'),
new Array('Daewo','Nexia'),
new Array('Daewo','Novus'),
new Array('Daewo','Nubira'),
new Array('Daewo','Polonez'),
new Array('Daewo','Prince'),
new Array('Daewo','Racer'),
new Array('Daewo','Rezzo'),
new Array('Daewo','Statesman'),
new Array('Daewo','Super Salon'),
new Array('Daewo','Tacuma'),
new Array('Daewo','Tico'),
new Array('Daewo','Tosca'),
new Array('Daewo','Veritas'),
new Array('Daewo','Winstorm'),
new Array('DAF','105 XF'),
new Array('DAF','45.222'),
new Array('DAF','65 CF'),
new Array('DAF','75 CF'),
new Array('DAF','85 CF'),
new Array('DAF','95'),
new Array('DAF','95 XF'),
new Array('DAF','CF 290'),
new Array('DAF','Hall'),
new Array('DAF','LF 45.180'),
new Array('DAF','LF 55.220'),
new Array('DAF','XF 460 FT'),
new Array('Daihatsu','Altis'),
new Array('Daihatsu','Applause'),
new Array('Daihatsu','Atrai'),
new Array('Daihatsu','Be-qo'),
new Array('Daihatsu','Boon'),
new Array('Daihatsu','Coo'),
new Array('Daihatsu','Copen'),
new Array('Daihatsu','Cuore'),
new Array('Daihatsu','Delta Bus'),
new Array('Daihatsu','Esse'),
new Array('Daihatsu','Feroza'),
new Array('Daihatsu','Gran Max'),
new Array('Daihatsu','Materia'),
new Array('Daihatsu','Max'),
new Array('Daihatsu','Mira'),
new Array('Daihatsu','Mira Cocoa'),
new Array('Daihatsu','Move'),
new Array('Daihatsu','Move Conte'),
new Array('Daihatsu','Opti'),
new Array('Daihatsu','Perodua Viva'),
new Array('Daihatsu','Rocky'),
new Array('Daihatsu','Sirion'),
new Array('Daihatsu','Sonica'),
new Array('Daihatsu','Storia'),
new Array('Daihatsu','Tanto'),
new Array('Daihatsu','Tanto Exe'),
new Array('Daihatsu','Taruna'),
new Array('Daihatsu','Terios'),
new Array('Daihatsu','Trevis'),
new Array('Daihatsu','Xenia'),
new Array('Daihatsu','YRV'),
new Array('Daihatsu','Zebra'),
new Array('Dali','DLQ6750EA3'),
new Array('Datsun','mi-DO'),
new Array('Datsun','on-DO'),
new Array('Dayun','AX100'),
new Array('Dayun','DY 125-3'),
new Array('Dayun','DY 125-8B'),
new Array('Dayun','DY125-7'),
new Array('Dayun','DY125-B'),
new Array('Dayun','DY125T-6'),
new Array('Dayun','DY150-12'),
new Array('Dayun','DY150GY'),
new Array('Dayun','DY48QT'),
new Array('Derways','Cowboy'),
new Array('Dnepr','11'),
new Array('Dnepr','Dnepr'),
new Array('Dnepr','KS-5473'),
new Array('Dodge','Caliber'),
new Array('Dodge','Caravan'),
new Array('Dodge','Challenger'),
new Array('Dodge','Charger'),
new Array('Dodge','Coronet'),
new Array('Dodge','Dakota'),
new Array('Dodge','Dart'),
new Array('Dodge','Durango'),
new Array('Dodge','Dynasty'),
new Array('Dodge','Intrepid'),
new Array('Dodge','Journey'),
new Array('Dodge','Magnum'),
new Array('Dodge','Monaco'),
new Array('Dodge','Neon'),
new Array('Dodge','Nitro'),
new Array('Dodge','Ram'),
new Array('Dodge','Spirit'),
new Array('Dodge','Sprinter'),
new Array('Dodge','Stratus'),
new Array('Dodge','Viper'),
new Array('DongFeng','DF 4038'),
new Array('DongFeng','DF 4438'),
new Array('DongFeng','DF25'),
new Array('DongFeng','DFL3310A13'),
new Array('DongFeng','EQ 220'),
new Array('DongFeng','EQ 5021'),
new Array('DongFeng','EQ1020TF'),
new Array('DongFeng','EQ5081JSQG'),
new Array('DongFeng','EQ5168JSQL'),
new Array('DongFeng','EQ5254JSQG'),
new Array('DongFeng','Fengshen A30'),
new Array('DongFeng','Fengshen A60'),
new Array('DongFeng','Fengshen AX7'),
new Array('DongFeng','Fengshen H30'),
new Array('DongFeng','Fengshen S30'),
new Array('DongFeng','MPV'),
new Array('DongFeng','Rich'),
new Array('Ducati','1100 EVO'),
new Array('Ducati','1100 EVO Diesel'),
new Array('Ducati','1100 EVO SP'),
new Array('Ducati','1199 Panigale'),
new Array('Ducati','1199 Panigale S'),
new Array('Ducati','1200 S Pikes Peak'),
new Array('Ducati','1200 S Sport'),
new Array('Ducati','1200 S Touring'),
new Array('Ducati','1299 Panigale'),
new Array('Ducati','696'),
new Array('Ducati','848 EVO'),
new Array('Ducati','848 EVO Corse'),
new Array('Ducati','899 Panigale'),
new Array('Ducati','Diavel'),
new Array('Ducati','Diavel Carbon'),
new Array('Ducati','Diavel Cromo'),
new Array('Ducati','Hypermotard 1100 EVO SP'),
new Array('Ducati','Hypermotard 796'),
new Array('Ducati','Malaquti'),
new Array('Ducati','Monster 1200'),
new Array('Ducati','Monster 400'),
new Array('Ducati','Monster 796'),
new Array('Ducati','Multistrada 1200 S'),
new Array('Ducati','Panigale V2'),
new Array('Ducati','Panigale V4'),
new Array('Ducati','Panigale V4 S'),
new Array('Ducati','Panigale V4 SP'),
new Array('Ducati','Scrambler'),
new Array('Ducati','Streetfighter 1098 S'),
new Array('Ducati','Streetfighter 848'),
new Array('Entegra Coach','Accolade'),
new Array('Entegra Coach','Anthem'),
new Array('Entegra Coach','Aspire'),
new Array('Entegra Coach','Cornerstone'),
new Array('Entegra Coach','Esteem'),
new Array('Entegra Coach','Odyssey'),
new Array('Entegra Coach','Qwest'),
new Array('Entegra Coach','Reatta'),
new Array('Entegra Coach','Reatta XL'),
new Array('Entegra Coach','Vision'),
new Array('Entegra Coach','Vision XL'),
new Array('ErAZ','762'),
new Array('ERF','ES8'),
new Array('Estrima','Estrima'),
new Array('Eurotex','Cyclone'),
new Array('Eurotex','Jazz'),
new Array('FAUN','ATF 100G-5'),
new Array('FAUN','ATF 30-2'),
new Array('FAUN','ATF 30-2L'),
new Array('FAUN','ATF 65 G-4'),
new Array('FAUN','ATF 70-4'),
new Array('FAUN','HONGQI HS7'),
new Array('FAW','CA102105'),
new Array('FAW','1021'),
new Array('FAW','Bestune B30'),
new Array('FAW','Bestune T33'),
new Array('FAW','Bestune T77'),
new Array('FAW','Bestune T99'),
new Array('FAW','Besturn B50'),
new Array('FAW','Besturn B70'),
new Array('FAW','Besturn B90'),
new Array('FAW','Besturn X80'),
new Array('FAW','CA5013'),
new Array('FAW','CA7238AT'),
new Array('FAW','CA7100F'),
new Array('FAW','TJ6341'),
new Array('FAW','Vita'),
new Array('FAW','Vita A'),
new Array('FAW','Vita C1'),
new Array('FAW','Vita N3'),
new Array('FAW','CA6100SH2'),
new Array('FAW','CA6105SQ1'),
new Array('FAW','CA6950SH2'),
new Array('FAW','XQ6102SH'),
new Array('FAW','XQ6120SH2'),
new Array('FAW','XQ6820SH2'),
new Array('FAW','XQ6900SH'),
new Array('FAW','15.180 FL'),
new Array('FAW','16.240 FD'),
new Array('FAW','16.240 FL FLS'),
new Array('FAW','16.240 FT'),
new Array('FAW','28.280 FD'),
new Array('FAW','28.330 FL'),
new Array('FAW','28.380 FT'),
new Array('FAW','33.330 FC'),
new Array('FAW','35.340 FC'),
new Array('FAW','35.340 FD'),
new Array('FAW','7.130 FL'),
new Array('FAW','9.130 FL'),
new Array('FAW','9.130FT FD'),
new Array('FAW','CA6121CH2'),
new Array('FAW','CA6122CH2'),
new Array('FAW','CA6660CQ2'),
new Array('FAW','CA6750CQ2'),
new Array('FAW','CA6860CQ2'),
new Array('FAW','CA6870CH2'),
new Array('FAW','CA6901CQ2'),
new Array('FAW','CA6930CH2'),
new Array('FAW','CDL6606C2'),
new Array('FAW','CDL6700AE'),
new Array('FAW','Hongqi E-HS9'),
new Array('FAW','Hongqi H9'),
new Array('FAW','Hongqi HQ3'),
new Array('FAW','Hongqi HS5'),
new Array('FAW','Hongqi HS7'),
new Array('FAW','J6'),
new Array('FAW','J6P dumper 6x4'),
new Array('FAW','J6P dumper 8x4'),
new Array('FAW','Jiaxing TJ6341'),
new Array('FAW','Jinn'),
new Array('FAW','CA6350'),
new Array('FAW','CA6360'),
new Array('FAW','CA6361'),
new Array('FAW','CA6371'),
new Array('FAW','Oley'),
new Array('FAW','S80'),
new Array('FAW','CA1021P6LU2E'),
new Array('FAW','CA1021Z6'),
new Array('FAW','CA1022'),
new Array('FAW','CA6480P6E'),
new Array('FAW','Tiger VH'),
new Array('FAW','Tiger VH-L'),
new Array('FAW','Tiger VN'),
new Array('FAW','Tiger VR '),
new Array('FAW','XQ6103YH2'),
new Array('FAW','XQ6112TH2'),
new Array('FAW','XQ6961T1'),
new Array('FAW','V2'),
new Array('FAW','V5'),
new Array('FAW','Vela'),
new Array('FAW','Vizi'),
new Array('FAW','Xiali'),
new Array('Ferrari','360 Challange Stradale'),
new Array('Ferrari','360 GT'),
new Array('Ferrari','360 Modena'),
new Array('Ferrari','430 Scuderia'),
new Array('Ferrari','456M'),
new Array('Ferrari','458 Italia'),
new Array('Ferrari','458 Speciale'),
new Array('Ferrari','458 Spider'),
new Array('Ferrari','550 Barchetta Pininfarina'),
new Array('Ferrari','550 Maranello'),
new Array('Ferrari','575 GTC'),
new Array('Ferrari','575M Maranello'),
new Array('Ferrari','575M Superamerica'),
new Array('Ferrari','599 GTB Fiorano'),
new Array('Ferrari','599 GTO'),
new Array('Ferrari','612 Scaglietti'),
new Array('Ferrari','California'),
new Array('Ferrari','Enzo'),
new Array('Ferrari','F12 Berlinetta'),
new Array('Ferrari','F355'),
new Array('Ferrari','F360'),
new Array('Ferrari','F430'),
new Array('Ferrari','F430 Challenge'),
new Array('Ferrari','F430 Spider'),
new Array('Ferrari','F50 Spider'),
new Array('Ferrari','FF'),
new Array('Ferrari','LaFerrari'),
new Array('Ferrari','Scuderia Spider'),
new Array('Fiat','124 Spider'),
new Array('Fiat','131'),
new Array('Fiat','500'),
new Array('Fiat','500C'),
new Array('Fiat','500L'),
new Array('Fiat','500X'),
new Array('Fiat','600'),
new Array('Fiat','Albea'),
new Array('Fiat','Barchetta'),
new Array('Fiat','Brava'),
new Array('Fiat','Bravo'),
new Array('Fiat','Cinquecento'),
new Array('Fiat','Cordoba'),
new Array('Fiat','Coupe'),
new Array('Fiat','Croma'),
new Array('Fiat','Doblo'),
new Array('Fiat','Ducato'),
new Array('Fiat','Egea'),
new Array('Fiat','Fiorino'),
new Array('Fiat','Freemont'),
new Array('Fiat','Fullback'),
new Array('Fiat','Grande Punto'),
new Array('Fiat','Lancia'),
new Array('Fiat','Linea'),
new Array('Fiat','Multipla'),
new Array('Fiat','Palio'),
new Array('Fiat','Panda'),
new Array('Fiat','Punto'),
new Array('Fiat','Qubo'),
new Array('Fiat','Scudo'),
new Array('Fiat','Sedici'),
new Array('Fiat','Seicento'),
new Array('Fiat','Siena'),
new Array('Fiat','Stilo'),
new Array('Fiat','Tempra'),
new Array('Fiat','Tipo'),
new Array('Fiat','Ulysse'),
new Array('Fiat','Uno'),
new Array('Foday','NHQ'),
new Array('Ford','Aerostar'),
new Array('Ford','Bronco'),
new Array('Ford','Bronco Sport'),
new Array('Ford','C-Max'),
new Array('Ford','Capri'),
new Array('Ford','Cargo'),
new Array('Ford','Contour'),
new Array('Ford','Cougar'),
new Array('Ford','Courier'),
new Array('Ford','Crown Victoria'),
new Array('Ford','Econoline'),
new Array('Ford','Ecosport'),
new Array('Ford','Edge'),
new Array('Ford','Escape'),
new Array('Ford','Escort'),
new Array('Ford','Excursion'),
new Array('Ford','Expedition'),
new Array('Ford','Explorer'),
new Array('Ford','F-150'),
new Array('Ford','F-450'),
new Array('Ford','Fiesta'),
new Array('Ford','Five Hundred'),
new Array('Ford','Flex'),
new Array('Ford','Focus'),
new Array('Ford','Freestyle'),
new Array('Ford','Fusion'),
new Array('Ford','Galaxie 500'),
new Array('Ford','Galaxy'),
new Array('Ford','Granada'),
new Array('Ford','Grand C-Max'),
new Array('Ford','Hobby'),
new Array('Ford','Ka'),
new Array('Ford','Kuga'),
new Array('Ford','Lincoln'),
new Array('Ford','Maverick'),
new Array('Ford','Mercury'),
new Array('Ford','Model A'),
new Array('Ford','Mondeo'),
new Array('Ford','Mustang'),
new Array('Ford','Mustang Mach-E'),
new Array('Ford','Probe'),
new Array('Ford','Puma'),
new Array('Ford','Ranger'),
new Array('Ford','S-max'),
new Array('Ford','Scorpio'),
new Array('Ford','Sierra'),
new Array('Ford','Taunus'),
new Array('Ford','Taurus'),
new Array('Ford','Telstar'),
new Array('Ford','Tempo'),
new Array('Ford','Thunderbird'),
new Array('Ford','Tourneo Connect'),
new Array('Ford','Tourneo Custom'),
new Array('Ford','Transit'),
new Array('Ford','Windstar'),
new Array('Foton','Aumark 1039'),
new Array('Foton','Aumark BJ 1051'),
new Array('Foton','Aumark TX'),
new Array('Foton','BJ 5026'),
new Array('Foton','BJ1027'),
new Array('Foton','BJ3045'),
new Array('Foton','BJ3258DLPJB'),
new Array('Foton','BJ5163VKCGG'),
new Array('Foton','BJ6486B1DBA-2'),
new Array('Foton','Forland'),
new Array('Foton','Midi'),
new Array('Foton','Ollin'),
new Array('Foton','SF2310'),
new Array('Foton','SUP'),
new Array('Foton','Saga'),
new Array('Foton','Taurus'),
new Array('Foton','Tunland'),
new Array('Foton','View'),
new Array('Freightliner','Century'),
new Array('Gabro','125 RS-2'),
new Array('Gabro','125 RZ-6'),
new Array('Gabro','ATV'),
new Array('Gabro','Chopper'),
new Array('Gabro','Dirt'),
new Array('Gabro','GM-50GS'),
new Array('Gabro','JJ125T-17'),
new Array('Gabro','JJ50QT-17'),
new Array('Gabro','Sport CBR 150R'),
new Array('Gabro','Street'),
new Array('Gabro','ZERO250-RZ'),
new Array('GAC','GA 3'),
new Array('GAC','GA 5'),
new Array('GAC','GA 8'),
new Array('GAC','GS 3'),
new Array('GAC','GS 4'),
new Array('GAC','GS 5'),
new Array('GAC','GS 8'),
new Array('GAZ','12 ЗИМ'),
new Array('GAZ','14'),
new Array('GAZ','221717'),
new Array('GAZ','24'),
new Array('GAZ','24-02'),
new Array('GAZ','24-10'),
new Array('GAZ','24-102'),
new Array('GAZ','2705'),
new Array('GAZ','2705-757'),
new Array('GAZ','2705-764'),
new Array('GAZ','2705-777'),
new Array('GAZ','27057'),
new Array('GAZ','27527-745'),
new Array('GAZ','2757'),
new Array('GAZ','27903'),
new Array('GAZ','3102'),
new Array('GAZ','31029'),
new Array('GAZ','3110'),
new Array('GAZ','31105'),
new Array('GAZ','3111'),
new Array('GAZ','32212'),
new Array('GAZ','322173'),
new Array('GAZ','3302-288'),
new Array('GAZ','3302-744'),
new Array('GAZ','330200'),
new Array('GAZ','330202-740'),
new Array('GAZ','33021'),
new Array('GAZ','33023-744'),
new Array('GAZ','330232-744'),
new Array('GAZ','33027'),
new Array('GAZ','33027-745'),
new Array('GAZ','3307'),
new Array('GAZ','3308'),
new Array('GAZ','3309-352'),
new Array('GAZ','33098-837'),
new Array('GAZ','37053C'),
new Array('GAZ','37170'),
new Array('GAZ','51'),
new Array('GAZ','52'),
new Array('GAZ','53'),
new Array('GAZ','63'),
new Array('GAZ','66'),
new Array('GAZ','67'),
new Array('GAZ','69'),
new Array('GAZ','A21R22-03'),
new Array('GAZ','AA'),
new Array('GAZ','Biznes 27527'),
new Array('GAZ','Biznes 330273'),
new Array('GAZ','C41R13'),
new Array('GAZ','C41R92'),
new Array('GAZ','C45R02'),
new Array('GAZ','Gazon C41R33'),
new Array('GAZ','KO-440'),
new Array('GAZ','M-1'),
new Array('GAZ','M-12'),
new Array('GAZ','M-13A'),
new Array('GAZ','M-20 Pobeda'),
new Array('GAZ','M-21'),
new Array('GAZ','M-22'),
new Array('GAZ','NEXT A68R52 CITY LINE'),
new Array('GAZ','Next'),
new Array('GAZ','Next A21R22-30'),
new Array('GAZ','Next A21R32-30'),
new Array('GAZ','Next A21R32-30'),
new Array('GAZ','Next A22R22-30'),
new Array('GAZ','Next A22R32'),
new Array('GAZ','Next A23R22 '),
new Array('GAZ','Next A31R22'),
new Array('GAZ','Next A32R32-40'),
new Array('GAZ','Next A64R42-10'),
new Array('GAZ','Next A65R32-40'),
new Array('GAZ','Next A65R52'),
new Array('GAZ','Next C41RB3'),
new Array('GAZ','Next Sidney A32R32-40'),
new Array('GAZ','Next Titan A65R32-40'),
new Array('GAZ','Next А31R32'),
new Array('GAZ','SAZ-3507'),
new Array('GAZ','Sadko Next C41A23'),
new Array('GAZ','Siber'),
new Array('GAZ','Sobol'),
new Array('GAZ','Vector Next'),
new Array('Geely','Atlas Pro'),
new Array('Geely','Azkarra'),
new Array('Geely','Binray'),
new Array('Geely','Bo Rui GE'),
new Array('Geely','CD'),
new Array('Geely','CK'),
new Array('Geely','Coolray'),
new Array('Geely','EC 7'),
new Array('Geely','Emgrand'),
new Array('Geely','Emgrand 7 (RV)'),
new Array('Geely','Emgrand EC7'),
new Array('Geely','Emgrand EC8'),
new Array('Geely','Emgrand EV'),
new Array('Geely','Emgrand GS'),
new Array('Geely','Emgrand GT'),
new Array('Geely','Emgrand X3'),
new Array('Geely','Emgrand X7'),
new Array('Geely','Englon SC3'),
new Array('Geely','Englon SC5-RV'),
new Array('Geely','Englon SC6'),
new Array('Geely','Englon SC7'),
new Array('Geely','Englon SX7'),
new Array('Geely','Englon TX4'),
new Array('Geely','FC'),
new Array('Geely','FC/Vision'),
new Array('Geely','GC 5'),
new Array('Geely','GC 6'),
new Array('Geely','GC 7'),
new Array('Geely','GX 2'),
new Array('Geely','GX 7'),
new Array('Geely','Hao Yue'),
new Array('Geely','ICON'),
new Array('Geely','Jia Ji'),
new Array('Geely','LC Cross/GX2'),
new Array('Geely','LC/Panda'),
new Array('Geely','Lucky'),
new Array('Geely','MK'),
new Array('Geely','MK Cross'),
new Array('Geely','Okavango'),
new Array('Geely','Otaka'),
new Array('Geely','Otaka/CK'),
new Array('Geely','TX4'),
new Array('Geely','Tugella'),
new Array('Geely','X7 Sport'),
new Array('Geely','Xing Yue'),
new Array('GEM Cars','E2'),
new Array('GEM Cars','E4'),
new Array('GEM Cars','E6'),
new Array('GEM Cars','EL'),
new Array('GEM Cars','EL XD'),
new Array('GEM Cars','EM'),
new Array('Genesis','G70'),
new Array('Genesis','G80'),
new Array('Genesis','G90'),
new Array('Genesis','GV70'),
new Array('Genesis','GV80'),
new Array('Geon','Issen'),
new Array('Geon','Tossa'),
new Array('GIBBS','Quadski'),
new Array('GIBBS','Quadski XL'),
new Array('Gilera','Earth'),
new Array('Gilera','Nordwest 600'),
new Array('Ginaf','M4243'),
new Array('Ginaf','X5250'),
new Array('Ginaf','X5450'),
new Array('GMC','Acadia'),
new Array('GMC','Envoy'),
new Array('GMC','Jimmy'),
new Array('GMC','Safari'),
new Array('GMC','Savana'),
new Array('GMC','Sierra'),
new Array('GMC','markSuburbanamodel'),
new Array('GMC','Terrain'),
new Array('GMC','Yukon'),
new Array('Gonow','Alter'),
new Array('Gonow','Aoosed G5'),
new Array('Gonow','G6380'),
new Array('Gonow','GX6'),
new Array('Gonow','Jetstar GA 6380'),
new Array('Gonow','Jetstar GA 6460'),
new Array('Gonow','Jetstar GA 6490'),
new Array('Gonow','Jetstar/GS50'),
new Array('Gonow','Troy'),
new Array('Gonow','Victor'),
new Array('Gonow','WAY M1'),
new Array('Gonow','WAY M2'),
new Array('Gonow','WAY V1/Cargo'),
new Array('Great Wall','Coolbear'),
new Array('Great Wall','Cowry'),
new Array('Great Wall','Deer'),
new Array('Great Wall','Florid'),
new Array('Great Wall','Hover'),
new Array('Great Wall','Hover H3'),
new Array('Great Wall','Hover H5'),
new Array('Great Wall','Hover H6'),
new Array('Great Wall','Hover M2'),
new Array('Great Wall','Hover M4'),
new Array('Great Wall','Pegasus'),
new Array('Great Wall','Peri'),
new Array('Great Wall','Phenom'),
new Array('Great Wall','SUV G5'),
new Array('Great Wall','Safe'),
new Array('Great Wall','Sailor'),
new Array('Great Wall','Sing'),
new Array('Great Wall','Socool'),
new Array('Great Wall','Voleex C10'),
new Array('Great Wall','Voleex C20R'),
new Array('Great Wall','Voleex C30'),
new Array('Great Wall','Voleex C50'),
new Array('Great Wall','Wingle'),
new Array('Hafei','Brio'),
new Array('Hafei','Lobo'),
new Array('Hafei','Minz'),
new Array('Hafei','Princip'),
new Array('Hafei','Simbo'),
new Array('Haima','3'),
new Array('Haima','6P'),
new Array('Haima','7'),
new Array('Haima','7X'),
new Array('Haima','8S'),
new Array('Haima','E3'),
new Array('Haima','Family F5'),
new Array('Haima','M3'),
new Array('Haima','S5'),
new Array('Haima','S5 Young'),
new Array('Haima','S7'),
new Array('Hamtaz','150'),
new Array('Haojue','HJ100T-7C'),
new Array('Haojue','HJ110-2C'),
new Array('Haojue','HJ110-2D'),
new Array('Haojue','HJ110-6'),
new Array('Haojue','HJ125-11A'),
new Array('Haojue','HJ125-16C'),
new Array('Haojue','HJ125-18'),
new Array('Haojue','HJ125-19'),
new Array('Haojue','HJ125-20'),
new Array('Haojue','HJ125-2E'),
new Array('Haojue','HJ125-7D'),
new Array('Haojue','HJ125-7E'),
new Array('Haojue','HJ125-7F'),
new Array('Haojue','HJ125-8C'),
new Array('Haojue','HJ125-8E'),
new Array('Haojue','HJ125K-5'),
new Array('Haojue','HJ125T-10'),
new Array('Haojue','HJ125T-10A'),
new Array('Haojue','HJ125T-10E'),
new Array('Haojue','HJ125T-16C'),
new Array('Haojue','HJ125T-16D'),
new Array('Haojue','HJ125T-18'),
new Array('Haojue','HJ125T-18A'),
new Array('Haojue','HJ125T-9C'),
new Array('Haojue','HJ150-11'),
new Array('Haojue','HJ150-11A'),
new Array('Haojue','HJ150-2C'),
new Array('Haojue','HJ150-3A'),
new Array('Haojue','HJ150-3C'),
new Array('Haojue','HJ150-6A'),
new Array('Haojue','HJ150-6C'),
new Array('Haojue','HJ150-6D'),
new Array('Haojue','HJ150-7'),
new Array('Haojue','HJ150-8'),
new Array('Haojue','HJ150-9'),
new Array('Haojue','HJ150-9A'),
new Array('Haojue','KA150'),
new Array('Haojue','TR150S'),
new Array('Haojue','TZ125'),
new Array('Haojue','VN100'),
new Array('Harley-Davidson','CVO Convertible'),
new Array('Harley-Davidson','Dyna Fat Bob'),
new Array('Harley-Davidson','FLD Dyna Switchback'),
new Array('Harley-Davidson','FLHR Road King'),
new Array('Harley-Davidson','FLHX Street Glide'),
new Array('Harley-Davidson','FLSTN Softail Deluxe'),
new Array('Harley-Davidson','FXDB Dyna StreetBob'),
new Array('Harley-Davidson','FXDR'),
new Array('Harley-Davidson','FXDWG Dyna Wide Glide'),
new Array('Harley-Davidson','Freewheeler'),
new Array('Harley-Davidson','Night Rod'),
new Array('Harley-Davidson','Softail Breakout'),
new Array('Harley-Davidson','Softail Deluxe'),
new Array('Harley-Davidson','Softail Fat Boy'),
new Array('Harley-Davidson','Sportster Custom 1200'),
new Array('Harley-Davidson','Sportster Forty Eight'),
new Array('Harley-Davidson','Sportster Roadster'),
new Array('Harley-Davidson','Sportster Seventy Two'),
new Array('Harley-Davidson','Sportster SuperLow XL883L'),
new Array('Harley-Davidson','Street Rod'),
new Array('Harley-Davidson','Touring Electra Glide'),
new Array('Harley-Davidson','Touring Road King'),
new Array('Harley-Davidson','Touring Street Glide'),
new Array('Harley-Davidson','V Rod Muscle'),
new Array('Harley-Davidson','VRSCF V-Rod Muscle'),
new Array('Harley-Davidson','XL 1200 NS'),
new Array('Harley-Davidson','XL 1200 T'),
new Array('Harley-Davidson','XL883N Sportster Iron 883'),
new Array('Harley-Davidson','XR1200X'),
new Array('Haval','F7'),
new Array('Haval','F7x'),
new Array('Haval','H1'),
new Array('Haval','H2'),
new Array('Haval','H6'),
new Array('Haval','H6 Sport'),
new Array('Haval','H7'),
new Array('Haval','H8'),
new Array('Haval','H9'),
new Array('Haval','Jolion'),
new Array('Hisun','HS1000-UTV'),
new Array('Hisun','HS250-UTV-sport'),
new Array('Hisun','HX250-UTV-2'),
new Array('Hisun','Sector 250'),
new Array('Honda','Accord'),
new Array('Honda','CR-V'),
new Array('Honda','CR-Z'),
new Array('Honda','City'),
new Array('Honda','Civic'),
new Array('Honda','Clarity'),
new Array('Honda','Concerto'),
new Array('Honda','Crosstour'),
new Array('Honda','Element'),
new Array('Honda','Fit'),
new Array('Honda','HR-V'),
new Array('Honda','1000 RR'),
new Array('Honda','Bali'),
new Array('Honda','CB 1300'),
new Array('Honda','CB 400'),
new Array('Honda','CB 750'),
new Array('Honda','CB 900'),
new Array('Honda','CBF 1000'),
new Array('Honda','CBF 250'),
new Array('Honda','CBF 500'),
new Array('Honda','CBF 600'),
new Array('Honda','CBR 1000'),
new Array('Honda','CBR 1100'),
new Array('Honda','CBR 125'),
new Array('Honda','CBR 150'),
new Array('Honda','CBR 250'),
new Array('Honda','CBR 600'),
new Array('Honda','CBR 900'),
new Array('Honda','CG 125'),
new Array('Honda','CMX 500'),
new Array('Honda','CRF 250'),
new Array('Honda','CRF 450'),
new Array('Honda','CTX700ND'),
new Array('Honda','Dio AF'),
new Array('Honda','Dio AF 35'),
new Array('Honda','Dio Fit'),
new Array('Honda','Dio SR'),
new Array('Honda','F6 C  Valkyrie'),
new Array('Honda','FJS 400'),
new Array('Honda','FJS 600'),
new Array('Honda','FMX 650 Supermoto'),
new Array('Honda','Fulland'),
new Array('Honda','Giorno'),
new Array('Honda','Giorno Crea'),
new Array('Honda','GLX 1800'),
new Array('Honda','Gold Wing F6B'),
new Array('Honda','Gold Wing GL 1500'),
new Array('Honda','NSR 125'),
new Array('Honda','NT 700'),
new Array('Honda','Shadow 1100'),
new Array('Honda','Shadow 400'),
new Array('Honda','Spacy'),
new Array('Honda','Steed 400'),
new Array('Honda','Today'),
new Array('Honda','V-twin 600'),
new Array('Honda','VFR 1200'),
new Array('Honda','VT 1300 CR'),
new Array('Honda','VT 1300 CS'),
new Array('Honda','VT 1300 CT'),
new Array('Honda','VT 1300 CX'),
new Array('Honda','VT-400'),
new Array('Honda','VTX 1300 R'),
new Array('Honda','VTX 1800 F2'),
new Array('Honda','XL 1000 V Varadero'),
new Array('Honda','Insight'),
new Array('Honda','Jazz'),
new Array('Honda','Legend'),
new Array('Honda','Logo'),
new Array('Honda','MR-V'),
new Array('Honda','Monkey z50'),
new Array('Honda','Odyssey'),
new Array('Honda','Passport'),
new Array('Honda','Pilot'),
new Array('Honda','Prelude'),
new Array('Honda','Ridgeline'),
new Array('Honda','S 2000'),
new Array('Honda','Shuttle'),
new Array('Honda','Stream'),
new Array('Honda','X4'),
new Array('Hongqi','E-HS9'),
new Array('Hongqi','H5'),
new Array('Hongqi','H7'),
new Array('Hongqi','H9'),
new Array('Hongqi','HS5'),
new Array('Hongqi','HS7'),
new Array('HOWO','3241V'),
new Array('HOWO','371'),
new Array('HOWO','A7'),
new Array('HOWO','Shacman F2000'),
new Array('HOWO','Sinotruk'),
new Array('Hummer','H1'),
new Array('Hummer','H2'),
new Array('Hummer','H3'),
new Array('Huzhou','Daixi Zhenhua'),
new Array('Hyosung','150cc'),
new Array('Hyosung','Aquila'),
new Array('Hyundai','Accent'),
new Array('Hyundai','Aerotown'),
new Array('Hyundai','Atos'),
new Array('Hyundai','Azera'),
new Array('Hyundai','Chorus'),
new Array('Hyundai','County'),
new Array('Hyundai','Coupe'),
new Array('Hyundai','Creta'),
new Array('Hyundai','Elantra'),
new Array('Hyundai','Equus'),
new Array('Hyundai','Excel'),
new Array('Hyundai','Galloper'),
new Array('Hyundai','Genesis'),
new Array('Hyundai','Genesis Coupe'),
new Array('Hyundai','Getz'),
new Array('Hyundai','Gold'),
new Array('Hyundai','Grand Santa Fe'),
new Array('Hyundai','Grandeur'),
new Array('Hyundai','H 100'),
new Array('Hyundai','H 200'),
new Array('Hyundai','H 250'),
new Array('Hyundai','H 350'),
new Array('Hyundai','H-1'),
new Array('Hyundai','HD-120'),
new Array('Hyundai','HD-270'),
new Array('Hyundai','HD-35'),
new Array('Hyundai','HD-370'),
new Array('Hyundai','HD-45'),
new Array('Hyundai','HD-65'),
new Array('Hyundai','HD-6M'),
new Array('Hyundai','HD-72'),
new Array('Hyundai','HD-78'),
new Array('Hyundai','IONIQ Electric'),
new Array('Hyundai','IONIQ Hybrid'),
new Array('Hyundai','IONIQ Plug-in-Hybrid'),
new Array('Hyundai','Kona'),
new Array('Hyundai','Marcia'),
new Array('Hyundai','Matrix'),
new Array('Hyundai','Palisade'),
new Array('Hyundai','Porter'),
new Array('Hyundai','Santa Fe'),
new Array('Hyundai','Solaris'),
new Array('Hyundai','Sonata'),
new Array('Hyundai','Staria'),
new Array('Hyundai','Super Aero City'),
new Array('Hyundai','Terracan'),
new Array('Hyundai','Tiburon'),
new Array('Hyundai','Trago'),
new Array('Hyundai','Trajet'),
new Array('Hyundai','Tucson'),
new Array('Hyundai','Veloster'),
new Array('Hyundai','Venue'),
new Array('Hyundai','Veracruz'),
new Array('Hyundai','XG'),
new Array('Hyundai','i10'),
new Array('Hyundai','i20'),
new Array('Hyundai','i30'),
new Array('Hyundai','i40'),
new Array('Hyundai','ix20'),
new Array('Hyundai','ix35'),
new Array('Hyundai','ix55'),
new Array('IFA','W50'),
new Array('IJ','2125'),
new Array('IJ','2126 Oda'),
new Array('IJ','21261 "Fabula"'),
new Array('IJ','252110'),
new Array('IJ','2715'),
new Array('IJ','2717'),
new Array('IJ','2717-022'),
new Array('IJ','27175'),
new Array('IJ','49'),
new Array('IJ','57'),
new Array('IJ','6.113-05 "Unker"'),
new Array('IJ','6.902'),
new Array('IJ','Planeta 2'),
new Array('IJ','Planeta 3'),
new Array('IJ','Planeta 4'),
new Array('IJ','Planeta 5'),
new Array('IJ','Planeta 6'),
new Array('IJ','Planeta 7'),
new Array('IJ','Upiter 4'),
new Array('IJ','Upiter 5'),
new Array('Ikarus','211'),
new Array('Ikarus','256'),
new Array('Ikarus','365'),
new Array('Infiniti','EX25'),
new Array('Infiniti','EX35'),
new Array('Infiniti','EX37'),
new Array('Infiniti','FX35'),
new Array('Infiniti','FX37'),
new Array('Infiniti','FX45'),
new Array('Infiniti','FX50'),
new Array('Infiniti','G20'),
new Array('Infiniti','G25'),
new Array('Infiniti','G35'),
new Array('Infiniti','G35x'),
new Array('Infiniti','G37'),
new Array('Infiniti','G37S'),
new Array('Infiniti','I30'),
new Array('Infiniti','I35'),
new Array('Infiniti','JX35'),
new Array('Infiniti','M56'),
new Array('Infiniti','M45'),
new Array('Infiniti','M375'),
new Array('Infiniti','M35'),
new Array('Infiniti','M25'),
new Array('Infiniti','Q30'),
new Array('Infiniti','Q45'),
new Array('Infiniti','Q50'),
new Array('Infiniti','Q50S'),
new Array('Infiniti','Q60'),
new Array('Infiniti','Q70'),
new Array('Infiniti','Q70S'),
new Array('Infiniti','QX4'),
new Array('Iran Khodro','Azsamand'),
new Array('Iran Khodro','Paykan'),
new Array('Iran Khodro','Pazhan'),
new Array('Iran Khodro','Runna'),
new Array('Iran Khodro','Sepand PK'),
new Array('Iran Khodro','Soren'),
new Array('Isuzu','Axiom'),
new Array('Isuzu','Bogdan'),
new Array('Isuzu','Citybus'),
new Array('Isuzu','D-Max'),
new Array('Isuzu','ELF 250'),
new Array('Isuzu','Ecobus'),
new Array('Isuzu','FSR 90 L'),
new Array('Isuzu','FTR 33 M'),
new Array('Isuzu','FVR 34 Q'),
new Array('Isuzu','Forward'),
new Array('Isuzu','HC 40'),
new Array('Isuzu','Impulse'),
new Array('Isuzu','MD 22 B'),
new Array('Isuzu','MD 27'),
new Array('Isuzu','MR 77 HCX'),
new Array('Isuzu','NHR 55 E'),
new Array('Isuzu','NKR 55 E'),
new Array('Isuzu','NKR 55 L'),
new Array('Isuzu','NKR 66 E'),
new Array('Isuzu','NMR 77 H'),
new Array('Isuzu','NMR 85'),
new Array('Isuzu','NMR 85 H'),
new Array('Isuzu','NP 37'),
new Array('Isuzu','NPR'),
new Array('Isuzu','NPR 400'),
new Array('Isuzu','NPR 58'),
new Array('Isuzu','NPR 66 L'),
new Array('Isuzu','NPR 66 P'),
new Array('Isuzu','NPR 71'),
new Array('Isuzu','NPR 75'),
new Array('Isuzu','NPR 75 K'),
new Array('Isuzu','NPR 75 L'),
new Array('Isuzu','NPR75L-K'),
new Array('Isuzu','NQR 71 PL'),
new Array('Isuzu','NQR 75'),
new Array('Isuzu','NRP'),
new Array('Isuzu','Novo Lux'),
new Array('Isuzu','Novo Ultra'),
new Array('Isuzu','Oasis'),
new Array('Isuzu','Reward'),
new Array('Isuzu','Rodeo'),
new Array('Isuzu','Roybus'),
new Array('Isuzu','Trooper'),
new Array('Isuzu','Turkuaz'),
new Array('Isuzu','Urban'),
new Array('ItalCar','Attiva 2.4 (48V)'),
new Array('ItalCar','Attiva 2CF.4 (48V)'),
new Array('ItalCar','Attiva 2L.4 (48V)'),
new Array('ItalCar','Attiva 4.4 (48V)'),
new Array('ItalCar','Attiva 4L.4 (48V)'),
new Array('ItalCar','Attiva 4L.4 XTR (48V)'),
new Array('ItalCar','Attiva 6L.4 (48V)'),
new Array('ItalCar','Attiva 6L.4 XTR (48V)'),
new Array('ItalCar','Attiva 6LC.4 (48V)'),
new Array('ItalCar','Attiva 8L.4 (48V)'),
new Array('ItalCar','Attiva 8L.4 XTR (48V)'),
new Array('ItalCar','Attiva Ambulanza (48V)'),
new Array('ItalCar','Attiva M2'),
new Array('ItalCar','Attiva NEV C2C.4'),
new Array('ItalCar','Attiva NEV C2G.4'),
new Array('ItalCar','Attiva NEV C2S'),
new Array('ItalCar','Attiva NEV C2S (police)'),
new Array('ItalCar','Attiva NEV L6S.4'),
new Array('ItalCar','Attiva Shuttle.4 (48V)'),
new Array('ItalCar','Attiva Shuttle.4 (72V)'),
new Array('ItalCar','Attiva XTR.4 (48V)'),
new Array('ItalCar','Fleet Golf (48V)'),
new Array('Ivanovec','KC-6476'),
new Array('Iveco','ML130E18'),
new Array('Iveco','180E23'),
new Array('Iveco','300-25'),
new Array('Iveco','35 S11'),
new Array('Iveco','35C13V'),
new Array('Iveco','35C15'),
new Array('Iveco','35S10'),
new Array('Iveco','65C18'),
new Array('Iveco','Astra HD8'),
new Array('Iveco','Daily 30-8'),
new Array('Iveco','Daily 35C12H'),
new Array('Iveco','Daily 35C15VH'),
new Array('Iveco','EuroStar'),
new Array('Iveco','EuroTech'),
new Array('Iveco','Eurocargo'),
new Array('Iveco','Eurotrakker Cursor'),
new Array('Iveco','Eurotrakker MP 190'),
new Array('Iveco','Ford'),
new Array('Iveco','MP340E35HB'),
new Array('Iveco','Otoyol'),
new Array('Iveco','Power Daily A50.13'),
new Array('Iveco','Safari'),
new Array('Iveco','Stralis'),
new Array('Iveco','Trakker'),
new Array('JAC','A0'),
new Array('JAC','HFC 1040K'),
new Array('JAC','HFC 3090K'),
new Array('JAC','HFC1020'),
new Array('JAC','HFC1045KRD'),
new Array('JAC','HFC1061K5P'),
new Array('JAC','HFC1083K'),
new Array('JAC','HFC3072'),
new Array('JAC','HFC5020K'),
new Array('JAC','HFC5061'),
new Array('JAC','HK6818K'),
new Array('JAC','J2'),
new Array('JAC','J3'),
new Array('JAC','J5'),
new Array('JAC','J6'),
new Array('JAC','J7'),
new Array('JAC','JS3'),
new Array('JAC','JS4'),
new Array('JAC','JS8'),
new Array('JAC','M1'),
new Array('JAC','M209'),
new Array('JAC','M4'),
new Array('JAC','M5'),
new Array('JAC','Refine'),
new Array('JAC','Rein'),
new Array('JAC','S5'),
new Array('JAC','Sunray'),
new Array('JAC','T6'),
new Array('JAC','T8'),
new Array('JAC','Tojoy RS Cross'),
new Array('JAC','X200'),
new Array('Jaguar','E-Pace'),
new Array('Jaguar','F-Pace'),
new Array('Jaguar','F-Pace R'),
new Array('Jaguar','F-Type'),
new Array('Jaguar','F-Type R'),
new Array('Jaguar','F-Type S'),
new Array('Jaguar','S-Type'),
new Array('Jaguar','X-Type'),
new Array('Jaguar','XE'),
new Array('Jaguar','XF'),
new Array('Jaguar','XFR'),
new Array('Jaguar','XJ'),
new Array('Jaguar','XJ L'),
new Array('Jaguar','XJ40'),
new Array('Jaguar','XJ6'),
new Array('Jaguar','XJ8'),
new Array('Jaguar','XK'),
new Array('Jaguar','XK8'),
new Array('Jaguar','XKR'),
new Array('Jaguar','XKR-S'),
new Array('Jawa','250'),
new Array('Jawa','350'),
new Array('Jeep','Cherokee'),
new Array('Jeep','Commander'),
new Array('Jeep','Compass'),
new Array('Jeep','Gladiator'),
new Array('Jeep','Grand Cherokee'),
new Array('Jeep','Liberty'),
new Array('Jeep','Patriot'),
new Array('Jeep','Renegade'),
new Array('Jeep','Wrangler'),
new Array('Jetour','X70'),
new Array('Jetour','X70 Coupe'),
new Array('Jetour','X70 PLUS'),
new Array('Jetour','X70M'),
new Array('Jetour','X70S'),
new Array('Jetour','X70S-EV'),
new Array('Jetour','X90'),
new Array('Jetour','X90 PLUS'),
new Array('Jetour','X95'),
new Array('Jiajue','N10'),
new Array('Jiajue','R11'),
new Array('Jiajue','R15'),
new Array('Jianshe','XTZ 150'),
new Array('Jianshe','C8'),
new Array('Jianshe','C9'),
new Array('Jianshe','CRF'),
new Array('Jianshe','CRF230'),
new Array('Jianshe','Crypton'),
new Array('Jianshe','JS125-7F'),
new Array('Jianshe','JS150-31'),
new Array('Jianshe','YBR-K'),
new Array('Jinan','ATV 250cc'),
new Array('Jinan','ATV150cc'),
new Array('Jinan','Dirt Bike50/110cc'),
new Array('Jinan','Utility ATV'),
new Array('Jinbei','H2L'),
new Array('Jinbei','H2S'),
new Array('Jinbei','Haise H2'),
new Array('Jinbei','S50'),
new Array('JMC','JX1062'),
new Array('JMC','JX5066'),
new Array('JMC','N601'),
new Array('JMC','N900'),
new Array('Jonway','YY50QT-20'),
new Array('Jonway','YY50QT-21B'),
new Array('Jonway','YY50QT-21D'),
new Array('Jonway','YY50QT-6'),
new Array('KAIYI','E5'),
new Array('KAIYI','X3'),
new Array('KAIYI','X3 PRO'),
new Array('KamAz','4308'),
new Array('KamAz','43101'),
new Array('KamAz','43118'),
new Array('KamAz','43253'),
new Array('KamAz','44108'),
new Array('KamAz','5320'),
new Array('KamAz','53202'),
new Array('KamAz','53212'),
new Array('KamAz','53213'),
new Array('KamAz','53215'),
new Array('KamAz','53228'),
new Array('KamAz','53229'),
new Array('KamAz','5410'),
new Array('KamAz','541000'),
new Array('KamAz','54112'),
new Array('KamAz','54115'),
new Array('KamAz','5460'),
new Array('KamAz','5490'),
new Array('KamAz','5511'),
new Array('KamAz','55111'),
new Array('KamAz','55114'),
new Array('KamAz','55115'),
new Array('KamAz','6460'),
new Array('KamAz','65115'),
new Array('KamAz','65117'),
new Array('KamAz','6520'),
new Array('KamAz','65201'),
new Array('KamAz','65222'),
new Array('KAvZ','3270'),
new Array('Kawasaki','1400 GTR'),
new Array('Kawasaki','ER6F'),
new Array('Kawasaki','ER6N'),
new Array('Kawasaki','Jet Ski Ultra 260X'),
new Array('Kawasaki','Jet Ski Ultra 300X'),
new Array('Kawasaki','KVF650 4x4'),
new Array('Kawasaki','KVF750 4x4'),
new Array('Kawasaki','KX 250F'),
new Array('Kawasaki','KX 450F'),
new Array('Kawasaki','KX 65'),
new Array('Kawasaki','KX 85'),
new Array('Kawasaki','Ninja 1000'),
new Array('Kawasaki','Ninja 300'),
new Array('Kawasaki','Ninja 400'),
new Array('Kawasaki','Ninja 650'),
new Array('Kawasaki','Ninja ZX-10R'),
new Array('Kawasaki','Ninja ZX-14'),
new Array('Kawasaki','VN 1600 Mean Streak'),
new Array('Kawasaki','VN 1700 Vulcan'),
new Array('Kawasaki','VN 900 Vulcan'),
new Array('Kawasaki','Versys 1000'),
new Array('Kawasaki','Versys 650'),
new Array('Kawasaki','Z100'),
new Array('Kawasaki','Z1000'),
new Array('Kawasaki','ZX-6R'),
new Array('Kawasaki','ZXR 400'),
new Array('Kawasaki','ZZR 1100'),
new Array('Kawasaki','ZZR 1400'),
new Array('Kayo','A150'),
new Array('Kayo','A180'),
new Array('Kayo','A200'),
new Array('Kayo','AT110'),
new Array('Kayo','AY70'),
new Array('Kayo','BASIC YX125'),
new Array('Kayo','BASIC YX140'),
new Array('Kayo','Big Bull AU200'),
new Array('Kayo','Bull 2B AU150'),
new Array('Kayo','Bull 3C AU180'),
new Array('Kayo','CLASSIC YX125EA'),
new Array('Kayo','CLASSIC YX140EM'),
new Array('Kayo','EVOLUTION YX125EM'),
new Array('Kayo','EVOLUTION YX150'),
new Array('Kayo','EVOLUTION ZS190EM'),
new Array('Kayo','K1 250 MX'),
new Array('Kayo','K2 ENDURO'),
new Array('Kayo','K4 ENDURO'),
new Array('Kayo','K6-L ENDURO'),
new Array('Kayo','KMB'),
new Array('Kayo','KT250 ENDURO'),
new Array('Kayo','KT50'),
new Array('Kayo','MINI KMB'),
new Array('Kayo','MINI YX125EM'),
new Array('Kayo','MINIGP'),
new Array('Kayo','MOTARD'),
new Array('Kayo','Mini Bull AU110'),
new Array('Kayo','T1 ENDURO'),
new Array('Kayo','T1 ROAD'),
new Array('Kayo','T2 ENDURO'),
new Array('Kayo','T2 ROAD'),
new Array('Kayo','T2-G 250 ENDURO'),
new Array('Kayo','T4 ENDURO'),
new Array('Kayo','TD125'),
new Array('Kayo','TS90'),
new Array('Kayo','TSD110'),
new Array('Kayo','TT140'),
new Array('Kayo','TT190R'),
new Array('Kayo','Tor A200'),
new Array('Kayo','Tor-3C A300'),
new Array('Kayo','e-KMB'),
new Array('KAZ','4540'),
new Array('KAZ','606'),
new Array('KAZ','608'),
new Array('Keeway','Superlight 125cc'),
new Array('Keeway','Superlight 150cc'),
new Array('Keeway','Superlight 200'),
new Array('Khazar','LX'),
new Array('Khazar','SD'),
new Array('Kia','Avella'),
new Array('Kia','Besta'),
new Array('Kia','Bongo'),
new Array('Kia','Cadenza'),
new Array('Kia','Capital'),
new Array('Kia','Carens'),
new Array('Kia','Carnival'),
new Array('Kia','Ceed'),
new Array('Kia','Ceed GT'),
new Array('Kia','Ceed SW'),
new Array('Kia','Cerato'),
new Array('Kia','Cerato Koup'),
new Array('Kia','Clarus'),
new Array('Kia','Credos'),
new Array('Kia','EV6'),
new Array('Kia','Granbird'),
new Array('Kia','Joice'),
new Array('Kia','K2700'),
new Array('Kia','K3'),
new Array('Kia','K5'),
new Array('Kia','K7'),
new Array('Kia','K9'),
new Array('Kia','K900'),
new Array('Kia','Magentis'),
new Array('Kia','Mohave'),
new Array('Kia','Morning'),
new Array('Kia','Niro'),
new Array('Kia','Opirus'),
new Array('Kia','Optima'),
new Array('Kia','Picanto'),
new Array('Kia','Pregio'),
new Array('Kia','Pride'),
new Array('Kia','ProCeed'),
new Array('Kia','Quoris'),
new Array('Kia','Ray'),
new Array('Kia','Retona'),
new Array('Kia','Rio'),
new Array('Kia','Rio X-Line'),
new Array('Kia','Sedona'),
new Array('Kia','Seltos'),
new Array('Kia','Sephia'),
new Array('Kia','Shuma'),
new Array('Kia','Sorento'),
new Array('Kia','Soul'),
new Array('Kia','Spectra'),
new Array('Kia','Sportage'),
new Array('Kia','Stinger'),
new Array('Kia','Stonic'),
new Array('Kia','Telluride'),
new Array('Kia','Topic'),
new Array('Kia','Venga'),
new Array('Kia','X-Trek'),
new Array('Kia','XCeed'),
new Array('Kinroad','7CX-cargo'),
new Array('Kinroad','ATV110-2'),
new Array('Kinroad','BRAVO-50'),
new Array('Kinroad','KR 1100'),
new Array('Kinroad','UTV-800'),
new Array('Kinroad','XL250ZH-8'),
new Array('Kinroad','XL250ZH-C'),
new Array('Kinroad','XT-150'),
new Array('Kinroad','XT-50'),
new Array('Kinroad','XT1100GK-2'),
new Array('Kinroad','XT1100GK-2A'),
new Array('Kinroad','XT150ATV-A'),
new Array('Kinroad','XT150GK-7'),
new Array('Kinroad','XT150QT-8'),
new Array('Kinroad','XT200-18'),
new Array('Kinroad','XT200ATV-D'),
new Array('Kinroad','XT250ATV-2'),
new Array('Kinroad','XT250ATV-C'),
new Array('Kinroad','XT50QT-10'),
new Array('Kinroad','XT50QT-2A'),
new Array('Kinroad','XT50QT-2C'),
new Array('Kinroad','XT50QT-8'),
new Array('Kinroad','XT70ATV-6'),
new Array('Kinroad','XT90GK'),
new Array('Kinroad','ZH-300ZM'),
new Array('Kinroad','ZH50-8'),
new Array('KrAZ','250'),
new Array('KrAZ','255'),
new Array('KrAZ','260'),
new Array('KrAZ','6322'),
new Array('KrAZ','65053'),
new Array('KrAZ','6511C4-082'),
new Array('KTM','300 XC'),
new Array('KTM','350 SX-F'),
new Array('KTM','390 Duke'),
new Array('KTM','450 SX-F'),
new Array('KTM','450 XC'),
new Array('KTM','500 EXC'),
new Array('KTM','505 SX'),
new Array('KTM','640 Duke II'),
new Array('KTM','690 Duke'),
new Array('KTM','790 Duke'),
new Array('KTM','990 Supermoto'),
new Array('KTM','RC 250'),
new Array('Kuba','Blazer 50'),
new Array('Kuba','Blueberry'),
new Array('Kuba','City Go 50'),
new Array('Kuba','Dragon 50'),
new Array('Kuba','Ege 50'),
new Array('Kuba','Kargo 180'),
new Array('Kuba','RX9'),
new Array('Kuba','Reiz 50'),
new Array('Kuba','Sniper 50'),
new Array('Kuba','Trendy 50'),
new Array('Kuba','VIP Track 250'),
new Array('Kuba','X-boss'),
new Array('Kuba','XY50Q'),
new Array('Kuba','Çita 125R-Max'),
new Array('Kuba','Çita 125R-Max Gold'),
new Array('LADA(VAZ)','2101'),
new Array('LADA(VAZ)','21011'),
new Array('LADA(VAZ)','21013'),
new Array('LADA(VAZ)','2102'),
new Array('LADA(VAZ)','2103'),
new Array('LADA(VAZ)','2104'),
new Array('LADA(VAZ)','21045'),
new Array('LADA(VAZ)','2105'),
new Array('LADA(VAZ)','2106'),
new Array('LADA(VAZ)','2107'),
new Array('LADA(VAZ)','2108'),
new Array('LADA(VAZ)','2109'),
new Array('LADA(VAZ)','21099'),
new Array('LADA(VAZ)','2110'),
new Array('LADA(VAZ)','21103'),
new Array('LADA(VAZ)','21108'),
new Array('LADA(VAZ)','2111'),
new Array('LADA(VAZ)','2112'),
new Array('LADA(VAZ)','21123'),
new Array('LADA(VAZ)','2113'),
new Array('LADA(VAZ)','2114'),
new Array('LADA(VAZ)','2115'),
new Array('LADA(VAZ)','2120'),
new Array('LADA(VAZ)','Granta'),
new Array('LADA(VAZ)','Granta Cross'),
new Array('LADA(VAZ)','Granta Prima'),
new Array('LADA(VAZ)','Kalina'),
new Array('LADA(VAZ)','Largus'),
new Array('LADA(VAZ)','Largus Cross'),
new Array('LADA(VAZ)','Largus Kub'),
new Array('LADA(VAZ)','Largus Roof'),
new Array('LADA(VAZ)','Niva'),
new Array('LADA(VAZ)','Niva Travel'),
new Array('LADA(VAZ)','Oka'),
new Array('LADA(VAZ)','Priora'),
new Array('LADA(VAZ)','Tarzan'),
new Array('LADA(VAZ)','Vesta'),
new Array('LADA(VAZ)','Vesta Cross'),
new Array('LADA(VAZ)','Vesta SW'),
new Array('LADA(VAZ)','Vesta SW Cross'),
new Array('LADA(VAZ)','XRAY'),
new Array('LADA(VAZ)','XRAY Cross'),
new Array('Lamborghini','Aventador'),
new Array('Lamborghini','Diablo'),
new Array('Lamborghini','Gallardo'),
new Array('Lamborghini','Huracan'),
new Array('Lamborghini','Murcielago'),
new Array('Lamborghini','Urus'),
new Array('Lancia','Delta'),
new Array('Lancia','Kappa'),
new Array('Lancia','Lybra SW'),
new Array('Lancia','Thema'),
new Array('Land Rover','Defender'),
new Array('Land Rover','Discovery'),
new Array('Land Rover','Discovery Sport'),
new Array('Land Rover','Freelander'),
new Array('Land Rover','RR Evoque'),
new Array('Land Rover','RR Sport'),
new Array('Land Rover','RR Velar'),
new Array('Land Rover','Range Rover'),
new Array('LAZ','4202'),
new Array('LAZ','695'),
new Array('LAZ','699'),
new Array('Lexus','CT 200h'),
new Array('Lexus','ES 200'),
new Array('Lexus','ES 250'),
new Array('Lexus','ES 300'),
new Array('Lexus','ES 300h'),
new Array('Lexus','ES 330'),
new Array('Lexus','ES 350'),
new Array('Lexus','GS 200t'),
new Array('Lexus','GS 250'),
new Array('Lexus','GS 300'),
new Array('Lexus','GS 350'),
new Array('Lexus','GS 400'),
new Array('Lexus','GS 430'),
new Array('Lexus','GS 450h'),
new Array('Lexus','GS 460'),
new Array('Lexus','GX 460'),
new Array('Lexus','GX 470'),
new Array('Lexus','HS 250h'),
new Array('Lexus','IS 200'),
new Array('Lexus','IS 220'),
new Array('Lexus','IS 250'),
new Array('Lexus','IS 300'),
new Array('Lexus','IS 350'),
new Array('Lexus','IS F'),
new Array('Lexus','LC 500'),
new Array('Lexus','LS 300'),
new Array('Lexus','LS 350'),
new Array('Lexus','LS 400'),
new Array('Lexus','LS 430'),
new Array('Lexus','LS 460'),
new Array('Lexus','LS 500'),
new Array('Lexus','LS 600h'),
new Array('Lexus','LX 450'),
new Array('Lexus','LX 470'),
new Array('Lexus','LX 570'),
new Array('Lexus','LX 600'),
new Array('Lexus','NX 200'),
new Array('Lexus','NX 200t'),
new Array('Lexus','NX 300'),
new Array('Lexus','NX 300h'),
new Array('Lexus','NX 350'),
new Array('Lexus','RC 200t'),
new Array('Lexus','RC 350'),
new Array('Lexus','RX 200t'),
new Array('Lexus','RX 270'),
new Array('Lexus','RX 300'),
new Array('Lexus','RX 330'),
new Array('Lexus','RX 350'),
new Array('Lexus','RX 400h'),
new Array('Lexus','RX 450h'),
new Array('Lexus','SC 300'),
new Array('Lexus','SC 430'),
new Array('Lexus','UX 200'),
new Array('Lexus','UX 250h'),
new Array('Lexus','UX 300e'),
new Array('Liebherr','LT 1030'),
new Array('Lifan','320'),
new Array('Lifan','330'),
new Array('Lifan','520'),
new Array('Lifan','530'),
new Array('Lifan','620'),
new Array('Lifan','720'),
new Array('Lifan','820'),
new Array('Lifan','Foison'),
new Array('Lifan','Skat'),
new Array('Lifan','X50'),
new Array('Lifan','X60'),
new Array('Lifan','X70'),
new Array('Lincoin','Aviator'),
new Array('Lincoin','Continental'),
new Array('Lincoin','LS'),
new Array('Lincoin','MKS'),
new Array('Lincoin','MKT'),
new Array('Lincoin','MKX'),
new Array('Lincoin','MKZ'),
new Array('Lincoin','Navigator'),
new Array('Lincoin','Towncar'),
new Array('Lotus','Evora'),
new Array('Lotus','Evora S'),
new Array('LuAz','967'),
new Array('LuAz','969'),
new Array('LuAz','969M'),
new Array('Lvtong','A617'),
new Array('Lvtong','A627'),
new Array('Lvtong','A827'),
new Array('Mack','Granite'),
new Array('Mack','Granite MHD'),
new Array('Mack','LR'),
new Array('Mack','Mack Anthem'),
new Array('Mack','Pinnacle'),
new Array('Mack','TerraPro'),
new Array('Magirus-Deutz','160 D16'),
new Array('Magirus-Deutz','160 L117'),
new Array('Magirus-Deutz','230 L117	'),
new Array('Magirus-Deutz','232 D19'),
new Array('Magirus-Deutz','256 D26'),
new Array('Magirus-Deutz','290 D26'),
new Array('Magirus-Deutz','320 M19'),
new Array('Magirus-Deutz','R80'),
new Array('Magirus-Deutz','R81'),
new Array('MAN','10163'),
new Array('MAN','19.414'),
new Array('MAN','19372'),
new Array('MAN','19463'),
new Array('MAN','22.321'),
new Array('MAN','24.372'),
new Array('MAN','26.403'),
new Array('MAN','26463'),
new Array('MAN','27403'),
new Array('MAN','32.270'),
new Array('MAN','32.463'),
new Array('MAN','37.343 Silent'),
new Array('MAN','8-163'),
new Array('MAN','Cobra Guleryuz'),
new Array('MAN','F2000'),
new Array('MAN','FE 460A'),
new Array('MAN','FE310A'),
new Array('MAN','Fortuna'),
new Array('MAN','L2000'),
new Array('MAN','LE 12.220'),
new Array('MAN','LE 220 C'),
new Array('MAN','LE 8.220'),
new Array('MAN','LE12.180'),
new Array('MAN','TGA 18.310'),
new Array('MAN','TGA 18.400'),
new Array('MAN','TGA 18.410'),
new Array('MAN','TGA 18.430'),
new Array('MAN','TGA 18.440'),
new Array('MAN','TGA 18.463'),
new Array('MAN','TGA 18.480'),
new Array('MAN','TGA 26.430'),
new Array('MAN','TGA 33.480'),
new Array('MAN','TGA 33350'),
new Array('MAN','TGA 35.392'),
new Array('MAN','TGA 35310'),
new Array('MAN','TGA 35350'),
new Array('MAN','TGA 35360'),
new Array('MAN','TGA 35390'),
new Array('MAN','TGA 35400'),
new Array('MAN','TGA 35430'),
new Array('MAN','TGA 390'),
new Array('MAN','TGA 41.400'),
new Array('MAN','TGA 41.480'),
new Array('MAN','TGA 410'),
new Array('MAN','TGA 440'),
new Array('MAN','TGA 480'),
new Array('MAN','TGA 510'),
new Array('MAN','TGL8.150'),
new Array('MAN','TGL8.180'),
new Array('MAN','TGS 19360'),
new Array('MAN','TGS 33.360'),
new Array('MAN','TGS 35.480'),
new Array('MAN','TGS 40.480'),
new Array('MAN','TGS 41.400'),
new Array('MAN','TGX 18.440'),
new Array('MAN','Temsa'),
new Array('MAN','markaadi'),
new Array('MAN','markaadi'),
new Array('MAN','markaadi'),
new Array('MAN','markaadi'),
new Array('MAN','markaadi'),
new Array('MAN','markaadi'),
new Array('MAN','markaadi'),
new Array('MAN','markaadi'),
new Array('MAN','markaadi'),
new Array('MAN','markaadi'),
new Array('MAN','markaadi'),





new Array('Kayo','markamodel'));
var semtler = new Array();
function set_child_listbox(sSource,sTarget,childArray,sifirla,tip) {
//önce temizlik ;)
  var parentObject = findObj(sSource);
  var childObject = findObj(sTarget);
  var base=0;
  if(sifirla==1)
  {
  base=-1;
  }else
  {
  base=0;
  }

  for(var i=childObject.length;i>base;i--) {
    childObject.options[i] = null;
  }

  childObject.options[0] = new Option("Seçiniz","");
  //var selIndex = parentObject.options[parentObject.selectedIndex].value;
  var selIndex = parentObject.value;
  if (selIndex == "") {
    //childObject.disabled = true;
  } else {
    childObject.disabled = false;
    var childIndex = base+1;
    for (i = 0; i < childArray.length; i++) {
      if (childArray[i][0+tip] == selIndex) {
        childObject.options[childIndex+1] = new Option(childArray[i][1+tip], childArray[i][1+tip]);
        childIndex++;
      }
    }
  }

  childObject.selectedIndex = 0;
      if(document.getElementById('nvar_alan_1').value == 'Türkiye' || document.getElementById('nvar_alan_1').value == ''){childObject.focus();}else{document.getElementById('ilce').style.display='none';document.getElementById('nvar_alan_4').style.display='block';document.getElementById('nvar_alan_5').style.display='block';}
}
</script>


<select class="form-select" name="marka" id="il" onChange="set_child_listbox('il', 'ilce',ilceler,1,0);" required="required" >
<option value="">Seçin</option>
<option value="Abarth">Abarth</option>
<option value="ABM">ABM</option>
<option value="ACG Cars">ACG Cars</option>
<option value="Acura">Acura</option>
<option value="Alfa Romeo">Alfa Romeo</option>
<option value="Alke">Alke</option>
<option value="AMC">AMC</option>
<option value="Aprilia">Aprilia</option>
<option value="Arctic Cat">Arctic Cat</option>
<option value="Argo">Argo</option>
<option value="ARO">ARO</option>
<option value="Arora">Arora</option>
<option value="Ashok Leyland">Ashok Leyland</option>
<option value="Asia">Asia</option>
<option value="Aston Martin">Aston Martin</option>
<option value="ATV">ATV</option>
<option value="Audi">Audi</option>
<option value="Avia">Avia</option>
<option value="Baic">Baic</option>
<option value="Bajaj">Bajaj</option>
<option value="Baotian">Baotian</option>
<option value="BAW">BAW</option>
<option value="BAZ">BAZ</option>
<option value="Belka">Belka</option>
<option value="Benelli">Benelli</option>
<option value="Bentley">Bentley</option>
<option value="Bestune">Bestune</option>
<option value="BMC">BMC</option>
<option value="BMW">BMW</option>
<option value="BMW Alpina">BMW Alpina</option>
<option value="Brilliance">Brilliance</option>
<option value="Buell">Buell</option>
<option value="Buick">Buick</option>
<option value="Bull Motors">Bull Motors</option>
<option value="BYD">BYD</option>
<option value="C.Moto">C.Moto</option>
<option value="Cadillac">Cadillac</option>
<option value="Can-Am">Can-Am</option>
<option value="Celimo">Celimo</option>
<option value="CFMOTO">CFMOTO</option>
<option value="Changan">Changan</option>
<option value="Chery">Chery</option>
<option value="Chevrolet">Chevrolet</option>
<option value="Chituma">Chituma</option>
<option value="Chrysler">Chrysler</option>
<option value="Citroen">Citroen</option>
<option value="CNG Bus">CNG Bus</option>
<option value="Coles">Coles</option>
<option value="CZ">CZ</option>
<option value="Dacia">Dacia</option>
<option value="Dadi">Dadi</option>
<option value="Daewoo">Daewoo</option>
<option value="DAF">DAF</option>
<option value="Daihatsu">Daihatsu</option>
<option value="Dali">Dali</option>
<option value="Datsun">Datsun</option>
<option value="Dayun">Dayun</option>
<option value="Derways">Derways</option>
<option value="Dnepr">Dnepr</option>
<option value="Dodge">Dodge</option>
<option value="DongFeng">DongFeng</option>
<option value="Ducati">Ducati</option>
<option value="Entegra Coach">Entegra Coach</option>
<option value="ErAZ">ErAZ</option>
<option value="ERF">ERF</option>
<option value="Estrima">Estrima</option>
<option value="Eurotex">Eurotex</option>
<option value="FAUN">FAUN</option>
<option value="FAW">FAW</option>
<option value="Ferrari">Ferrari</option>
<option value="Fiat">Fiat</option>
<option value="Foday">Foday</option>
<option value="Ford">Ford</option>
<option value="Foton">Foton</option>
<option value="Freightliner">Freightliner</option>
<option value="Gabro">Gabro</option>
<option value="GAC">GAC</option>
<option value="GAZ">GAZ</option>
<option value="Geely">Geely</option>
<option value="GEM Cars">GEM Cars</option>
<option value="Genesis">Genesis</option>
<option value="Geon">Geon</option>
<option value="GIBBS">GIBBS</option>
<option value="Gilera">Gilera</option>
<option value="Ginaf">Ginaf</option>
<option value="GMC">GMC</option>
<option value="Gonow">Gonow</option>
<option value="Great Wall">Great Wall</option>
<option value="Hafei">Hafei</option>
<option value="Haima">Haima</option>
<option value="Hamtaz">Hamtaz</option>
<option value="Haojue">Haojue</option>
<option value="Harley-Davidson">Harley-Davidson</option>
<option value="Haval">Haval</option>
<option value="Hisun">Hisun</option>
<option value="Honda">Honda</option>
<option value="Hongqi">Hongqi</option>
<option value="HOWO">HOWO</option>
<option value="Hummer">Hummer</option>
<option value="Huzhou">Huzhou</option>
<option value="Hyosung">Hyosung</option>
<option value="Hyundai">Hyundai</option>
<option value="IFA">IFA</option>
<option value="IJ">IJ</option>
<option value="Ikarus">Ikarus</option>
<option value="Infiniti">Infiniti</option>
<option value="Iran Khodro">Iran Khodro</option>
<option value="Irbis">Irbis</option>
<option value="Isuzu">Isuzu</option>
<option value="ItalCar">ItalCar</option>
<option value="Ivanovec">Ivanovec</option>
<option value="Iveco">Iveco</option>
<option value="JAC">JAC</option>
<option value="Jaguar">Jaguar</option>
<option value="Jawa">Jawa</option>
<option value="Jeep">Jeep</option>
<option value="Jetour">Jetour</option>
<option value="Jiajue">Jiajue</option>
<option value="Jianshe">Jianshe</option>
<option value="Jinan">Jinan</option>
<option value="Jinbei">Jinbei</option>
<option value="JMC">JMC</option>
<option value="Jonway">Jonway</option>
<option value="KAIYI">KAIYI</option>
<option value="KamAz">KamAz</option>
<option value="KAvZ">KAvZ</option>
<option value="Kawasaki">Kawasaki</option>
<option value="Kayo">Kayo</option>
<option value="KAZ">KAZ</option>
<option value="Keeway">Keeway</option>
<option value="Khazar">Khazar</option>
<option value="Kia">Kia</option>
<option value="Kinroad">Kinroad</option>
<option value="KrAZ">KrAZ</option>
<option value="KTM">KTM</option>
<option value="Kuba">Kuba</option>
<option value="LADA (VAZ)">LADA (VAZ)</option>
<option value="Lamborghini">Lamborghini</option>
<option value="Lancia">Lancia</option>
<option value="Land Rover">Land Rover</option>
<option value="LAZ">LAZ</option>
<option value="Lexus">Lexus</option>
<option value="Liebherr">Liebherr</option>
<option value="Lifan">Lifan</option>
<option value="Lincoln">Lincoln</option>
<option value="Lotus">Lotus</option>
<option value="LuAz">LuAz</option>
<option value="Lvtong">Lvtong</option>
<option value="Mack">Mack</option>
<option value="Magirus-Deutz">Magirus-Deutz</option>
<option value="MAN">MAN</option>
<option value="Marshell">Marshell</option>
<option value="Maserati">Maserati</option>
<option value="Maybach">Maybach</option>
<option value="MAZ">MAZ</option>
<option value="Mazda">Mazda</option>
<option value="McLaren">McLaren</option>
<option value="Megelli">Megelli</option>
<option value="Mercedes">Mercedes</option>
<option value="Mercedes-Maybach">Mercedes-Maybach</option>
<option value="Mercury">Mercury</option>
<option value="MG">MG</option>
<option value="Mini">Mini</option>
<option value="Minsk">Minsk</option>
<option value="Mitsubishi">Mitsubishi</option>
<option value="Mondial">Mondial</option>
<option value="Moskvich">Moskvich</option>
<option value="Muravey">Muravey</option>
<option value="MV Agusta">MV Agusta</option>
<option value="Nama">Nama</option>
<option value="Neman">Neman</option>
<option value="Neoplan">Neoplan</option>
<option value="Neptun">Neptun</option>
<option value="Nissan">Nissan</option>
<option value="NIU">NIU</option>
<option value="Nooma">Nooma</option>
<option value="Oldsmobile">Oldsmobile</option>
<option value="Oltcit">Oltcit</option>
<option value="Opel">Opel</option>
<option value="Otocar">Otocar</option>
<option value="Otosan">Otosan</option>
<option value="Packard">Packard</option>
<option value="Parvaz">Parvaz</option>
<option value="Paykan">Paykan</option>
<option value="PAZ">PAZ</option>
<option value="Peugeot">Peugeot</option>
<option value="Piaggio">Piaggio</option>
<option value="Pilotcar">Pilotcar</option>
<option value="Plymouth">Plymouth</option>
<option value="Polaris">Polaris</option>
<option value="Pontiac">Pontiac</option>
<option value="Porsche">Porsche</option>
<option value="Proton">Proton</option>
<option value="RAF">RAF</option>
<option value="Ravon">Ravon</option>
<option value="Renault">Renault</option>
<option value="Rialli">Rialli</option>
<option value="Rieju">Rieju</option>
<option value="Riga">Riga</option>
<option value="RKS">RKS</option>
<option value="Roewe">Roewe</option>
<option value="Rolls-Royce">Rolls-Royce</option>
<option value="Rover">Rover</option>
<option value="Saab">Saab</option>
<option value="Saipa">Saipa</option>
<option value="SamAuto">SamAuto</option>
<option value="Saturn">Saturn</option>
<option value="Scania">Scania</option>
<option value="Scion">Scion</option>
<option value="SEAT">SEAT</option>
<option value="SeAz">SeAz</option>
<option value="Setra">Setra</option>
<option value="Shacman">Shacman</option>
<option value="Shaolin">Shaolin</option>
<option value="Shineray">Shineray</option>
<option value="Shuanghuan">Shuanghuan</option>
<option value="Skoda">Skoda</option>
<option value="Skyline">Skyline</option>
<option value="Smart">Smart</option>
<option value="SMZ">SMZ</option>
<option value="Sport">Sport</option>
<option value="Ssang Yong">Ssang Yong</option>
<option value="Star">Star</option>
<option value="Subaru">Subaru</option>
<option value="Suzuki">Suzuki</option>
<option value="SYM">SYM</option>
<option value="Talbot">Talbot</option>
<option value="Tata">Tata</option>
<option value="Tatra">Tatra</option>
<option value="Tazzari">Tazzari</option>
<option value="Temsa">Temsa</option>
<option value="Tesla">Tesla</option>
<option value="Tofas">Tofas</option>
<option value="Toyota">Toyota</option>
<option value="Trabant">Trabant</option>
<option value="Triumph">Triumph</option>
<option value="Tufan">Tufan</option>
<option value="UAZ">UAZ</option>
<option value="Ural">Ural</option>
<option value="Veloci">Veloci</option>
<option value="Vespa">Vespa</option>
<option value="Volkswagen">Volkswagen</option>
<option value="Volta">Volta</option>
<option value="Volvo">Volvo</option>
<option value="Vosxod">Vosxod</option>
<option value="Vyatka">Vyatka</option>
<option value="Waitzinger">Waitzinger</option>
<option value="Wanfeng">Wanfeng</option>
<option value="Wild West">Wild West</option>
<option value="Willys">Willys</option>
<option value="XCMG">XCMG</option>
<option value="Xin Kai">Xin Kai</option>
<option value="Xinling">Xinling</option>
<option value="Yadea">Yadea</option>
<option value="Yamaha">Yamaha</option>
<option value="Yuejin">Yuejin</option>
<option value="Yufeng">Yufeng</option>
<option value="Yutong">Yutong</option>
<option value="Zamyad">Zamyad</option>
<option value="ZAZ">ZAZ</option>
<option value="ZIL">ZIL</option>
<option value="Zongshen">Zongshen</option>
<option value="Zontes">Zontes</option>
<option value="Zoomlion">Zoomlion</option>
<option value="ZX Auto">ZX Auto</option>
                    </select>

</div>
<div class="col-lg-6" style="padding: 10px;">
<label>Yanacaq növü <span style="color:var(--site-rengi2)">*</span></label>
<select class="form-select" name="yanacaq" required>
  <option value="" selected>&nbsp;</option>
  <option value="Benzin">Benzin</option>
  <option value="Dizel">Dizel</option>
  <option value="Qaz">Qaz</option>
  <option value="Benzin & Qaz">Benzin & Qaz</option>
  <option value="Elektro">Elektro</option>
  <option value="Hibrid">Hibrid</option>
  <option value="Plug-in Hibrid">Plug-in Hibrid</option>
</select>
</div>

<div class="col-lg-6" style="padding: 10px;">
<label>Model <span style="color:var(--site-rengi2)">*</span></label>
<!-- <input class="form-control" name="model" required> //-->

<select name="model" id="ilce" required="required" class="form-select validate[required]">
<option value=""></option>
</select>

</div>
<div class="col-lg-6" style="padding: 10px;">
<label>Ötürücü <span style="color:var(--site-rengi2)">*</span></label>
<select class="form-select" name="oturucu" required>
  <option value="" selected>&nbsp;</option>
  <option value="Arxa">Arxa</option>
  <option value="Ön">Ön</option>
  <option value="Tam">Tam</option>
</select>
</div>

<div class="col-lg-6" style="padding: 10px;">
<label>Ban növü <span style="color:var(--site-rengi2)">*</span></label>
<select class="form-select" name="bannovu" required>
<option value="" selected>&nbsp;</option>
<option value="Avtobus">Avtobus</option>
<option value="Dartqı">Dartqı</option>
<option value="Furqon">Furqon</option>
<option value="Hetçbek / Liftbek">Hetçbek / Liftbek</option>
<option value="Kabrio">Kabrio</option>
<option value="Karvan">Karvan</option>
<option value="Kupe">Kupe</option>
<option value="Kvadrosikl">Kvadrosikl</option>
<option value="Mikroavtobus">Mikroavtobus</option>
<option value="Minivan">Minivan</option>
<option value="Motosiklet">Motosiklet</option>
<option value="Offroader / SUV">Offroader / SUV</option>
<option value="Pikap">Pikap</option>
<option value="Qolfkar">Qolfkar</option>
<option value="Rodster">Rodster</option>
<option value="Sedan">Sedan</option>
<option value="Universal">Universal</option>
<option value="Van">Van</option>
<option value="Yük maşını">Yük maşını</option>
</select>
</div>
<div class="col-lg-6" style="padding: 10px;">
<label>Sürətlər qutusu <span style="color:var(--site-rengi2)">*</span></label>
<select class="form-select" name="suretler" required>
  <option value="" selected>&nbsp;</option>
  <option value="Mexaniki">Mexaniki</option>
  <option value="Avtomat">Avtomat</option>
  <option value="Robotlaşdırılmış">Robotlaşdırılmış</option>
  <option value="Variator">Variator</option>
</select>
</div>

<div class="col-lg-6" style="padding: 10px;">
<label>Yürüş <span style="color:var(--site-rengi2)">*</span></label>
<input class="form-control" name="yurus" required>
</div>
<div class="col-lg-6" style="padding: 10px;">
<label>İl <span style="color:var(--site-rengi2)">*</span></label>
<select class="form-select" name="ilyil" required>
  <option value="" selected>&nbsp;</option>
<option value="2022">2022</option>
<option value="2021">2021</option>
<option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
<option value="1929">1929</option>
<option value="1928">1928</option>
<option value="1927">1927</option>
<option value="1926">1926</option>
<option value="1925">1925</option>
<option value="1924">1924</option>
<option value="1923">1923</option>
<option value="1922">1922</option>
<option value="1921">1921</option>
<option value="1920">1920</option>
<option value="1919">1919</option>
<option value="1918">1918</option>
<option value="1917">1917</option>
<option value="1916">1916</option>
<option value="1915">1915</option>
<option value="1914">1914</option>
<option value="1913">1913</option>
<option value="1912">1912</option>
<option value="1911">1911</option>
<option value="1910">1910</option>
<option value="1909">1909</option>
<option value="1908">1908</option>
<option value="1907">1907</option>
<option value="1906">1906</option>
<option value="1905">1905</option>
<option value="1904">1904</option>
<option value="1903">1903</option>
<option value="1902">1902</option>
</select>
</div>

<div class="col-lg-6" style="padding: 10px;">
<label>Rəng <span style="color:var(--site-rengi2)">*</span></label>
<select class="form-select" name="rengi" required>
<option value="" selected>&nbsp;</option>
<option value="Qara">Qara</option>
<option value="Yaş Asfalt">Yaş Asfalt</option>
<option value="Boz">Boz</option>
<option value="Gümüşü">Gümüşü</option>
<option value="Ağ">Ağ</option>
<option value="Bej">Bej</option>
<option value="Tünd qırmızı">Tünd qırmızı</option>
<option value="Qırmızı">Qırmızı</option>
<option value="Çəhrayı">Çəhrayı</option>
<option value="Narıncı">Narıncı</option>
<option value="Qızılı">Qızılı</option>
<option value="Sarı">Sarı</option>
<option value="Yaşıl">Yaşıl</option>
<option value="Mavi">Mavi</option>
<option value="Göy">Göy</option>
<option value="Bənövşəyi">Bənövşəyi</option>
<option value="Qəhvəyi">Qəhvəyi</option>
</select>
</div>
<div class="col-lg-6" style="padding: 10px;">
<label>Mühərrikin həcmi, sm<sup>3</sup> <span style="color:var(--site-rengi2)">*</span></label>
<select class="form-select" name="muherrikin" required>
  <option value="" selected>&nbsp;</option>
<option value="50">50</option>
<option value="100">100</option>
<option value="150">150</option>
<option value="200">200</option>
<option value="250">250</option>
<option value="300">300</option>
<option value="350">350</option>
<option value="400">400</option>
<option value="450">450</option>
<option value="500">500</option>
<option value="600">600</option>
<option value="700">700</option>
<option value="800">800</option>
<option value="900">900</option>
<option value="1000">1000</option>
<option value="1100">1100</option>
<option value="1200">1200</option>
<option value="1300">1300</option>
<option value="1400">1400</option>
<option value="1500">1500</option>
<option value="1600">1600</option>
<option value="1700">1700</option>
<option value="1800">1800</option>
<option value="1900">1900</option>
<option value="2000">2000</option>
<option value="2100">2100</option>
<option value="2200">2200</option>
<option value="2300">2300</option>
<option value="2400">2400</option>
<option value="2500">2500</option>
<option value="2600">2600</option>
<option value="2700">2700</option>
<option value="2800">2800</option>
<option value="2900">2900</option>
<option value="3000">3000</option>
<option value="3100">3100</option>
<option value="3200">3200</option>
<option value="3300">3300</option>
<option value="3400">3400</option>
<option value="3500">3500</option>
<option value="3600">3600</option>
<option value="3700">3700</option>
<option value="3800">3800</option>
<option value="3900">3900</option>
<option value="4000">4000</option>
<option value="4100">4100</option>
<option value="4200">4200</option>
<option value="4300">4300</option>
<option value="4400">4400</option>
<option value="4500">4500</option>
<option value="4600">4600</option>
<option value="4700">4700</option>
<option value="4800">4800</option>
<option value="4900">4900</option>
<option value="5000">5000</option>
<option value="5100">5100</option>
<option value="5200">5200</option>
<option value="5300">5300</option>
<option value="5400">5400</option>
<option value="5500">5500</option>
<option value="5600">5600</option>
<option value="5700">5700</option>
<option value="5800">5800</option>
<option value="5900">5900</option>
<option value="6000">6000</option>
<option value="6100">6100</option>
<option value="6200">6200</option>
<option value="6300">6300</option>
<option value="6400">6400</option>
<option value="6500">6500</option>
<option value="7000">7000</option>
<option value="7500">7500</option>
<option value="8000">8000</option>
<option value="8500">8500</option>
<option value="9000">9000</option>
<option value="9500">9500</option>
<option value="10000">10000</option>
<option value="11000">11000</option>
<option value="12000">12000</option>
<option value="13000">13000</option>
<option value="14000">14000</option>
<option value="15000">15000</option>
<option value="16000">16000</option>
</select>
</div>

<div class="col-lg-6" style="padding: 10px;">
<label>Qiymət <span style="color:var(--site-rengi2)">*</span></label>
<input type="text" class="form-control" name="parasi" required>

<input class="form-check-input" type="radio" name="parasitl" id="flexRadioDefault1" value="AZN" required> <label class="form-check-label"> AZN </label>&nbsp;&nbsp;
<input class="form-check-input" type="radio" name="parasitl" id="flexRadioDefault2" value="USD" required> <label class="form-check-label"> USD </label>&nbsp;&nbsp;
<input class="form-check-input" type="radio" name="parasitl" id="flexRadioDefault3" value="EUR" required> <label class="form-check-label"> EUR </label>

</div>
<div class="col-lg-6" style="padding: 10px;">
<label>Mühərrikin gücü, a.g. <span style="color:var(--site-rengi2)">*</span></label>
<input type="number" class="form-control" name="mgucu" required>
</div>

<div class="col-lg-6" style="padding: 10px;">
<label>Neçənci sahibisiniz?</label>
<select class="form-select" name="sahip" required>
  <option value="" selected>&nbsp;</option>
  <option value="Birinci">Birinci</option>
  <option value="İkinci">İkinci</option>
  <option value="Üçüncü">Üçüncü</option>
  <option value="Dördüncü və ya daha çox">Dördüncü və ya daha çox</option>
</select>
</div>
<div class="col-lg-6" style="padding: 10px;">
<label>Vəziyyəti</label><br />
<input class="form-check-input" type="checkbox" name="vaziyeti[]" value="Vuruğu var"> <label class="form-check-label"> Vuruğu var </label>&nbsp;&nbsp;
<input class="form-check-input" type="checkbox" name="vaziyeti[]" value="Vuruğu yoxdur"> <label class="form-check-label"> Vuruğu yoxdur </label>&nbsp;&nbsp;
<input class="form-check-input" type="checkbox" name="vaziyeti[]" value="Rənglənib"> <label class="form-check-label"> Rənglənib </label>&nbsp;&nbsp;
<input class="form-check-input" type="checkbox" name="vaziyeti[]" value="Rənglənməyib"> <label class="form-check-label"> Rənglənməyib </label>&nbsp;&nbsp;
</div>

<div class="col-lg-12" style="padding: 10px;">
<label>Yerlərin sayı</label><br />
<input class="form-check-input" type="radio" name="yersayisi" value="1" required> <label class="form-check-label"> 1 </label>&nbsp;&nbsp;
<input class="form-check-input" type="radio" name="yersayisi" value="2" required> <label class="form-check-label"> 2 </label>&nbsp;&nbsp;
<input class="form-check-input" type="radio" name="yersayisi" value="3" required> <label class="form-check-label"> 3 </label>&nbsp;&nbsp;
<input class="form-check-input" type="radio" name="yersayisi" value="4" required> <label class="form-check-label"> 4 </label>&nbsp;&nbsp;
<input class="form-check-input" type="radio" name="yersayisi" value="5" required> <label class="form-check-label"> 5 </label>&nbsp;&nbsp;
<input class="form-check-input" type="radio" name="yersayisi" value="6" required> <label class="form-check-label"> 6 </label>&nbsp;&nbsp;
<input class="form-check-input" type="radio" name="yersayisi" value="7" required> <label class="form-check-label"> 7 </label>&nbsp;&nbsp;
<input class="form-check-input" type="radio" name="yersayisi" value="8+" required> <label class="form-check-label"> 8+ </label>&nbsp;&nbsp;
</div>

<div class="col-lg-12" style="padding: 10px;">
<div class="form-check">
  <input class="form-check-input" type="radio" name="aasec" id="exampleRadios1" value="Kreditdədir">
  <label class="form-check-label" for="exampleRadios1">
    Kreditdədir
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="aasec" id="exampleRadios2" value="Barter mümkündür">
  <label class="form-check-label" for="exampleRadios2">
    Barter mümkündür
  </label>
</div>
</div>

<div class="col-lg-12" style="padding: 10px;">
<label>Əlavə məlumat</label><br />
<textarea class="form-control" name="ilanaciklama" required></textarea>
</div> 

<div class="col-lg-12" style="padding: 10px;">
<label style="font-weight: bold; font-size: 20px;">Avtomobilin təchizatı</label><br />
<div class="row">

<div class="col-lg-3"><input class="form-check-input" type="checkbox" value="Yüngül lehimli disklər" name="altsecenek[]"><label class="form-check-label">&nbsp;Yüngül lehimli disklər</label></div>
<div class="col-lg-3"><input class="form-check-input" type="checkbox" value="ABS" name="altsecenek[]"><label class="form-check-label">&nbsp;ABS</label></div>
<div class="col-lg-3"><input class="form-check-input" type="checkbox" value="Lyuk" name="altsecenek[]"><label class="form-check-label">&nbsp;Lyuk</label></div>
<div class="col-lg-3"><input class="form-check-input" type="checkbox" value="Yağış sensoru" name="altsecenek[]"><label class="form-check-label">&nbsp;Yağış sensoru</label></div>
<div class="col-lg-3"><input class="form-check-input" type="checkbox" value="Mərkəzi qapanma" name="altsecenek[]"><label class="form-check-label">&nbsp;Mərkəzi qapanma</label></div>
<div class="col-lg-3"><input class="form-check-input" type="checkbox" value="Park radarı" name="altsecenek[]"><label class="form-check-label">&nbsp;Park radarı</label></div>
<div class="col-lg-3"><input class="form-check-input" type="checkbox" value="Kondisioner" name="altsecenek[]"><label class="form-check-label">&nbsp;Kondisioner</label></div>
<div class="col-lg-3"><input class="form-check-input" type="checkbox" value="Oturacaqların isidilməsi" name="altsecenek[]"><label class="form-check-label">&nbsp;Oturacaqların isidilməsi</label></div>
<div class="col-lg-3"><input class="form-check-input" type="checkbox" value="Dəri salon" name="altsecenek[]"><label class="form-check-label">&nbsp;Dəri salon</label></div>
<div class="col-lg-3"><input class="form-check-input" type="checkbox" value="Ksenon lampalar" name="altsecenek[]"><label class="form-check-label">&nbsp;Ksenon lampalar</label></div>
<div class="col-lg-3"><input class="form-check-input" type="checkbox" value="Arxa görüntü kamerası" name="altsecenek[]"><label class="form-check-label">&nbsp;Arxa görüntü kamerası</label></div>
<div class="col-lg-3"><input class="form-check-input" type="checkbox" value="Yan pərdələr" name="altsecenek[]"><label class="form-check-label">&nbsp;Yan pərdələr</label></div>
<div class="col-lg-3"><input class="form-check-input" type="checkbox" value="Oturacaqların ventilyasiyası" name="altsecenek[]"><label class="form-check-label">&nbsp;Oturacaqların ventilyasiyası</label></div>

</div>

</div>

<div class="col-lg-12" style="padding: 10px;">
<label style="font-weight: bold; font-size: 20px;">Vitrin şəkli</label><br />
<div class="mb-3" style="padding: 15px; border: 1px dashed #CCC; border-radius: 3px;">
  <input class="form-control" type="file" id="formFile" name="resim" accept="image/*">
</div>
</div> 

<div class="col-lg-12" style="padding: 10px;">
<button type="submit" name="ekarac" class="btn btn-secondary">Davam et</button>
</div>

<input class="form-control" name="kullanici" value="<?php echo $uyeninid; ?>" hidden>

</div>
</form>

<?php
if (isset($_POST['ekarac'])) {
$kullanici = $_POST['kullanici'];
$marka = $_POST['marka'];
$yanacaq = $_POST['yanacaq'];
$model = $_POST['model'];
$oturucu = $_POST['oturucu'];
$bannovu = $_POST['bannovu'];
$suretler = $_POST['suretler'];
$yurus = $_POST['yurus'];
$ilyil = $_POST['ilyil'];
$rengi = $_POST['rengi'];
$muherrikin = $_POST['muherrikin'];
$parasi = $_POST['parasi'];
$parasitl = $_POST['parasitl'];
$mgucu = $_POST['mgucu'];
$sahip = $_POST['sahip'];

$vaziyeti = array(
"vaziyeti" => $_POST['vaziyeti']
);
$vaziyeti = json_encode($vaziyeti);

$yersayisi = $_POST['yersayisi'];
$aasec = $_POST['aasec'];
$ilanaciklama = $_POST['ilanaciklama'];
// $altsecenek = $_POST['altsecenek'];
$gorevler = array(
"ozellik" => $_POST['altsecenek']
);
$altsecenek = json_encode($gorevler);

$tarih = date('d/m/Y');
$vipmi = $_POST['vipmi'];
$onay = $_POST['onay'];

$resim = $_POST['resim'];
   $resimkonum  = $_FILES['resim']['tmp_name'];
   $resimad     = $_FILES['resim']['name'];
   $uzanti      = substr($resimad, -5,5);
   $yeniad      = md5($resimad).$uzanti;
   $yol         = "yuklenen/";
   $yukle = move_uploaded_file($resimkonum,$yol.'/'.$yeniad);

 $gunce = $db->prepare("insert into araclar set kullanici=?, marka=?, yanacaq=?, model=?, oturucu=?, bannovu=?, suretler=?, yurus=?, ilyil=?, rengi=?, muherrikin=?, parasi=?, parasitl=?, mgucu=?, sahip=?, vaziyeti=?, yersayisi=?, aasec=?, ilanaciklama=?, altsecenek=?, tarih=?, resim=?, vipmi=?, onay=?");
 $gunce -> execute(array($kullanici,$marka,$yanacaq,$model,$oturucu,$bannovu,$suretler,$yurus,$ilyil,$rengi,$muherrikin,$parasi,$parasitl,$mgucu,$sahip,$vaziyeti,$yersayisi,$aasec,$ilanaciklama,$altsecenek,$tarih,$yeniad,"0","0"));

 if ($gunce) {
echo '<script>swal("Təbriklər!", "Əlavə edilir, Xahiş edirik gözləyin.", "success");</script>';
header('refresh:1; url=aracilan.php');
 }
}
?>

      </div>
    </section>

  </main><!-- End #main -->

<?php require('footer.php'); ?>

</body>

</html>