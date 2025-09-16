<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NATURE WINGS - Pure Himalayan Shilajit </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', sans-serif;
        }

        .product-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px 15px;
        }

        .product-box {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .product-image {
            max-width: 100%;
            border-radius: 10px;
        }

        .product-details h2 {
            font-weight: 700;
            color: #2c3e50;
        }

        .product-details p {
            color: #555;
            line-height: 1.6;
        }

        .feature-list li {
            margin-bottom: 10px;
        }

        .btn-buy {
            background-color: #2ecc71;
            color: white;
            transition: background-color 0.3s ease;
        }

        .btn-buy:hover {
            background-color: #27ae60;
        }
    </style>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Header -->
    <?php include('header.php') ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Pure Himalayan Shilajit</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Pure Himalayan Shilajit</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- products details -->
    <div class="container product-container">
        <div class="row product-box p-4 animate__animated animate__fadeInUp">

            <!-- Left Side - Image -->
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <img src="img/Pure-Himalayan-Shilajit.jpeg" alt="Pure Himalayan Shilajit"
                    class="product-image animate__animated animate__zoomIn" />
            </div>

            <!-- Right Side - Content -->
            <div class="col-md-6 product-details mt-4 mt-md-0 animate__animated animate__fadeInRight">
                <h2>Pure Himalayan Shilajit</h2>
                <p>
                    Unlock the power of nature with Pure Himalayan Shilajit – a premium quality resin directly sourced
                    from the high-altitude rocks of the Himalayas. Rich in fulvic acid, minerals, and antioxidants, this
                    ancient remedy supports energy, vitality, and overall well-being.
                </p>

                <h5>Key Benefits:</h5>
                <ul class="feature-list">
                    <li>🌿 Boosts stamina and strength</li>
                    <li>🧠 Enhances cognitive function</li>
                    <li>🔥 Supports metabolism and immunity</li>
                    <li>💪 Improves muscle recovery</li>
                    <li>✅ 100% Natural and Organic</li>
                </ul>

                <div class="mt-4">
                    <strong>Availability:</strong> In Stock
                </div>

                <div class="mt-4">
                    <button class="btn btn-buy btn-lg"><a href="" data-bs-toggle="modal"
                            data-bs-target="#enquiryModal">Enquiry Now</a></button>
                </div>
            </div>
        </div>
    </div>
    <!-- products details -->

    <!-- footer -->
    <?php include('footer.php') ?>