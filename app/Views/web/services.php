<?= $this->extend('web/components/assemble') ?>
<?= $this->section('content') ?>







<!-- ========================= -->



<!-- ============== Banner ================= -->


<!-- Banner with animated "Services" text -->
<div class="banner service-banner">
  <h1><span class="typed-text typed-service">Services</span></h1>
</div>



<!-- ========================================== -->


<!-- ============= Car Services =================  -->




<section>

 <div class="padd-mar">
   <h2 class="section-title">Our Premium Services</h2>
 </div>


  <div class="services-grid-2col">
  <!-- Left column -->
  <div class="services-col">
    <div class="service-card tall">
      <img class="card-img" src="<?= base_url() ?>public/assets/web/img/serv.jpeg">
      <div class="card-content">
        <div class="card-title">Premium Detailing</div>
      </div>
    </div>
    <div class="service-card short">
      <img class="card-img" src="<?= base_url() ?>public/assets/web/img/serv.jpeg">
      <div class="card-content">
        <div class="card-title">Mini Wash</div>
      </div>
    </div>
    <div class="service-card tall">
      <img class="card-img" src="<?= base_url() ?>public/assets/web/img/serv.jpeg">
      <div class="card-content">
        <div class="card-title">Luxury Polish</div>
      </div>
    </div>
    <div class="service-card short">
      <img class="card-img" src="<?= base_url() ?>public/assets/web/img/serv.jpeg">
      <div class="card-content">
        <div class="card-title">Seat Foam Wash</div>
      </div>
    </div>
  </div>
  <!-- Right column -->
  <div class="services-col">
    <div class="service-card short">
      <img class="card-img" src="<?= base_url() ?>public/assets/web/img/serv.jpeg">
      <div class="card-content">
        <div class="card-title">Vacuum Interior</div>
      </div>
    </div>
    <div class="service-card tall">
      <img class="card-img" src="<?= base_url() ?>public/assets/web/img/serv.jpeg">
      <div class="card-content">
        <div class="card-title">Scratch Removal</div>
      </div>
    </div>
    <div class="service-card short">
      <img class="card-img" src="<?= base_url() ?>public/assets/web/img/serv.jpeg">
      <div class="card-content">
        <div class="card-title">Seat Foam Wash</div>
      </div>
    </div>
    <div class="service-card tall">
      <img class="card-img" src="<?= base_url() ?>public/assets/web/img/serv.jpeg">
      <div class="card-content">
        <div class="card-title">Scratch Removal</div>
      </div>
    </div>
  </div>
</div>
</section>














<!-- ============== Types of Car Wash============================= -->



<div class="container car-wash padd-mar">
  <h3 class="section-title">Types of Car Washes</h4>
  <div class="row g-3">
    <!-- Basic Wash -->
    <div class="col-6 col-md-3">
      <div class="car-wash-type-card">
        <img src="<?= base_url() ?>public/assets/web/img/car_wash/basic_wash.png" class="car-wash-type-bg" alt="Basic Wash">
        <div class="car-wash-type-overlay"></div>
        <div class="car-wash-type-content">
          <div class="car-wash-type-title">Basic Wash</div>
        </div>
      </div>

    </div>
    <!-- Foam Wash -->
    <div class="col-6 col-md-3">
      <div class="car-wash-type-card">
        <img src="<?= base_url() ?>public/assets/web/img/car_wash/foam_wash.png" class="car-wash-type-bg" alt="Foam Wash">
        <div class="car-wash-type-overlay"></div>
        <div class="car-wash-type-content">
          <div class="car-wash-type-title">Foam Wash</div>
        </div>
      </div>
    </div>
    <!-- Interior Cleaning -->
    <div class="col-6 col-md-3">
      <div class="car-wash-type-card">
        <img src="<?= base_url() ?>public/assets/web/img/car_wash/interior_cleaning.png" class="car-wash-type-bg" alt="Interior Cleaning">
        <div class="car-wash-type-overlay"></div>
        <div class="car-wash-type-content">
          <div class="car-wash-type-title">Interior Cleaning</div>
        </div>
      </div>
    </div>
    <!-- Ceramic Coating -->
    <div class="col-6 col-md-3">
      <div class="car-wash-type-card">
        <img src="<?= base_url() ?>public/assets/web/img/car_wash/ceramic_coating.png" class="car-wash-type-bg" alt="Ceramic Coating">
        <div class="car-wash-type-overlay"></div>
        <div class="car-wash-type-content">

          <div class="car-wash-type-title">Ceramic Coating</div>
        </div>
      </div>
    </div>
    <!-- Add more types as needed -->
  </div>
</div>




<!-- ========================== -->

<!-- =============== Tyre POlish =================== -->



<div class="tyre-polish-deals-section padd-mar">
  <div class="container">
    <div class="section-title">Tyre Polish Types</div>
    <div class="tyre-polish-scroll">
      <!-- Water Based -->
      <div class="tyre-polish-card container">
        <img src="<?= base_url() ?>public/assets/web/img/tyre.png" class="tyre-polish-img" alt="Water Based Polish">
        <div class="tyre-polish-title">Water Based</div>
        <div class="tyre-polish-label">Matte/Satin Finish</div>
      </div>
      <!-- Solvent/Silicone Based -->
      <div class="tyre-polish-card container">
        <img src="<?= base_url() ?>public/assets/web/img/tyre.png" class="tyre-polish-img" alt="Solvent Polish">
        <div class="tyre-polish-title">Solvent Based</div>
        <div class="tyre-polish-label">High Gloss Shine</div>
      </div>
      <!-- Gel Polish -->
      <div class="tyre-polish-card container">
        <img src="<?= base_url() ?>public/assets/web/img/tyre.png" class="tyre-polish-img" alt="Gel Polish">
        <div class="tyre-polish-title">Gel Polish</div>
        <div class="tyre-polish-label">Durable Protection</div>
      </div>
      <!-- Spray Shine -->
      <div class="tyre-polish-card container">
        <img src="<?= base_url() ?>public/assets/web/img/tyre.png" class="tyre-polish-img" alt="Spray Shine">
        <div class="tyre-polish-title">Spray Shine</div>
        <div class="tyre-polish-label">Fast Application</div>
      </div>
      <!-- Foam Cleaner/Polish -->
      <div class="tyre-polish-card container">
        <img src="<?= base_url() ?>public/assets/web/img/tyre.png" class="tyre-polish-img" alt="Foam Polish">
        <div class="tyre-polish-title">Foam Polish</div>
        <div class="tyre-polish-label">Clean + Polish</div>
      </div>
    </div>
  </div>
</div>



<!-- ======================================== -->


<!-- ================ Testimonial Section ================= -->






<!-- Google Review Slider -->
<section class="google-review-slider-section">
  <div class="swiper googleReviewSwiper">
    <div class="swiper-wrapper">

      <!-- Review Card 1 -->
      <div class="swiper-slide">
        <div class="google-review-card">
          <div class="review-header">
            <img class="review-avatar" src="<?= base_url() ?>public/assets/web/img/testimonial_icon.png" alt="Alena Rosser">
            <div class="reviewer-details">
              <div class="review-name">Alena Rosser</div>
              <span class="review-date">2 days ago</span>
            </div>
            <span class="review-google">
              <img src="<?= base_url() ?>public/assets/web/img/google_logo.webp" alt="Google">
            </span>
          </div>
          <div class="review-stars">★★★★★</div>
          <div class="review-content">
            ECommerce is an exceptional ecommerce shop that provides an outstanding experience for its customers...
          </div>
          <span class="read-more">Read more</span>
        </div>
      </div>

      <!-- Review Card 2 -->
      <div class="swiper-slide">
        <div class="google-review-card">
          <div class="review-header">
            <img class="review-avatar" src="<?= base_url() ?>public/assets/web/img/testimonial_icon.png" alt="Fred Murphy">
            <div class="reviewer-details">
              <div class="review-name">Fred Murphy</div>
              <span class="review-date">5 days ago</span>
            </div>
            <span class="review-google">
              <img src="<?= base_url() ?>public/assets/web/img/google_logo.webp" alt="Google">
            </span>
          </div>
          <div class="review-stars">★★★★★</div>
          <div class="review-content">
            This company is one of the most professional companies I have used in recent years.
          </div>
          <span class="read-more">Read more</span>
        </div>
      </div>

      <!-- Review Card 3 -->
      <div class="swiper-slide">
        <div class="google-review-card">
          <div class="review-header">
            <img class="review-avatar" src="<?= base_url() ?>public/assets/web/img/testimonial_icon.png" alt="Marie Lambert">
            <div class="reviewer-details">
              <div class="review-name">Marie Lambert</div>
              <span class="review-date">1 week ago</span>
            </div>
            <span class="review-google">
              <img src="<?= base_url() ?>public/assets/web/img/google_logo.webp" alt="Google">
            </span>
          </div>
          <div class="review-stars">★★★★★</div>
          <div class="review-content">
            The whole team was excellent—from sales, office and installation. I highly recommend.
          </div>
          <span class="read-more">Read more</span>
        </div>
      </div>

      <!-- Review Card 4 -->
      <div class="swiper-slide">
        <div class="google-review-card">
          <div class="review-header">
            <img class="review-avatar" src="<?= base_url() ?>public/assets/web/img/testimonial_icon.png" alt="Sandy Walton">
            <div class="reviewer-details">
              <div class="review-name">Sandy Walton</div>
              <span class="review-date">3 weeks ago</span>
            </div>
            <span class="review-google">
              <img src="<?= base_url() ?>public/assets/web/img/google_logo.webp" alt="Google">
            </span>
          </div>
          <div class="review-stars">★★★★★</div>
          <div class="review-content">
            Outstanding and timely service—will definitely return soon!
          </div>
          <span class="read-more">Read more</span>
        </div>
      </div>

    </div>

    <!-- Pagination -->
    <div class="swiper-pagination"></div>
  </div>
</section>







<!-- ======================================== -->
















<!-- =================================== -->




<?= $this->endSection(); ?>