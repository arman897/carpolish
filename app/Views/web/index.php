<?= $this->extend('web/components/assemble') ?>
<?= $this->section('content') ?>







<!-- =============== PRELOADER START =============== -->
<!-- AONE CAR POLISH PRELOADER -->
<!-- Header -->
<header id="siteHeader" style="display: none">
  <span>
    <img src="<?= base_url('public/assets/web/img/logo.png') ?>"
      id="headerLogo"
      class="header-logo"
      alt="Aone Car Polish"></span>
</header>


<!-- PRELOADER -->
<div class="preloader" id="preloader">
  <button class="vs-btn preloaderCls">Cancel</button>

  <!-- Brand Logo (initial splash logo) -->
  <img
    src="<?= base_url('public/assets/web/img/aone-car-polish-logo.png') ?>"
    class="brand-logo"
    id="brandLogo"
    alt="Aone Car Polish" />

  <!-- Top images -->
  <img src="<?= base_url() ?>public/assets/web/img/pre-loader/left-top.png" class="float-img top left" />
  <img src="<?= base_url() ?>public/assets/web/img/pre-loader/right-top.png" class="float-img top right" />

  <!-- Bottom images -->
  <img src="<?= base_url() ?>public/assets/web/img/pre-loader/left-bottom.png" class="float-img bot left" />
  <img src="<?= base_url() ?>public/assets/web/img/pre-loader/right-bottom.png" class="float-img bot right" />

  <!-- Car animation -->
  <div class="loading-window">
    <div class="car">
      <div class="strike"></div>
      <div class="strike strike2"></div>
      <div class="strike strike3"></div>
      <div class="strike strike4"></div>
      <div class="strike strike5"></div>
      <div class="car-detail spoiler"></div>
      <div class="car-detail back"></div>
      <div class="car-detail center"></div>
      <div class="car-detail center1"></div>
      <div class="car-detail front"></div>
      <div class="car-detail wheel"></div>
      <div class="car-detail wheel wheel2"></div>
    </div>
  </div>
</div>

<!-- =============== PRELOADER END =============== -->






<main>



  <!--=========== 🚗 Banner Section ==============-->




  <!-- 🚗 Banner Section -->
  <section id="banner-section">
    <div class="banner-swiper swiper">
      <div class="swiper-wrapper">


        <div class="swiper-slide">
          <img src="<?= base_url() ?>public/assets/web/img/newimg/banner1.png" alt="BMW Car Polishing" />
          <div class="banner-center">
            <h2><span></span> Car Polish and Detailing Service in Newtown</h2>
            <p>Shine with us....</p>
          </div>
        </div>

        <div class="swiper-slide">
          <img src="<?= base_url() ?>public/assets/web/img/newimg/banner2.png" alt="Mercedes Detailing" />
          <div class="banner-center">
            <h2><span>Top Car Detailing Services In Newtown Kolkata</span> </h2>
            <p>Luxury Inside • Perfection Outside</p>
          </div>
        </div>

        <div class="swiper-slide">
          <img src="<?= base_url() ?>public/assets/web/img/newimg/banner2.png" alt="Mercedes Detailing" />
          <div class="banner-center">
            <h2><span>Best Car Polish Service In Newtown Kolkata</span> </h2>
            <p>Luxury Inside • Perfection Outside</p>
          </div>
        </div>


        <div class="swiper-slide">
          <img src="<?= base_url() ?>public/assets/web/img/newimg/banner2.png" alt="Mercedes Detailing" />
          <div class="banner-center">
            <h2><span>Branded Car Service Packages Are Available</span> </h2>
            <p>Luxury Inside • Perfection Outside</p>
          </div>
        </div>



        <div class="swiper-slide">
          <img src="<?= base_url() ?>public/assets/web/img/pre-loader/center-top.png" alt="Audi Ceramic Coating" />
          <div class="banner-center">
            <h2><span>Top-Quality Car Service At Affordable Prices</span> </h2>
            <p>Protect Your Pride • Feel The Difference</p>
          </div>
        </div>

        <div class="swiper-slide">
          <img src="<?= base_url() ?>public/assets/web/img/newimg/banner2.png" alt="Mercedes Detailing" />
          <div class="banner-center">
            <h2><span>Top Class Interior Car Polish Service In Newtown</span> </h2>
            <p>Luxury Inside • Perfection Outside</p>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>

    <div class="mobile-search sticky-search">
      <input type="text" placeholder="Search for services, products..." class="search-input" />
      <i class="fas fa-search search-icon"></i>
    </div>
  </section>




  <!-- ======================================= -->



  <!-- =============== Sticky Logo Courasel ================  -->

  <div class="container  logo-courasel">
    <div class="swiper logo-carousel">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="<?= base_url() ?>public/assets/web/img/brand_logos/1.png" alt="Audi">
          <span class="brand-caption">Audi</span>
        </div>
        <div class="swiper-slide">
          <img src="<?= base_url() ?>public/assets/web/img/brand_logos/2.png" alt="BMW">
          <span class="brand-caption">BMW</span>
        </div>
        <div class="swiper-slide">
          <img src="<?= base_url() ?>public/assets/web/img/brand_logos/3.png" alt="Jaguar">
          <span class="brand-caption">Jaguar</span>
        </div>
        <div class="swiper-slide">
          <img src="<?= base_url() ?>public/assets/web/img/brand_logos/4.png" alt="Skoda">
          <span class="brand-caption">Skoda</span>
        </div>
        <div class="swiper-slide">
          <img src="<?= base_url() ?>public/assets/web/img/brand_logos/5.png" alt="Mercedes">
          <span class="brand-caption">Mercedes</span>
        </div>
        <div class="swiper-slide">
          <img src="<?= base_url() ?>public/assets/web/img/brand_logos/6.png" alt="Ford">
          <span class="brand-caption">Ford</span>
        </div>
        <div class="swiper-slide">
          <img src="<?= base_url() ?>public/assets/web/img/brand_logos/7.png" alt="Suzuki">
          <span class="brand-caption">Suzuki</span>
        </div>
        <div class="swiper-slide">
          <img src="<?= base_url() ?>public/assets/web/img/brand_logos/8.png" alt="Hyundai">
          <span class="brand-caption">Hyundai</span>
        </div>
        <!-- Add more slides as needed -->
      </div>
    </div>
  </div>


  <!-- ====================================================================== -->


  <!-- ============= Car Services =================  -->

  <style>
    /* Section Styling */
    .services-section {
      padding-top: 0px !important;
      background: var(--bacckground);
      padding-top: 3rem;
    }

    /* Section Heading */
    .section-heading {
      text-align: center;
      margin-bottom: 1.8rem;
      position: relative;
    }



    .section-subtitle {
      font-size: 0.95rem;
      color: var(--section-subtitle);
      margin: 0;
    }

    /* Service Cards */
    .service-card {
      position: relative;
      border-radius: 16px;
      color: var(--card-text);
      height: 150px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.25);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service-card::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.45);
      /* dark overlay for readability */
      z-index: 1;
      border-radius: 16px;
    }

    .service-card * {
      position: relative;
      z-index: 2;
    }

    .service-card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.35);
    }

    .service-card .icon {
      font-size: 2rem;
      color: white;
      margin-bottom: 10px;
      padding-bottom: 30px;
    }

    .service-card h5 {
      font-size: 1.5rem;
      color: var(--white);
      font-weight: 600;
      padding-top: 40px;
    }

    .service-container {
      padding-top: 20px;
      padding-bottom: 20px;
    }

    /* Background images for each card */
    .bg-service-1 {
      background-image: url("<?= base_url() ?>public/assets/web/img/images.jpeg");
    }

    .bg-service-2 {
      background-image: url("<?= base_url() ?>public/assets/web/img/images.jpeg");
    }

    .bg-service-3 {
      background-image: url("<?= base_url() ?>public/assets/web/img/images.jpeg");
    }

    .bg-service-4 {
      background-image: url("<?= base_url() ?>public/assets/web/img/images.jpeg");
    }

    .bg-service-5 {
      background-image: url("<?= base_url() ?>public/assets/web/img/images.jpeg");
    }

    .bg-service-6 {
      background-image: url("<?= base_url() ?>public/assets/web/img/images.jpeg");
    }

    .text-center i {
      color: white;
      font-size: 1.7rem;
    }

    /* Responsive grid */
    @media (min-width: 768px) {

      /* Desktop - 2 per row */
      .col-md-6 {
        flex: 0 0 auto;
        width: 50%;
      }
    }

    @media (max-width: 767px) {

      /* Mobile - 3 per row */
      .col-4 {
        flex: 0 0 auto;
        width: 33.3333%;
      }

      .section-title {
        font-size: 1.4rem;
      }

      .service-card .icon {
        font-size: 1.5rem;
        padding-bottom: 25px;
      }

      .service-card h5 {
        font-size: 0.8rem;
        padding-top: 20px;
      }

      .service-card {
        height: 100px;
      }
    }
  </style>


  <section class="services-section ">
    <div class="container service-container">

      <!-- Section Heading -->
      <div class="section-heading text-center mb-4">
        <h1 class="section-title">Services</h2>
          <p class="section-subtitle">Choose the perfect care for your car</p>
      </div>

      <!-- Services Grid -->
      <div class="row g-3 justify-content-center">

        <!-- Card 1 -->
        <div class="col-4 col-md-6">
          <div class="service-card bg-service-1 text-center">
            <i class="fa-solid fa-spray-can-sparkles"></i>
            <h5>Wax Polish</h5>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-4 col-md-6">
          <div class="service-card bg-service-2 text-center">
            <i class="fa-solid fa-gauge-high"></i>
            <h5>Dashboard Polish</h5>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-4 col-md-6">
          <div class="service-card bg-service-3 text-center">
            <i class="fa-solid fa-broom"></i>
            <h5>Vaccum Cleaning</h5>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="col-4 col-md-6">
          <div class="service-card bg-service-4 text-center">
            <i class="fa-solid fa-soap"></i>
            <h5>Foam Wash</h5>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="col-4 col-md-6">
          <div class="service-card bg-service-5 text-center">
            <i class="fa-solid fa-gem"></i>
            <h5>Nickel Polish</h5>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="col-4 col-md-6">
          <div class="service-card bg-service-6 text-center">
            <i class="fa-solid fa-splotch"></i>
            <h5>Glass Scratch Removing</h5>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ==============================  -->

  <!-- ========= About Section ============= -->

  <section class="about-section padd-mar">
    <div class="about-container">

      <div class="about-text">
        <h3 class="about-title section-title">Aone Car Polish</h3>

        <p class="about-short">
          Welcome to Aone Car Polish, the only first-class best car polish service in Newtown Kolkata.
          Our experts can provide the best car detailing services in Newtown Kolkata because they
          have the training and several years of experience in this field.

        <p class="about-short"> We have turned ordinary-looking Maruti Suzuki, Hyundai, Tata, Mahindra, Mercedes, BMW, Audi,
          Toyota and others into shiny and sparkling vehicles.</p>
        </p>

        <!-- Hidden extra content -->
        <div class="about-extra">
          <h3 class="section-title">
            Luxury Teatment For Luxury Cars
            </h2>
            <p>
              uses top car polish brands like Turtle, Foxcare, 3M, and Sheeba to bring the lost shine to your car.
              Customers trust us because we provide the correct car polish for the right car. For example,
              a polish meant for leather seats will damage if used on vinyl upholstery.

            <p> Aone Car Polish equals trust. Our personal treatment of your cars will bring them back to life.</p>

            <p>However, you often meet with disappointment because either the service is not up to the mark or
              they use cheap products for your luxurious cars. It is where we differ. We look for quality over
              anything else so our customers can receive their cars with big smiles. Contact us today for our
              top set of car services.</p>
            </p>

            <h3 class="section-title">We Ensure Best Quality Service</h3>
            <p>
              Customers from all over the city and the suburbs have availed of our top car polish service in
              Newtown Kolkata because of our quality service. We understand that you spend your hard-earned
              money to polish up your car and maintain them to your very best. So, you search for the best
              car detailing service in Newtown Kolkata on the internet.
            </p>
        </div>

        <div class="btn-group">
          <button class="read-more-btn">Read More</button>
          <a href="#" class="service-btn">Explore Our Services</a>
        </div>

      </div>

      <div class="about-img">
        <img src="<?= base_url() ?>public/assets/web/img/newimg/3.png" alt="Car Image">
      </div>

    </div>
  </section>






  <!-- ====================================== -->


  <!-- ========== Top services Near You ============== -->


  <div class="container services-nearu padd-mar">
    <h3 class="section-title">Top Car Polish Services Near You</h3>
    <div class="swiper polish-swiper">
      <div class="swiper-wrapper">
        <!-- Card 1 -->
        <div class="swiper-slide container">
          <div class="car-service-card">
            <div class="service-image-wrapper">
              <img src="<?= base_url() ?>public/assets/web/img/aqr.png" class="card-service-img" alt="Premium Polish">
              <div class="offer-badge">20% OFF</div>
            </div>
            <div class="car-service-card-body">
              <div class="car-service-title">Premium Car Polish</div>
              <div class="small text-secondary mb-1">
                <span class="text-success">&#9733; 4.8</span> • 30-40 mins
              </div>
              <div class="small">From ₹1299</div>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="swiper-slide container">
          <div class="car-service-card">
            <div class="service-image-wrapper">
              <img src="<?= base_url() ?>public/assets/web/img/aqr.png" class="card-service-img" alt="Express Detailing">
              <div class="offer-badge">Free Pickup</div>
            </div>
            <div class="car-service-card-body">
              <div class="car-service-title">Express Detailing</div>
              <div class="small text-secondary mb-1">
                <span class="text-success">&#9733; 4.7</span> • 20-30 mins
              </div>
              <div class="small">From ₹699</div>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="swiper-slide container">
          <div class="car-service-card">
            <div class="service-image-wrapper">
              <img src="<?= base_url() ?>public/assets/web/img/aqr.png" class="card-service-img" alt="Ceramic Shine">
              <div class="offer-badge">Best Seller</div>
            </div>
            <div class="car-service-card-body">
              <div class="car-service-title">Ceramic Shine</div>
              <div class="small text-secondary mb-1">
                <span class="text-success">&#9733; 4.9</span> • 2 hrs
              </div>
              <div class="small">From ₹2499</div>
            </div>
          </div>
        </div>
        <!-- Add more cards as needed -->
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>




  <!-- ======================= -->

  <!-- ================= Banner Sliders with Offers ===========================  -->

  <div class="container banner-slider padd-mar">
    <div class="swiper banner-carousel">
      <div class="swiper-wrapper">

        <!-- Slide 1 -->
        <div class="swiper-slide">
          <img class="slide-bg" src="<?= base_url() ?>public/assets/web/img/banner_slider.png" alt="Polish Offer">
          <div class="slide-overlay"></div>

          <div class="slide-text">
            <div class="slide-headline">Full Body Wax Polish</div>
            <div class="slide-subtext">
              Aone Car Polish offers top-quality car polish service in Newtown Kolkata at attractive prices.
              Our service can make your dull-looking car shine like never before.
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide">
          <img class="slide-bg" src="<?= base_url() ?>public/assets/web/img/banner_slider.png" alt="Express Service">
          <div class="slide-overlay"></div>

          <div class="slide-text">
            <div class="slide-headline">Dashboard & Door Wax Polish</div>
            <div class="slide-subtext">
              Aone Car Polish provides a specific dashboard and door polish service for your car.
              This helps maintain one of the most neglected parts of your vehicle, keeping it clean and shiny.
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide">
          <img class="slide-bg" src="<?= base_url() ?>public/assets/web/img/banner_slider.png" alt="Detailing Package">
          <div class="slide-overlay"></div>

          <div class="slide-text">
            <div class="slide-headline">Full Interior Vacuum Cleaning</div>
            <div class="slide-subtext">
              Get interior vacuum cleaning service and save yourself from the time and hassle of cleaning
              the nooks and corners of your car’s interior. We ensure a spotless and refreshed cabin experience.
            </div>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="swiper-slide">
          <img class="slide-bg" src="<?= base_url() ?>public/assets/web/img/banner_slider.png" alt="Polish Offer">
          <div class="slide-overlay"></div>

          <div class="slide-text">
            <div class="slide-headline">All Seat Foam Wash</div>
            <div class="slide-subtext">
              Aone Car Polish offers seat foam wash and polish service that cleans your dirty seat covers
              and restores shine.
            </div>
          </div>
        </div>

        <!-- Slide 5 -->
        <div class="swiper-slide">
          <img class="slide-bg" src="<?= base_url() ?>public/assets/web/img/banner_slider.png" alt="Express Service">
          <div class="slide-overlay"></div>

          <div class="slide-text">
            <div class="slide-headline">NICKEL Chrome Wax Polish</div>
            <div class="slide-subtext">
              Bring back the lost shine to your nickel chrome with Aone Car Polish’s top-class polishing service.
            </div>
          </div>
        </div>

        <!-- Slide 6 -->
        <div class="swiper-slide">
          <img class="slide-bg" src="<?= base_url() ?>public/assets/web/img/banner_slider.png" alt="Detailing Package">
          <div class="slide-overlay"></div>

          <div class="slide-text">
            <div class="slide-headline">Headlamp & Scratch Removing</div>
            <div class="slide-subtext">
              Avoid accidents with expert yellow headlamp cleaning and polishing service at an affordable price.
            </div>
          </div>
        </div>

      </div>

      <!-- Pagination -->
      <div class="swiper-pagination" style="z-index: 3; bottom:-5px;"></div>
    </div>
  </div>








  <!-- ============================================  -->


  <!-- ============== Types of Car Wash============================= -->



  <div class="container car-wash padd-mar">
    <h4 class="section-title">Types of Car Washes</h4>
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


  <!--=======================================  -->


  <div class="responsive-offer-banner padd-mar">
    <img src="<?= base_url() ?>public/assets/web/img/newimg/banner2.png" alt="Offer Banner">
    <div class="offer-banner-content">
      <span id="animated-text" class="offer-banner-text"></span>
      <a href="#book" class="offer-banner-btn">Book Now</a>
    </div>
  </div>









  <!-- ======================================== -->


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





  <!-- ================ Why Chooses Us ========================== -->

  <section class="features-section padd-mar">
    <div class="container">
      <!-- Section Heading -->
      <div class="text-center ">
        <h3 class="section-title">Why Choose Us</h3>

      </div>

      <!-- Features Row -->
      <div class="feature-row d-flex justify-content-between ">
        <div class="feature-card ">
          <div class="feature-icon mb-2">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h6 class="feature-title">Trusted & Safe</h6>
        </div>

        <div class="feature-card ">
          <div class="feature-icon mb-2">
            <i class="fas fa-clock"></i>
          </div>
          <h6 class="feature-title">Quick & Efficient</h6>
        </div>

        <div class="feature-card ">
          <div class="feature-icon mb-2">
            <i class="fas fa-star"></i>
          </div>
          <h6 class="feature-title"> High Quality</h6>
        </div>

        <div class="feature-card ">
          <div class="feature-icon mb-2">
            <i class="fas fa-hand-holding-usd"></i>
          </div>
          <h6 class="feature-title">Low Prices</h6>
        </div>
      </div>
    </div>
  </section>



  <!-- ============================================ -->


  <!-- ============== Services FAQ ================= -->


  <section class="faq-section door-services padd-mar">
    <div class="overlay"></div>
    <div class="container position-relative">
      <div class="text-center mb-5">
        <h3 class="section-title text-white">Services at your door step</h3>

      </div>

      <div class="accordion" id="faqAccordion">
        <!-- FAQ 1 -->
        <div class="accordion-item">
          <h4 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              <span class="faq-icon me-2">+</span>
              Full Car Body Wax Polish
            </button>
          </h4>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              <ol>
                <li> We clean the car body of dust and dirt by spraying water.</li>
                <li> Wipe the car body to remove fingerprints, oil stains and bird droppings.</li>
                <li>Use hi-quality softner or shampoo solution to remove excess dirt and dust.</li>
                <li> Apply polish most suitable for your car body using a proper brush.</li>
                <li> Use a sealant or wax to protect the car polish.</li>
              </ol>
            </div>
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="accordion-item">
          <h4 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <span class="faq-icon me-2">+</span>
              Dashboard Cleaning & Wax Polish
            </button>
          </h4>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              <ol>
                <li>First, we take all the trash out of your car.</li>
                <li> We use a vacuum cleaner to remove dirt and small dust particles.</li>
                <li>Use professional dashboard cleaner to wipe off dirt and dust.</li>
                <li> Apply dashboard-specific polish to make it shine.</li>
                <li> A cleansing solution and a cloth to wipe off the infotainment screen.</li>
              </ol>
            </div>
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="accordion-item">
          <h4 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <span class="faq-icon me-2">+</span>
              All Seat Foam Wash & Polish


            </button>
          </h4>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              <ol>
                <li>Inspection of perforated areas before vacuuming.</li>
                <li> A solution to clean your dirty seat.</li>
                <li>We use a microfiber cloth to wipe the seats.</li>
                <li> Polishing time for leather or vinyl upholstery car seats.</li>
                <li> Application of conditioner to protect the polish.</li>
              </ol>
            </div>
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="accordion-item">
          <h4 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              <span class="faq-icon me-2">+</span>
              Nickel Chrome Wax Polish
            </button>
          </h4>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">

              <ol>
                <li>Soap and water for basic cleaning of your nickel chrome.</li>
                <li> We use vinegar & baking soda to remove stubborn spots.</li>
                <li>Removal of rust from your car nickel chrome.</li>
                <li> Application of polish meant for nickel.</li>
                <li>Buffing off with a small cloth to dry it.</li>
              </ol>
            </div>
          </div>
        </div>


        <!-- FAQ 5 -->
        <div class="accordion-item">
          <h4 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              <span class="faq-icon me-2">+</span>
              Full Interior Vaccum Cleaning
            </button>
          </h4>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">

              <ol>
                <li>Selection of the correct vacuum cleaner and attachments.</li>
                <li> Use a crevice tool to drag dirt out from unreachable places.</li>
                <li> Use dusting brush to avoid damage to any part of a car.</li>
                <li>Vacuum cleaner extensions help to clean dirt from invisible places.</li>
                <li>A turbo brush removes hair from upholstery seats.</li>
              </ol>
            </div>
          </div>
        </div>

        <!-- FAQ 6 -->
        <div class="accordion-item">
          <h4 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              <span class="faq-icon me-2">+</span>
              Headlamp & All Glass Scratch Removing
            </button>
          </h4>
          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">

              <ol>
                <li>Soap and water to remove dirt and dust from headlamps and glasses.</li>
                <li> We use tape to cover all the painted areas around the headlights.</li>
                <li>Sandpaper and toothpaste to clean the glasses.</li>
                <li> Polishing up of headlights for shine, gloss and better beam.</li>
                <li>Use of sealant to protect polish on your car headlights.</li>
              </ol>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>








  <!-- ======================================================= -->












  <!-- =================== Choose Your Package ==========================  -->

  <section class="packages-section padd-mar">
    <div class="container">
      <div class="text-center">
        <h2 class="section-title">Choose Your Package</h2>
      </div>

      <!-- Brand & Model Selection -->
      <div class="row mb-4 g-2 align-items-center justify-content-center">
        <div class="col-6 col-sm-3">
          <select id="brandSelect" class="form-select">
            <option value="" disabled selected>Select Brand</option>
            <option value="toyota">Toyota</option>
            <option value="honda">Honda</option>
            <option value="bmw">BMW</option>
          </select>
        </div>
        <div class="col-6 col-sm-3">
          <select id="modelSelect" class="form-select" disabled>
            <option value="" disabled selected>Select Model</option>
          </select>
        </div>
      </div>

      <!-- Packages Grid -->
      <div class="row" id="packagesGrid">
        <p class="text-center" style="color: #666;">Please select a brand to view models.</p>
      </div>
    </div>
  </section>




  <!-- =============================================  -->



  <!-- ================== Youtube Shorts Area  ======================= -->



  <div class="container padd-mar shorts-section">
    <h3 class="section-title">Our Car Polish Shorts</h3>
    <div class="swiper portrait-slider">
      <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide">
          <div class="video-container">
            <iframe src="https://www.youtube.com/embed/b6jvx8l7cJo?si=P24Fc67lMJz8HhXg" allowfullscreen></iframe>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="swiper-slide">
          <div class="video-container">
            <iframe src="https://www.youtube.com/embed/Wak9lxoUzCU?si=RiyeEUdyN7I7Q-dc" allowfullscreen></iframe>
          </div>
        </div>
        <!-- Slide 3 -->
        <div class="swiper-slide">
          <div class="video-container">
            <iframe src="https://www.youtube.com/embed/E9597CR7VoA?si=_HHgWiPKYCI1rYbC" allowfullscreen></iframe>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="swiper-slide">
          <div class="video-container">
            <iframe src="https://www.youtube.com/embed/E9597CR7VoA?si=_HHgWiPKYCI1rYbC" allowfullscreen></iframe>
          </div>
        </div>
        <!-- Add as many slides as needed -->
      </div>
      <!-- Navigation Arrows (Desktop Only) -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

      <div class="swiper-pagination"></div>
    </div>
  </div>





  <!-- ==================================================== -->









  <!-- ===================================== -->


  <!-- ===================== Blogs Section =========================== -->


  <style>
    .blog-tags-group {
      margin-top: 6px;
      margin-bottom: 7px;
      display: flex;
      flex-wrap: wrap;
      gap: 6px;
    }

    .blog-tags {
      background: #e4bb25;
      color: #fff;
      font-size: .81rem;
      font-weight: 500;
      border-radius: 7px;
      padding: 3px 8px;
      letter-spacing: .04em;
      display: inline-block;
    }

    .blogs-section {
      background: var(--bacckground);
      padding: 50px 0 35px;
    }

    /* Responsive breakpoints */
    @media (max-width: 992px) {
      .blogs-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    .blogs-section {
      max-width: 1200px;
      margin: 50px auto;
      padding: 0 20px;
    }

    .blogs-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
    }

    .blog-date {
      color: #7e7009;
      font-size: 0.78rem;
      font-weight: 600;
      margin-top: 3px;
      margin-bottom: 0;
      letter-spacing: .5px;
    }

    .blogs-title {
      font-size: 2rem;
      font-weight: 800;
      color: #222;
      margin-bottom: 30px;
      text-align: center;
    }

    .blog-row {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px 24px;
    }

    .blog-card {
      background: #fff;
      border-radius: 14px;
      box-shadow: 0 4px 16px rgba(81, 97, 127, 0.10);
      width: 100%;
      max-width: 350px;
      padding: 2px 2px 4px 2px;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      transition: box-shadow 0.2s, transform 0.18s;
    }

    .blog-card:hover {
      box-shadow: 0 10px 24px rgba(81, 97, 127, 0.15);
      transform: translateY(-6px);
    }

    .blog-img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      border-radius: 9px;
      margin-bottom: 14px;
    }

    .blog-title {
      font-size: 1.18rem;
      font-weight: 700;
      color: #222;
      margin-bottom: 6px;
      padding-left: 2px;
    }

    .blog-desc {
      color: #64686d;
      font-size: 0.91rem;
      margin-bottom: 0;
      padding: 2px;
    }

    .blog-card {
      flex: 1 1 30%;
      max-width: 31%;
    }

    @media (max-width: 800px) {
      .blog-card {
        max-width: 32%;
      }
    }

    /* Extra small screens */
    @media (max-width: 576px) {
      .explore-bttn {
        width: 235px !important;
        font-weight: 500 !important;
        font-size: .95rem !important;
        padding: 8px 8px !important;
      }

      .blog-tag {
        font-size: .51rem;
      }

      .blog-title {
        font-size: .8rem;
        margin-bottom: 2px;
      }

      .blog-date {
        font-size: .6rem;
      }

      .blog-desc {
        font-size: .6rem;
      }

      .blog-card {
        max-width: 49%;
        padding: 5px 5px 5px 5px;
      }

      .blog-img {
        height: 98px;
      }

      .blog-row {
        gap: 15px 8px;
      }

      .blog-card.hide-mobile {
        display: none !important;
      }
    }

    /* Very small screens */
    @media (max-width: 400px) {
      .blog-card {
        max-width: 99vw;
      }

      .blog-card p {
        margin-bottom: .5rem;
      }
    }

    .explore-bttn {
      display: block;
      width: 262px;
      margin: 30px auto 0;
      background: #222;
      color: #fff7cc;
      font-weight: 700;
      font-size: 1.15rem;
      padding: 13px 44px;
      border-radius: 8px;
      border: none;
      transition: background 0.2s, color 0.2s;
      text-align: center;
      text-decoration: none;
      letter-spacing: .5px;
    }

    .explore-bttn:hover {
      background: #ffce25;
      color: #222;
    }

    .blog-content {
      padding-left: 8px;
    }

    /* --------------------------------------------- */
    /* SHOW ONLY FIRST 3 BLOGS ON DESKTOP */
    /* --------------------------------------------- */
    .blog-card:nth-child(n+4) {
      display: none;
    }

    /* --------------------------------------------- */
    /* SHOW ONLY FIRST 2 BLOGS ON MOBILE */
    /* --------------------------------------------- */
    @media (max-width: 576px) {
      .blog-card:nth-child(n+3) {
        display: none !important;
      }
    }
  </style>




  <section class="blogs-section">
    <h2 class="section-title">Our Latest Car Polish Tips</h2>
    <div class="blogs-grid blog-row">

      <?php if (!empty($blg)) : ?>
        <?php
        $index = 0;
        foreach ($blg as $blog) :
          $index++;
        ?>

          <div class="blog-card blog-page blog-item item-<?= $index ?>">
            <img class="blog-img" src="<?= base_url('public/uploads/blogs/' . $blog['b_img']) ?>" alt="<?= esc($blog['b_title']) ?>">

            <div class="blog-content">

              <?php if (!empty($blog['b_tags'])): ?>
                <?php $tag = explode(',', $blog['b_tags']); ?>
                <?php foreach ($tag as $t): ?>
                  <div class="blog-tags"><?= esc($t) ?></div>
                <?php endforeach ?>
              <?php endif ?>

              <div class="blog-title"><?= esc($blog['b_title']) ?></div>
              <div class="blog-desc">
                <?= substr(html_entity_decode($blog['b_desc']), 0, 80) ?>
              </div>


              <div class="blog-date fas fa-calendar"> <?= date('j F Y', strtotime($blog['created_at'])) ?></div>
            </div>
          </div>

        <?php endforeach; ?>
      <?php else : ?>
        <p>No blogs available right now.</p>
      <?php endif; ?>

    </div>
    <a href="<?= base_url('/blogs') ?>" class="explore-bttn">Explore Our Blogs</a>
  </section>







  <!-- ===================================================================== -->

  <!-- =================== FAQ Section  ========================= -->

  <section class="faq-section padd-mar">
    <div class="overlay"></div>
    <div class="container position-relative">
      <div class="text-center mb-5">
        <h3 class="section-title text-white">Frequently Asked Questions</h3>

      </div>

      <div class="accordion" id="faqAccordion">
        <!-- FAQ 1 -->
        <div class="accordion-item">
          <h5 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              <span class="faq-icon me-2">+</span>
              What services do you offer?
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
              data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                We provide car polishing, detailing, ceramic coating, interior cleaning, and many more to make your car shine like new.
              </div>
            </div>
        </div>

        <!-- FAQ 2 -->
        <div class="accordion-item">
          <h6 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <span class="faq-icon me-2">+</span>
              How long does the detailing process take?
            </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
              data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Depending on the package, it can take anywhere from 1 to 4 hours to complete your car’s detailing process.
              </div>
            </div>
        </div>

        <!-- FAQ 3 -->
        <div class="accordion-item">
          <h6 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <span class="faq-icon me-2">+</span>
              Do I need to book an appointment in advance?
            </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
              data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Yes, we recommend booking your appointment in advance to ensure availability and faster service.
              </div>
            </div>
        </div>

        <!-- FAQ 4 -->
        <div class="accordion-item">
          <h6 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              <span class="faq-icon me-2">+</span>
              What payment methods do you accept?
            </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
              data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                We accept cash, credit/debit cards, UPI, and most major online payment methods.
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>





  <!-- ================= Bottom Text======================== -->






  <!-- =================================== -->





</main>







<!-- ========================= -->
<!-- ⭐ MOBILE OFFER POPUP ⭐ -->
<!-- ========================= -->
<div class="mobile-offer-popup" id="mobileOfferModal" style="display:none; opacity:0;">
  <div class="mobile-offer-sheet">
    <span class="close-offer" onclick="closeMobileOffer()">&times;</span>
    <div class="offer-icon">&#x1F381;</div>
    <div class="offer-content">
      <h3 class="offer-title">Limited Time Mobile Offer!</h3>
      <p class="offer-desc">Unlock 20% off your next car polish.<br><b>Exclusive on mobile devices!</b></p>
      <a href="#" class="offer-btn">Claim Offer</a>
    </div>
  </div>
</div>

<style>
  .mobile-offer-popup {
    position: fixed;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    z-index: 9999;
    background: rgba(34, 34, 60, 0.23);
    display: flex;
    align-items: flex-end;
    justify-content: center;
    pointer-events: none;
    transition: background 0.2s;
    opacity: 0;
  }

  /* Fade-in animation */
  .mobile-offer-popup.fade-in {
    animation: fadeInBg 0.35s ease forwards;
  }

  @keyframes fadeInBg {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  .mobile-offer-popup .mobile-offer-sheet {
    width: 100vw;
    max-width: 500px;
    margin-bottom: 0;
    min-height: 49vh;
    height: 60vh;
    background: linear-gradient(120deg, #ffe99bff 0%, #ffb657ff 100%);
    border-radius: 19px 19px 0 0;
    box-shadow: 0 -2px 32px rgba(80, 58, 10, .15);
    padding: 38px 20px 32px 20px;
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    animation: bottomSheetSlideUp 0.35s cubic-bezier(.49, 1.6, .51, .81);
    pointer-events: auto;
  }

  @keyframes bottomSheetSlideUp {
    from {
      transform: translateY(120%);
    }

    to {
      transform: translateY(0);
    }
  }

  .close-offer {
    position: absolute;
    top: 14px;
    right: 18px;
    font-size: 2rem;
    color: #7b650c;
    background: #ffeccc;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    text-align: center;
    line-height: 35px;
    font-weight: 700;
    cursor: pointer;
    box-shadow: 0 2px 8px rgba(153, 123, 30, 0.05);
  }

  .offer-icon {
    font-size: 2.2rem;
    margin-bottom: 10px;
    color: #ffbb2e;
  }

  .offer-content {
    text-align: center;
  }

  .offer-title {
    font-size: 1.22rem;
    font-weight: 800;
    color: #46380b;
    margin-bottom: 13px;
    margin-top: 2px;
  }

  .offer-desc {
    font-size: 1rem;
    color: #a98b25;
    margin-bottom: 25px;
  }

  .offer-btn {
    background: linear-gradient(90deg, #ffbe40 20%, #ffd748 100%);
    color: #423107;
    padding: 13px 43px;
    font-size: 1.13rem;
    border-radius: 8px;
    font-weight: 700;
    text-decoration: none;
    box-shadow: 0 7px 21px #ffefb0ba;
    transition: background 0.23s;
    display: inline-block;
    margin-bottom: 8px;
  }

  .offer-btn:hover {
    background: #ffe585;
    color: #5e4010;
    box-shadow: 0 2px 11px #ffe8a951;
  }

  @media (min-width:601px) {
    .mobile-offer-popup {
      display: none !important;
    }
  }
</style>

























<?= $this->endSection(); ?>