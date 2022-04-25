<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cars Catalog</title>
    <link rel="icon" href="./images/logo.png" type="image/png">
    <!-- Cars specific CSS -->
    <link rel="stylesheet" href="css/cars.css">
    <!-- Linking the style file for the navbar  -->
    <link rel="stylesheet" href="css/navbar.css">
    <!-- Linking the style file for the footer  -->
    <link rel="stylesheet" href="css/footer.css">
    <!-- Linking the javascript file  -->
    <script defer src="js/scrollTop.js"></script>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font awesome icons -->
    <script src="https://kit.fontawesome.com/b05006caf7.js" crossorigin="anonymous"></script>
    <!-- Linking the fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
</head>

<body>
    <!-- Nav bar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="./images/logo.svg" alt="Logo" height="35px" class="d-inline-block align-text-top" />
                Washington&nbsp;Rent&nbsp;A&nbsp;Car
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="cars.html">Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reservations.html">Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="policies.html">Policies</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Nav bar End  -->

    <div class="container text-capitalize">
        <!-- Title of the page -->
        <div class="row mt-5">
            <h1 class="text-center my-4">Our cars</h1>
        </div>
        <!-- Cars Start -->
        <div class="row g-5 ">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card border-warning border-2">
                    <img src="./images/cars/bmwM5.png" alt="BMW" class="card-img-top" />
                    <h1 class="card-title text-nowrap text-center">Sedan</h1>
                    <div class="card-body text-center">
                        <p class="card-text fs-5">
                            Black, Gasoline, 5 Adults, 3 bags, 5 doors
                        </p>
                        <a href="reservations.html" class="btn btn-lg btn-outline-warning text-black">
                            Reserve now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card border-warning border-2">
                    <img src="./images/cars/bmwM2.png" alt="BMW" class="card-img-top" />
                    <h1 class="card-title text-nowrap text-center">Sedan</h1>
                    <div class="card-body text-center">
                        <p class="card-text fs-5">
                            Orange, Gasoline, 4 Adults, 3 bags, 3 doors
                        </p>
                        <a href="reservations.html" class="btn btn-lg btn-outline-warning text-black">Reserve now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card border-warning border-2">
                    <img src="./images/cars/tesla2.png" alt="tesla" class="card-img-top" />
                    <h1 class="card-title text-nowrap text-center">Sedan</h1>
                    <div class="card-body text-center">
                        <p class="card-text fs-5">
                            White, Electric, 5 Adults, 4 bags, 5 doors
                        </p>
                        <a href="reservations.html" class="btn btn-lg btn-outline-warning text-black">Reserve now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card border-warning border-2">
                    <img src="./images/cars/tesla3.png" alt="tesla" class="card-img-top" />
                    <h1 class="card-title text-nowrap text-center">Sedan</h1>
                    <div class="card-body text-center">
                        <p class="card-text fs-5">
                            Black, Electric, 5 Adults, 3 bags, 5 doors
                        </p>
                        <a href="reservations.html" class="btn btn-lg btn-outline-warning text-black">Reserve now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card border-warning border-2">
                    <img src="./images/cars/toyota.png" alt="toyota" class="card-img-top" />
                    <h1 class="card-title text-nowrap text-center">Sedan</h1>
                    <div class="card-body text-center">
                        <p class="card-text fs-5">
                            Grey, Gasoline, 5 Adults, 3 bags, 5 doors
                        </p>
                        <a href="reservations.html" class="btn btn-lg btn-outline-warning text-black">Reserve now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card border-warning border-2">
                    <img src="./images/cars/toyota_prius.png" alt="toyota" class="card-img-top" />
                    <h1 class="card-title text-nowrap text-center">Sedan</h1>
                    <div class="card-body text-center">
                        <p class="card-text fs-5">
                            White, Hybrid, 5 Adults, 3 bags, 5 doors
                        </p>
                        <a href="reservations.html" class="btn btn-lg btn-outline-warning text-black">Reserve now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card border-warning border-2">
                    <img src="./images/cars/mercedescabrio.png" alt="mercedes Cabrio" class="card-img-top" />
                    <h1 class="card-title text-nowrap text-center">Convertible</h1>
                    <div class="card-body text-center">
                        <p class="card-text fs-5">
                            Grey, Gasoline, 4 Adults, 2 bags, 3 doors
                        </p>
                        <a href="reservations.html" class="btn btn-lg btn-outline-warning text-black">Reserve now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card border-warning border-2">
                    <img src="./images/cars/mercedesclk.png" alt="Mercdes SUV" class="card-img-top" />
                    <h1 class="card-title text-nowrap text-center">SUV</h1>
                    <div class="card-body text-center">
                        <p class="card-text fs-5">
                            White, Diesel, 5 Adults, 4 bags, 5 doors
                        </p>
                        <a href="reservations.html" class="btn btn-lg btn-outline-warning text-black">Reserve now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card border-warning border-2">
                    <img src="./images/cars/cadillac.png" alt="Cadillac" class="card-img-top" />
                    <h1 class="card-title text-nowrap text-center">SUV</h1>
                    <div class="card-body text-center">
                        <p class="card-text fs-5">
                            Blue, Gasoline, 7 Adults, 4 bags, 5 doors
                        </p>
                        <a href="reservations.html" class="btn btn-lg btn-outline-warning text-black">Reserve now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card border-warning border-2">
                    <img src="./images/cars/land_rover.png" alt="BMW" class="card-img-top" />
                    <h1 class="card-title text-nowrap text-center">SUV</h1>
                    <div class="card-body text-center">
                        <p class="card-text fs-5">
                            White, Diesel, 5 Adults, 4 bags, 5 doors
                        </p>
                        <a href="reservations.html" class="btn btn-lg btn-outline-warning text-black">Reserve now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card border-warning border-2">
                    <img src="./images/cars/Velar.png" alt="BMW" class="card-img-top" />
                    <h1 class="card-title text-nowrap text-center">SUV</h1>
                    <div class="card-body text-center">
                        <p class="card-text fs-5">
                            Grey, Gasoline, 5 Adults, 4 bags, 5 doors
                        </p>
                        <a href="reservations.html" class="btn btn-lg btn-outline-warning text-black">Reserve now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card border-warning border-2">
                    <img src="./images/cars/volvo_xc90.png" alt="volvo" class="card-img-top" />
                    <h1 class="card-title text-nowrap text-center">SUV</h1>
                    <div class="card-body text-center">
                        <p class="card-text fs-5">
                            Black, Gasoline, 7 Adults, 4 bags, 5 doors
                        </p>
                        <a href="reservations.html" class="btn btn-lg btn-outline-warning text-black">Reserve now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cars End -->

    <!-- Footer Start -->
    <div class="container-fluid">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="index.html" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1"><img src="./images/logo.svg" alt="LOGO" width="150px"></a>
                <span class="text-muted">&copy; 2022 Washington Inc</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="https://twitter.com/"><i class="fa-brands fa-twitter fa-2x"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/"><i class="fa-brands fa-facebook fa-2x"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/"><i class="fa-brands fa-instagram fa-2x"></i></a></li>
            </ul>
        </footer>
    </div>
    <!-- Footer End -->

    <!-- To Top Start -->
    <div id="butoni">
        <div id="showButton">
        <a href="#top">
            <div class="toTopButtonImage"><i class="fa-solid fa-angle-up fa-3x text-warning"></i></div>
        </a>
        </div>
    </div>
  <!-- To Top End -->
</body>

</html>