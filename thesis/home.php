<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

<section class="header"> 
    <a href="home.php" class="logo">medi-den</a>
    <nav class="navbar">
        <a href="home.php">gist-hub</a>
        <a href="health.php">find a doctor</a>
        <a href="contact.php">symptom checker</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(homey.jpeg) no-repeat">
            <div class="content">
               <span>water crisis</span>
               <h3>nigeria's cry for help</h3>
               <a href="gist.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(lokoja.jpeg) no-repeat">
            <div class="content">
               <span>state of emergence</span>
               <h3>lokoja flood</h3>
               <a href="gist.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(covid.jpeg) no-repeat">
            <div class="content">
               <span>covid-19! vaccination roll-out</span>
               <h3>africa exempted!!</h3>
               <a href="gist.php" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="health.jpeg" alt="">
         </div>
         <div class="content">
            <h3>check your symptom</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <button id="getsymptom">clickme</button>
            <a href="health.php" class="btn">get started!</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="doctors.png" alt="">
         </div>
         <div class="content">
            <h3>chat with an expert</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="contact.php" class="btn">get talking!</a>
         </div>
      </div>
    
   </div>
</section>

<!-- home packages section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="well.png" alt="">
         <h3>wellness</h3>
      </div>

      <div class="box">
         <img src="lab.png" alt="">
         <h3>testing centers</h3>
      </div>

      <div class="box">
         <img src="ayurveda.png" alt="">
         <h3>ayurveda centers</h3>
      </div>

     
   </div>

</section>

<!-- services section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="health.php"> <i class="fas fa-angle-right"></i> symptom-checker</a>
         <a href="contact.php"> <i class="fas fa-angle-right"></i> contact a doctor</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +136702482430 </a>
         <a href="#"> <i class="fas fa-envelope"></i> nanyachukwu@yahoo.com </a>
         <a href="#"> <i class="fas fa-map"></i> debrecen, hungary - 4001 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>anyachukwu jireh nneoma</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->



<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="script.js"></script>
</body>
</html>