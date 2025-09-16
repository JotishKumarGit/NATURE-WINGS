<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NATURE WINGS - Wild garlic </title>
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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Wild garlic</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Wild garlic</li>
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
                <img src="img/Fritillaria.jpeg" alt="Wild Garlic (Fritillaria)"
                    class="product-image animate__animated animate__zoomIn" />
            </div>

            <!-- Right Side - Content -->
            <div class="col-md-6 product-details mt-4 mt-md-0 animate__animated animate__fadeInRight">
                <h2>Wild Garlic (Fritillaria)</h2>
                <p>
                    Wild Garlic, also known as <strong>Fritillaria</strong>, is a rare Himalayan herb prized for its
                    traditional medicinal benefits. Rich in natural compounds, it's used to treat respiratory ailments,
                    detoxify the body, and enhance overall wellness. Carefully harvested in the mountains, it's a
                    natural
                    remedy with ancient roots.
                </p>

                <h5>Key Benefits:</h5>
                <ul class="feature-list">
                    <li>🌿 Supports respiratory health and lung function</li>
                    <li>🧄 Acts as a natural expectorant</li>
                    <li>🛡️ Boosts immunity and detoxification</li>
                    <li>🌬️ Helps relieve cough and congestion</li>
                    <li>✅ 100% wild harvested and free of chemicals</li>
                </ul>

                <div class="mt-4">
                    <strong>Availability:</strong> In Stock
                </div>

                <div class="mt-4">
                    <button class="btn btn-buy btn-lg">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal"
                            style="color: white; text-decoration: none;">Enquiry Now</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- products details -->

    <!-- footer -->
    <?php include('footer.php') ?>
    