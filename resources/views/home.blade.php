<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gurkha's Eatery & Garden | Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Top Bar ======= -->
  <!-- <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>02 9310 3793</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 11:00 AM - 23:00 PM</span></i>
    </div>
  </section> -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto"> <!-- me-auto keep this inside class="logo" if logo is image-->
        <!-- <img src="assets/img/logo.png"> -->
      
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        <a href="/" class="restaurant-name">Gurkha's Eatery & Garden</a>
      </div>
      
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Classes</a></li>
          <!-- <li><a class="nav-link scrollto" href="#specials">Specials</a></li> -->
          <li><a class="nav-link scrollto" href="#events">Functions</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="#reservation">Reservations</a></li>
          <li>
          @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                    @if(auth()->user()->usertype == '1')
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @endif
                    @if(auth()->user()->usertype == '0')
                        <a href="{{ url('/userdashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @endif
                    <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    Log Out
                        </a>
                    </li>
                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                        @csrf
                    </form> 
                    @else
                        <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/gurkhasHome.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Gurkha's Eatery & Garden</h2>
                <p class="animate__animated animate__fadeInUp">
                  Welcome to our exquisite restaurant, where culinary artistry meets a delightful dining experience.
          Our passionate chefs craft each dish with precision, blending fresh, high-quality ingredients to create 
          flavors that linger on your palate. 
          Immerse yourself in an inviting ambiance and savor moments of gastronomic delight at our restaurant.
                </p>
                <!-- <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div> -->
              </div>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/happyhour.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Happy Hour</h2>
                <p class="animate__animated animate__fadeInUp">
                 "
                 Indulge in the ultimate happy hour experience at our restaurant, 
                 where every sip and bite is a celebration of joy. Join us for a delightful evening filled with 
                 specially crafted cocktails, tempting appetizers, and an ambiance that exudes warmth and cheer. 
                 Our happy hour is not just about great drinks; it's an invitation to unwind, socialize, and create 
                 lasting memories. From refreshing beverages to delectable snacks, we've curated a menu that caters
                  to your happiness. 
                 Come join us, and let the good times flow!"
                </p>
                <!-- <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div> -->
              </div>
            </div>
          </div>
          <!-- Slide 3-->
          <div class="carousel-item" style="background-image: url(assets/img/slide/gurkhasGarden.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Garden Sitting</h2>
                <p class="animate__animated animate__fadeInUp">
                  "The sun dipped below the horizon, casting a warm glow across the tranquil landscape. Gentle breezes rustled through the trees, 
                  carrying the soothing scent of blooming flowers. As the world settled into the hush of evening, a sense of calm enveloped 
                  everything, inviting contemplation and reflection. 
                  Nature's symphony played softly, creating a serene backdrop for a moment of quiet introspection."
                </p>
                <!-- <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div> -->
              </div>
            </div>
          </div>
             <!-- Slide 4 -->
             <div class="carousel-item" style="background-image: url(assets/img/slide/catering3.jpg);">
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2 class="animate__animated animate__fadeInDown">Catering Services</h2>
                  <p class="animate__animated animate__fadeInUp">
                    "Our catering services redefine culinary excellence, crafting an unforgettable experience for every event. 
                    From intimate gatherings to grand celebrations, our expert team meticulously plans and executes each detail, ensuring a 
                    seamless and delicious affair. We pride ourselves on using the finest ingredients to create a diverse menu that caters to all 
                    tastes and preferences.
                     Elevate your event with our professional touch and savor the impeccable flavors of our bespoke catering services."
                  </p>
                  <!-- <div>
                    <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                    <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                  </div> -->
                </div>
              </div>
            </div>
          <!-- Slide 5 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/boy_drawing.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Kids Friendly</h2>
                <p class="animate__animated animate__fadeInUp">
                  "Indulge in a delightful family dining experience at our restaurant, where the menu caters to both young palates and discerning adults. 
                  Our vibrant and welcoming atmosphere ensures a stress-free mealtime for families, complete with 
                  a dedicated play area for the little ones to enjoy. 
                  Discover the perfect blend of delicious flavors and family-friendly fun at our establishment."
                </p>
                <!-- <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div> -->
              </div>
            </div>
          </div>
          <!-- Slide 6 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/dogs.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Pets Friendly</h2>
                <p class="animate__animated animate__fadeInUp">
                  "Bring your furry friends along for a dining adventure at our pet-friendly restaurant, where tails wag as flavors delight. 
                  Our outdoor seating area is perfect for you and your four-legged companions to savor a meal together. 
                  Experience the joy of sharing good food and good times with your pets in our welcoming and pet-safe environment."
                </p>
                <!-- <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div> -->
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <!-- Promotion Popup -->

  <!-- End of Promotion Popup -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 " style='background-image: url("assets/img/gurkhasAbout1.jpg");'> 
            <!-- image size of about us 650*432 -->
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3><strong>About Us</strong></h3>
              <p>
                Welcome to Gurkhas Eatery and Garden, where Nepalese and Modern Australian cuisines
                harmoniously collide. Founded by a group of friends with a shared vision of culinary excellence and
                wide range of beverages options, our restaurant offers a curated menu blending traditional flavours
                and innovative techniques.
              </p>
              <p>
                Our chef's signature fusion meals elevate the dining experience, inviting you to explore the rich
                cultural taste of Nepalese and mix cuisine. Indulge further with our extensive drink selection,
                featuring classic to signature cocktails and a variety of tap and bottled beers, wines and spirits
                ensuring your culinary adventure is accompanied by a perfect sip.
              </p>
              <p>
                Nestled in a serene garden setting, we aim to not only satisfy your palate but also share the stories
                behind each dish, fostering a connection to our culture. Join us on a journey where friendship,
                passion, and diverse flavours converge, making Gurkhas Eatery and Garden a unique destination for
                those seeking a cultural and culinary adventure.
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Menu Section ======= -->
        @include('menu')
    <!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container">

        <div class="section-title">
          <h2>Check our <span>Classes</span></h2>
          <p style="font-weight: bolder;">
            <strong>$80 per person</strong><br>
            <strong>Minimum of 8 guests</strong>
          </p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Cocktail Classes</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cocktail Class</h3>
                    <p class="fst-italic">
                      In our cocktail class, the art of mixology comes alive as participants embark on a journey to master the craft of creating exquisite and balanced libations. 
                      From classic concoctions to contemporary creations, our expert mixologists guide students through the fundamentals of cocktail preparation, covering everything from the importance of quality ingredients to the precise techniques that elevate a drink from ordinary to extraordinary. 
                      The class provides hands-on experience, allowing participants to shake, stir, and garnish their way to becoming adept cocktail artisans. Whether exploring the history of iconic cocktails or experimenting with innovative flavor combinations, our cocktail class is a celebration of creativity and craftsmanship. Join us to unlock the secrets of the perfect pour, learn the nuances of flavor pairing, and discover the joy of crafting memorable and delightful cocktails that will impress any palate. 
                      Cheers to the art of mixology!
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/cocktailnew.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container">

        <div class="section-title">
          <h2>Organize Your <span>Functions</span> in our Restaurant</h2>
        </div>

        <div class="events-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Set Menu</h3>
                  <div class="price">
                    <!-- <p><span>$189</span></p> -->
                  </div>
                  <p class="fst-italic">
                    Enjoy our set menu for minimum of 6 people for just at $55 per person
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i>$55 per person (Bookings needed 48 hours prior)</li>
                    <li><i class="bi bi-check-circle"></i> 3 Courses</li>
                    <li><i class="bi bi-check-circle"></i> Minimum of 6 people </li>
                  </ul>
                  <!-- <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p> -->
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/slide/catering3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Catering</h3>
                  <div class="price">
                    <!-- <p><span>$290</span></p> -->
                  </div>
                  <p class="fst-italic">
                    Indulge your senses with our exquisite catering services, 
                    where every dish is a culinary masterpiece tailored to elevate your dining experience at Gurkha's Eatery & Garden.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Offers a wide variety of cuisines to meet your needs</li>
                    <li><i class="bi bi-check-circle"></i> We deliver our delicious food ready to eat, and our staff serves all your guests</li>
                    <!-- <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li> -->
                  </ul>
                  <p>
                    Any occasion or something special we deliver you the best variety of cuisines of your choices.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Birthday Party</h3>
                  <div class="price">
                    <!-- <p><span>$99</span></p> -->
                  </div>
                  <p class="fst-italic">
                    Celebrate life's special moments with us! Host an unforgettable birthday party at Gurkha's Eatery & Garden, 
                    where delicious cuisine, joyful ambiance, 
                    and personalized service come together to create cherished memories that last a lifetime.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Enjoy a tailored birthday celebration with our personalized services, from customizable menus to specially decorated spaces, ensuring that your special day reflects your unique style and preferences.</li>
                    <li><i class="bi bi-check-circle"></i> Indulge in a culinary journey with our diverse and mouthwatering menu options. From appetizers to desserts, our chefs craft each dish with care and creativity, promising a delightful feast for you and your guests.</li>
                    <li><i class="bi bi-check-circle"></i>Create lasting memories in our vibrant and celebratory ambiance. Whether it's a cozy intimate gathering or a lively party, our restaurant provides the perfect setting to revel in the joy of the occasion, surrounded by friends, family, and fantastic food.</li>
                  </ul>
                  <!-- <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p> -->
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/hens.jpg" class="img-fluid" alt="" >
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Hens Party</h3>
                  <div class="price">
                    <!-- <p><span>$120</span></p> -->
                  </div>
                  <p class="fst-italic">
                    Embark on a night of laughter, fun, and fabulous moments at [Venue Name] for your hen's party. With chic decor, handcrafted cocktails, and a lively atmosphere, it's the perfect destination to celebrate your last fling before the ring!
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i>Tailor your hen's party experience to perfection with our customizable packages. From themed decorations and personalized cocktails to entertainment options, we ensure your celebration reflects the bride-to-be's style and preferences.</li>
                    <li><i class="bi bi-check-circle"></i> Dive into an evening filled with laughter and entertainment. Enjoy live music, dance floors, or surprise performances that will keep the energy high and the celebration vibrant, creating unforgettable moments for the bride and her entourage.</li>
                    <!-- <li><i class="bi bi-check-circle"></i> Delight your taste buds with a delectable array of culinary delights. Our specially crafted menu promises a feast of flavors, ensuring that your hen's party is not only a celebration of friendship but also a culinary adventure to savor and enjoy.</li> -->
                  </ul>
                  <p>
                    Celebrate the bride-to-be's last fling before the ring with a sensational hen's party.
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/babyShower.jpg" class="img-fluid" alt="" id="babyshower">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Baby Shower</h3>
                  <div class="price">
                    <!-- <p><span>$99</span></p> -->
                  </div>
                  <p class="fst-italic">
                    Welcome the newest member of the family with love and joy at our baby shower celebration at Gurkha's Eatery & Garden. 
                    Revel in a charming atmosphere, delightful treats,and heartwarming moments as we celebrate the upcoming arrival of your little one.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Transform our venue into a haven of sweetness with charming decorations, soft pastels, and cute baby-themed elements. </li>
                    <li><i class="bi bi-check-circle"></i> Our baby shower offerings are designed to please the palate and add a delicious touch to the celebration.</li>
                    <li><i class="bi bi-check-circle"></i>  Engage in memorable activities and games that celebrate the journey into parenthood.</li>
                  </ul>
                  <!-- <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p> -->
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->

    <!--End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Some photos from <span>Our Restaurant</span></h2>
          <p>Explore the culinary experience visually through our enticing gallery, showcasing the artistry and ambiance that awaits you at Gurkha's Eatery & Garden</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/stairs.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/stairs.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/table1.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/table1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/table2.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/table2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/bar.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/bar.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/wall.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/wall.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/pic.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/pic.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/table1.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/table1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/table2.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/table2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <!-- <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Our Proffesional <span>Chefs</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Master Chef</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Patissier</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cook</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>End Chefs Section -->

    <!-- ======= Testimonials Section ======= -->
    
    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p>Visit our Restaurant at:</p>
        </div>
      </div>

      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.2038844433673!2d151.14791737565866!3d-33.88440257322067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12b0056070dbab%3A0xda458306966a7f4d!2s134%20Marion%20St%2C%20Leichhardt%20NSW%202040%2C%20Australia!5e0!3m2!1sen!2snp!4v1705085938301!5m2!1sen!2snp"   style="border:0; width: 100%; height: 350px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="container mt-5">

       

        <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form> -->

      </div>
    </section><!-- End Contact Section -->

    <!-- Reservation section-->
    <section id="reservation" class="reservation">
      <div class="container">
        <div class="section-title">
          <h2><span>For</span> Reservation</h2>
          <p><strong>Call us at: 02 9310 3793</strong> </p>
          <p><strong>Email: Gurkhaseag@gmail.com</strong></p>
          <p><strong>"Join us for a delightful meal! Ensure your preferred dining time by making a reservation today. 
            We look forward to serving you with the finest dishes."</strong></p>
        </div>
        @include('reservation')
      </div>
    </section>

    <!--End Reservation section-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="info-wrap">
        <div class="row">
          <div class="col-lg-3 col-md-6 info">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p>134 Marion St,<br> Leichhardt NSW 2040, <br>Australia</p>
          </div>

          <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
            <i class="bi bi-clock"></i>
            <h4>Open Hours:</h4>
            <p>Sunday-Thursday:<br>11:30 AM - 20:30 PM</p>
            <p>Friday-Saturday:<br>11:30 AM - 21:00 PM</p>
          </div>

          <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>Gurkhaseag@gmail.com</p>
          </div>

          <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>02 9310 3793</p>
          </div>
        </div>
      </div>
      <div class="social-links">
        <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
        <a href="https://www.facebook.com/profile.php?id=61555217176527" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/gurkhas_eatery_and_garden?igsh=MXIyeWlrNXoyaGh3Zg==" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.tiktok.com/@gurkhas49?_t=8jBtfoclCpG&_r=1" class="tiktok"><i class="bx bxl-tiktok"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Gurkha's Eatery & Garden</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Automatic show popup after 2 sec -->
  <script>
    const popup = document.querySelector('.popup');
    const close = document.querySelector('.close');
    window.onload = function(){
      setTimeout(function(){
      popup.style.display = "block";
    },2000)
    }
    close.addEventListener('click',()=>{
      popup.style.display="none";
    })
  </script>
 
</body>

</html>