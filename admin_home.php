<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>eCommerce Website</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo/favicon.jpg" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body class="">


  <div class="overlay" data-overlay=""></div>

  <!--
    - HEADER
  -->

  <header>

    <div class="header-top">

      <div class="container">

        <ul class="header-social-container">

          <li>
            <a href="https://www.facebook.com/" class="social-link">
              <ion-icon name="logo-facebook" role="img" class="md hydrated" aria-label="logo facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://x.com/" class="social-link">
              <ion-icon name="close" role="img" class="md hydrated" aria-label="logo twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.instagram.com/" class="social-link">
              <ion-icon name="logo-instagram" role="img" class="md hydrated" aria-label="logo instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.linkedin.com/" class="social-link">
              <ion-icon name="logo-linkedin" role="img" class="md hydrated" aria-label="logo linkedin"></ion-icon>
            </a>
          </li>

        </ul>

        <div class="header-alert-news">
          <p>
            wlcome
            to <b>TechGo</b> store
          </p>
        </div>

        <div class="header-top-actions">

          <select name="currency">

            <option value="usd">EGP</option>
            <option value="eur">none</option>

          </select>

          <select name="language">

            <option value="en-US">English</option>
            <option value="es-ES">none</option>
            <option value="fr">soon</option>

          </select>

        </div>

      </div>

    </div>

    <div class="header-main">

      <div class="container">

        <a href="#" class="header-logo">
          <img src="./assets/images/logo/favicon.jpg" alt="Techgo" width="120" height="36">
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

          <button class="search-btn">
            <ion-icon name="search-outline" role="img" class="md hydrated" aria-label="search outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">
        <a href="./login/handle_logout.php" class="action-btn" aria-label="User Account">
            <ion-icon name="log-out-outline"></ion-icon>
          </a>
          <button class="action-btn" data-wishlist-open-btn="" aria-label="Open Wishlist">
            <ion-icon name="heart-outline" role="img" class="md hydrated" aria-label="heart outline"></ion-icon>
            <span class="count" data-wishlist-count="">0</span>
          </button>
          <button class="action-btn" data-cart-open-btn="" aria-label="Open Shopping Cart">
            <ion-icon name="bag-handle-outline" role="img" class="md hydrated" aria-label="bag handle outline"></ion-icon>
            <span class="count" data-cart-count="">0</span>
          </button>
        </div>

      </div>

    </div>

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a href="#" class="menu-title">Home</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Categories</a>

            <div class="dropdown-panel">

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="./pages/2Sections by n&t/index.html">Featured Sensors</a>
                </li>

                <li class="panel-list-item">
                  <a href="./pages/5Items by mus/section 1/Electrec Microphone Amplifier.html">Electrec Microphone</a>
                </li>

                <li class="panel-list-item">
                  <a href="./pages/5Items by mus/section 1/Force sensitive Resistor Sensor.html">Force sensitive Resistor</a>
                </li>

                <li class="panel-list-item">
                  <a href="./pages/5Items by mus/section 1/Gas Sensor.html">Gas Sensor</a>
                </li>

                <li class="panel-list-item">
                  <a href="./pages/5Items by mus/section 1/KY-015 DHT 11 Temperature Sensor .html">KY-015 DHT 11 Temperature</a>
                </li>

                <li class="panel-list-item">
                  <a href="./pages/5Items by mus/section 1/Ultrasonic Distance Sensor.html">Ultrasonic Distance Sensor</a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="./pages/2Sections by n&t/index2.html">Microcontrollers</a>
                </li>

                <li class="panel-list-item">
                  <a href="./pages/5Items by mus/section 2/Arduino Pro Mini.html">Arduino Pro Mini</a>
                </li>

                <li class="panel-list-item">
                  <a href="./pages/5Items by mus/section 2/Arduino Uno R3.html">Arduino Uno R3</a>
                </li>

                <li class="panel-list-item">
                  <a href="./pages/5Items by mus/section 2/Joystick Shield for Arduino.html">Joystick Shield</a>
                </li>

                <li class="panel-list-item">
                  <a href="./pages/5Items by mus/section 2/Mini Breadboard 400 PIN.html">Mini Breadboard 400 PIN</a>
                </li>

                <li class="panel-list-item">
                  <a href="./pages/5Items by mus/section 2/Raspberry Pi Pico RP2020.html">Raspberry Pi Pico</a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="./pages/2Sections by n&t/index3.html">Electronic Tools</a>
                </li>

                <li class="panel-list-item">
                  <a href="./pages/5Items by mus/section 3/2.4GHz Transceiver nRF 24L01 Wireless.webp.html">Emergency Stop Switch</a>
                </li>

                <li class="panel-list-item">
                  <a href="./pages/5Items by mus/section 3/Emergency Stop Switch.html">Emergency Stop Switch</a>
                </li>

                <li class="panel-list-item">
                  <a href="./pages/5Items by mus/section 3/GSM-GPRS Arduino SIM900.html">GSM-GPRS Arduino</a>
                </li>

                <li class="panel-list-item">
                  <a href="./pages/5Items by mus/section 3/OnOff Rocker Switch.html">OnOff Rocker Switch</a>
                </li>

                <li class="panel-list-item">
                  <a href="./pages/5Items by mus/section 3/RF Kit 433 Mhz Wireless.html">RF Kit 433 Mhz Wireless</a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="./pages/2Sections by n&t/index4.html">Power Supply</a>
                </li>

                <li class="panel-list-item">
                  <a href="./pages/5Items by mus/section 4/Arduino Li-ion Battery Charging.html">Arduino Li-ion Charging</a>
                </li>

                <li class="panel-list-item">
                  <a href="./pages/5Items by mus/section 4/DC to DC Converter 48V→12V 30A Waterproof.html">DC to DC Converter</a>
                </li>

                <li class="panel-list-item">
                  <a href="./pages/5Items by mus/section 4/TP5100 Lithium Battery Charger.html">TP5100 Lithium Charger</a>
                </li>

                <li class="panel-list-item">
                  <a href="./pages/5Items by mus/section 4/Triple Channel 18650 Charger 3.7v 3A.html">Triple Channel Charger</a>
                </li>

                <li class="panel-list-item">
                  <a href="./pages/5Items by mus/section 4/Ultracell Lead Acid Battery 12V 26A.html">Ultracell Lead Acid Battery</a>
                </li>

              </ul>

            </div>
          </li>

          <li class="menu-category">
            <a href="./pages/3About by huss/about.html" class="menu-title">about us</a>
          </li>

          <li class="menu-category">
            <a href="./pages/4Contact by r&mar/contact.html" class="menu-title">contact us</a>

          </li>

        </ul>

      </div>

    </nav>

    

  </header>

  <div class="mobile-bottom-navigation">
    <button class="action-btn" data-mobile-menu-open-btn="" aria-label="Open Menu"> <ion-icon name="menu-outline" role="img" class="md hydrated" aria-label="menu outline"></ion-icon>
    </button>
    <button class="action-btn" data-cart-open-btn="" aria-label="Open Shopping Cart"> <ion-icon name="bag-handle-outline" role="img" class="md hydrated" aria-label="bag handle outline"></ion-icon>
      <span class="count" data-cart-count="">0</span>
    </button>
    <button class="action-btn" aria-label="Home"> <ion-icon name="home-outline" role="img" class="md hydrated" aria-label="home outline"></ion-icon>
    </button>
    <button class="action-btn" data-wishlist-open-btn="" aria-label="Open Wishlist"> <ion-icon name="heart-outline" role="img" class="md hydrated" aria-label="heart outline"></ion-icon>
      <span class="count" data-wishlist-count="">0</span>
    </button>
  </div>


  <nav class="mobile-navigation-menu has-scrollbar" data-mobile-menu="">
    <div class="menu-top">
      <h2 class="menu-title">Menu</h2>
      <button class="menu-close-btn" data-mobile-menu-close-btn="" aria-label="Close Menu">
        <ion-icon name="close-outline" role="img" class="md hydrated" aria-label="close outline"></ion-icon>
      </button>
    </div>
    <ul class="mobile-menu-category-list">
      <li class="menu-category"><a href="#" class="menu-title">Home</a></li>
      <li class="menu-category">
        <button class="accordion-menu" data-accordion-btn="">
          <p class="menu-title">Categories</p>
          <div>
            <ion-icon name="add-outline" class="add-icon md hydrated" role="img" aria-label="add outline"></ion-icon>
            <ion-icon name="remove-outline" class="remove-icon md hydrated" role="img" aria-label="remove outline"></ion-icon>
          </div>
        </button>
        <ul class="submenu-category-list" data-accordion="">
          <li class="submenu-category"><a href="./pages/2Sections by n&t/index.html" class="submenu-title">Featured Sensors</a></li>
          <li class="submenu-category"><a href="./pages/2Sections by n&t/index2.html" class="submenu-title">Microcontrollers</a></li>
          <li class="submenu-category"><a href="./pages/2Sections by n&t/index3.html" class="submenu-title">Electronic tools</a></li>
          <li class="submenu-category"><a href="./pages/2Sections by n&t/index4.html" class="submenu-title">Power supplies</a></li>

        </ul>
      </li>
      <li class="menu-category"><a href="./pages/3About by huss/about.html" class="menu-title">About Us</a></li>
      <li class="menu-category"><a href="./pages/4Contact by r&mar/contact.html" class="menu-title">Contact Us</a></li>
    </ul>
    <div class="menu-bottom">
      <ul class="menu-category-list">
        <li class="menu-category">
          <button class="accordion-menu" data-accordion-btn="">
            <p class="menu-title">Language</p>
            <ion-icon name="caret-back-outline" class="caret-back md hydrated" role="img" aria-label="caret back outline"></ion-icon>
          </button>
          <ul class="submenu-category-list" data-accordion="">
            <li class="submenu-category"><a href="#" class="submenu-title">English</a></li>
            <li class="submenu-category"><a href="#" class="submenu-title">العربية (soon)</a></li>
          </ul>
        </li>
        <li class="menu-category">
          <button class="accordion-menu" data-accordion-btn="">
            <p class="menu-title">Currency</p>
            <ion-icon name="caret-back-outline" class="caret-back md hydrated" role="img" aria-label="caret back outline"></ion-icon>
          </button>
          <ul class="submenu-category-list" data-accordion="">
            <li class="submenu-category"><a href="#" class="submenu-title">EGP</a></li>
            <li class="submenu-category"><a href="#" class="submenu-title">soon</a></li>
          </ul>
        </li>
      </ul>
      <ul class="menu-social-container">
        <li><a href="https://www.facebook.com/" class="social-link" aria-label="Facebook"><ion-icon name="logo-facebook" role="img" class="md hydrated" aria-label="logo facebook"></ion-icon></a></li>
        <li><a href="https://x.com/" class="social-link" aria-label="Twitter"><ion-icon name="logo-twitter" role="img" class="md hydrated" aria-label="logo twitter"></ion-icon></a></li>
        <li><a href="https://www.instagram.com/" class="social-link" aria-label="Instagram"><ion-icon name="logo-instagram" role="img" class="md hydrated" aria-label="logo instagram"></ion-icon></a></li>
        <li><a href="https://www.linkedin.com/" class="social-link" aria-label="LinkedIn"><ion-icon name="logo-linkedin" role="img" class="md hydrated" aria-label="logo linkedin"></ion-icon></a></li>
      </ul>
    </div>
  </nav>


  <nav class="sidebar-menu wishlist-menu has-scrollbar" data-wishlist-menu="">
    <div class="menu-top">
      <h2 class="menu-title">Wishlist</h2>
      <button class="menu-close-btn" data-wishlist-close-btn="" aria-label="Close Wishlist">
        <ion-icon name="close-outline" role="img" class="md hydrated" aria-label="close outline"></ion-icon>
      </button>
    </div>
    <ul class="sidebar-menu-list">
      <li class="sidebar-menu-item">
        <div class="item-img">
          <img src="./assets/images/products/Gas%20Sensor.webp" alt="Gas Sensor" width="70" height="70" loading="lazy">
        </div>
        <div class="item-content">
          <a href="#" class="item-title">Gas Sensor MQ5</a>
          <p class="item-price">25.00 EGP</p>
        </div>
        <button class="item-remove-btn" aria-label="Remove from Wishlist">
          <ion-icon name="close-outline" role="img" class="md hydrated" aria-label="close outline"></ion-icon>
        </button>
      </li>
      <li class="sidebar-menu-item empty-message" style="display: none;">
        <p>Your wishlist is currently empty.</p>
      </li>
    </ul>
    <div class="menu-bottom">
      <a href="#" class="bttn bttn-primary bttn-block">View Full Wishlist</a>
    </div>
  </nav>


  <nav class="sidebar-menu cart-menu has-scrollbar" data-cart-menu="">
    <div class="menu-top">
      <h2 class="menu-title">Shopping Cart</h2>
      <button class="menu-close-btn" data-cart-close-btn="" aria-label="Close Cart">
        <ion-icon name="close-outline" role="img" class="md hydrated" aria-label="close outline"></ion-icon>
      </button>
    </div>
    <ul class="sidebar-menu-list">
      <li class="sidebar-menu-item">
        <div class="item-img">
          <img src="./assets/images/products/Delay%20Real-time.jpg" alt="Delay Real-time Relay" width="70" height="70" loading="lazy">
        </div>
        <div class="item-content">
          <a href="#" class="item-title">Delay Real-time Relay</a>
          <div class="item-qty-price">
            <span class="item-quantity">Qty: 1</span>
            <p class="item-price">58.00 EGP</p>
          </div>
        </div>
        <button class="item-remove-btn" aria-label="Remove from Cart">
          <ion-icon name="close-outline" role="img" class="md hydrated" aria-label="close outline"></ion-icon>
        </button>
      </li>
      <li class="sidebar-menu-item empty-message" style="display: none;">
        <p>Your cart is currently empty.</p>
      </li>
    </ul>
    <div class="menu-bottom">
      <div class="subtotal">
        <p>Subtotal:</p>
        <p class="subtotal-price">58.00 EGP</p>
      </div>
      <a href="#" class="bttn bttn-primary bttn-block">Checkout</a>
    </div>
  </nav>

  <!--
    - MAIN
  -->

  <main>

    <!--
      - BANNER
    -->

    <!-- slider start -->
    <div class="container">
      <div class="img-slider">

        <div class="slide active">
          <img src="./assets/images/slider/4.jpg" alt="Arduino UNO">
          <div class="info">
            <h2>Arduino UNO big Sale</h2>
            <p>15% sale encouraging you to bring your interactive electronic projects to life with ease.</p>
            <button class="slide-button" onclick="location.href='./index 2 wepsites by Mustafa/Arduino Uno R3-Clone.html'">View More</button>
          </div>
        </div>


        <div class="slide">
          <img src="./assets/images/slider/10.jpg" alt="Project">
          <div class="info">
            <h2>Build your project with us</h2>
            <p>Everything you need for your project is available with us.</p>
            <button class="slide-button" onclick="location.href='Section 2.html'">View More</button>
          </div>
        </div>


        <div class="slide">
          <img src="./assets/images/slider/9.jpg" alt="ESP8266 Sale">
          <div class="info">
            <h2>ESP8266 big sale</h2>
            <p>Don't miss 15% sale on powerful and affordable Wi-Fi-enabled microcontrollers.</p>
            <button class="slide-button" onclick="location.href='./index 2 wepsites by Mustafa/ESP-12E-Wifi module .html'">View More</button>
          </div>
        </div>


        <div class="slide">
          <img src="./assets/images/slider/11.jpg" alt="High-Quality PCB">
          <div class="info">
            <h2>High quality PCB</h2>
            <p>Build your PCB board with high quality at unbeatable prices.</p>
            <button class="slide-button" onclick="location.href='index 1 wepsites by Mustafa/PCB Board Fiberglass – FR4.html'">View More</button>
          </div>
        </div>


        <div class="slide">
          <img src="./assets/images/slider/12.jpg" alt="SMD Components">
          <div class="info">
            <h2>SMD High-Quality Brands</h2>
            <p>Buy SMD components with high quality and top brands.</p>
            <button class="slide-button" onclick="location.href='Section 1.html'">View More</button>
          </div>
        </div>


        <div class="navigation">
          <div class="btn active"></div>
          <div class="btn"></div>
          <div class="btn"></div>
          <div class="btn"></div>
          <div class="btn"></div>
        </div>
      </div>
    </div>

    <script>let currentSlide = 0;
      const slides = document.querySelectorAll('.slide');
      const btns = document.querySelectorAll('.btn');


      function changeSlide(index) {
        slides.forEach((slide, i) => {
          slide.classList.remove('active');
          btns[i].classList.remove('active');
        });

        slides[index].classList.add('active');
        btns[index].classList.add('active');
      }


      btns.forEach((btn, i) => {
        btn.addEventListener('click', () => {
          currentSlide = i;
          changeSlide(currentSlide);
        });
      });


      function autoChangeSlide() {
        setInterval(() => {
          currentSlide = (currentSlide + 1) % slides.length;
          changeSlide(currentSlide);
        }, 8000);
      }

      autoChangeSlide();    
    </script>
    <!-- slider end -->



    <!--
      - CATEGORY
    -->

    <div class="category">

      <div class="container">

        <div class="category-item-container has-scrollbar">

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/sensor-lab-svgrepo-com.svg" alt="electronics" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Featured Sensors</h3>

                <p class="category-item-amount">(5)</p>
              </div>

              <a href="./pages/2Sections by n&t/index.html" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/electronics.svg" alt="electronics" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Microcontrollers</h3>

                <p class="category-item-amount">(5)</p>
              </div>

              <a href="./pages/2Sections by n&t/index2.html" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/electric2-svgrepo-com.svg" alt="electronics" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Electronic tools</h3>

                <p class="category-item-amount">(5)</p>
              </div>

              <a href="./pages/2Sections by n&t/index3.html" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/electricity-svgrepo-com.svg" alt="electronics" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Power supplys</h3>

                <p class="category-item-amount">(5)</p>
              </div>

              <a href="./pages/2Sections by n&t/index4.html" class="category-btn">Show all</a>

            </div>
          </div>
        </div>
      </div>
    </div>





    <!--
      - PRODUCT
    -->

    <div class="product-container">

      <div class="container">





        <div class="product-box">

          <!--
            - PRODUCT MINIMAL
          -->

          <div class="product-minimal">

            <div class="product-showcase">

              <h2 class="title">New Arrivals</h2>

              <div class="showcase-wrapper has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/Delay Real-time.jpg" alt="Delay Real-time.jpg" width="70" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Delay Real-time</h4>
                      </a>

                      <a href="#" class="showcase-category">sensors</a>

                      <div class="price-box">
                        <p class="price">45.00eg</p>
                        <del>65.00eg</del>
                      </div>

                    </div>

                  </div>
                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/Delay Real-time.jpg" alt="Delay Real-time.jpg" width="70" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Delay Real-time</h4>
                      </a>

                      <a href="#" class="showcase-category">sensors</a>

                      <div class="price-box">
                        <p class="price">45.00eg</p>
                        <del>65.00eg</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/Delay Real-time.jpg" alt="Delay Real-time.jpg" width="70" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Delay Real-time</h4>
                      </a>

                      <a href="#" class="showcase-category">sensors</a>

                      <div class="price-box">
                        <p class="price">45.00eg</p>
                        <del>65.00eg</del>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="product-showcase">

              <h2 class="title">Trending</h2>

              <div class="showcase-wrapper  has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/Delay Real-time.jpg" alt="Delay Real-time.jpg" width="70" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Delay Real-time</h4>
                      </a>

                      <a href="#" class="showcase-category">sensors</a>

                      <div class="price-box">
                        <p class="price">45.00eg</p>
                        <del>65.00eg</del>
                      </div>

                    </div>

                  </div>
                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/Delay Real-time.jpg" alt="Delay Real-time.jpg" width="70" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Delay Real-time</h4>
                      </a>

                      <a href="#" class="showcase-category">sensors</a>

                      <div class="price-box">
                        <p class="price">45.00eg</p>
                        <del>65.00eg</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/Delay Real-time.jpg" alt="Delay Real-time.jpg" width="70" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Delay Real-time</h4>
                      </a>

                      <a href="#" class="showcase-category">sensors</a>

                      <div class="price-box">
                        <p class="price">45.00eg</p>
                        <del>65.00eg</del>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--
            - PRODUCT FEATURED
          -->

          <div class="product-featured">

            <h2 class="title">Deal of the day</h2>

            <div class="showcase-wrapper has-scrollbar">

              <div class="showcase-container">

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/slider/4.jpg" alt="Arduino UNO" class="showcase-img">
                  </div>

                  <div class="showcase-content">

                    <a href="#">
                      <h3 class="showcase-title">Arduino UNO</h3>
                    </a>

                    <p class="showcase-desc">
                      Arduino UNO 25% sale today
                    </p>

                    <div class="price-box">
                      <p class="price">150.00eg</p>

                      <del>200.00eg</del>
                    </div>

                    <button class="add-cart-btn">add to cart</button>

                    <div class="showcase-status">
                      <div class="wrapper">
                        <p>
                          already sold: <b>20</b>
                        </p>

                        <p>
                          available: <b>40</b>
                        </p>
                      </div>

                      <div class="showcase-status-bar"></div>
                    </div>

                    <div class="countdown-box">

                      <p class="countdown-desc">
                        Hurry Up! Offer ends in:
                      </p>

                      <div class="countdown">

                        <div class="countdown-content">

                          <p class="display-number">0</p>

                          <p class="display-text">Days</p>

                        </div>

                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div class="showcase-container">

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/slider/11.jpg" alt="PCB" class="showcase-img">
                  </div>

                  <div class="showcase-content">

                    <h3 class="showcase-title">
                      <a href="#" class="showcase-title">PCB</a>
                    </h3>

                    <p class="showcase-desc">
                      Lorem ipsum dolor sit amet consectetur Lorem ipsum
                      dolor dolor sit amet consectetur Lorem ipsum dolor
                    </p>

                    <div class="price-box">
                      <p class="price">199.00eg</p>
                      <del>250.00eg</del>
                    </div>

                    <button class="add-cart-btn">add to cart</button>

                    <div class="showcase-status">
                      <div class="wrapper">
                        <p> already sold: <b>15</b> </p>

                        <p> available: <b>40</b> </p>
                      </div>

                      <div class="showcase-status-bar"></div>
                    </div>

                    <div class="countdown-box">

                      <p class="countdown-desc">Hurry Up! Offer ends in:</p>

                      <div class="countdown">
                        <div class="countdown-content">
                          <p class="display-number">360</p>
                          <p class="display-text">Days</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>
                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>



          <!--
            - PRODUCT GRID
          -->

          <div class="product-main">

            <h2 class="title">New Products</h2>

            <div class="product-grid">

              <div class="showcase">

                <div class="showcase-banner">

                  <img src="./assets/images/products/5 PCS Push button switch E.jpg" alt="5 PCS Push button switch E" class="product-img default" width="300">
                  <img src="./assets/images/products/5 PCS Push button switch E-1.jpeg" alt="5 PCS Push button switch E" width="300" class="product-img hover">

                  <p class="showcase-badge">15%</p>

                  <div class="showcase-actions">

                    <button class="btn-action">
                      <ion-icon name="heart-outline" role="img" class="md hydrated" aria-label="heart outline"></ion-icon>
                    </button>

                    

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated" aria-label="bag add outline"></ion-icon>
                    </button>

                  </div>

                </div>

                <div class="showcase-content">

                  <a href="#" class="showcase-category">tools</a>

                  <a href="#">
                    <h3 class="showcase-title">5 PCS Push button switch E</h3>
                  </a>

                  <div class="price-box">
                    <p class="price">48.00eg</p>
                    <del>75.00eg</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/DC 48V Step down to 12V 30A 360W Waterproof DC.webp" alt="DC 48V Step down to 12V 30A 360W Waterproof DC" class="product-img default" width="300">
                  <img src="./assets/images/products/DC 48V Step down to 12V 30A 360W Waterproof DC-1.jpg" alt="DC 48V Step down to 12V 30A 360W Waterproof DC" class="product-img hover" width="300">

                  <p class="showcase-badge angle black">sale</p>

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline" role="img" class="md hydrated" aria-label="heart outline"></ion-icon>
                    </button>

                    

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated" aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">powersupply</a>

                  <h3>
                    <a href="#" class="showcase-title">DC 48V Step down to 12V 30A 360W WP DC</a>
                  </h3>


                  <div class="price-box">
                    <p class="price">45.00eg</p>
                    <del>56.00eg</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/Delay Real-time.jpg" alt="Delay Real-time" class="product-img default" width="300">
                  <img src="./assets/images/products/Delay Real-time-1.jpeg" alt="Delay Real-time" class="product-img hover" width="300">

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline" role="img" class="md hydrated" aria-label="heart outline"></ion-icon>
                    </button>

                    

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated" aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">module</a>

                  <h3>
                    <a href="#" class="showcase-title">Delay Real-time Relay</a>
                  </h3>

                  <div class="price-box">
                    <p class="price">58.00eg</p>
                    <del>65.00eg</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/Gas Sensor.webp" alt="Gas Sensor" class="product-img default" width="300">
                  <img src="./assets/images/products/Gas Sensor-1.jpeg" alt="Gas Sensor" class="product-img hover" width="300">

                  <p class="showcase-badge angle blue">new</p>

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline" role="img" class="md hydrated" aria-label="heart outline"></ion-icon>
                    </button>

                    

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated" aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">module</a>

                  <h3>
                    <a href="#" class="showcase-title">Gas Sensor <br> MQ5</a>
                  </h3>

                  <div class="price-box">
                    <p class="price">25.00eg</p>
                    <del>35.00eg</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/JKM NEMA17 Hybride stepper Motor 2 Phase.jpg" alt="JKM NEMA17 Hybride stepper Motor 2 Phase" class="product-img default" width="300">
                  <img src="./assets/images/products/JKM NEMA17 Hybride stepper Motor 2 Phase-1.jpeg" alt="JKM NEMA17 Hybride stepper Motor 2 Phase" class="product-img hover" width="300">

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline" role="img" class="md hydrated" aria-label="heart outline"></ion-icon>
                    </button>

                    

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated" aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">motors</a>

                  <h3>
                    <a href="#" class="showcase-title">JKM NEMA17 Hybride stepper Motor 2</a>
                  </h3>

                  <div class="price-box">
                    <p class="price">99.00eg</p>
                    <del>105.00eg</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/li-polli-ionli-feni-cdni-mh-charger-with-imax-b6-balancer-temperature-sensor-2-300x300-.webp" alt="li-polli-ionli-feni-cdni-mh-charger" class="product-img default" width="300">
                  <img src="./assets/images/products/li-polli-ionli-feni-cdni-mh-charger-with-imax-b6-balancer-temperature-sensor-2-300x300-1.jpg" alt="li-polli-ionli-feni-cdni-mh-charger" class="product-img hover" width="300">

                  <p class="showcase-badge angle black">sale</p>

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline" role="img" class="md hydrated" aria-label="heart outline"></ion-icon>
                    </button>

                    


                    <button class="btn-action">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated" aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">sensors</a>

                  <h3>
                    <a href="#" class="showcase-title">li-polli-ionli-charger-with-imax-b6</a>
                  </h3>

                  <div class="price-box">
                    <p class="price">105.00eg</p>
                    <del>$170.00eg</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/MD0498  DC DC Boost Converter 10 32VDC to 12 35VDC 10A 150W Adjustable Step Up Module.jpg" alt="MD0498  DC DC Boost Converter " class="product-img default" width="300">
                  <img src="./assets/images/products/MD0498  DC DC Boost Converter 10 32VDC to 12 35VDC 10A 150W Adjustable Step Up Module-1.jpg" alt="MD0498  DC DC Boost Converter " class="product-img hover" width="300">

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline" role="img" class="md hydrated" aria-label="heart outline"></ion-icon>
                    </button>

                    

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated" aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">powersupply</a>

                  <h3>
                    <a href="#" class="showcase-title">MD0498 DC DC Boost Converter</a>
                  </h3>


                  <div class="price-box">
                    <p class="price">100.00eg</p>
                    <del>120.00eg</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/Microprocessor.webp" alt="Microprocessor" class="product-img default" width="300">
                  <img src="./assets/images/products/Microprocessor-1.jpg" alt="Microprocessor" class="product-img hover" width="300">

                  <p class="showcase-badge angle black">sale</p>

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline" role="img" class="md hydrated" aria-label="heart outline"></ion-icon>
                    </button>

                    

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated" aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">processor</a>

                  <h3>
                    <a href="#" class="showcase-title">Microprocessor Intel core</a>
                  </h3>

                  <div class="price-box">
                    <p class="price">25.00eg</p>
                    <del>30.00eg</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/Rp-c7.6-st Thin Film Pressure Sensor.jpeg" alt="Rp-c7.6-st Thin Film Pressure Sensor" class="product-img default" width="300">
                  <img src="./assets/images/products/Rp-c7.6-st Thin Film Pressure Sensor-1.jpeg" alt="Rp-c7.6-st Thin Film Pressure Sensor" class="product-img hover" width="300">

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline" role="img" class="md hydrated" aria-label="heart outline"></ion-icon>
                    </button>

                    

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated" aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">Sensor</a>

                  <h3>
                    <a href="#" class="showcase-title">Rp-c7.6-st Thin Film Pressure Sensor</a>
                  </h3>

                  <div class="price-box">
                    <p class="price">32.00eg</p>
                    <del>45.00eg</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/Servo Pan Title Bracket Kit Aluminum.webp" alt="Servo Pan Title Bracket Kit Aluminum" class="product-img default" width="300">
                  <img src="./assets/images/products/Servo Pan Title Bracket Kit Aluminum-1.jpeg" alt="Servo Pan Title Bracket Kit Aluminum" class="product-img hover" width="300">

                  <p class="showcase-badge angle black">sale</p>

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline" role="img" class="md hydrated" aria-label="heart outline"></ion-icon>
                    </button>

                    

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated" aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">motor</a>

                  <h3>
                    <a href="#" class="showcase-title">Servo Pan Title Bracket Kit Aluminum</a>
                  </h3>

                  <div class="price-box">
                    <p class="price">58.00eg</p>
                    <del>64.00eg</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/SOLAR PANEL 18V 30V.webp" alt="SOLAR PANEL 18V 30V" class="product-img default" width="300">
                  <img src="./assets/images/products/SOLAR PANEL 18V 30V.webp" alt="SOLAR PANEL 18V 30V" class="product-img hover" width="300">

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline" role="img" class="md hydrated" aria-label="heart outline"></ion-icon>
                    </button>

                    

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated" aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">SOLARPANEL</a>

                  <h3>
                    <a href="#" class="showcase-title">SOLAR PANEL 18V <br> 30V</a>
                  </h3>

                  <div class="price-box">
                    <p class="price">50.00eg</p>
                    <del>65.00eg</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/Ultrasonic Distance Sensor with Python and the micro.jpg" alt="Ultrasonic Distance Sensor with Python and the micro" class="product-img default" width="300">
                  <img src="./assets/images/products/Ultrasonic Distance Sensor with Python and the micro-1.jpeg" alt="Ultrasonic Distance Sensor with Python and the micro" class="product-img hover" width="300">

                  <p class="showcase-badge angle black">sale</p>

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline" role="img" class="md hydrated" aria-label="heart outline"></ion-icon>
                    </button>

                    

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated" aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">sensor</a>

                  <h3>
                    <a href="#" class="showcase-title">Ultrasonic Distance Sensor</a>
                  </h3>

                  <div class="price-box">
                    <p class="price">78.00eg</p>
                    <del>85.00eg</del>
                  </div>

                </div>

              </div>

            </div>

          </div>

          <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

          <div>

            <div class="container">

              <div class="testimonials-box">

                <!--
            - TESTIMONIALS
          -->

                <div class="testimonial">

                  <h2 class="title">testimonial</h2>

                  <div class="testimonial-card">

                    <img src="./assets/images/mh.png" alt="alan doe" class="testimonial-banner" width="80" height="80">

                    <p class="testimonial-name">Muhammad Hamdy</p>

                    <p class="testimonial-title">CEO &amp; Founder MH</p>

                    <img src="./assets/images/icons/quotes.svg" alt="quotation" class="quotation-img" width="26">

                    <p class="testimonial-desc">
                      Lorem ipsum dolor sit amet consectetur Lorem ipsum
                      dolor dolor sit amet.
                    </p>

                  </div>

                </div>

                <!--
            - CTA
          -->

                <div class="cta-container">

                  <img src="./assets/images/cta-banner.jpg" alt="student collection" class="cta-banner">

                  <a href="#" class="cta-content">

                    <p class="discount">25% Discount</p>

                    <h2 class="cta-title">Student collection</h2>

                    <p class="cta-text">Starting @ 10eg</p>

                    <button class="cta-btn">Shop now</button>

                  </a>

                </div>

                <!--
            - SERVICE
          -->

                <div class="service">

                  <h2 class="title">Our Services</h2>

                  <div class="service-container">

                    <a href="#" class="service-item">

                      <div class="service-icon">
                        <ion-icon name="boat-outline" role="img" class="md hydrated" aria-label="boat outline"></ion-icon>
                      </div>

                      <div class="service-content">

                        <h3 class="service-title">Worldwide Delivery</h3>
                        <p class="service-desc">For Order Over $100</p>

                      </div>

                    </a>

                    <a href="#" class="service-item">

                      <div class="service-icon">
                        <ion-icon name="rocket-outline" role="img" class="md hydrated" aria-label="rocket outline"></ion-icon>
                      </div>

                      <div class="service-content">

                        <h3 class="service-title">Next Day delivery</h3>
                        <p class="service-desc">EG Orders Only</p>

                      </div>

                    </a>

                    <a href="#" class="service-item">

                      <div class="service-icon">
                        <ion-icon name="call-outline" role="img" class="md hydrated" aria-label="call outline"></ion-icon>
                      </div>

                      <div class="service-content">

                        <h3 class="service-title">Best Online Support</h3>
                        <p class="service-desc">Hours: 8AM - 11PM</p>

                      </div>

                    </a>

                    <a href="#" class="service-item">

                      <div class="service-icon">
                        <ion-icon name="arrow-undo-outline" role="img" class="md hydrated" aria-label="arrow undo outline"></ion-icon>
                      </div>

                      <div class="service-content">

                        <h3 class="service-title">Return Policy</h3>
                        <p class="service-desc">Easy &amp; Free Return</p>

                      </div>

                    </a>

                    <a href="#" class="service-item">

                      <div class="service-icon">
                        <ion-icon name="ticket-outline" role="img" class="md hydrated" aria-label="ticket outline"></ion-icon>
                      </div>

                      <div class="service-content">

                        <h3 class="service-title">30% money back</h3>
                        <p class="service-desc">For Order Over $100</p>

                      </div>

                    </a>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <!--
      - BLOG
    -->

          <div class="blog">

            <div class="container">

              <div class="blog-container has-scrollbar">

                <div class="blog-card">

                  <a href="#">
                    <img src="./assets/images/slider/4.jpg" alt="lorem2" width="300" class="blog-banner">
                  </a>

                  <div class="blog-content">

                    <a href="#" class="blog-category">module</a>

                    <a href="#">
                      <h3 class="blog-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h3>
                    </a>

                    <p class="blog-meta">
                      By <cite>Mr Admin</cite> / <time datetime="2022-04-26">Apr 26, 2025</time>
                    </p>

                  </div>

                </div>

                <div class="blog-card">

                  <a href="#">
                    <img src="./assets/images/slider/4.jpg" alt="lorem2" width="300" class="blog-banner">
                  </a>

                  <div class="blog-content">

                    <a href="#" class="blog-category">module</a>

                    <a href="#">
                      <h3 class="blog-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h3>
                    </a>

                    <p class="blog-meta">
                      By <cite>Mr Admin</cite> / <time datetime="2025-04-26">Apr 26, 2025</time>
                    </p>

                  </div>

                </div>

                <div class="blog-card">

                  <a href="#">
                    <img src="./assets/images/slider/4.jpg" alt="lorem2" width="300" class="blog-banner">
                  </a>

                  <div class="blog-content">

                    <a href="#" class="blog-category">module</a>

                    <a href="#">
                      <h3 class="blog-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h3>
                    </a>

                    <p class="blog-meta">
                      By <cite>Mr Admin</cite> / <time datetime="2025-04-26">Apr 26, 2025</time>
                    </p>

                  </div>

                </div>

                <div class="blog-card">

                  <a href="#">
                    <img src="./assets/images/slider/4.jpg" alt="lorem2" width="300" class="blog-banner">
                  </a>

                  <div class="blog-content">

                    <a href="#" class="blog-category">module</a>

                    <a href="#">
                      <h3 class="blog-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h3>
                    </a>

                    <p class="blog-meta">
                      By <cite>Mr Admin</cite> / <time datetime="2025-04-26">Apr 26, 2025</time>
                    </p>

                  </div>

                </div>

              </div>

            </div>

          </div>

  </div></div></div></main>

  <!--
    - FOOTER
  -->

  <!-- Footer Start -->
  <footer>
    <div class="footer-container">
      <div class="footer-section logo-section">
        <h1><b>TechGo</b></h1>
        <p>Your source for electronics components and tools.</p>
        <div class="footer-social">
          <a href="https://www.facebook.com/" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="https://x.com/" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com/" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <div class="footer-section pages-section">
        <h3>Pages</h3>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="./pages/4Contact by r&mar/contact.html">Contact</a></li>
          <li><a href="./pages/3About by huss/about.html">About</a></li>
          <li><a href="./login/login.php">Login/Register</a></li>
        </ul>
      </div>
      <div class="footer-section contact-section">
        <h3>Contact Us</h3>
        <p><i class="fas fa-phone"></i> Hotline: <a href="tel:+201207813367">+201207813367</a></p>
        <p><i class="fas fa-envelope"></i> Email: <a href="mailto:info@techgo.com">info@techgo.com</a></p>
        <p><i class="fab fa-whatsapp"></i> WhatsApp: <a href="https://wa.me/201207813367" target="_blank">+201207813367</a></p>
      </div>
      <div class="footer-section location-section">
        <h3>Location</h3>
        <p><i class="fas fa-map-marker-alt"></i> 158 Elhourya St, Elbrahimya, Alexandria, Egypt</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3412.481506810454!2d29.9305363151434!3d31.20732198147567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c4e5b9d6f6ff%3A0x8a8c7d1b9e4f5d2a!2s158%20El%20Horreya%20Rd%2C%20Bab%20Sharqi%20WA%20 Wabour%20Al%20Meyah%2C%20Alexandria%20Governorate%205422031%2C%20Egypt!5e0!3m2!1sen!2seg!4v1678886011123!5m2!1sen!2seg" width="200" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Shop Location Map"></iframe>
      </div>
    </div>
    <div class="footer-bottom">
      <p>Copyright Reserved © TechGo 2025</p>
      <img src="./assets/images/payment.png" alt="Payment methods" class="payment-img" loading="lazy">
    </div>
  </footer>
  <!-- Footer End -->

  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule="" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



</body>

</html>