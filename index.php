<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>NATURE WINGS</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />

  <style>
    .service-item-top .overflow-hidden {
      height: 300px;
    }

    .service-item-top img {
      height: 100%;
      object-fit: cover;
    }
  </style>
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Header -->
  <?php include('header.php') ?>

  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
      <!-- Banner Slide 1 -->
      <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="img/silajit_baner.jpeg" style="height: 673px !important"
          alt="Pure Saffron Banner" />
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
          style="background: rgba(0, 0, 0, 0.4)">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-10 col-lg-8">
                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                  Premium Kashmiri Saffron
                </h5>
                <h1 class="display-3 text-white animated slideInDown mb-4">
                  Purity You Can Taste, Quality You Can Trust
                </h1>
                <p class="fs-5 fw-medium text-white mb-4 pb-2">
                  Discover handpicked, lab-tested saffron threads sourced
                  directly from the valleys of Kashmir — ideal for wellness,
                  skincare, and culinary use.
                </p>
                <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
                  Buy Now
                </a>
                <a href="#" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">
                  View Benefits
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Banner Slide 2 -->
      <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="img/Pure-kashmiri-saffron.jpeg" alt="Saffron Banner 2"
          style="height: 673px !important" />
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
          style="background: rgba(0, 0, 0, 0.4)">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-10 col-lg-8">
                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                  100% Pure & Organic Saffron
                </h5>
                <h1 class="display-3 text-white animated slideInDown mb-4">
                  Boost Immunity, Glow Naturally
                </h1>
                <p class="fs-5 fw-medium text-white mb-4 pb-2">
                  From improving digestion to enhancing skin radiance — our
                  saffron is the gold standard in Ayurvedic and modern
                  wellness.
                </p>
                <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
                  Order Now
                </a>
                <a href="#" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">
                  Health Uses
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel End -->

  <!-- Service Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
          <div class="overflow-hidden">
            <img class="img-fluid w-100" height="500px" src="img/Pure-Himalayan-Shilajit.jpeg" alt="" />
          </div>
          <div class="d-flex align-items-center justify-content-between bg-light p-4">
            <h5 class="text-truncate me-3 mb-0">Pure Himalayan Shilajit</h5>
            <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i
                class="fa fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
          <div class="overflow-hidden">
            <img class="img-fluid w-100 h-100" src="img/Pure-kashmiri-saffron.jpeg" alt="" />
          </div>
          <div class="d-flex align-items-center justify-content-between bg-light p-4">
            <h5 class="text-truncate me-3 mb-0">Pure Kashmiri Saffron</h5>
            <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i
                class="fa fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.5s">
          <div class="overflow-hidden">
            <img class="img-fluid w-100 h-100" src="img/silajit_baner.jpeg" alt="" />
          </div>
          <div class="d-flex align-items-center justify-content-between bg-light p-4">
            <h5 class="text-truncate me-3 mb-0">Saffron</h5>
            <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i
                class="fa fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->

  <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="text-secondary text-uppercase">About Us</h6>
          <h1 class="mb-4">
            Nature Wings – Purity from Nature, Delivered to You
          </h1>
          <p class="mb-4">
            At Nature Wings, we specialize in delivering the world’s finest
            saffron — hand-harvested from the pristine valleys of Kashmir.
            Known for its unmatched aroma, vibrant color, and therapeutic
            benefits, our saffron is carefully selected and lab-tested to
            ensure 100% purity and potency. We are committed to offering a
            natural, chemical-free product that supports health, enhances
            beauty, and enriches your culinary experiences.
          </p>
          <p class="fw-medium text-primary">
            <i class="fa fa-check text-success me-3"></i>100% Pure &
            Lab-Tested Kashmiri Saffron
          </p>
          <p class="fw-medium text-primary">
            <i class="fa fa-check text-success me-3"></i>Perfect for Wellness,
            Cooking & Skincare
          </p>
          <p class="fw-medium text-primary">
            <i class="fa fa-check text-success me-3"></i>Sustainably Sourced &
            Ethically Packed
          </p>
          <div class="bg-primary d-flex align-items-center p-4 mt-5">
            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
              style="width: 60px; height: 60px">
              <i class="fa fa-phone-alt fa-2x text-primary"></i>
            </div>
            <div class="ms-3">
              <p class="fs-5 fw-medium mb-2 text-white">Customer Support</p>
              <h3 class="m-0 text-secondary">+91 7876606476</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-6 pt-4" style="min-height: 500px">
          <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
            <img class="position-absolute img-fluid w-100 h-100" src="img/Pure-Himalayan-Shilajit.jpeg"
              style="object-fit: cover; padding: 0 0 50px 100px" alt="Nature Wings Saffron Display" />
            <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50"
              src="img/Pure-kashmiri-saffron.jpeg" style="object-fit: cover" alt="Pure Kashmiri Saffron Closeup" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Products Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="text-secondary text-uppercase">Our Products</h6>
        <h1 class="mb-5">
          Experience the Essence of Purity with Nature Wings Saffron – Rich in
          Aroma, Flavor & Wellness
        </h1>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/Pure-Himalayan-Shilajit.jpeg" class="card-img-top" style="height: 260px" alt="Himalayan" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Pure Himalayan Shilajit</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Himalayan-Shilajit.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/lahsun.jpeg" class="card-img-top" style="height: 260px" alt="Kashmiri" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Wild garlic (Fritillaria)</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Wild-garlic.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/Pure-kashmiri-saffron.jpeg" style="height: 260px" class="card-img-top" alt="Kashmiri" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Pure Kashmiri Saffron</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Kashmiri-Saffron.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/MONGRA.jpeg" class="card-img-top" style="height: 260px" alt="MONGRA" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Saffron Oil</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Saffron-Oil.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/Fritillaria.jpeg" style="height: 260px" class="card-img-top" alt="MONGRA" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Cordyceps Sinesis</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Wild-garlic.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/Tegetus-Minuta.jpeg" style="height: 260px" class="card-img-top" alt="MONGRA" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Tegetus Minuta</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Tegetus-Minuta.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/Laveadus-Essential-Oil.jpeg" style="height: 260px" class="card-img-top" alt="MONGRA" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Laveadus Essential Oil</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Laveadus-Essential-Oil.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/Himachal-pardesh-quality-Cordyceps-sinesis(4000grade).jpeg" style="height: 260px"
              class="card-img-top" alt="MONGRA" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">
                Himachal pardesh quality Cordyceps sinesis(4000grade)
              </h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Himachal-pardesh-quality-Cordyceps-sinesis(4000grade).php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Products End -->

  <!-- Fact Start -->
  <div class="container-fluid fact bg-dark my-5 py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
          <i class="fa fa-check fa-2x text-white mb-3"></i>
          <h2 class="text-white mb-2" data-toggle="counter-up">10</h2>
          <p class="text-white mb-0">Years Experience</p>
        </div>
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
          <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
          <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
          <p class="text-white mb-0">Pure Kashmiri or Himalayan Shilajit</p>
        </div>
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
          <i class="fa fa-users fa-2x text-white mb-3"></i>
          <h2 class="text-white mb-2" data-toggle="counter-up">235</h2>
          <p class="text-white mb-0">Satisfied Clients</p>
        </div>
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
          <i class="fa fa-wrench fa-2x text-white mb-3"></i>
          <h2 class="text-white mb-2" data-toggle="counter-up">134</h2>
          <p class="text-white mb-0">Compleate Projects</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Fact End -->

  <!-- Service Start -->
  <div class="container-fluid py-5 px-4 px-lg-0">
    <div class="row g-0">
      <div class="col-lg-3 d-none d-lg-flex">
        <div class="d-flex align-items-center justify-content-center bg-primary w-100 h-100">
          <h1 class="display-3 text-white m-0" style="transform: rotate(-90deg)">
            10 Years Experience
          </h1>
        </div>
      </div>
      <div class="col-md-12 col-lg-9">
        <div class="ms-lg-5 ps-lg-5">
          <div class="text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">
              Our Natural Wellness Offerings
            </h6>
            <h1 class="mb-5">Explore Our Premium Saffron & Shilajit Range</h1>
          </div>

          <div class="owl-carousel service-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
            <!-- Service 1: Saffron -->
            <div class="bg-light p-4">
              <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                style="width: 75px; height: 75px">
                <i class="fa fa-leaf fa-2x text-primary"></i>
              </div>
              <h4 class="mb-3">Pure Kashmiri Saffron</h4>
              <p>
                Handpicked from the Pampore fields of Kashmir, our saffron is
                known for its rich aroma, intense color, and high-quality
                strands.
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>Mongra Grade –
                Highest Purity
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>Perfect for
                Culinary & Medicinal Use
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>Lab-Tested for
                Authenticity
              </p>
              <a href="#" class="btn bg-white text-primary w-100 mt-2">
                Read More<i class="fa fa-arrow-right text-secondary ms-2"></i>
              </a>
            </div>

            <!-- Service 2: Kashmiri Shilajit -->
            <div class="bg-light p-4">
              <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                style="width: 75px; height: 75px">
                <i class="fa fa-mountain fa-2x text-primary"></i>
              </div>
              <h4 class="mb-3">Kashmiri Shilajit Resin</h4>
              <p>
                Harvested from the high-altitude rocks of Kashmir, this potent
                shilajit resin is packed with fulvic acid and essential
                minerals.
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>Boosts Energy &
                Stamina
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>100% Natural &
                Purified
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>Supports Immunity
                & Vitality
              </p>
              <a href="#" class="btn bg-white text-primary w-100 mt-2">
                Read More<i class="fa fa-arrow-right text-secondary ms-2"></i>
              </a>
            </div>

            <!-- Service 3: Himalayan Shilajit -->
            <div class="bg-light p-4">
              <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                style="width: 75px; height: 75px">
                <i class="fa fa-water fa-2x text-primary"></i>
              </div>
              <h4 class="mb-3">Himalayan Shilajit Drops</h4>
              <p>
                Liquid shilajit sourced from the pristine Himalayan range—easy
                to consume and ideal for daily wellness support.
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>Rich in Fulvic &
                Humic Acid
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>Improves Focus &
                Recovery
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>Convenient
                Dropper Packaging
              </p>
              <a href="#" class="btn bg-white text-primary w-100 mt-2">
                Read More<i class="fa fa-arrow-right text-secondary ms-2"></i>
              </a>
            </div>

            <!-- Service 4: Delivery & Assurance -->
            <div class="bg-light p-4">
              <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                style="width: 75px; height: 75px">
                <i class="fa fa-truck fa-2x text-primary"></i>
              </div>
              <h4 class="mb-3">Fast Delivery & Authenticity Guarantee</h4>
              <p>
                All products are securely packed, lab-tested, and come with
                100% authenticity assurance with PAN India shipping.
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>Secure, Airtight
                Packaging
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>Authenticity
                Certificates
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>Cash on Delivery
                Available
              </p>
              <a href="#" class="btn bg-white text-primary w-100 mt-2">
                Read More<i class="fa fa-arrow-right text-secondary ms-2"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->

  <!-- Testimonial Start -->
  <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="text-center">
        <h6 class="text-secondary text-uppercase">Testimonial</h6>
        <h1 class="mb-5">What Our Customers Say</h1>
      </div>
      <div class="owl-carousel testimonial-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
        <!-- Testimonial 1 -->
        <div class="testimonial-item text-center">
          <div class="testimonial-text bg-light text-center p-4 mb-4">
            <p class="mb-0">
              I’ve been using Nature Wings’ Kashmiri saffron in my daily
              milk—it’s pure, aromatic, and gives an instant boost. Truly the
              best I’ve found online!
            </p>
          </div>
          <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/testimonial-1.jpg"
            style="width: 80px; height: 80px" />
          <div class="mb-2">
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
          </div>
          <h5 class="mb-1">Sarah M.</h5>
          <p class="m-0">Verified Buyer</p>
        </div>

        <!-- Testimonial 2 -->
        <div class="testimonial-item text-center">
          <div class="testimonial-text bg-light text-center p-4 mb-4">
            <p class="mb-0">
              I ordered their Himalayan Shilajit and within a week I noticed
              improved energy levels and clarity. It dissolves well and tastes
              authentic. Highly recommended!
            </p>
          </div>
          <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/testimonial-2.jpg"
            style="width: 80px; height: 80px" />
          <div class="mb-2">
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
          </div>
          <h5 class="mb-1">Jason K.</h5>
          <p class="m-0">Sneaker Enthusiast</p>
        </div>

        <!-- Testimonial 3 -->
        <div class="testimonial-item text-center">
          <div class="testimonial-text bg-light text-center p-4 mb-4">
            <p class="mb-0">
              As a fitness trainer, I’ve tried many supplements. Nature Wings’
              Shilajit is 100% natural and gives me the stamina I need for
              long training days.
            </p>
          </div>
          <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/testimonial-3.jpg"
            style="width: 80px; height: 80px" />
          <div class="mb-2">
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
          </div>
          <h5 class="mb-1">Leah R.</h5>
          <p class="m-0">Fitness Trainer</p>
        </div>

        <!-- Testimonial 4 -->
        <div class="testimonial-item text-center">
          <div class="testimonial-text bg-light text-center p-4 mb-4">
            <p class="mb-0">
              The Kashmiri saffron from Nature Wings adds a beautiful golden
              hue and taste to my tea. It’s so fragrant and clearly authentic.
              I’m impressed!
            </p>
          </div>
          <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/testimonial-4.jpg"
            style="width: 80px; height: 80px" />
          <div class="mb-2">
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
          </div>
          <h5 class="mb-1">Amélie.</h5>
          <p class="m-0">Runner & Shoe Collector</p>
        </div>

        <!-- Testimonial 5 -->
        <div class="testimonial-item text-center">
          <div class="testimonial-text bg-light text-center p-4 mb-4">
            <p class="mb-0">
              I tried both their saffron and resin shilajit—excellent quality,
              quick delivery, and neat packaging. Nature Wings is now my go-to
              for wellness!
            </p>
          </div>
          <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/testimonials_1.webp"
            style="width: 80px; height: 80px" />
          <div class="mb-2">
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
          </div>
          <h5 class="mb-1">Emily S.</h5>
          <p class="m-0">Lifestyle Blogger</p>
        </div>
      </div>
    </div>
  </div>
  <!--  Testimonial End -->

  <!-- Contact Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="text-secondary text-uppercase">Get In Touch</h6>
          <h1 class="mb-4">Contact For Any Query</h1>
          <p class="mb-4">
            Have questions about our products, your order, or anything else?
            We're here to help! Reach out to us anytime and our support team
            will get back to you as soon as possible.
          </p>
          <iframe class="position-relative w-100"
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7776.618851434936!2d77.57163588778546!3d12.952041305361558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sFLAT%20102%20KT%20APPTS%20RAM-17%20LAXMAN%20BLDG%20VV%20PURANA%20DIAGONAL%20ROAD%20NEXT%20TO%20JAIN%20COLLAGE%20BASAVANAGUDI.!5e0!3m2!1sen!2sin!4v1758002778916!5m2!1sen!2sin"
            frameborder="0" style="height: 300px; border: 0" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
        </div>
        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="bg-light p-5 h-100 d-flex align-items-center">
            <form onsubmit="whatsappForm(event)">
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="name" placeholder="Your Name" />
                    <label for="name">Your Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="email" placeholder="Your Email" />
                    <label for="email">Your Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="subject" placeholder="Subject" />
                    <label for="subject">Subject</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a message here" id="message"
                      style="height: 150px"></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary w-100 py-3" type="submit">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->

  <!-- footer -->
  <?php include('footer.php') ?>