<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bloor Yonge College</title>
  <!-- Link to external CSS stylesheet -->
  <link rel="stylesheet" href="css/styles.css">
  <!--Include icon for all pages-->
  <link rel="icon" href="../images/logo.jpeg" type="image/jpeg">
</head>
<body>
  <!-- Header section with navigation menu -->
 <?php include './include/header.php' ?>

  <!-- Main content area -->
  <main>
    <div class="content">
      <!-- Product image and description section -->
      <div class="product-image">
        <img src="images/logo.jpeg" alt="Product">
      </div>
      <div class="product-description">
        <h1>Bloor Yonge College</h1>
        <p><h3>Why Choose Us?</h3>
                    <ul>
                        <li>Excellence in Education</li>
                        <li>Expert Faculty</li>
                        <li>Modern Facilities</li>
                        <li>Career Support</li>
                    </ul></p>
        
        <!-- Link to reviews page -->
        <a href="reviews.html" class="reviews-link">See Testimonials</a>
      </div>
    </div>

    <div class="conta">
      <!-- Feedback section with form -->
      <section class="feedback">
      <h3>Latest News</h3>
                    <ul>
                        <li>New Program Launches</li>
                        <li>Upcoming Events</li>
                        <li>Student Achievements</li>
                    </ul>
      </section>

      <!-- Subscription section with form -->
      <section class="subscription">
      <h3>Quick Links</h3>
                    <ul>
                        <li><a href="apply.php">Apply Now</a></li>
                        <li><a href="programs.php">View Programs</a></li>
                        <li><a href="campus.php">Campus Tour</a></li>
                    </ul>
      </section>
    </div>
  </main>

  <!-- Link to external JavaScript file -->
  <script src="js/script.js"></script>
</body>
</html>
