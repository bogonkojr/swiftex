@include('website.header')
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <a href="{{ url('/')}}#portfolio">Bact to Portfolio</a>
        </ol>
        <h2>Motor Kenya</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="website/img/portfolio/portfolio-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="website/img/portfolio/portfolio-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="website/img/portfolio/portfolio-1.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Web design</li>
                <li><strong>Client</strong>: Motor Kenya</li>
                <li><strong>Project date</strong>: May, 2023</li>
                <li><strong>Project URL</strong>: <a href="https://www.motorkenya.com">motorkenya.com</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Portfolio Details</h2>
              <p>
                Motor Kenya is a car dealership interactive website. It offers a platform for car enthusiasts to buy and sell their cars. A buyer can upload a car for sale, and upon approval by the admin, the car is available for purchase by prospective buyers. </br> Motor Kenya has its headquarters in Nairobi, Kenya.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>SwiftEx Kenya</h3>
            <p>
              <strong>Location: </strong>Jeff Park Plaza, Ground Floor,<br>
              Behind the Curve by the Park,<br>
              South C.<br>
              <strong>Phone:</strong> +254 723 947 679<br>
              <strong>Email:</strong> info@swiftex.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/')}}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/')}}#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/')}}#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/')}}#portfolio">Portfolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/')}}#contact">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/')}}#services">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/')}}#services">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/')}}#services">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/')}}#services">Content Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/')}}#services">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>SwiftEx Kenya 2023</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://swiftex.com/">SwiftEx Kenya</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="website/vendor/aos/aos.js"></script>
  <script src="website/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="website/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="website/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="website/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="website/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="website/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="website/js/main.js"></script>

</body>

</html>