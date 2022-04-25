<!DOCTYPE html>
<html>

<head>
    <title>Washington</title>
    <link rel="icon" href="./images/logo.png" type="image/png">
    <!-- Reservation specific CSS -->
    <link rel="stylesheet" href="css/reservation.css"/>
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"/>
</head>

<body>
    <!-- Nav Bar Start -->
    <?php include("common/navbar.php"); ?>
    <!-- Nav Bar End -->

    <div class="container">
        <div class="row mt-5 g-5">
            <!-- Car Carusel Start -->
            <div class="col-md-8 col-sm-12 pb-sm-5">
                <div id="carouselCars" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselCars" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"><img src="./images/reservation/1.jpg" alt="" class="d-block w-100"></button>
                        <button type="button" data-bs-target="#carouselCars" data-bs-slide-to="1" aria-label="Slide 2"><img src="./images/reservation/2.jpg" alt="" class="d-block w-100"></button>
                        <button type="button" data-bs-target="#carouselCars" data-bs-slide-to="2" aria-label="Slide 3"><img src="./images/reservation/3.jpg" alt="" class="d-block w-100"></button>
                        <button type="button" data-bs-target="#carouselCars" data-bs-slide-to="3" aria-label="Slide 4"><img src="./images/reservation/4.jpg" alt="" class="d-block w-100"></button>
                        <button type="button" data-bs-target="#carouselCars" data-bs-slide-to="4" aria-label="Slide 5"><img src="./images/reservation/5.jpg" alt="" class="d-block w-100"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="1500">
                            <img src="./images/reservation/1.jpg" class="d-block w-100" alt="Car image">
                        </div>
                        <div class="carousel-item" data-bs-interval="1500">
                            <img src="./images/reservation/2.jpg" class="d-block w-100" alt="Car image">
                        </div>
                        <div class="carousel-item" data-bs-interval="1500">
                            <img src="./images/reservation/3.jpg" class="d-block w-100" alt="Car image">
                        </div>
                        <div class="carousel-item" data-bs-interval="1500">
                            <img src="./images/reservation/4.jpg" class="d-block w-100" alt="Car image">
                        </div>
                        <div class="carousel-item" data-bs-interval="1500">
                            <img src="./images/reservation/5.jpg" class="d-block w-100" alt="Car image">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCars" data-bs-slide="prev">
                        <i class="fa-solid fa-hand-point-left fa-2x" aria-hidden="true"></i>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCars" data-bs-slide="next">
                        <i class="fa-solid fa-hand-point-right fa-2x" aria-hidden="true"></i>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Car Carusel End -->

            <!-- Specification Start -->
            <div class="col-md-4 col-sm-12 mt-sm-5">
                <h2 class="mt-5 mt-sm-0">Car Specification</h2>
                <div class="py-1">
                    <h4 class="d-inline">Brand: </h4>
                    <p class="d-inline">BMW</p>
                </div>
                <div class="py-1">
                    <h4 class="d-inline">Model: </h4>
                    <p class="d-inline">320D</p>
                </div>
                <div class="py-1">
                    <h4 class="d-inline">Year of production </h4>
                    <p class="d-inline">2017</p>
                </div>
                <div class="py-1">
                    <h4 class="d-inline">Gear box: </h4>
                    <p class="d-inline">Manual</p>
                </div>
                <div class="py-1">
                    <h4 class="d-inline">Fuel: </h4>
                    <p class="d-inline">Diesel</p>
                </div>
                <div class="py-1">
                    <h4 class="d-inline">Fuel consumption: </h4>
                    <p class="d-inline">5.1 L/100km</p>
                </div>
                <div class="py-1">
                    <h4 class="d-inline">Number of seats: </h4>
                    <p class="d-inline">5</p>
                </div>
                <div class="py-1">
                    <h4 class="d-inline">Horse power: </h4>
                    <p class="d-inline">163 HP</p>
                </div>
                <div class="py-1">
                    <h4 class="d-inline">Cubic capacity: </h4>
                    <p class="d-inline">1.995 </p>
                </div>
            </div>
            <!-- Specification End -->
        </div>

        <!-- Reservation Start -->
        <div class="row mt-2">
            <h2 class="mt-5 mb-3 text-center">Make your reservation now!</h2>
            <div class="col-10 offset-1 p-5 shadow-lg">
                <!-- Reservation Form Start -->
                <form class="needs-validation">
                    <div class="row g-3">
                        <div class="col-lg-6 col-md-12">
                            <label for="fName" class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="First name" aria-label="First name" id="fName" required>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <label for="lName" class="form-label">Surname</label>
                            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" id="lName" required>
                        </div>
                        <div class="col-6">
                            <label for="pLocation" class="form-label">Pick-up Location</label>
                            <select class="form-select" id="pLocation" required>
                                <option selected>Location</option>
                                <option value="Prishtina">Prishtina</option>
                                <option value="Tirana">Tirana</option>
                                <option value="Shkup">Shkup</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="dLocation" class="form-label">Drop-off Location</label>
                            <select class="form-select" id="dLocation" required>
                                <option selected>Location</option>
                                <option value="Prishtina">Prishtina</option>
                                <option value="Tirana">Tirana</option>
                                <option value="Shkup">Shkup</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="pDate" class="form-label">Pick-up Date</label>
                            <input type="date" class="form-control" id="pDate" required>
                        </div>
                        <div class="col-6">
                            <label for="pDate" class="form-label">Drop-off Date</label>
                            <input type="date" class="form-control" id="pDate" required>
                        </div>
                        <div class="col-12 text-center ">
                            <button class="btn btn-lg btn-warning mt-4" type="submit" id="submitBtn">Submit form</button>
                        </div>
                    </div>
                </form>
                <!-- Reservation Form End -->
            </div>
        </div>
        <!-- Reservation End -->

    </div>

    <!-- Footer Start -->
    <?php include("common/footer.php"); ?>
    <!-- Footer End -->
</body>

</html>