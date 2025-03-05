<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Bloor Yonge College</title>
    <!-- Link to external CSS stylesheet -->
  <link rel="stylesheet" href="css/styles.css">
  <!--Include icon for all pages-->
  <link rel="icon" href="../images/logo.jpeg" type="image/jpeg">
</head>
<body>

<!-- Header section with navigation menu -->
  <?php include './include/header.php' ?>

<!--Main content-->
<main>

<!--About us section-->
     <div class="about-us-image">
     </div>

      <div class="about-us-title">
       <h1>About Bloor Yonge College</h1>
      </div>

    <section id="section-about" class="grid">

      <div class="about-us-content">
        <h2>About Us</h2>
       <p>
       Bloor Yonge College is a vibrant hub of academic excellence located in the heart of <span><a href="campus.php" class="downtown-toronto">downtown Toronto</a></span> that offers <span><a href="programs.php" class="careers-about-link">career-focused programs</a></span> in Business, Computer Science and Health Care. 
       Our college is dedicated to providing a transformative education that empowers students to achieve their full potential.
       <br><br>
       With a diverse and inclusive community, and a strong commitment to innovation, we stand out as a leader in higher education. Our unique blend of rigorous academics and real-world experiences prepares students for success in a rapidly changing global landscape.
       </p>
      </div>

      <div class="about-page-image">
        <img src="./images/logo.jpeg" alt="">
      </div>
      
    </section>

<!--Wrapper-->
  <div class="about-page-wrapper">

  <!--History Section-->
      <div class="box-history">
      <h2>Our History</h2>
      <p>
       Founded in 1972, Bloor Yonge College has a rich history of academic achievement and community engagement.
      <br><br>
      Over the past five decades, we have reached significant milestones, including the establishment of cutting-edge research centers, expansion of international partnerships, and development of innovative programs that respond to the evolving needs of society.       
      </p>
    </div>


  <!--Our Mission section-->
      <div class="box-mission">
      <h2>Our Mission</h2>
       <p>
       Our mission at Bloor Yonge College is to inspire and educate students to become thoughtful, engaged, and successful individuals. 
       <br><br>
       We are committed to providing a supportive and dynamic learning environment that encourages critical thinking, creativity, and collaboration. 
       Our core values include integrity, inclusivity, and excellence in teaching, research, and service.
       </p>
      </div>
      

  <!--Key Performance-->
      <div class="box-key-performance">
      <h2>Key Perfomance Indicators</h2>
       <p>
        Key Performance Indicator (KPI) surveys are used by the Ministry of Colleges and Universities (MCU) to ensure public and career colleges are delivering
        quality education that leads to the best employment outcomes for students.
       </p>
      </div> 
        

  </div>

</main>

<!--Include External Footer-->
<?php include './include/footer.php'?>



</body>
</html>