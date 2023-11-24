    <!-- ======= REKLAM ALANI ======= -->
    <section id="featured-services" class="featured-services" style="text-align: center;padding: 30px 0;">
      <div class="container" data-aos="fade-up">

<?php echo $reklam['reklam5']; ?>

      </div>
    </section><!-- REKLAM ALANI BİTTİ -->

  <footer id="footer" style="border-top: 2px solid var(--site-rengi1);">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><?php echo $ek['siteadi']; ?><span>.</span></h3>
            <p><?php echo $ek['siteaciklama']; ?><br><br>
              <strong>Telefon:</strong> <?php echo $ek['telefon']; ?><br>
              <strong>Email:</strong> <?php echo $ek['email']; ?><br>
            </p>
          </div>

          <div class="col-lg-6 col-md-6 footer-links">
            <h4 style="text-align: center;">Səhifələr</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Ana Səhifə</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="hakkimizda.php">Haqqımızda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="hizmetlerimiz.php">Xidmətlər</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="araclar.php">Avtomobil elanlar</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="plakalar.php">Qeydiyyat nişanı elanları</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="iletisim.php">Əlaqə</a></li>
            </ul>
          </div>


          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Medya Hesablarımız</h4>
            <p>Bizi Sosyal Medyadan izləməyi unutmayın</p>
            <div class="social-links mt-3">
              <a href="<?php echo $ek['twitter']; ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="<?php echo $ek['facebook']; ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="<?php echo $ek['instagram']; ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Müəllif huqüqları qorunur <strong><span><?php echo $ek['siteadi']; ?></span></strong>.
      </div>
      <div class="credits">
        by <a href="https://emkasoft.net" rel="dofollow" title="EMKASOFT Web Tasarım ve Yazılım Hizmetleri">emkasoft</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>

<style>
:root {
  --site-rengi1: <?php echo $ek['siterengi1']; ?>;
  --site-rengi2: <?php echo $ek['siterengi']; ?>;
}
</style>
