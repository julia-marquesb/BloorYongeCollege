<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About the Product</title>
    <link rel="stylesheet" href="../css/styles.css"> <!-- Link to the external stylesheet -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <!-- Navigation links -->
                <li><a href="../index.html">Home</a></li>
                <li><a href="../about.html">About the product</a></li>
                <li><a href="../promotion.html">Promotion Details</a></li>
                <li><a href="../corporate.html">Corporate Information</a></li> <!-- Corrected link text -->
                <li><a href="../support.html">Support</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <div class="ab">
            <h1>Feedback</h1>
                    
            <?php
            // Check if the form was submitted via POST
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
               
                // Check if the required form fields are set
                if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
                    // Sanitize and trim input values
                    $name = htmlspecialchars(trim($_POST['name']));
                    $email = htmlspecialchars(trim($_POST['email']));
                    $message = htmlspecialchars(trim($_POST['message']));
                    
                    // Validate email format
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                       
                        // Display a thank you message if email is valid
                        echo "<p>Thank you for your message, $name!</p>";
                    } else {
                        // Display an error message if email is invalid
                        echo "<p>The provided email is not valid.</p>";
                    }
                } else {
                    // Display an error message if any field is missing
                    echo "<p>Please fill out all the fields in the form.</p>";
                }
            }
            ?>
        </div>
    </main>
</body>
</html>






