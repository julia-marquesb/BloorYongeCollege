<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Campus Information | Bloor Yonge College</title>
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
    <div class="support-container">
      <h1>Meet Our Campus</h1>

      <!-- Frequently Asked Questions section -->
      <section class="faq">
        <h2>120 Bloor East Campus</h2>
        <!-- Individual FAQ item -->
        <div class="faq-item">
          <h3>Downtown Toronto</h3>
          <p>Bloor Yonge's boutique-style campus in Toronto is simply the best in the world. The bright, modern state-of-the-art spaces provide the perfect environment for learning and socializing. You will be amazed.</p>
        </div>

        <div class="responsive">
         <div class="gallery">
          <a target="_blank" href="./images/campus-entrance.jpg">
            <img src="./images/campus-entrance.jpg" alt="campus entrance">
           </a>
             <div class="desc">Main Entrance</div>
          </div>
        </div>

        <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="./images/campus-classroom.jpg">
           <img src="./images/campus-classroom.jpg" alt="classroom">
          </a>
           <div class="desc">Classrooms</div>
        </div>
        </div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="./images/campus-lounge.jpg">
      <img src="./images/campus-lounge.jpg" alt="common area">
    </a>
    <div class="desc">Common Area</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="./images/campus-cafeteria.jpg">
      <img src="./images/campus-cafeteria.jpg" alt="cafeteria">
    </a>
    <div class="desc">Cafeteria</div>
  </div>
</div>

<div class="clearfix"></div>


      

        <!-- Another FAQ item -->
        <!--<div class="faq-item">
          <h3>Where can I buy replacement parts?</h3>
          <p>You can purchase replacement parts directly from our website or from authorized dealers. Visit our store page for more information.</p>
        </div>-->
        <!-- Another FAQ item -->
        <!--<div class="faq-item">
          <h3>How do I clean and maintain my typewriter?</h3>
          <p>Regular cleaning and maintenance will ensure your typewriter stays in top condition. Please refer to the maintenance guide in the manual or contact our support team for assistance.</p>
        </div>-->
        <!-- Add more FAQs as needed -->
      </section>

      <!-- Contact Information section -->
      <section class="contact-info">
        <h2>Campus Support</h2>
        <p>If you have any other questions or need further assistance, please feel free to reach out to us:</p>
        <p><strong>Email:</strong> info@blooryonge.com</p>
        <p><strong>Phone:</strong> +1-800-123-4567</p>
        <p><strong>Address:</strong>120 Bloor St E., Toronto, ON M4W 1B7</p>
        <p><small>Phone support available 8:30am – 5:00pm Eastern Time</small></p>
      </section>

      <!-- Support Contact Form section -->
      <!--<section class="support-form">
        <h2>Contact Support</h2>
        <form action="php/support_feedback.php" method="post">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>

          <label for="message">Message:</label>
          <textarea id="message" name="message" rows="4" required></textarea>

          <button type="submit">Send Message</button>
        </form>
      </section>-->

    </div>

  </main>
</body>
</html>
