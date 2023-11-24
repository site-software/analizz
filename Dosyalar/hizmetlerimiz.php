<?php require('db.php');
$ek=$db->query("select * from ayarlar where ayar_id=1")->fetch(PDO::FETCH_ASSOC);
$hizmetlerimiz=$db->query("select * from hizmetler where id=1")->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="az">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo $hizmetlerimiz['baslik']; ?> - <?php echo $ek['siteadi']; ?></title>
</head>

<body>
<?php require('header.php'); ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php echo $hizmetlerimiz['baslik']; ?></h2>
          <ol>
            <li><a href="index.php">Ana Sayfa</a></li>
            <li><?php echo $hizmetlerimiz['baslik']; ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">

<?php echo $hizmetlerimiz['icerik']; ?>

      </div>
    </section>

  </main><!-- End #main -->

<?php require('footer.php'); ?>

</body>

</html>