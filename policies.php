<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Policies</title>
    <link rel="icon" href="./images/logo.png" type="image/png">
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="./images/logo.svg" alt="Logo" height="35px" class="d-inline-block align-text-top">
                Washington&nbsp;Rent&nbsp;A&nbsp;Car
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="cars.html">Cars</a></li>
                    <li class="nav-item"><a class="nav-link" href="reservations.html">Reservation</a></li>
                    <li class="nav-item"><a class="nav-link active" href="policies.html">Policies</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Policies Start -->
    <div class="container">
        <div class="row mt-5 g-3">
            <h1 class="text-center mt-4">Our Policies</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="./images/policies/policies.jpg" class="img-fluid" alt="folder">
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12 my-sm-3">
                <h3 class="fs-2 text-center text-capitalize ">things to consider before renting a car</h3>
                <p class="fs-5">Washington Car Rental is focused on attending to customer needs and values. Through our
                    multiple services we believe we can accomodate and add value to your trip as you do to our company.
                    Before renting, please consider the primary agreement necessary for the rental, in order to avoid
                    further complications and ensure a smooth process. In addition, refer to the rules and policies
                    below to be informed on the other policies needed to be followed prior to finalizing your request.
                    Thank you for chosing Washington Car Rental as your first choice!</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <h3 class="fs-2 text-center text-capitalize">Renting policies</h3>
                <ul class="list-group">
                    <li class="list-group-item">To be 25 years old (if you’re under 25, you may be required to pay a young driver’s fee).</li>
                    <li class="list-group-item">A valid driver's license with a photo with expiration date later than the drop-off date. </li>
                    <li class="list-group-item">A photo ID (For example: a driver’s license or passport).</li>
                    <li class="list-group-item">Credit Card, Debit Card or Cash payment.</li>
                    <li class="list-group-item">Any damage that is made to the car is full responsibilty of the renter and will require reimbursment for the damage.</li>
                    <li class="list-group-item">Number of contact is required regarding the rented car.</li>
                    <li class="list-group-item">The contract starts at the moment you acquire the car and lasts a minimum of 24 hours. </li>
                    <li class="list-group-item">There is a 30 minute margin of lateness, if that is exceeded there is a lateness fee. </li>
                    <li class="list-group-item">Incompliance of these policies will result to a contract end and legal matters will be taken into account.</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="./images/policies/keys.jpg" class="img-fluid" alt="folder">
            </div>
        </div>
    </div>
    <!-- Policies End -->


    <!-- Footer Start -->
    <div class="container-fluid">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="index.html" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <img src="./images/logo.svg" alt="LOGO" width="150px">
                </a>
                <span class="text-muted">&copy; 2022 Washington Inc</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="https://twitter.com/"><i class="fa-brands fa-twitter fa-2x"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/"><i class="fa-brands fa-facebook fa-2x"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/"><i class="fa-brands fa-instagram fa-2x"></i></a></li>
            </ul>
        </footer>
    </div>
    <!-- Footer end -->

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