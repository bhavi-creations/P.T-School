
<?php
// Database connection (replace with your actual database connection details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ptschool";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch blog data
$sql = "SELECT * FROM blog";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>P.T.School</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/slide/logo_bg.png" rel="icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <a href="index.php" class="logo me-auto">
          <img src="assets/img/slide/logo_trans.png" alt="" class="img-fluid" />
        </a>

        <nav id="navbar" class="navbar order-lg-0">
          <ul>
            <li><a class="nav-link scrollto" href="index.php">Home</a></li>
            <li><a class="nav-link scrollto" href="about.html">About</a></li>
            <li>
              <a class="nav-link scrollto" href="courses.html">Courses</a>
            </li>

           

            <li class="dropdown">
              <a class="nav-link scrollto" >Applications</a>
              <ul class="dropdown-menu">
                  <li><a href="distance.html">Distance Education</a></li>
                  <li><a href="english.html">English Medium Bible Training</a></li>
                  <li><a href="telugu.html">Telugu Medium Bible Training</a></li>
                  <li><a href="monthly.html">Monthly 5 Days Bible Training</a></li>
                  <li><a href="calvin.html">CALVIN WOMEN Telugu Medium Bible Training </a></li>
              </ul>
            </li>



            <li><a class="nav-link scrollto" href="pdf.html">PDF</a></li>

            <li>
              <a class="nav-link scrollto" href="contact.html">Contact</a>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

        <a href="index.php#appointment" class="appointment-btn scrollto"
          ><span class="d-none d-md-inline">Make an</span> Appointment</a
        >
      </div>
    </header>
    <!-- End Header -->

    <main id="main">
      <!-- ======= Contact Section ======= -->

      <section id="contact" class="contact">
        <div class="container">
          <div class="section-title" style="margin-top: 100px">
            <h2>Documents</h2>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-4 col-md-3 my-2">
              <img src="assets/img/carsoul/principle.webp" class="img-fluid">
              <p class="text-center mt-3">document name</p>
            </div>
            <div class="col-4 col-md-3  my-2">
              <img src="assets/img/carsoul/principle.webp" class="img-fluid">
              <p class="text-center mt-3">document name</p>
            </div>
            <div class="col-4 col-md-3  my-2">
              <img src="assets/img/carsoul/principle.webp" class="img-fluid">
              <p class="text-center mt-3">document name</p>
            </div>
            <div class="col-4 col-md-3  my-2 ">
              <img src="assets/img/carsoul/principle.webp" class="img-fluid">
              <p class="text-center mt-3">document name</p>
            </div>
            <div class="col-4 col-md-3  my-2">
              <img src="assets/img/carsoul/principle.webp" class="img-fluid">
              <p class="text-center mt-3">document name</p>
            </div>
            <div class="col-4 col-md-3  my-2">
              <img src="assets/img/carsoul/principle.webp" class="img-fluid">
              <p class="text-center mt-3">document name</p>
            </div>
          </div>
        </div>
      </section>

      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top" style="background-color: rgb(242 252 255)">
        <div class="container">
          <div class="row">
            <div
              class="col-lg-5 col-md-5 col-6 d-flex flex-column justify-content-center"
            >
              <!-- <div class="footer-info d-none d-xl-block">
              <a href="index.php" class="logo me-auto "><img src="assets/img/slide/logo_trans.png" style="height:150px;" alt=""></a>

            </div> -->
              <div class="footer-info d-block">
                <a href="index.php" class="logo me-auto"
                  ><img
                    src="assets/img/slide/logo_trans.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li>
                  <a href="index.php">Home</a>
                </li>
                <li>
                  <a href="about.html">About</a>
                </li>
                <li>
                  <a href="courses.html">Courses</a>
                </li>
                <li>
                  <a href="applications.html"> Applictions</a>
                </li>
                <li>
                  <a href="pdf.html">PDF</a>
                </li>
                <li>
                  <a href="contact.html">Contact Us</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-4 footer-newsletter footerbgcolor">
              <h4>Contact us</h4>
              <p class="mt-2">
                <span class="phone_email"> <strong>Phone:</strong></span>
                <span class="mini_text">+91 999999999 </span>
                <br />
                <span class="phone_email"> <strong>Email:</strong></span>
                <span class="mini_text"> sample@gmail.com</span> <br />
              </p>
              <p class="mt-4 mini_text">
                2-56-5,
                <br />
                NAGAR,<br />
                ROAD NO.1,<br />
                100 BUILDING CENTER,<br />

                KAKINADA-533003 <br />
                Andhra Pradesh, India
                <br /><br />
              </p>
              <div class="social-links mt-3">
                <a href=" " target="_blank" class="facebook"
                  ><i class="bx bxl-facebook"></i
                ></a>
                <a href=" " target="_blank" class="instagram"
                  ><i class="bx bxl-instagram"></i
                ></a>
                <a href=" " target="_blank" class="twitter"
                  ><i class="bx bxl-twitter"></i
                ></a>
                <a href=" " target="_blank" class="youtube"
                  ><i class="bx bxl-youtube"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-area-bottom theme-bg">
        <div class="container">
          <div class="row pt-4">
            <div class="col-xl-8 col-lg-9 col-md-12 col-12">
              <div class="footer-widget__copyright">
                <p class="mini_text" style="color: #ffffff">
                  ©2024 P.T.School . All Rights Reserved. Designed & Developed
                  by
                  <a
                    href="https://bhavicreations.com/"
                    target="_blank"
                    style="text-decoration: none; color: #ffffff"
                    >Bhavi Creations</a
                  >
                </p>
              </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-12 col-12">
              <div class="footer-widget__copyright-info info-direction">
                <p class="mini_text">
                  <a
                    href="terms.html"
                    style="text-decoration: none; color: #ffffff"
                    >Terms & conditions
                  </a>
                  <a
                    href="privacy.html"
                    style="text-decoration: none; color: #ffffff"
                  >
                    Privacy & policy</a
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- End Footer -->

    <!-- WhatsApp link -->

    <!-- Scroll Up Button  -->
    <button id="scrollBtn" onclick="scrollToTop()">
      <i class="fa-solid fa-arrow-up"></i>
    </button>

    <script>
      // Function to scroll to the top of the page
      function scrollToTop() {
        window.scrollTo({
          top: 0,
          behavior: "smooth", // Optional, smooth scrolling animation
        });
      }

      // Show scroll button when scrolling down
      window.onscroll = function () {
        scrollFunction();
      };

      function scrollFunction() {
        if (
          document.body.scrollTop > 20 ||
          document.documentElement.scrollTop > 20
        ) {
          document.getElementById("scrollBtn").style.display = "block";
        } else {
          document.getElementById("scrollBtn").style.display = "none";
        }
      }
    </script>

    <style>
      #scrollBtn {
        display: none;
        /* Initially hide the button */
        position: fixed;
        /* Fix the position of the button */
        bottom: 20px;
        /* Adjust the bottom distance */
        right: 20px;
        /* Adjust the right distance */
        z-index: 999;
        /* Set a high z-index to ensure the button is on top */
        padding: 10px 15px;
        background-color: #01539d;
        color: white;
        border: none;
        border-radius: 50%;
        cursor: pointer;
      }
    </style>

    <a
      href="https://api.whatsapp.com/send?phone=919493066633"
      style="color: #fff"
      class="whatsapp-link"
      target="_blank"
    >
      <i class="fab fa-whatsapp"></i>
    </a>

    <div id="preloader"></div>
    <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>