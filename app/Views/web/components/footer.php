
<!-- ================= Bottom Text======================== -->


 <!-- Do NOT wrap this in a Bootstrap .container -->
  <div class="polish-hero-bg padd-mar">
    <div class="w-100">
      <div class="polish-hero-title">
        India's fastest<br>car polish service
        <span class="polish-hero-heart">&hearts;</span>
      </div>
      <div class="polish-hero-brand">Aone Car Polish</div>
    </div>
  </div>





















<!-- Sticky Bottom Nav (Mobile) -->
<nav class="bottom-nav">
    <a href="<?= base_url() ?>/" class="nav-item active">
        <i class="fas fa-home"></i>
        <span>Home</span>
    </a>
    <a href="<?= base_url() ?>/services" class="nav-item">
        <i class="fas fa-tools"></i>
        <span>Services</span>
    </a>

    <a href="<?= base_url() ?>/before_after" class="nav-item">
        <i class="fas fa-exchange-alt"></i>
        <span>Before/After</span>
    </a>

    <a href="<?= base_url() ?>/contact_us" class="nav-item">
        <i class="fa fa-address-book"></i>
        <span>Contact Us</span>
    </a>


</nav>












<!--=================== Footer Section ================= -->
<footer class="classic-footer">
    <div class="footer-overlay"></div>
    <div class="container footer-container">

        <!-- Brand Section -->
        <div class="footer-section about">
            <div class="footer-logo-box">
                <img src="<?= base_url() ?>public/assets/web/img/aone-car-polish-logo.png" alt="AutoShine Logo" class="footer-logo-img">
            </div>
            <p>Aone Car Polish Can Convert Your Oh-So-Dirty-Looking Car Into A Shiny Luxurious Vehicle.
                We Provide A Complete Service Package At Affordable Prices.
                You Will Always Get A Personal Touch To Your DEAREST CAR.</p>
            <hr>
            <div class="footer-socials">
                <h6 class="footer-title text-white">Follow Us:</h6>
                <a href="https://www.facebook.com/aonecarpolish" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/aonecarpolish?utm_source=ig_web_button_share_sheet&igsh=MWN5MDFpaXIwMmRzNA==" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://youtube.com/@aonebox?si=5shDW4wZafy_wrF2" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                <a href="https://wa.me/85850 52925" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
            </div>
            <hr>
        </div>

        <!-- Quick Links -->
        <div class="footer-section links">
            <h4 class="footer-title text-white">Quick Links</h4>
            <ul>
                <li><a href="<?= base_url() ?>/"><span><i class="fa-solid fa-house"></i></span> Home</a></li>
                <li><a href="#"><i class="fa-solid fa-address-card"></i> About Us</a></li>
                <li><a href="<?= base_url() ?>/services"><i class="fa-solid fa-car-on"></i></i> Services</a></li>
                <li><a href="<?= base_url() ?>/services"><i class="fa-solid fa-spray-can"></i> Packages</a></li>
                <li><a href="<?= base_url() ?>/contact_us"><i class="fa-solid fa-phone-volume"></i> Contact</a></li>
            </ul>
        </div>

        <!-- Services -->
        <div class="footer-section services">
            <h4 class="footer-title text-white">Car Care Services</h4>
            <ul>
                <li><a href="#">Ceramic Coating</a></li>
                <li><a href="#">Interior Detailing</a></li>
                <li><a href="#">Paint Protection</a></li>
                <li><a href="#">Foam Wash</a></li>
                <li><a href="#">Headlight Restoration</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div class="footer-section contact">
            <h4 class="footer-title text-white">Contact Us</h4>
            <p><i class="fas fa-map-marker-alt"></i> 5D, Newtown Square, Near Chinar Park, Newtown AA-II, Kolkata - 700136, West Bengal
            </p>
            <p><i class="fas fa-phone-alt"></i> +(91)85850 52925</p>
            <p><i class="fas fa-envelope"></i> care@aonecarpolish.com</p>
            <hr>
            <div class="subscribe-container">
                <h4>Subscribe & Get Updates..</h4>
                <div class="subscribe-form">
                    <input type="email" placeholder="Enter Email" class="email-input" />
                    <button class="subscribe-btn">SUBSCRIBE</button>
                </div>
            </div>
            <hr>

        </div>
    </div>

    <div class="footer-bottom">
        <p>© 2025 Aone CarPOlish. All Rights Reserved | Designed by <span>A-One Box Media</span></p>
    </div>
</footer>

<!-- ================================================== -->




<!-- ====================================================== -->
 <!-- ================== Script ARea ======================= -->
<!-- ======================================================= -->



<!-- =================== Before/After Section ======================= -->
<script>
    document.addEventListener("DOMContentLoaded", () => {

        document.querySelectorAll(".img-comp").forEach(container => {

            const overlay = container.querySelector(".img-comp-overlay");
            const slider = document.createElement("div");
            const line = document.createElement("div");

            slider.className = "img-comp-slider";
            line.className = "img-comp-line";

            container.appendChild(line);
            container.appendChild(slider);

            let dragging = false;
            let pos = 0,
                target = 0,
                velocity = 0;

            const getX = e => (e.touches ? e.touches[0].clientX : e.clientX);

            const update = x => {
                const rect = container.getBoundingClientRect();
                let offset = Math.max(0, Math.min(x - rect.left, rect.width));

                overlay.style.width = offset + "px";
                line.style.left = offset + "px";
                slider.style.left = offset + "px";
            };

            const animate = () => {
                velocity *= 0.88;
                pos += velocity;
                pos += (target - pos) * 0.12;

                update(pos);
                requestAnimationFrame(animate);
            };
            animate();

            const start = e => {
                dragging = true;
                pos = target = getX(e);
            };
            const move = e => {
                if (!dragging) return;
                const x = getX(e);
                velocity = x - target;
                target = x;
            };
            const end = () => dragging = false;

            slider.addEventListener("mousedown", start);
            line.addEventListener("mousedown", start);
            window.addEventListener("mousemove", move);
            window.addEventListener("mouseup", end);

            slider.addEventListener("touchstart", start, {
                passive: false
            });
            line.addEventListener("touchstart", start, {
                passive: false
            });
            window.addEventListener("touchmove", move, {
                passive: false
            });
            window.addEventListener("touchend", end);

            const init = () => {
                const rect = container.getBoundingClientRect();
                const centerX = rect.left + rect.width / 2;
                pos = target = centerX;
                update(centerX);
            };

            window.addEventListener("resize", init);
            init();
        });

    });
</script>
<!-- ======================================================================== -->

<!-- ======================================================================== -->
<!-- ===================== Header ============================= -->
<!-- ======================================================================== -->

<!-- ==================== PreLOader ================================ -->

<!-- ========================= -->
<!-- ⭐ PRELOADER SCRIPT ⭐ -->
<!-- ========================= -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    const preloader = document.getElementById("preloader");
    const logo = document.getElementById("brandLogo");
    const headerLogo = document.getElementById("headerLogo");
    const skip = document.querySelector(".preloaderCls");

    const mobilePopup = document.getElementById("mobileOfferModal");

    /* ======================= */
    /* SHOW MOBILE POPUP       */
    /* ======================= */
    const showMobilePopup = () => {
        if (window.innerWidth <= 600) {
            mobilePopup.style.display = "flex";

            // Fade after small delay
            setTimeout(() => {
                mobilePopup.classList.add("fade-in");
            }, 50);
        }
    };

    /* ======================= */
    /* CLOSE POPUP             */
    /* ======================= */
    window.closeMobileOffer = () => {
        mobilePopup.classList.remove("fade-in");
        setTimeout(() => {
            mobilePopup.style.display = "none";
        }, 250);
    };

    /* ======================= */
    /* END PRELOADER           */
    /* ======================= */
    const endPreloader = () => {
        headerLogo.style.opacity = "1";
        preloader.classList.add("hidden");

        // Show popup after preloader ends
        setTimeout(showMobilePopup, 500);
    };

    /* ======================= */
    /* ANIMATE LOGO            */
    /* ======================= */
    const animateLogoToHeader = () => {
        const logoRect = logo.getBoundingClientRect();
        const headerRect = headerLogo.getBoundingClientRect();
        const deltaX = headerRect.left - logoRect.left;
        const deltaY = headerRect.top - logoRect.top;

        logo.style.transition = "all 0.1s ease";
        logo.style.transform = `translate(${deltaX}px, ${deltaY}px) scale(0.6)`;

        setTimeout(endPreloader, 1200);
    };

    /* AUTO RUN AFTER 2 SEC */
    setTimeout(animateLogoToHeader, 2000);

    /* SKIP BUTTON */
    skip.addEventListener("click", animateLogoToHeader);
});
</script>



<!-- ======================================================================== -->



<!-- ======================= desktop nav ============================== -->

<script>
    // Sticky search only
    const search = document.querySelector(".mobile-search");
    window.addEventListener("scroll", () => {
        if (window.scrollY > 100) search.classList.add("stuck");
        else search.classList.remove("stuck");
    });

    // Modal toggle
    const modal = document.getElementById("profileModal");
    const btn = document.getElementById("profileBtn");
    const close = modal.querySelector(".modal-close");

    btn.addEventListener("click", () => modal.classList.add("active"));
    close.addEventListener("click", () => modal.classList.remove("active"));
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const navLinks = document.querySelectorAll(".desktop-nav .nav-link");
    const currentPath = window.location.pathname.replace(/\/+$/, "") || "/";

    navLinks.forEach((link) => {
        const href = link.getAttribute("href");

        // Skip placeholders like "#"
        if (!href || href === "#") return;

        const linkPath = new URL(link.href).pathname.replace(/\/+$/, "") || "/";

        // Remove existing active class
        link.classList.remove("active");

        // Add active only if the path matches current URL
        if (linkPath === currentPath) {
            link.classList.add("active");
        }
    });
});
</script>
<!-- ======================================================================== -->


<!-- ====================== MObile Nav ============================= -->

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const navItems = document.querySelectorAll(".bottom-nav .nav-item");
        const currentPath = window.location.pathname.replace(/\/+$/, "") || "/";

        navItems.forEach((item) => {
            const href = item.getAttribute("href");
            if (!href || href === "#") return; // skip placeholder links

            const linkPath = new URL(item.href).pathname.replace(/\/+$/, "") || "/";
            item.classList.remove("active");

            if (linkPath === currentPath) {
                item.classList.add("active");
            }
        });

    });
</script>
<!-- ======================================================================== -->

<!-- =========================================== -->
 <!-- =========== Home  Page ============== -->
<!-- =========================================== -->




<!-- =========================== FAQ Section ================================ -->
 
  <script>
    document.querySelectorAll('.accordion-button').forEach(button => {
      const icon = button.querySelector('.faq-icon');
      const target = document.querySelector(button.dataset.bsTarget);

      // Update icon when collapse opens/closes
      target.addEventListener('show.bs.collapse', () => {
        icon.textContent = '–'; // minus when opened
      });

      target.addEventListener('hide.bs.collapse', () => {
        icon.textContent = '+'; // plus when closed
      });
    });
  </script>
<!-- ======================================================================== -->


<!-- ======================= Youtube Shorts ============================== -->
  <script>
    var swiper = new Swiper('.portrait-slider', {
      slidesPerView: 2.1,
      spaceBetween: 18,
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        320: {
          slidesPerView: 1.2,
          spaceBetween: 9
        },
        540: {
          slidesPerView: 1.7,
          spaceBetween: 14
        },
        800: {
          slidesPerView: 2.1,
          spaceBetween: 18
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 22
        } /* 👈 Add this */
      }
    });
  </script>
  <!-- ========================================================== -->




     <!-- ================= Home page Banner ======================== -->
        <script>
    document.addEventListener("DOMContentLoaded", function() {
      const bannerSwiper = new Swiper(".banner-swiper", {
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true
        },
        autoplay: {
          delay: 3500,
          disableOnInteraction: false
        },
        effect: "fade",
        speed: 1000,
      });
    });
  </script>


     <!-- ========================================================== -->


<!-- =============== Home Page Sticky LOgo courassel ====================== -->


   <script>
    var swiper = new Swiper(".logo-carousel", {
      slidesPerView: 5,
      spaceBetween: 8,
      loop: true,
      autoplay: {
        delay: 1700,
        disableOnInteraction: false,
      },
      breakpoints: {
        320: {
          slidesPerView: 5, // 5 logos on smallest screens
          spaceBetween: 8,
        },
        480: {
          slidesPerView: 5, // 5 logos on most mobiles
          spaceBetween: 10,
        },
        768: {
          slidesPerView: 5,
          spaceBetween: 16,
        },
        992: {
          slidesPerView: 6,
          spaceBetween: 20,
        },
        1200: {
          slidesPerView: 7,
          spaceBetween: 24,
        }
      }
    });
  </script>


     <!-- ========================================================== -->

     <!-- =============== Home Page About Area ======================= -->




      <script>
    const readBtn = document.querySelector(".read-more-btn");
    const extraContent = document.querySelector(".about-extra");

    readBtn.addEventListener("click", () => {
      extraContent.style.display =
        extraContent.style.display === "block" ? "none" : "block";

      readBtn.textContent =
        readBtn.textContent === "Read More" ? "Read Less" : "Read More";
    });
  </script>

     <!-- ========================================================== -->

  <!-- ========== Top services Near You ============== -->


      <script>
    var swiper = new Swiper('.polish-swiper', {
      slidesPerView: 2.5,
      spaceBetween: 14,
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      breakpoints: {
        320: {
          slidesPerView: 2.1,
          spaceBetween: 9
        },
        460: {
          slidesPerView: 2.5,
          spaceBetween: 13
        },
        640: {
          slidesPerView: 3.3,
          spaceBetween: 14
        },
        1100: {
          slidesPerView: 4,
          spaceBetween: 16
        }
      }
    });
  </script>
  <!-- ============================================================ -->

  <!-- ================= Banner Sliders with Offers ===========================  -->



   <script>
    var swiper = new Swiper('.banner-carousel', {
      slidesPerView: 1,
      spaceBetween: 16,
      loop: true,
      autoplay: {
        delay: 3400,
        disableOnInteraction: false
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>

  <!-- ============================================================ -->


  <!-- ================= REsponsive offer banner with differnt texts ================== -->

  
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const messages = [
        "Services at your door step",
        "Choose Your Style",
        "find the one for you",
        "Find the best combination",
        "Get Pick & Drop Facility"
      ];

      let currentIndex = 0;
      let currentText = "";
      let isDeleting = false;
      const speed = 90;
      const waitTime = 1500;
      const animatedTextEl = document.getElementById("animated-text");

      function type() {
        const fullText = messages[currentIndex];

        if (isDeleting) {
          currentText = fullText.substring(0, currentText.length - 1);
        } else {
          currentText = fullText.substring(0, currentText.length + 1);
        }

        animatedTextEl.textContent = currentText;

        let typeSpeed = speed;

        if (!isDeleting && currentText === fullText) {
          typeSpeed = waitTime;
          isDeleting = true;
        } else if (isDeleting && currentText === "") {
          isDeleting = false;
          currentIndex = (currentIndex + 1) % messages.length;
          typeSpeed = 500;
        }

        setTimeout(type, typeSpeed);
      }

      // Start typing after DOM is ready
      type();
    });
  </script>

  <!-- ============================================================ -->


  <!-- ================ Services FAQ =========================== -->

  
  <script>
    document.querySelectorAll('.accordion-button').forEach(button => {
      const icon = button.querySelector('.faq-icon');
      const target = document.querySelector(button.dataset.bsTarget);

      // Update icon when collapse opens/closes
      target.addEventListener('show.bs.collapse', () => {
        icon.textContent = '–'; // minus when opened
      });

      target.addEventListener('hide.bs.collapse', () => {
        icon.textContent = '+'; // plus when closed
      });
    });
  </script>

  <!-- ============================================================ -->


    <!-- ===================Choose Your PAckage ====================== -->


     <script>
    document.addEventListener('DOMContentLoaded', function() {

      const brandModels = {
        toyota: ['Corolla', 'Camry', 'RAV4'],
        honda: ['Civic', 'Accord', 'CR-V'],
        bmw: ['3 Series', '5 Series', 'X5']
      };

      const packagesData = {
        'Corolla': [{
            name: 'Basic Wash',
            services: ['Exterior Wash', 'Interior Cleaning'],
            price: '$25',
            img: 'https://via.placeholder.com/150?text=Basic'
          },
          {
            name: 'Premium',
            services: ['Exterior Wash', 'Interior Cleaning', 'Waxing'],
            price: '$45',
            img: 'https://via.placeholder.com/150?text=Premium'
          }
        ],
        'Camry': [{
          name: 'Deluxe',
          services: ['Full Detail', 'Polish', 'Wax'],
          price: '$65',
          img: 'https://via.placeholder.com/150?text=Deluxe'
        }],
        'Civic': [{
            name: 'Basic',
            services: ['Exterior Wash'],
            price: '$20',
            img: 'https://via.placeholder.com/150?text=Basic'
          },
          {
            name: 'Full Detail',
            services: ['Wash', 'Wax', 'Interior Cleaning', 'Polish'],
            price: '$55',
            img: 'https://via.placeholder.com/150?text=Full+Detail'
          }
        ]
      };

      const brandSelect = document.getElementById('brandSelect');
      const modelSelect = document.getElementById('modelSelect');
      const packagesGrid = document.getElementById('packagesGrid');

      // Brand selection
      brandSelect.addEventListener('change', () => {
        const selectedBrand = brandSelect.value;
        modelSelect.innerHTML = '<option value="" disabled selected>Select Model</option>';

        if (brandModels[selectedBrand]) {
          brandModels[selectedBrand].forEach(model => {
            const option = document.createElement('option');
            option.value = model;
            option.textContent = model;
            modelSelect.appendChild(option);
          });
          modelSelect.disabled = false;
        } else {
          modelSelect.disabled = true;
        }

        packagesGrid.innerHTML = `<p class="text-center" style="color: #666;">Select a model to view packages.</p>`;
      });

      // Model selection
      modelSelect.addEventListener('change', () => {
        const selectedModel = modelSelect.value;
        const packages = packagesData[selectedModel] || [];
        packagesGrid.innerHTML = '';

        if (packages.length === 0) {
          packagesGrid.innerHTML = `<p class="text-center" style="color: #999;">No packages available for this model.</p>`;
          return;
        }

        packages.forEach(pkg => {
          const col = document.createElement('div');
          col.className = 'col-12 col-sm-6 col-md-4 col-lg-3 mb-4';
          col.innerHTML = `
        <div class="package-card">
          <div class="package-img">
            <img src="${pkg.img}" alt="${pkg.name}" 
                 onerror="this.onerror=null; this.src='https://via.placeholder.com/150?text=No+Image';">
          </div>
          <h5>${pkg.name}</h5>
          <ul>
            ${pkg.services.map(s => `<li>${s}</li>`).join('')}
          </ul>
          <div class="package-price">${pkg.price}</div>
        </div>
      `;
          packagesGrid.appendChild(col);
        });
      });

    });
  </script>

      <!-- ============================================================ -->








<!-- =========================================== -->
 <!-- =========== Services Page ============== -->
<!-- =========================================== -->

 
<!-- =============== google review section =============== -->



<script>
  document.addEventListener("DOMContentLoaded", function() {
    const swiper = new Swiper('.googleReviewSwiper', {
      slidesPerView: 3,
      spaceBetween: 24,
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 12
        }, // Mobile
        640: {
          slidesPerView: 2,
          spaceBetween: 16
        }, // Tablet
        1024: {
          slidesPerView: 3,
          spaceBetween: 24
        } // Desktop
      }
    });
  });
</script>

<!-- =========================================== -->



</body>

</html>