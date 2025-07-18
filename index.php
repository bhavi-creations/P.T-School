 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <title>P.T.School</title>
   <meta content="" name="description">
   <meta content="" name="keywords">

   <!-- Favicons -->
   <link href="assets/img/slide/logo_bg.png" rel="icon">


   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

   <!-- count  -->
   <script src="https://www.gstatic.com/firebasejs/10.7.2/firebase-app.js"></script>
   <script src="https://www.gstatic.com/firebasejs/10.7.2/firebase-database.js"></script>


   <style>
     .visitor-counter {
       position: fixed;
       bottom: 10px;
       left: 10px;
       background: rgba(0, 0, 0, 0.7);
       color: white;
       padding: 10px 15px;
       border-radius: 5px;
       font-family: Arial, sans-serif;
       font-size: 16px;
     }

     .aboutus {
       width: 80%;
       margin: 20px auto;
       background: #fff;
       padding: 20px;
       box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
     }

     .header {
       text-align: center;
       padding: 10px 0;
       border-bottom: 1px solid #ddd;
     }

     .founder-info {
       display: flex;
       align-items: center;
       margin-top: 20px;
     }

     .tin {
       text-decoration: underline;
     }
   </style>
 </head>

 <body>

   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top">
     <div class="container d-flex align-items-center">

       <a href="index.php" class="logo me-auto">
         <img src="assets/img/slide/logo_trans.png" alt="" class="img-fluid">
       </a>


       <nav id="navbar" class="navbar order-lg-0 ">
         <ul>
           <li><a class="nav-link scrollto tin " href="index.php">Home</a></li>
           <li><a class="nav-link scrollto  " href="about.html">About</a></li>
           <li><a class="nav-link scrollto  " href="courses.html">Courses</a></li>




           <li class="dropdown">
             <a class="nav-link scrollto">Applications</a>
             <ul class="dropdown-menu">
               <li><a href="distance.html">Distance Education</a></li>
               <li><a href="english.html">English Medium Bible Training</a></li>
               <li><a href="telugu.html">Telugu Medium Bible Training</a></li>
               <li><a href="monthly.html">Monthly 5 Days Bible Training</a></li>
               <li><a href="calvin.html">CALVIN WOMEN Telugu Medium Bible Training </a></li>
             </ul>
           </li>

           <li><a class="nav-link scrollto " href="sunday.html">sunday worship</a></li>

           <li><a class="nav-link scrollto " href="pdf.php">KRUPAWAKYAM</a></li>

           <li><a class="nav-link scrollto " href="contact.html">Contact</a></li>


         </ul>
         <i class="bi bi-list mobile-nav-toggle"></i>
       </nav><!-- .navbar -->

       <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span>
         Appointment</a>

     </div>
   </header><!-- End Header -->

   <!-- ======= Hero Section ======= -->
   <div id="carouselExampleFade" data-bs-interval="3000" class="carousel slide carousel-fade" data-bs-ride="carousel">
     <div class="carousel-inner cor_med" id="bb">

       <div class="carousel-item active ">
         <img src="assets/img/slide/slider (1).png" class="d-block  img-fluid " alt="...">

       </div>
       <div class="carousel-item">
         <img src="assets/img/slide/slider.png" class="d-block img-fluid   " alt="...">

       </div>
       <div class="carousel-item">
         <img src="assets/img/slide/slider3.png" class="d-block   img-fluid" alt="...">
       </div>
     </div>
     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-top: 100px !important;"> </span>
       <span class="visually-hidden">Previous</span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true" style="margin-top: 100px !important;"></span>
       <span class="visually-hidden">Next</span>
     </button>
   </div>



   <main id="main">

     <!-- ======= About Us Section ======= -->
     <section id="about" class="about">


       <div class="container  aboutus">
         <div class="header">
           <h1>About Our Founder</h1>
         </div>
         <div class="row">
           <div class="col-lg-4 col-12   d-flex flex-coloumn justify-content-center ">

             <img src="assets/img/slide/about.png" class="img-fluid" alt="">

           </div>
           <div class="col-lg-8  col-12 p-2">
             <h2 class="mt-2">
               God has blessed this PTS and many aspects have been added to the
               school.
             </h2>
             <p>
               In 1976 we started with the Telugu medium. In addition to our
               major objective of Bible training, the Carl Technical School
               with Typing Practice, computer operation, TV and radio repairs,
               tailoring, electrical house wiring and others. Courses were
               started for the benefit of students to learn “how to live and
               how to make living” while they started self-supporting
               congregations. The PTS provides living assistance to preachers
               for only 5 years and then they need to be self-supporting.
             </p>
             <p>
               In 1991 we started B.B.S (B.D) 3 years English medium Bible
               training. This allows us to accept and teach people from all the
               states of India. Along with this we started night school for
               local people.
             </p>
             <p>
               In 1995 the school began offering a 30 lesson of a Bible
               correspondence course in both English and Telugu. This can help
               anyone in the population.
             </p>
             <p>
               In 2000 we were able to establish a full time Bible Training for
               women. This is known as the Calvin Women Bible Training. This
               course is designed for one year and two years. Preachers need to
               have their wife trained to help her husband interact with the
               Indian culture between men and women.,
             </p> <a href="about.html">
               <p>Read more...</p>
             </a>

           </div>
         </div>
       </div>
     </section>
     <!-- End About Us Section -->
     <section>
       <div class="container">
         <div class="row">
           <div class="col-12">
             <video width="100%" controls>
               <source src="assets/img/videos/WhatsApp Video 2024-06-26 at 12.58.58 PM.mp4" type="video/mp4">
               Your browser does not support the video tag.
             </video>
           </div>
         </div>
       </div>
     </section>

     <main id="main">
       <section class="ftco-section   new_resp  ">
         <div class="container">
           <div class="section-title">
             <h2 style="font-size:x-large;">COURSES WE ARE OFFERING</h2>
           </div>

           <div class="ftco-departments">
             <div class="col-md-12 nav-link-wrap"
               style="background-color: rgb(236, 234, 234); padding-top: 10px; padding-bottom: 10px; border-radius: 8px; margin-bottom: 50px;">
               <div class="nav d-flex justify-content-between nav-pills" id="v-pills-tab" role="tablist"
                 aria-orientation="horizontal">
                 <div class="col-md-3 ">

                   <a class="    nav-link ftco-animate active " id="v-pills-a-tab" data-bs-toggle="pill"
                     href="#v-pills-a1" role="tab" aria-controls="v-pills-1" aria-selected="true">
                     Bachelor In Biblical
                     Studies (BBS)
                   </a>
                 </div>

                 <div class="col-md-3">

                   <a class=" box_text_color nav-link ftco-animate" id="v-pills-b-tab" data-bs-toggle="pill"
                     href="#v-pills-b1" role="tab" aria-controls="v-pills-b" aria-selected="false">
                     Telugu Medium Bible
                     Training
                   </a>
                 </div>

                 <div class="col-md-3">

                   <a class=" box_text_color nav-link ftco-animate" id="v-pills-c-tab" data-bs-toggle="pill"
                     href="#v-pills-c1" role="tab" aria-controls="v-pills-c" aria-selected="false">
                     Women Telugu Medium Bible
                     Training
                   </a>
                 </div>
                 <div class="col-md-3">

                   <a class=" box_text_color nav-link ftco-animate" id="v-pills-d-tab" data-bs-toggle="pill"
                     href="#v-pills-d1" role="tab" aria-controls="v-pills-d" aria-selected="false">
                     Monthly 5 Days Bible Training
                   </a>
                   </a>

                 </div>
               </div>
             </div>


             <div class="col-md-12 tab-wrap">
               <div class="tab-content ftco-animate" id="v-pills-tabContent">

                 <div class="tab-pane fade show active" id="v-pills-a1" role="tabpanel" aria-labelledby="v-pills-a-tab">
                   <div class="row col-lg-12">

                     <h3 class="my-5 text-center">FOR BACHELOR IN BIBLICAL STUDIES (BBS) 3 YEARS AND ONE YEAR DIPLOMA
                       COURSE</h3>
                     <div class="container">
                       <div class="row  ">
                         <div class="col-4 mt-2">
                           <p>
                             1.Admissions
                           </p>
                         </div>
                         <div class="col-8 mt-2">
                           <p>
                             : January & Augest of Every year 1st week
                           </p>
                         </div>
                       </div>
                       <div class="row  ">
                         <div class="col-4 mt-2">
                           <p>
                             2.Medium of Instructions
                           </p>
                         </div>
                         <div class="col-8 mt-2">
                           <p>
                             : English
                           </p>
                         </div>
                       </div>
                       <div class="row  ">
                         <div class="col-4 mt-2">
                           <p>
                             3.Qualifications
                           </p>
                         </div>
                         <div class="col-8 mt-2">
                           <p>
                             : For Telugu 10th Class & For English Intermediate or above
                           </p>
                           <p>
                         </div>
                       </div>
                       <div class="row  ">
                         <div class="col-4 mt-2">
                           <p>
                             4.Duration of Course
                           </p>
                         </div>
                         <div class="col-8 mt-2">
                           <p>
                             : Three Years (From August to December and Januanry to May)
                           </p>
                         </div>
                       </div>
                       <div class="row  ">
                         <div class="col-4 mt-2">
                           <p>
                             5.Age Limit
                           </p>
                         </div>
                         <div class="col-8 mt-2">
                           <p>
                             : NO AGE LIMIT
                           </p>
                         </div>
                       </div>
                     </div>
                     <a href="courses.html">Read More....</a>
                   </div>
                 </div>

                 <div class="tab-pane fade  " id="v-pills-b1" role="tabpanel" aria-labelledby="v-pills-a-tab">
                   <div class="row col-lg-12">

                     <h3 class="my-5 text-center">తెలుగు మీడియం 2 సం.లు, 1 సం. ము మరియు 6 నెలలు</h3>
                     <div class="container">
                       <div class="row  ">
                         <div class="col-4 mt-2">
                           <p>
                             1. స్కూల్ యందు ప్రవేశము
                           </p>
                         </div>
                         <div class="col-8 mt-2">
                           <p>
                             : సంవత్సరమునకు రెండు పర్యాయములు ప్రతి ఆగష్టు మరియు ప్రతి జనవరి మొదటి వారములో
                           </p>
                         </div>
                       </div>
                       <div class="row  ">
                         <div class="col-4 mt-2">
                           <p>
                             2. బోధన
                           </p>
                         </div>
                         <div class="col-8 mt-2">
                           <p>
                             : తెలుగు
                           </p>
                         </div>
                       </div>
                       <div class="row  ">
                         <div class="col-4 mt-2">
                           <p>
                             3. విద్యార్థి అర్హతలు
                           </p>
                         </div>
                         <div class="col-8 mt-2">
                           <p>
                             : 10వ తరగతి - ఆ పైన
                           </p>
                         </div>
                       </div>
                       <div class="row  ">
                         <div class="col-4 mt-2">
                           <p>
                             4. బోధన సమయము
                           </p>
                         </div>
                         <div class="col-8 mt-2">
                           <p>
                             : రెండు సంవత్సరములు (ఆగష్టు నుండి డిశంబర్ మరియు జనవరి నుండి మే)
                           </p>
                         </div>
                       </div>
                       <div class="row  ">
                         <div class="col-4 mt-2">
                           <p>
                             5.వయస్సు
                           </p>
                         </div>
                         <div class="col-8 mt-2">
                           <p>
                             : 18 సం.లు - ....
                           </p>
                         </div>
                       </div>
                     </div>
                     <a href="courses.html">Read More....</a>

                   </div>
                 </div>

                 <div class="tab-pane fade " id="v-pills-c1" role="tabpanel" aria-labelledby="v-pills-a-tab">
                   <div class="row col-lg-12">

                     <h3 class="my-5 text-center">క్రీస్తు సంఘము - స్త్రీ ఉపదేశకులకు బోధన </h3>
                     <div class="container">
                       <div class="row  ">
                         <div class="col-4 mt-2">
                           <p>
                             1. స్కూల్ యందు ప్రవేశము
                           </p>
                         </div>
                         <div class="col-8 mt-2">
                           <p>
                             : ప్రతీ జనవరి మరియు ప్రతీ ఆగష్టు మొదటి వారములో
                           </p>
                         </div>
                       </div>
                       <div class="row  ">
                         <div class="col-4 mt-2">
                           <p>
                             2. బోధన
                           </p>
                         </div>
                         <div class="col-8 mt-2">
                           <p>
                             : తెలుగు
                           </p>
                         </div>
                       </div>
                       <div class="row  ">
                         <div class="col-4 mt-2">
                           <p>
                             3. విద్యార్థి అర్హతలు
                           </p>
                         </div>
                         <div class="col-8 mt-2">
                           <p>
                             : 10వ తరగతి - ఆ పైన
                           </p>
                         </div>
                       </div>
                       <div class="row  ">
                         <div class="col-4 mt-2">
                           <p>
                             4. బోధన సమయము (సం.ము కోర్సు)
                           </p>
                         </div>
                         <div class="col-8 mt-2">
                           <p>
                             : రెండు సంవత్సరములు (ఆగష్టు నుండి డిశంబర్ మరియు జనవరి నుండి మే)
                           </p>
                         </div>
                       </div>
                       <div class="row  ">
                         <div class="col-4 mt-2">
                           <p>
                             5.బోధన సమయము (2 సం.ముల కోర్సు)
                           </p>
                         </div>
                         <div class="col-8 mt-2">
                           <p>
                             : నాలుగు సెమిస్టర్స్ (అనగా ఆగష్టు నుండి డిశంబర్ మరియు జనవరి నుండి మే, క్రమముగా)
                           </p>
                         </div>
                       </div>
                     </div>
                     <a href="courses.html">Read More....</a>
                   </div>
                 </div>
                 <div class="tab-pane fade " id="v-pills-d1" role="tabpanel" aria-labelledby="v-pills-a-tab">
                   <div class="row col-lg-12">

                     <h3 class="mt-3  text-center">
                       నెలకు '5' రోజుల ప్రత్యేక బైబిలు ట్రైవింగ్
                     </h3>
                     <p
                       class="text-center mt-4">ప్రీచర్స్ ట్రైనింగ్ స్కూలువారు 2002 సం॥న ఈ ట్రైనింగ్ కోర్సును ప్రారంభించడమైనది. మా ఉద్దేశము మతశాఖలలో పనిచేయుచున్న పాస్టర్సును వారి భార్యలకు క్రీస్తు సంఘ సత్యమును నేర్పి వారిని క్రీస్తు సంమములవారుగా తయారుచేయుటకు ఇది మీకు ఒక మంచి అవకాశము. ఇందు కులముగాని, మతశాఖ భేదముగాని, వయస్సుగాని మేము పాటించము, అందరికి సమానముగా నెలకు రూ.600..
                     </p>
                     <a href="courses.html">Read More....</a>
                   </div>
                 </div>
       </section>

       <!-- End Departments Section -->

       <!-- ======= Testimonials Section ======= -->
       <section id="testimonials" class="testimonials">
         <div class="container" data-aos="fade-up">

           <div class="section-title">
             <h2>Testimonials</h2>
           </div>

           <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
             <div class="swiper-wrapper">

               <div class="swiper-slide">
                 <div class="testimonial-item">
                   <p>
                     <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                     As a recent graduate of the Bachelor in Biblical Studies program at P.T. School, I can confidently say that this institution has profoundly impacted my spiritual and academic journey. The curriculum is thorough and well-structured, covering a wide range of biblical texts and theological concepts. The instructors are incredibly knowledgeable and passionate, providing invaluable guidance and support throughout the program. The three years I spent here were transformative, equipping me with the skills and understanding necessary to serve effectively in ministry. I highly recommend P.T. School to anyone seeking to deepen their biblical knowledge and faith.

                     <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                   </p>
                   <img src="assets/img/slide/profile.png" class="testimonial-img" alt="">
                   <h3>John Smith </h3>
                   <!-- <h4>Ceo &amp; Founder</h4> -->
                 </div>
               </div><!-- End testimonial item -->

               <div class="swiper-slide">
                 <div class="testimonial-item">
                   <p>
                     <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                     The one-year diploma course at P.T. School was exactly what I needed to gain a solid foundation in biblical studies. As someone new to formal theological education, I appreciated the clear, concise, and engaging manner in which the courses were taught. The small class sizes and the supportive community made learning a truly enriching experience. I felt encouraged to ask questions and engage in meaningful discussions, which greatly enhanced my understanding. This program has not only strengthened my faith but also prepared me for further studies and ministry work. I am grateful for the excellent education and mentorship I received at P.T. School.
                     <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                   </p>
                   <!-- <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt=""> -->
                   <img src="assets/img/slide/profile.png" class="testimonial-img" alt="">
                   <h3>Mary Johnson
                   </h3>
                   <!-- <h4>Designer</h4> -->
                 </div>
               </div><!-- End testimonial item -->

               <div class="swiper-slide">
                 <div class="testimonial-item">
                   <p>
                     <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                     Choosing P.T. School for my Bachelor in Biblical Studies was one of the best decisions I’ve made. The program’s comprehensive approach, blending academic rigor with practical ministry training, was exactly what I was looking for. The faculty's dedication to each student’s growth was evident from day one. Their expertise and personal commitment to our success created a nurturing and inspiring learning environment. The school's mission to provide quality biblical education is reflected in every aspect of the program. I graduated feeling well-prepared for my calling in ministry and with a deepened faith that will guide me in my future endeavors.
                     <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                   </p>
                   <img src="assets/img/slide/profile.png" class="testimonial-img" alt="">
                   <h3>David Williams </h3>
                   <!-- <h4>Store Owner</h4> -->
                 </div>
               </div><!-- End testimonial item -->

               <div class="swiper-slide">
                 <div class="testimonial-item">
                   <p>
                     <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                     The P.T. School program for women preachers is exceptional. The two-year course, broken into four semesters, provided a thorough grounding in biblical studies, all taught in Telugu, which made the material accessible and engaging. The school’s admission process, starting every January and August, was smooth, and the only requirement being a 10th-grade qualification made it easy for many women like me to join. This education has empowered me to serve effectively in my church and community. The program’s focus on practical ministry skills has been particularly beneficial, helping me grow both spiritually and intellectually.
                     <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                   </p>
                   <img src="assets/img/slide/profile.png" class="testimonial-img" alt="">
                   <h3>Meryem</h3>
                   <!-- <h4>Freelancer</h4> -->
                 </div>
               </div><!-- End testimonial item -->

               <div class="swiper-slide">
                 <div class="testimonial-item">
                   <p>
                     <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                     I was initially hesitant about pursuing further education, but the six-month course at P.T. School was exactly what I needed. Starting in January and August, the short duration was packed with insightful teachings in Telugu, which made learning straightforward and impactful. Despite having only completed my 10th grade, the course structure and the supportive faculty helped me achieve a deeper understanding of the Bible. This program has not only strengthened my faith but also prepared me for active ministry work. I am thankful for this opportunity and highly recommend it to others.
                     <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                   </p>
                   <img src="assets/img/slide/profile.png" class="testimonial-img" alt="">
                   <h3>Thomas</h3>
                   <!-- <h4>Entrepreneur</h4> -->
                 </div>
               </div><!-- End testimonial item -->

             </div>
             <div class="swiper-pagination"></div>
           </div>

         </div>
       </section>
       <!-- End Testimonials Section -->


   <section>
       <div class="container">
         <div class="row">
           <div class="col-12">
             <video width="100%" controls>
               <source src="assets/img/videos/preachers_training _school.mp4" type="video/mp4">
               <!-- <source src="assets/img/videos/preachers_training_school_telugu.mp4" type="video/mp4"> -->
               Your browser does not support the video tag.
             </video>
           </div>
         </div>
       </div>
     </section>



       <!-- ======= Appointment Section ======= -->

       <section id="appointment" class="appointment section-bg">
         <div class="container" data-aos="fade-up">

           <div class="section-title">
             <h2>Make an Appointment</h2>
           </div>

           <form action="appointmentform.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
             <div class="row">
               <div class="col-md-4 form-group">
                 <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
               </div>
               <div class="col-md-4 form-group mt-3 mt-md-0">
                 <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
               </div>
               <div class="col-md-4 form-group mt-3 mt-md-0">
                 <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
               </div>
             </div>
             <div class="row">
               <div class="col-md-4 form-group mt-3">
                 <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required>
               </div>
               <div class="col-md-4 form-group mt-3">
                 <select name="department" id="department" class="form-select" required>
                   <option value="">Student Relation</option>
                   <option value="Father">Father</option>
                   <option value="Mother">Mother</option>
                   <option value="Gurdian">Gurdian</option>


                 </select>
               </div>
               <div class="col-md-4 form-group mt-3">
                 <select name="doctor" id="doctor" class="form-select">
                   <option value="">Select Course</option>
                   <option value="BACHELOR IN BIBLICAL STUDIES (BBS) ">BACHELOR IN BIBLICAL STUDIES (BBS)</option>
                   <option value="Telugu Medium Bible Training">Telugu Medium Bible Training</option>
                   <option value="Women Telugu Medium Bible Training">Women Telugu Medium Bible Training</option>

                 </select>
                 <!-- <input type="text" name="doctor" class="form-select" id=" " placeholder="Doctor" required> -->
               </div>
             </div>

             <div class="form-group mt-3">
               <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
             </div>
             <div class="my-3">
               <div class="loading">Loading</div>
               <!-- <div class="error-message"></div> -->
               <!-- <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div> -->
             </div>
             <div class="text-center"><button type="submit">Make an Appointment</button></div>
           </form>

         </div>
       </section>

       <!-- End Appointment Section -->



       <!-- =======  Gallery Section ======= -->

       <section id="gallery" class="appointment section-bg">
         <div class="container" data-aos="fade-up">

           <div class="section-title">
             <h2>Gallery</h2>
           </div>

           <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
             <div class="swiper-wrapper">

               <div class=" swiper-slide">
                 <div class="testimonial-item">
                   <img src="assets/img/slide/13.png" class="img-fluid">
                 </div>
               </div>

               <div class="swiper-slide">
                 <div class="testimonial-item">
                   <img src="assets/img/slide/1.png" class="img-fluid">
                 </div>
               </div>


               <div class="swiper-slide">
                 <div class="testimonial-item">
                   <img src="assets/img/slide/2.png" class="img-fluid">
                 </div>
               </div>


               <div class="swiper-slide">
                 <div class="testimonial-item">
                   <img src="assets/img/slide/3.png" class="img-fluid">
                 </div>
               </div>


               <div class="swiper-slide">
                 <div class="testimonial-item">
                   <img src="assets/img/slide/4.png" class="img-fluid">
                 </div>
               </div>



               <div class="swiper-slide">
                 <div class="testimonial-item">
                   <img src="assets/img/slide/5.png" class="img-fluid">
                 </div>
               </div>





               <div class=" swiper-slide">
                 <div class="testimonial-item">
                   <img src="assets/img/slide/6.png" class="img-fluid">
                 </div>
               </div>



               <div class="swiper-slide">
                 <div class="testimonial-item">
                   <img src="assets/img/slide/7.png" class="img-fluid">
                 </div>
               </div>

               <div class="swiper-slide">
                 <div class="testimonial-item">
                   <img src="assets/img/slide/8.png" class="img-fluid">
                 </div>
               </div>
               <div class="swiper-slide">
                 <div class="testimonial-item">
                   <img src="assets/img/slide/10.png" class="img-fluid">
                 </div>
               </div>

               <div class=" swiper-slide">
                 <div class="testimonial-item">
                   <img src="assets/img/slide/11.png" class="img-fluid">
                 </div>
               </div>


               <div class="swiper-slide">
                 <div class="testimonial-item">
                   <img src="assets/img/slide/12.png" class="img-fluid">
                 </div>
               </div>

             </div>
             <br>
             <br>
             <div class="swiper-pagination mt-5"></div>
           </div>
         </div>
         </div>
       </section>

       <!-- End Gallery Section -->



     </main><!-- End #main -->

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
                   <a href=" pdf.php">Krupawakyam</a>
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

     <!-- WhatsApp link -->
     <a
       href="https://api.whatsapp.com/send?phone=919849031095"
       style="color: #fff"
       class="whatsapp-link"
       target="_blank">
       <i class="fab fa-whatsapp"></i>
     </a>

     <!--     
   <div class="loader">
    
     <div>
       <ul>
         <li>
           <svg fill="currentColor" viewBox="0 0 90 120">
             <path d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z"></path>
           </svg>
         </li>
         <li>
           <svg fill="currentColor" viewBox="0 0 90 120">
             <path d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z"></path>
           </svg>
         </li>
         <li>
           <svg fill="currentColor" viewBox="0 0 90 120">
             <path d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z"></path>
           </svg>
         </li>
         <li>
           <svg fill="currentColor" viewBox="0 0 90 120">
             <path d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z"></path>
           </svg>
         </li>
         <li>
           <svg fill="currentColor" viewBox="0 0 90 120">
             <path d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z"></path>
           </svg>
         </li>
         <li>
           <svg fill="currentColor" viewBox="0 0 90 120">
             <path d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z"></path>
           </svg>
         </li>
       </ul>
     </div>
 
   </div> -->



     <style>
       .loader {
         width: 50px;
         height: 50px;
         position: fixed;
         bottom: 190px;
         right: 20px;
         background-color: #25d366;
         color: #fff;
         /* padding: 5px; */
         border-radius: 50%;
         text-decoration: none;
         font-size: 35px;
         text-align: center;
         --background: linear-gradient(135deg, #23C4F8, #275EFE);
         --shadow: rgba(39, 94, 254, 0.28);
         --text: #6C7486;
         --page: rgba(255, 255, 255, 0.36);
         --page-fold: rgba(255, 255, 255, 0.52);
         --duration: 3s;
         width: 100px;
         /* Reduced width */
         height: 70px;
         /* Reduced height */
         /* position: relative; */
       }

       .loader:before,
       .loader:after {
         --r: -6deg;
         content: "";
         position: absolute;
         bottom: 4px;
         /* Adjusted bottom position */
         width: 60px;
         /* Adjusted width */
         top: 80%;
         box-shadow: 0 8px 6px var(--shadow);
         /* Adjusted shadow */
         transform: rotate(var(--r));
       }

       .loader:before {
         left: 2px;
         /* Adjusted left position */
       }

       .loader:after {
         --r: 6deg;
         right: 2px;
         /* Adjusted right position */
       }

       .loader div {
         width: 100%;
         height: 100%;
         border-radius: 13px;
         position: relative;
         z-index: 1;
         perspective: 600px;
         box-shadow: 0 4px 6px var(--shadow);
         background-image: var(--background);
       }

       .loader div ul {
         margin: 0;
         padding: 0;
         list-style: none;
         position: relative;
       }

       .loader div ul li {
         --r: 180deg;
         --o: 0;
         --c: var(--page);
         position: absolute;
         top: 5px;
         /* Adjusted top position */
         left: 5px;
         /* Adjusted left position */
         transform-origin: 100% 50%;
         color: var(--c);
         opacity: var(--o);
         transform: rotateY(var(--r));
         -webkit-animation: var(--duration) ease infinite;
         animation: var(--duration) ease infinite;
       }

       .loader div ul li:nth-child(2) {
         --c: var(--page-fold);
         -webkit-animation-name: page-2;
         animation-name: page-2;
       }

       .loader div ul li:nth-child(3) {
         --c: var(--page-fold);
         -webkit-animation-name: page-3;
         animation-name: page-3;
       }

       .loader div ul li:nth-child(4) {
         --c: var(--page-fold);
         -webkit-animation-name: page-4;
         animation-name: page-4;
       }

       .loader div ul li:nth-child(5) {
         --c: var(--page-fold);
         -webkit-animation-name: page-5;
         animation-name: page-5;
       }

       .loader div ul li svg {
         width: 45px;
         /* Adjusted width */
         height: 60px;
         /* Adjusted height */
         display: block;
       }

       .loader div ul li:first-child {
         --r: 0deg;
         --o: 1;
       }

       .loader div ul li:last-child {
         --o: 1;
       }

       .loader span {
         display: block;
         left: 0;
         right: 0;
         top: 100%;
         margin-top: 10px;
         /* Adjusted margin */
         text-align: center;
         color: var(--text);
         font-size: 10px;
         /* Adjusted font size */
       }

       @keyframes page-2 {
         0% {
           transform: rotateY(180deg);
           opacity: 0;
         }

         20% {
           opacity: 1;
         }

         35%,
         100% {
           opacity: 0;
         }

         50%,
         100% {
           transform: rotateY(0deg);
         }
       }

       @keyframes page-3 {
         15% {
           transform: rotateY(180deg);
           opacity: 0;
         }

         35% {
           opacity: 1;
         }

         50%,
         100% {
           opacity: 0;
         }

         65%,
         100% {
           transform: rotateY(0deg);
         }
       }

       @keyframes page-4 {
         30% {
           transform: rotateY(180deg);
           opacity: 0;
         }

         50% {
           opacity: 1;
         }

         65%,
         100% {
           opacity: 0;
         }

         80%,
         100% {
           transform: rotateY(0deg);
         }
       }

       @keyframes page-5 {
         45% {
           transform: rotateY(180deg);
           opacity: 0;
         }

         65% {
           opacity: 1;
         }

         80%,
         100% {
           opacity: 0;
         }

         95%,
         100% {
           transform: rotateY(0deg);
         }
       }
     </style>

     <!-- Scroll Up Button  -->
     <button id="scrollBtn" onclick="scrollToTop()"><i class="fa-solid fa-arrow-up "></i></button>

     <script>
       // Function to scroll to the top of the page
       function scrollToTop() {
         window.scrollTo({
           top: 0,
           behavior: 'smooth' // Optional, smooth scrolling animation
         });
       }

       // Show scroll button when scrolling down
       window.onscroll = function() {
         scrollFunction()
       };

       function scrollFunction() {
         if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
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
         background-color: #01539D;
         ;
         color: white;
         border: none;
         border-radius: 50%;
         cursor: pointer;
       }
     </style>

     <style>
       .visitor-counter {
         position: fixed;
         bottom: 14px;
         left: 45px;
         background-color: rgba(0, 0, 0, 0.8);
         color: white;
         padding-top: 10px;
         padding-right: 20px;
         padding-bottom: 10px;
         padding-left: 40px;
         /* padding: 10px 20px  10px;  */
         border-radius: 8px;
         font-size: 16px;
         font-family: Arial, sans-serif;
         display: flex;
         align-items: center;
         gap: 10px;
         /* Space between elements */
         z-index: 1000;
       }

       /* Fixed Eye Animation in Bottom-Left Corner */
       .eye-lid {
         position: fixed;
         bottom: 20px;
         /* Distance from bottom */
         left: 49px;
         /* Distance from left */

         background-color: rgb(0, 0, 0);
         border-radius: 50%;
         display: flex;
         justify-content: center;
         align-items: center;
         box-shadow: 0 3px 0 1px rgba(0, 0, 0, 0.2);
         width: 30px;
         height: 30px;
         z-index: 1000;
         /* Ensures it's above other elements */
       }

       .eye {
         background-color: lightgreen;
         border-radius: 50%;
         transform: translate3d(0, 0, 0) rotate(90deg);
         width: 24px;
         height: 24px;
         animation: eye 5s infinite;
       }

       @keyframes eye {

         12%,
         25% {
           width: 20px;
           height: 22px;
         }

         37%,
         50% {
           width: 14px;
           height: 26px;
         }

         63%,
         75% {
           width: 20px;
           height: 21px;
         }

         87% {
           width: 20px;
           height: 20px;
         }
       }

       .cornea {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         background-color: rgb(0, 0, 0);
         border-radius: 50%;
         width: 10px;
         height: 10px;
         animation: eye-color 5s infinite;
       }

       @keyframes eye-color {

         63%,
         75% {
           background-color: rgb(8, 20, 96);
         }
       }

       .white-pupil {
         position: absolute;
         top: 9%;
         left: 10%;
         border-radius: 50%;
         background-color: #ffbc03;
         width: 4px;
         height: 4px;
       }




       .eye {
         width: 20px;
         height: 20px;
       }

       .cornea {
         width: 8px;
         height: 8px;
       }

       .white-pupil {
         width: 3px;
         height: 3px;
       }
     </style>
     <!-- Counter Display -->
     <div class="visitor-counter ">

       <!-- From Uiverse.io by FWDJc -->
       <div class="eye-lid">
         <div class="eye">
           <div class="cornea">
             <div class="white-pupil"></div>
           </div>
         </div>
       </div>
      : <span id="visitorCount">Loading...</span>
     </div>

     <script>
       // Check if the user has already visited in this session
       if (!sessionStorage.getItem("visited")) {
         // Get stored visitor count or set to 0
         let visitCount = localStorage.getItem("visitCount") || 0;

         // Convert to number and increase count
         visitCount = Number(visitCount) + 1;

         // Save updated count back to localStorage
         localStorage.setItem("visitCount", visitCount);

         // Mark this session as visited (to prevent counting refreshes)
         sessionStorage.setItem("visited", "true");
       }

       // Display visitor count
       document.getElementById("visitorCount").textContent = localStorage.getItem("visitCount");
     </script>




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