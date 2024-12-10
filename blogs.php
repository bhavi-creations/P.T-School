<?php
// Database connection (replace with your actual database connection details)
 
 
include '../../db.connection/db_connection.php';
 


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch blog data
$sql = "SELECT * FROM blog";
// $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>P.T.School</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/tripura/nav_logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
 
    
    <style>
    @media (max-width: 767px) {
    .scrollable-div {
        order: 1;
        margin-bottom: 150px;
        padding: 50px;
    }

     .readmore_btn{
        width: 150px;
        margin-left: 15px;
     }
    }

    .readmore_btn{
        width: 120px;
     
    
     }
    </style>



</head>



<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="index.php" class="logo me-auto">
                <img src="assets/img/tripura/new-nav-image.png" alt="">
            </a>
            <nav id="navbar" class="navbar order-lg-0 ">
                <ul>
                    <li><a class="nav-link scrollto " href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto  " href="index.php">About</a></li>
                    <li><a class="nav-link scrollto  " href="index.php">Facilities</a></li>
                    <li><a class="nav-link scrollto  " href="index.php">Gallery</a></li>
                    <li><a class="nav-link scrollto  " href="blogs.php">Blogs</a></li>
                    <li><a class="nav-link scrollto " href="index.php">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span>
                Appointment</a>
        </div>
    </header><!-- End Header -->

    <main>
        <!-- ======= Blogs Section ======= -->
        <section id="blogs"  >
            <div class="container"  >
                <div class="section-title" style="margin-top: 100px;" >
                    <h2>Blogs</h2>
                </div>

                <div class="row" id="blogRow" >
                    <?php
                        $counter = 0;
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                if ($counter === 0) {
                                    echo '
                                    <div class="col-md-9  order-1 order-md-1" id="selectedblog">
                                    <div id="selectedBlogId" style="display: none">' . $counter . '</div>
                                    <h2 class="mb-3">' . $row['title'] . '</h2>
                                    <video class="custom-video" muted  autoplay    controls style="width: 100%; height: auto;">
                                    <source src="admin/public/uploads/videos/' . $row['video'] . '" type="video/mp4">
                                    Your browser does not support the video tag.
                                    </video>
                                    <p>Published On  ';
                                ?>



                            
                                <?php echo date("Y-m-d H:i:s", strtotime($row['time']));
                                    echo '</p>
                                    
                                    <div class="row d-flex my-3">';
        

                                    
                                    echo '<div>';
                                ?>
                                        <?php if (!empty($row['photos'])): ?>
                                            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                                                <div class="swiper-wrapper row"> <!-- Added 'row' class for Bootstrap grid -->

                                                    <?php foreach (json_decode($row['photos']) as $photo): ?>
                                                        <div class="testimonial-item col-6 col-md-4 col-lg-3"> <!-- Added Bootstrap grid classes -->
                                                            <img src="admin/public/uploads/photos/<?php echo htmlspecialchars($photo); ?>" alt="Blog Photo"
                                                                class="img-fluid my-2"  >
                                                        </div>
                                                    <?php endforeach; ?>

                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <p>No photos available.</p>
                                        <?php endif; ?>
                                    <?php echo '</div>';  

                                        echo '
                                        </div>';
                                        echo $row['content'];
                                            echo '
                                            <div style="display: none" id="lastchild">
                                                    <video onclick="swapDivs(`' . $counter . '`)"
                                                        class="custom-video" controls muted autoplay style="width: 100%; height: auto;">
                                                        <source src="admin/public/uploads/videos/' . $row['video'] . '" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                    <h6 class="mb-3" onclick="swapDivs(`' . $counter . '`)">' . $row['title'] . '</h6>
                                            </div>';
                                        echo '</div>';





                                if ($result->num_rows > 1) {
                                    echo '<div class="col-md-3  order-2 order-md-2 scrollable-div">';
                                    }
                                    } else {
                                        echo '<div id="sidebardiv' . $counter . '""><video
                                            class="custom-video" autoplay muted controls style="width: 100%; height: auto;" onclick="swapDivs(`' . $counter . '`)">
                                            <source src="admin/public/uploads/videos/' . $row['video'] . '" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        <h6 class="mb-3" onclick="swapDivs(`' . $counter . '`)">' . $row['title'] . '</h6>';
                                        echo '<div class="col-md-9  order-2 order-md-1" id="lastchild" style="display: none">
                                        <h2 class="mb-3" >' . $row['title'] . '</h2>
                                        <video class="custom-video" autoplay muted controls style="width: 100%; height: auto;" onclick="swapDivs(`' . $counter . '`)">
                                            <source src="admin/public/uploads/videos/' . $row['video'] . '" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        <p>Published On ';
                                        ?>
                                        <?php echo date("Y-m-d H:i:s", strtotime($row['time']));
                                    
                                        echo '</p>
                                         <div class="row d-flex my-3">
                                         <div class="row">
                                         <div class="col-9"></div>
                                         <button onclick="hideDiv()" class="btn btn-primary col-3 readmore_btn" id="read">Read More</button>
                                         
                                           </div>
                                         ';


                                        echo '<div id="images" style="display:none;">'; ?>
                                        <?php if (!empty($row['photos'])): ?>
                                            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                                                <div class="swiper-wrapper row"> <!-- Added 'row' class for Bootstrap grid -->

                                                    <?php foreach (json_decode($row['photos']) as $photo): ?>
                                                        <div class="testimonial-item col-6 col-md-4 col-lg-3"> <!-- Added Bootstrap grid classes -->
                                                            <img src="admin/public/uploads/photos/<?php echo htmlspecialchars($photo); ?>" alt="Blog Photo"
                                                                class="img-fluid my-2" >
                                                        </div>
                                                    <?php endforeach; ?>

                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <p>No photos available.</p>
                                        <?php endif; 
                                        echo $row['content'];
                                        ?>
                                        <?php echo '</div>';




                                        echo '
                                        </div>';
                                        echo '</div></div>';
                                    }
                                    $counter++;
                                    }
                                    if ($result->num_rows > 1) {
                                        echo '</div>';
                                    }
                                }
                    ?>
                </div>
            </div>
        </section>
 

        <script>
          state=1; 
            function hideDiv() {

                if(state==0){
                            var div = document.getElementById('images');
                            document.getElementById('read').innerHTML = "Read More";
                            div.style.display = 'none';
                            state=1;
                }
                else{
                    var div = document.getElementById('images');
                            div.style.display = 'block';
                            document.getElementById('read').innerHTML = "Read less";
                            state=0;
                }
                        
            }


            function swapDivs(currentDivId) {
                var currentDiv = document.getElementById('sidebardiv' + currentDivId);
                currentDiv.setAttribute('id', 'sidebardiv' + document.getElementById('selectedBlogId').innerText);
                console.log(document.getElementById('selectedBlogId').innerText);
                let selectedBlog = document.getElementById('selectedblog');
                let currentDivLastChild = currentDiv.querySelector('#lastchild');
                let selectedDivLastChild = selectedBlog.querySelector('#lastchild');
                var currentDivNewDiv = document.createElement('div');
                currentDivNewDiv.innerHTML = selectedBlog.querySelector('#lastchild').innerHTML;
                let currentDivNewDivLastChild = document.createElement('div');
                currentDivNewDivLastChild.id = 'lastchild';
                currentDivNewDivLastChild.style.display = 'none';
                selectedBlog.removeChild(selectedDivLastChild);
                selectedBlog.removeChild(document.getElementById('selectedBlogId'));
                currentDivNewDivLastChild.innerHTML = selectedBlog.innerHTML;
                currentDivNewDiv.appendChild(currentDivNewDivLastChild);
                let selectedBlogNewDiv = document.createElement('div');
                selectedBlogNewDiv.innerHTML = currentDiv.querySelector('#lastchild').innerHTML;
                let selectedBlogIDNewDiv = document.createElement('div');
                selectedBlogIDNewDiv.id = 'selectedBlogId';
                selectedBlogIDNewDiv.innerText = currentDivId;
                let selectedBlogNewDivLastChild = document.createElement('div');
                selectedBlogNewDivLastChild.id = 'lastchild';
                selectedBlogNewDivLastChild.style.display = 'none';
                currentDiv.removeChild(currentDivLastChild);
                selectedBlogNewDivLastChild.innerHTML = currentDiv.innerHTML;
                selectedBlogNewDiv.appendChild(selectedBlogIDNewDiv);
                selectedBlogNewDiv.appendChild(selectedBlogNewDivLastChild);
                currentDiv.innerHTML = currentDivNewDiv.innerHTML;
                selectedBlog.innerHTML = selectedBlogNewDiv.innerHTML;

                // Manage volume
                let currentDivVideo = currentDiv.querySelector('video');
                let selectedBlogVideo = selectedBlog.querySelector('video');
                if (currentDivVideo) currentDivVideo.muted = true; // Mute the sidebar video
                if (selectedBlogVideo) selectedBlogVideo.muted = false; // Unmute the main video

                // Scroll to main video section
                selectedBlog.scrollIntoView({ behavior: 'smooth' });



        
            }
        </script>

    </main>
    <!-- ======= Footer ======= -->
    <footer id="footer">
     <div class="footer-top" style="background-color: rgb(242 252 255)">
       <div class="container">
         <div class="row">
           <div
             class="col-lg-5 col-md-5 col-6 d-flex flex-column justify-content-center">
             <!-- <div class="footer-info d-none d-xl-block">
                <a href="index.php" class="logo me-auto "><img src="assets/img/slide/logo_trans.png" style="height:150px;" alt=""></a>
 
              </div> -->
             <div class="footer-info d-block">
               <a href="index.php" class="logo me-auto"><img
                   src="assets/img/slide/logo_trans.png"
                   class="img-fluid"
                   alt="" /></a>
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
                 <a href="#"> Applictions</a>
               </li>
               <li>
                 <a href=" pdf.php">PDF</a>
               </li>
               <li>
                 <a href="contact.html">Contact Us</a>
               </li>
               <li>
                   <a href="sunday.html"> Sunday Worship</a>
                 </li>
             </ul>
           </div>

           <div class="col-lg-4 col-md-4 footer-newsletter footerbgcolor">
             <h4>Contact us</h4>
             <p class="mt-2">
               <span class="phone_email"> <strong>Phone:</strong></span>
               <span class="mini_text">+91 9849031095, &nbsp; +91 9441754711
               </span>
               <br />
               <span class="phone_email"> <strong>Email:</strong></span>
               <span class="mini_text"> kedarisetti_2000@yahoo.com</span>
               <br />
             </p>
             <p class="mt-4 mini_text">
             7-114,<br />  
               RAVINDRA NAGAR,<br />
               4th STREET,<br />
               TURANGI,<br />

               KAKINADA-16, <br />
               Andhra Pradesh, India
               <br /><br />
             </p>
             <div class="social-links mt-3">
               <a href=" " target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
               <a href=" " target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
               <a href=" " target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
               <a href=" " target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
             </div>
           </div>
         </div>
       </div>
     </div>





     <div
       class="footer-area-bottom theme-bg"
       style="background-color: #01a084">
       <div class="container">
         <div class="row pt-4">
           <div class="col-md-6 col-12">
             <div class="footer-widget__copyright-info info-direction">
               <p class="last_text">
                 <a
                   href="terms.html"
                   style="text-decoration: none; color: #ffffff">Terms & conditions :
                 </a>
                 <a
                   href="privacy.html"
                   style="text-decoration: none; color: #ffffff">
                   Privacy & policy</a>
               </p>
             </div>
           </div>

           <div class="col-md-6 col-12 second_divv_end_brand">
             <div
               class="footer-widget__copyright-info info-direction d-flex flex-row justify-content-end align-items-center">
               <a
                 href="https://bhavicreations.com/"
                 target="_blank"
                 style="
                    text-decoration: none;
                    color: #ffffff;
                    display: flex;
                    align-items: center;
                  ">
                 <p class="mini_text last_text mb-0">Branding By @</p>
                 <img
                   src="assets/img/bhavi_logo/Bhavi_Branding_Stamp.png"
                   class="img-fluid brand_image"
                   alt="" />
               </a>
             </div>
           </div>
         </div>
       </div>
     </div>

     <style>
       @media (min-width: 1200px) {
         .second_divv_end_brand {
           padding-left: 35%;
           margin-top: -10px;
         }

         .brand_image {
           width: 23%;
           margin-top: 0%;
           margin-left: 5px;
         }
       }

       @media (min-width: 992px) and (max-width: 1200px) {
         .second_divv_end_brand {
           padding-left: 32%;
           margin-top: -10px;
         }

         .brand_image {
           width: 23%;
           margin-top: 0%;
           margin-left: 5px;
         }
       }

       @media (max-width: 768px) {
         .second_divv_end_brand {
           padding-left: 3%;
           margin-top: -10px;
         }

         .brand_image {
           width: 12%;
           margin-top: 0%;
           margin-left: 5px;
         }
       }

       @media (min-width: 768px) and (max-width: 992px) {
         .second_divv_end_brand {
           padding-left: 23%;
           margin-top: -10px;
         }

         .brand_image {
           width: 23%;
           margin-top: 0%;
           margin-left: 5px;
         }
       }
     </style>
   </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>