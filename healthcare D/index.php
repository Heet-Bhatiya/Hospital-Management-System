<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Sahaj Home</title>
  <meta name="title" content="Sahaj - Home">
  <meta name="description" content="This is a Hospital website For Pepoles made by Heet Bhatiya & Vatsal Bhayani">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href=".\assets\images\logo-removebg-preview.png" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Rubik:wght@400;500;700&display=swap"
    rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-bg.png">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class="preloader" data-preloader>
    <div class="circle"></div>
  </div>





  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">
      
        <a href="#" class="logo">
          <img src=".\assets\images\logo-removebg-preview.png" width="70" height="46" alt="Sahaj home">
        </a>

        <nav class="navbar" data-navbar>

          <div class="navbar-top">

            <a href="#" class="logo">
              <img src=".\assets\images\logo-removebg-preview.png" width="136" height="46" alt="Sahaj home">
            </a>

            <button class="nav-close-btn" aria-label="clsoe menu" data-nav-toggler>
              <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
            </button>

          </div>

          <ul class="navbar-list">

            <li class="navbar-item">
              <a href="#home" class="navbar-link title-md">Home</a>
            </li>

            <li class="navbar-item">
              <a href="#service" class="navbar-link title-md">Services</a>
            </li>
            
            <li class="navbar-item">
              <a href="#about" class="navbar-link title-md">About</a>
            </li>

            <li class="navbar-item">
              <a href="#listing" class="navbar-link title-md">Doctors</a>
            </li>

            <li class="navbar-item">
              <a href="Contact.php" class="navbar-link title-md">Contact</a>
            </li>

            <li class="navbar-item">
              <a href="appointment.php" class="btn has-before title-md">Appointment</a>
            </li>

          </ul>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </nav>

        <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
          <ion-icon name="menu-outline"></ion-icon>
        </button>

        <!-- <a href="Login.html" class="btn has-before title-md">Sign In</a> -->
      
        

        <div class="overlay" data-nav-toggler data-overlay></div>
      
    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home" style="background-image: url('./assets/images/hero-bg.png')" aria-label="home">
        <div class="container">

          <div class="hero-content">

            <!-- <p class="hero-subtitle has-before" data-reveal="left">Welcome To Sahaj</p> -->

            <h1 class="headline-lg hero-title" data-reveal="left">
              Welcome To Sahaj <br>
              Hospital.
            </h1>

            <div class="hero-card" data-reveal="left">

              <!-- <p class="title-lg card-text">
                Search Doctors , Clinics , Hospitals. etc.
              </p> -->

              <div class="wrapper">

                <!-- <div class="input-wrapper title-lg">
                  <input type="text" name="location" placeholder="Locations" class="input-field">

                  <ion-icon name="location"></ion-icon>
                </div>

                <button class="btn has-before">
                  <ion-icon name="search"></ion-icon>

                  <span class="span title-md">Find Now</span>
                </button> -->

              </div>

            </div>

          </div>

          <figure class="hero-banner" data-reveal="right">
            <img src="./assets/images/hero-banner.png" width="590" height="517" loading="eager" alt="hero banner"
              class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" id="service" aria-label="service">
        <div class="container">

          <ul class="service-list">

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-1.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#"> physiotherapy</a>
                </h3>

                <p class="card-text">
                  Enhancing recovery with personalized care
                </p>

                <button class="btn-circle" aria-label="read more about psychiatry">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-2.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Gynecology</a>
                </h3>

                <p class="card-text">
                  Expert gynecological consultation and care
                </p>

                <button class="btn-circle" aria-label="read more about Gynecology">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-3.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Pulmonology</a>
                </h3>

                <p class="card-text">
                  Managing respiratory conditions effectively
                </p>

                <button class="btn-circle" aria-label="read more about Pulmonology">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-4.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Orthopedics</a>
                </h3>

                <p class="card-text">
                  Comprehensive bone health solutions
                </p>

                <button class="btn-circle" aria-label="read more about Orthopedics">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-labelledby="about-label">
        <div class="container">

          <div class="about-content">

            <p class="section-subtitle title-lg has-after" id="about-label" data-reveal="left">About Us</p>

            <h2 class="headline-md" data-reveal="left">Experienced Docters</h2>

            <p class="section-text" data-reveal="left">
              At Sahaj Hospital, our experienced doctors provide expert, personalized care with a 
              commitment to excellence in every treatment.
            </p>

            <ul class="tab-list" data-reveal="left">

              <li>
                <button class="tab-btn active">Vision</button>
              </li>

              <li>
                <button class="tab-btn">Mission</button>
              </li>

              <li>
                <button class="tab-btn">Strategy</button>
              </li>

            </ul>

            <p class="tab-text" data-reveal="left">
              Sahaj Hospital aims to be a leader in compassionate, innovative medical care by 
              integrating advanced technology with patient-centered services.
            </p>

            <div class="wrapper">

              <ul class="about-list">

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Revolutionizing patient care</span>
                </li>

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Innovating healthcare access.</span>
                </li>

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Streamlining medical processes.</span>
                </li>

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Empowering through technology.</span>
                </li>

              </ul>

            </div>

          </div>

          <figure class="about-banner" data-reveal="right">
            <img src="./assets/images/about-banner.png" width="554" height="678" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #LISTING
      -->

      <section class="section listing" id="listing" aria-labelledby="listing-label">
        <div class="container">

          <ul class="grid-list">

            <li>
              <p class="section-subtitle title-lg" id="listing-label" data-reveal="left">Doctors Listig</p>

              <h2 class="headline-md" data-reveal="left">Browse by specialist</h2>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-1.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">physiotherapy</h3>

                  <p class="card-text">Dr. Neeta Shah</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-2.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Gynecology</h3>

                  <p class="card-text">Dr. Ashvin Mehta</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-4.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Pulmonology</h3>

                  <p class="card-text">Dr. Amit Bhatt</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-5.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Orthopedics</h3>

                  <p class="card-text">Dr. Nirav Trivedi</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-6.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Pediatrics</h3>

                  <p class="card-text">Dr. Vinay Patel</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-7.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Neurology</h3>

                  <p class="card-text">Dr. Tejas Patel</p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" aria-labelledby="blog-label">
        <div class="container">

          <p class="section-subtitle title-lg text-center" id="blog-label" data-reveal="bottom">
            News & Article
          </p>

          <h2 class="section-title headline-md text-center" data-reveal="bottom">Latest Articles About Our Hospital</h2>

          <ul class="grid-list">

            <li>
              <div class="blog-card has-before has-after" data-reveal="bottom">

                <div class="meta-wrapper">

                  <div class="card-meta">
                    <!-- <ion-icon name="person-outline"></ion-icon> -->

                    <!-- <span class="span">By Admin</span> -->
                  </div>

                  <div class="card-meta">
                    <!-- <ion-icon name="folder-outline"></ion-icon> -->

                    <!-- <span class="span">Specialist</span> -->
                  </div>

                </div>

                <h3 class="headline-sm card-title">GUJARAT SAMACHAR</h3>

                <time class="title-sm date" datetime="2022-01-28">28 January, 2019</time>

                <p class="card-text">
                  Healthcare Hospital is dedicated to providing top-quality medical care, using advanced technology and 
                  a patient-centered approach to ensure the best outcomes for every individual.
                </p>

                <!-- <a href="#" class="btn-text title-lg">Read More</a> -->

              </div>
            </li>

            <li>
              <div class="blog-card has-before has-after" data-reveal="bottom">

                <div class="meta-wrapper">

                  <div class="card-meta">
                    <!-- <ion-icon name="person-outline"></ion-icon> -->

                    <!-- <span class="span">By Admin</span> -->
                  </div>

                  <div class="card-meta">
                    <!-- <ion-icon name="folder-outline"></ion-icon> -->

                    <!-- <span class="span">Specialist</span> -->
                  </div>

                </div>

                <h3 class="headline-sm card-title">DIVYA BHASKAR</h3>

                <time class="title-sm date" datetime="2022-01-28">08 March, 2021</time>

                <p class="card-text">
                  Healthcare Hospital empowers children with greater autonomy during the pandemic, 
                  ensuring their emotional well-being while offering expert surgical care when needed.
                </p>

                <!-- <a href="#" class="btn-text title-lg">Read More</a> -->

              </div>
            </li>

            <li>
              <div class="blog-card has-before has-after" data-reveal="bottom">

                <div class="meta-wrapper">

                  <div class="card-meta">
                    <!-- <ion-icon name="person-outline"></ion-icon> -->

                    <!-- <span class="span">By Admin</span> -->
                  </div>

                  <div class="card-meta">
                    <!-- <ion-icon name="folder-outline"></ion-icon> -->

                    <!-- <span class="span">Specialist</span> -->
                  </div>

                </div>

                <h3 class="headline-sm card-title">INDIA TODAY</h3>

                <time class="title-sm date" datetime="2022-01-28">15 February, 2024</time>

                <p class="card-text">
                  Healthcare Hospital successfully saved the life of a 70-year-old man with a brain tumor 
                  through expert surgical intervention.
                </p>

                <!-- <a href="#" class="btn-text title-lg">Read More</a> -->

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">
    <div class="container">

      <div class="section footer-top">

        <div class="footer-brand" data-reveal="bottom">

          <a href="#" class="logo">
            <img src=".\assets\images\logo-removebg-preview.png" width="136" height="46" loading="lazy" alt="Sahaj Home">
          </a>

          <ul class="contact-list has-after">

            <li class="contact-item">

              <div class="item-icon">
                <ion-icon name="mail-open-outline"></ion-icon>
              </div>

              <div>
                <p>
                  Main Email : <a href="mailto:xyz@website.com" class="contact-link">xyz@&shy;website.com</a>
                </p>

                <p>
                  Inquiries : <a href="mailto:sahaj@mail.com" class="contact-link">sahaj@mail.com</a>
                </p>
              </div>

            </li>

            <li class="contact-item">

              <div class="item-icon">
                <ion-icon name="Call-Outline"></ion-icon>
              </div>

              <div>
                <p>
                  Office Telephone : <a href="tel:1234567890" class="contact-link">0029129102320</a>
                </p>

                <p>
                  Mobile : <a href="tel:1234567879" class="contact-link">000 1234 98765</a>
                </p>
              </div>

            </li>

          </ul>

        </div>

        <div class="footer-list" data-reveal="bottom">

          <p class="headline-sm footer-list-title">About Us</p>

          <p class="text">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
          </p>

          <address class="address">
            <ion-icon name="map-outline"></ion-icon>

            <span class="text">
              Katargam <br>
              Surat,Gujarat,India-395004
            </span>
          </address>

        </div>

        <ul class="footer-list" data-reveal="bottom">

          <li>
            <p class="headline-sm footer-list-title">Services</p>
          </li>

          <li>
            <a href="#" class="text footer-link">Conditions</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Listing</a>
          </li>

          <li>
            <a href="#" class="text footer-link">How It Works</a>
          </li>

          <li>
            <a href="#" class="text footer-link">What We Offer</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Latest News</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Contact Us</a>
          </li>

        </ul>

        <ul class="footer-list" data-reveal="bottom">

          <li>
            <p class="headline-sm footer-list-title">Useful Links</p>
          </li>

          <li>
            <a href="#" class="text footer-link">Conditions</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Terms of Use</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Our Services</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Join as a Doctor</a>
          </li>

          <li>
            <a href="#" class="text footer-link">New Guests List</a>
          </li>

          <li>
            <a href="#" class="text footer-link">The Team List</a>
          </li>

        </ul>

        <div class="footer-list" data-reveal="bottom">

          <p class="headline-sm footer-list-title">Subscribe</p>

          <form action="" class="footer-form">
            <input type="email" name="email" placeholder="Email" class="input-field title-lg">

            <button type="submit" class="btn has-before title-md">Subscribe</button>
          </form>

          <p class="text">
            Get the latest updates via email. Any time you may unsubscribe
          </p>

        </div>

      </div>

      <div class="footer-bottom">

      <a href="Login.html" class="btn has-before title-md">Sign In</a>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-google"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </div>
  </footer>



  <!-- 
      scrolling 
  -->
  <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });
    </script>

  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  
</body>

</html>