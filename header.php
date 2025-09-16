<!-- Topbar -->
<div class="topbar">
    <div class="contact-info">
        <span><i class="fa fa-envelope me-1"></i>
            vaibhav.naturewings7@gmail.com</span>
        <span><i class="fa fa-phone me-1"></i> +91 7876606476</span>
    </div>
    <div class="social-icons">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
</div>
<!-- Topbar end -->

<!-- STICKY NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top px-3 py-2">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand fw-bold d-flex justify-content-center align-items-center" href="index.php">
            <img src="img/wing_logo_page-0001.jpg" alt="Logo" style="height: 60px" width="auto" />
            <!-- <span class="text-dark me-2"> NATURE WINGS </span> -->
        </a>
        <!-- Right Side Icons (Always visible) -->
        <div class="d-flex align-items-center ms-auto gap-3">
            <!-- <a href="#" class="text-dark"><i class="fa fa-search"></i></a>
          <a href="#" class="text-dark"><i class="fa fa-user"></i></a>
          <a href="#" class="text-dark position-relative">
            <i class="fa fa-shopping-cart"></i>
            <span
              class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark text-white"
              >0</span
            >
          </a> -->
            <button class="btn border-0 d-lg-block d-md-block d-sm-block" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasMenu">
                <i class="fa fa-bars fs-5"></i>
            </button>
        </div>
    </div>
</nav>
<!-- End navbar -->

<!-- OFFCANVAS MENU -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-unstyled">
            <!-- <li><a href="#" class="d-block py-2">Collection</a></li> -->

            <!-- Pages Dropdown (Accordion-style) -->
            <li>
                <button class="btn w-100 text-start p-0 border-0 bg-transparent toggle-submenu">
                    <span class="fw-bold d-flex justify-content-between align-items-center py-2">
                        Pages <i class="fa fa-chevron-down"></i>
                    </span>
                </button>
                <ul class="submenu list-unstyled ps-3 d-none">
                    <li><a href="index.php" class="d-block py-1">Home</a></li>
                    <li><a href="about.php" class="d-block py-1">About</a></li>
                    <li><a href="service.php" class="d-block py-1">Services</a></li>
                    <li><a href="contact.php" class="d-block py-1">Contact</a></li>
                    <li><a href="products.php" class="d-block py-1">Products</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>