<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <title>Washington Rent a car</title>
    <link rel="icon" href="./images/logo.png" type="image/png">
    <!-- Index specific CSS -->
    <link rel="stylesheet" href="CSS/index.css">
    <!-- Linking the style file for the navbar  -->
    <link rel="stylesheet" href="css/navbar.css">
    <!-- Linking the style file for the footer  -->
    <link rel="stylesheet" href="css/footer.css">
    <!-- Linking the javascript file  -->
    <script defer src="js/scrollTop.js"></script>
    <script defer src="js/index.js"></script>

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
  <?php include("common/navbar.php"); ?>


    <!-- Banner Start -->
    <div class="container-fluid text-center text-white" id="startBanner">
        <h3>The definition of a royal ride</h3>
        <h1>Rent your car Today!</h1>
        <a class="btn btn-warning mt-3 text-white rounded-pill" href="reservations.php" id="btnBanner">
            <h4>Rent Car Now <i class="fa-solid fa-arrow-right d-inline"></i></h4>
        </a>
    </div>
    <!-- Banner End -->

    <div class="container">
        <!-- Why Us Start  -->
        <h2 class="text-center mt-5 mb-3">WITH SO MANY OPTIONS OUT THERE, WHY US?</h2>
        <h4 class="text-center mb-5">Some of our benefits</h4>
        <div class="row gy-5">
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="bg-warning rounded p-4 benefits">
                    <i class="fa-solid fa-circle-dollar-to-slot fa-3x d-inline"></i>
                    <h3 class="d-inline ms-3">SPECIAL PRICES</h3>
                    <p class="mt-3  fs-5">
                        Using our services you are guaranteed the least-costly price available. Our company has ranked
                        first in the affordability grade for the last 5 years, and we are focused on providing the very
                        best for our customers.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="bg-warning rounded p-4 benefits">
                    <i class="fa-solid fa-shield fa-3x d-inline"></i>
                    <h3 class="d-inline ms-3">SAFEST OPTION</h3>
                    <p class="mt-3 fs-5">By using our service you are doing yourself a favour. With our vehicles you
                        won't have to worry about safety at any time. Safety is our number one priority on and off the
                        road.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="bg-warning rounded p-4 benefits">
                    <i class="fa-solid fa-hourglass fa-3x d-inline"></i>
                    <h3 class="d-inline ms-3">TIME EFFICIENT</h3>
                    <p class="mt-3 fs-5">Easy and time-efficient booking at multiple points across the country and
                        online using our website platform. No excessive time-consuming regulations, pick your car and
                        go.</p>
                </div>
            </div>
        </div>
        <!-- Why Us End -->

        <!-- Fleet Start -->
        <div class="row mt-5 mb-5 gy-4">
            <div class="col-lg-5 col-md-6 col-sm-12 ">
                <h2>A PIECE OF OUR FLEET</h2>
                <p class="fs-4">Each piece of our fleet is chosen carefully with great attention to detail.</p>
                <a href="cars.php" class="btn btn-lg btn-outline-warning text-black">Our fleet</a>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12">
                <div id="carCarusel" class="carousel slide rounded" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2500">
                            <img src="./images/homepage/fleet1.jpg" class="d-block w-100" alt="Fleet 1">
                        </div>
                        <div class="carousel-item" data-bs-interval="2500">
                            <img src="./images/homepage/fleet2.jpg" class="d-block w-100" alt="Fleet 2">
                        </div>
                        <div class="carousel-item" data-bs-interval="2500">
                            <img src="./images/homepage/fleet3.jpg" class="d-block w-100" alt="Fleet 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev text-warning" type="button" data-bs-target="#carCarusel"
                        data-bs-slide="prev">
                        <i class="fa-solid fa-circle-left fa-2x" aria-hidden="true"></i>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next text-warning" type="button" data-bs-target="#carCarusel"
                        data-bs-slide="next">
                        <i class="fa-solid fa-circle-right fa-2x" aria-hidden="true"></i>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Fleet End -->
    </div>

    <!-- Statistics Start -->
    <div class="container-fluid p-0 text-white" id="OldBanner">
        <div class="row mt-5 mb-5">
            <div class="col-3 text-center pt-5">
                <i class="fa-solid fa-user-group fa-3x text-warning"></i>
                <h2>400,000+</h2>
                <h3>CLIENTS SERVED</h3>
            </div>
            <div class="col-3 text-center pt-5">
                <i class="fa-solid fa-city fa-3x text-warning"></i>
                <h2>48</h2>
                <h3>Cities</h3>
            </div>
            <div class="col-3 text-center pt-5">
                <i class="fa-solid fa-user-plus fa-3x text-warning"></i>
                <h2>30,000+</h2>
                <h3>REGISTERED MEMBERS</h3>
            </div>
            <div class="col-3 p-3 text-center pt-5">
                <i class="fa-solid fa-car fa-3x text-warning"></i>
                <h2>3500+</h2>
                <h3>AVAILABLE CARS</h3>
            </div>
        </div>
    </div>
    <!-- Statistics End -->

    <!-- Steps Start -->
    <div class="container mt-5">
        <h1 class="text-capitalize text-center mt-5">renting a car has never been easier</h1>
        <p class="text-muted text-center">With no time-consuming regulations, at our company you can rent a car in less
            than 15 minutes.</p>
        <div class="row mt-3">
            <div class="col-8 offset-2">
                <div class="menu">
                    <a onclick="firstItem()">
                        <div class="steps" id="step1">First Step</div>
                    </a>
                    <a onclick="secondItem()">
                        <div class="steps" id="step2">Second Step</div>
                    </a>
                    <a onclick="finalItem()">
                        <div class="steps" id="step3">Final Step</div>
                    </a>
                </div>
                <div class="easy-booking-content text-center">
                    <div class="" id="item1">
                        <i class="fa-solid fa-location-dot fa-6x my-2 text-warning"></i>
                        <h3>CHOOSE YOUR PICKUP LOCATION</h3>
                        <p>Your first step to the greatest rented car is choosing your pick up location. With our
                            service that can be anywhere inside the country.</p>
                    </div>
                    <div class="" id="item2">
                        <i class="fa-solid fa-calendar-days fa-6x my-2 text-warning"></i>
                        <h3>Choose your pickup date</h3>
                        <p>The second step is choosing your pickup date. You can book your car up to two months in
                            advance.</p>
                    </div>
                    <div class="" id="item3">
                        <i class="fa-solid fa-calendar-check fa-6x my-2 text-warning"></i>
                        <h3>You are good to go</h3>
                        <p>For your final step just give the final personal information and your car is booked and
                            ready.</p>
                        <a href="reservations.php" id="book-final-item"
                            class="text-black text-decoration-none p-2">Book Now &#62;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Steps End -->

        <!-- Footer Banner Start -->
        <div class="container-fluid text-black text-center" id="bottomBanner">
        <h1>Our support tean us available 24/7</h1>
        <a class="btn btn-warning mt-3 text-white rounded-pill" href="mailto:reservation@washington.com" id="btnBanner">
            <h4>Contact Us</h4>
        </a>
    </div>
    <!-- Footer Banner End -->
  <?php include("common/footer.php"); ?>


</body>

</php>