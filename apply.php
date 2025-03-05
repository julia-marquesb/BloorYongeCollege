<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Corporate Information</title>
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
    <div class="corporate-container">
      <h1>Corporate Information</h1>
      
      <!-- Mission statement section -->
      <section class="mission">
        <h2>Our Mission</h2>
        <p>At Royal Typewriters, our mission is to bring back the joy and nostalgia of traditional typing. We aim to provide high-quality, vintage-inspired typewriters that offer a unique and satisfying writing experience.</p>
      </section>

      <!-- Values section -->
      <section class="values">
        <h2>Our Values</h2>
        <ul>
          <li><strong>Quality:</strong> We prioritize the craftsmanship and durability of our typewriters.</li>
          <li><strong>Innovation:</strong> While embracing the past, we continuously improve our products with modern technology.</li>
          <li><strong>Customer Satisfaction:</strong> Our customers' happiness and feedback drive our business decisions.</li>
          <li><strong>Community:</strong> We foster a community of typewriter enthusiasts who share our passion.</li>
        </ul>
      </section>

      <!-- Team members section -->
      <section class="team">
        <h2>Meet Our Team</h2>
        <!-- Each team member section -->
        <div class="team-member">
          <img src="images/team1.jpg" alt="John Doe">
          <h3>John Doe</h3>
          <p>CEO</p>
        </div>
        <div class="team-member">
          <img src="images/team2.jpg" alt="Jane Smith">
          <h3>Jane Smith</h3>
          <p>Chief Engineer</p>
        </div>
        <div class="team-member">
          <img src="images/team3.jpg" alt="Emily Johnson">
          <h3>Emily Johnson</h3>
          <p>Marketing Director</p>
        </div>
      </section>
    </div>
  </main>
</body>
</html>
