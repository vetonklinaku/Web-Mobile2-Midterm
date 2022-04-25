<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>About Us</title>
  <link rel="icon" href="./images/logo.png" type="image/png">
  <!-- About Us specific CSS -->
  <link rel="stylesheet" href="css/aboutUs.css" />
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
  <!-- Nav Bar Start -->
  <?php include("common/navbar.php"); ?>
  <!-- Nav Bar End -->

  <!-- Team cards Start -->
  <div class="container">
    <h1 class="text-center my-3">Our team</h1>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-12 mx-sm-auto wrapper">
        <div class="card front-face">
          <img src="./images/about/team/monika.jpg" alt="Monika">
        </div>
        <div class="card back-face">
          <img src="./images/about/team/monika.jpg" alt="Monika">
          <div class="info">
            <div class="title">
              Monika Maloku</div>
            <p>
              Group Leader</p>
          </div>
          <ul>
            <a href="https://www.facebook.com/monika.maloku.5"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://twitter.com/MonikaMaloku"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.instagram.com/malokumonika/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/monikamaloku/"><i class="fa-brands fa-linkedin"></i></a>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mx-sm-auto wrapper">
        <div class="card front-face">
          <img src="./images/about/team/veton.jpg">
        </div>
        <div class="card back-face">
          <img src="./images/about/team/veton.jpg">
          <div class="info">
            <div class="title">
              Veton klinaku</div>
            <p>
              Back-end developer</p>
          </div>
          <ul>
            <a href="https://www.facebook.com/veton.klinaku"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://twitter.com/VetonKlinaku"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.instagram.com/veton.klinaku/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/vetonklinaku/"><i class="fa-brands fa-linkedin"></i></a>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 mx-sm-auto wrapper ">
        <div class="card front-face">
          <img src="./images/about/team/alisa.jpg" alt="Alisa">
        </div>
        <div class="card back-face">
          <img src="./images/about/team/alisa.jpg" alt="Alisa">
          <div class="info">
            <div class="title">Alisa Qatipi</div>
            <p>
              Front-end developer
          </div>
          <ul>
            <a href="https://www.facebook.com/alisa.qatipi.9"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://twitter.com/alisaqatipi"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.instagram.com/alisa_qatipi/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/alisa-qatipi-035bbb221/"><i class="fa-brands fa-linkedin"></i></a>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mx-sm-auto wrapper ">
        <div class="card front-face">
          <img src="./images/about/team/lumi.jpg">
        </div>
        <div class="card back-face">
          <img src="./images/about/team/lumi.jpg">
          <div class="info">
            <div class="title">
              Lumi Zhubi</div>
            <p>
              User interface designer</p>
          </div>
          <ul>
            <a href="https://www.facebook.com/lumi.zhubi"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://twitter.com/alisaqatipi"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.instagram.com/lumzhubi/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/lumiZhubi/"><i class="fa-brands fa-linkedin"></i></a>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Team cards End  -->

  <!-- Revies Start -->
  <div class="container">
    <div class="row g-5">
      <h1 class="text-center">Still not convinced?</h1>
      <h2 class="text-center">Here are some of the reviews that people sent to us!</h2>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card h-100 hoveringCard">
          <img src="images/about/reviews/rev1.jpg" class="card-img-top" alt="">
          <div class="card-header text-center">
            <h5 class="card-title">Ilmar Munson</h5>
          </div>
          <div class="card-body">
            <p class="card-text"> It's a great place to rent from because it's so cheap. Unlike other firms I've tried, I've never had trouble checking in. They don't have the largest fleet, but if you're just looking for a way to get around, they're ideal. Most airports are also conveniently placed! </p>
          </div>
          <div class="card-footer">
            Reviewed 1 week ago
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card h-100 hoveringCard">
          <img src="images/about/reviews/rev2.jpg" class="card-img-top" alt="">
          <div class="card-header text-center">
            <h5 class="card-title">Luka Paulis</h5>
          </div>
          <div class="card-body">
            <p class="card-text">This is the most affordable automobile rental provider. Customer service is excellent, and automobile availability is adequate. All of the vehicles are clean and mechanically sound, making them suitable for driving to work or on lengthy road trips. Overall, it was a pleasant experience with a wide range of vehicles to chose from. </p>
          </div>
          <div class="card-footer">
            Reviewed 3 week ago
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card h-100 hoveringCard">
          <img src="images/about/reviews/rev3.jpg" class="card-img-top" alt="">
          <div class="card-header text-center">
            <h5 class="card-title">Lhamo Ljungman</h5>
          </div>
          <div class="card-body">
            <p class="card-text"> For a long time, I've been intending to write this review! I'm quite sure I'll be renting cars from WASHINGTON from now on!! After being rejected down by "the other rental company," I came in. I was in tears as I made my way to my younger brother's burial. They promptly and painlessly took care of me, and I was on my way. They are significantly more reasonable, have excellent vehicles, and do not require a deposit!! </p>
          </div>
          <div class="card-footer">
            Reviewed 5 week ago
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card h-100 hoveringCard">
          <img src="images/about/reviews/rev4.jpg" class="card-img-top" alt="">
          <div class="card-header text-center">
            <h5 class="card-title">Celia Sala</h5>
          </div>
          <div class="card-body">
            <p class="card-text"> I rented a car from WASHINGTON many times for approximately a week. They offer excellent selections of automobiles in each category. If I need a certain automobile and have a lot of options, I always go to the airport since they have a lot of cars. They provide excellent service with no complaints. I am satisfied with their service, and the rent is fairly affordable.</p>
          </div>
          <div class="card-footer">
            Reviewed 6 week ago
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card h-100 hoveringCard">
          <img src="images/about/reviews/rev5.jpg" class="card-img-top" alt="">
          <div class="card-header text-center">
            <h5 class="card-title">Hiltraud Boesch</h5>
          </div>
          <div class="card-body">
            <p class="card-text"> Excellent service with a wide range of automobiles to pick from at reasonable prices! The entire procedure of renting a car, picking it up, and returning it went without a hitch; I'd strongly suggest it!</p>
          </div>
          <div class="card-footer">
            Reviewed 2 months ago
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card h-100 hoveringCard">
          <img src="images/about/reviews/rev6.jpg" class="card-img-top" alt="">
          <div class="card-header text-center">
            <h5 class="card-title">Persephone Lindsey</h5>
          </div>
          <div class="card-body">
            <p class="card-text"> Excellent customer service. Before we had left the lot, we discovered that our automobile required an oil change. The staff were quite accommodating and allowed us to exchange cars. I really enjoy that you may select your desired automobile through the App. When we arrived at our location, the app presented us with numerous possibilities from which to pick. It was fantastic.</p>
          </div>
          <div class="card-footer">
            Reviewed 3 months ago
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Location Start -->
  <div class="container">
    <h1 class="text-center my-5">Our Location</h1>
    <div class="d-flex justify-content-center">
      <iframe id="map" loading="lazy" frameborder="0"
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11734.304791446119!2d21.1922622!3d42.6703355!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbbf87d6b640faf83!2sThe%20American%20University%20in%20Kosovo!5e0!3m2!1sen!2s!4v1638887637369!5m2!1sen!2s">
      </iframe>
    </div>
  </div>
  <div class="headers">
  </div>
  <!-- Location End  -->

  <!-- Footer Start -->  
  <?php include("common/footer.php"); ?>
  <!-- Footer End -->
</body>

</html>