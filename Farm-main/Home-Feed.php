<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="icon" type="image/x-icon" href="/Objects/Images/farm-logo-2.png">
    <link rel="stylesheet" href="/Bootstrap-5/css/bootstrap.min.css">
    <script src="/Bootstrap-5/js/bootstrap.min.js" defer></script>
    <style>
        /* Add your custom styles here */

        /* Example styles */
        body {
            background-image: url('/Objects/Images/Sunflowers-background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        .logo {
            max-width: 90px;
        }

        
        .navbar-nav .nav-link.btn:hover {
            border: 2px solid #0758d1;
            color: rgba(230, 230, 230, 1);
            
        }

        .btn {
            background-color: #198754;
            border-color: #198754;
        }

        .btn:hover {
            background-color: #0d6e3f;
            border-color: #0d6e3f;
        }

        .farm-title img {
            width: 80px;
        }

        @media (max-width: 991px) {
            .navbar-nav .nav-link {
                font-size: 12px;
                padding: 6px;
            }

            .navbar-nav {
                float: right;
            }

            .farm-title {
                width: 230px;
                margin-left: -15px;
            }

            .logo img {
                width: 80px;
            }
        }

        .footer {
            background-color: #28a745;
            color: #ffffff;
            padding: 20px 0;
        }

        .copyright {
            text-align: center;
        }

        .product-card {
            background-color: rgba(230, 230, 230, 0.7);
            /* Green theme with 50% opacity */
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;
        }

        .product-item {
            margin-bottom: 10px;
        }

        .product-item img {
            max-width: 200px;
            height: auto;
            margin-bottom: 10px;
        }

        .offer-duration {
            font-weight: bold;
            color: green;
        }

        .posted-date,
        .price {
            color: black;
        }

        .contact-info {
            margin-top: 10px;
        }

        .activity-card {
            background-color: rgba(230, 230, 230, 0.7);
            /* Green theme with 50% opacity */
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;
        }

        .product-image {
            max-width: 200px;
            height: auto;
            margin-bottom: 10px;
            border-radius: 5px;
            align-items: center;
        }

        .activity-item {
            margin-bottom: 10px;
        }

        .activity-item img {
            max-width: 300px;
            height: auto;
            margin-right: 10px;
            border-radius: 5px;
        }

        .center-box {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: rgba(102, 187, 106, 0.5); /* Green theme with 50% opacity */
        }

        .green-theme {
            background-color: #66bb6a;
            color: #ffffff;
            padding: 20px;
            border-radius: 8px;
        }

        .error-theme {
            background-color: #e53935;
            color: #ffffff;
            padding: 20px;
            border-radius: 5px;
        }
    </style>

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/Farm-main/Home-Feed.php">
                    <img src="/Objects/Images/farm-logo-2.png" alt="Logo" class="logo">
                </a>
                <img src="/Objects/Images/farm-title.png" alt="Farm system title" class="farm-title">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="navbar-nav ms-auto flex-row ">
                        <a class="nav-link btn btn-outline-success mx-2" href="/Farm-main/About.php">ABOUT US</a>
                        <a class="nav-link btn btn-outline-success mx-2" href="/Farm-main/Start-in.php">BEGIN A FARM</a>
                        <a class="nav-link btn btn-outline-success mx-2" href="/Farm-main/Register-main.php">REGISTER</a>
                        <a class="nav-link btn btn-outline-success mx-2" href="/Farm-main/Contact-us.php">CONTACT-INFO</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
               <div class="product-card">
                    <h3>Products</h3>
                    <!-- Add your product listing here -->
                    <div class="product-item">
                        <img src="/Objects/Images/products.jpg" alt="Product 1" class="product-image">
                        <p class="offer-duration">Offer Duration: May 15 - May 20</p>
                        <p class="posted-date">Posted: May 12, 2023</p>
                        <p class="price">Price: Tsh 20,000/kg</p>
                        <p class="contact-info">Contact: Juma Mdoe (0732323234)</p>
                    </div>
                    <div class="product-item">
                        <img src="/Objects/Images/milk.jpg" alt="Product 2" class="product-image">
                        <p class="offer-duration">Offer Duration: May 18 - May 25</p>
                        <p class="posted-date">Posted: May 16, 2023</p>
                        <p class="price">Price: Tshs 30,000/kg</p>
                        <p class="contact-info">Contact: Bibi Moses (0675645332)</p>
                    </div>
                    <div class="product-item">
                        <img src="/Objects/Images/farm-products.jpg" alt="Product 3" class="product-image">
                        <p class="offer-duration">Offer Duration: May 20 - May 28</p>
                        <p class="posted-date">Posted: May 18, 2023</p>
                        <p class="price">Price: Tshs 26,000/kg</p>
                        <p class="contact-info">Contact: Zonga Mtwala (0644345757)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="activity-card">
                    <h3>Farm Activities</h3>
                    <!-- Add your farm activities with schedules here -->
                    <div class="activity-item">
                        <img src="/Objects/Images/irrigation.jpg" alt="Irrigation" class="activity-image">
                        <p>Irrigation - May 20, 9:00 AM to 11:00 AM</p>
                    </div>
                    <div class="activity-item">
                        <img src="/Objects/Images/planting.jpg" alt="Planting" class="activity-image">
                        <p>Planting - May 22, 10:00 AM to 12:00 PM</p>
                    </div>
                    <div class="activity-item">
                        <img src="/Objects/Images/harvest.jpg" alt="Harvesting" class="activity-image">
                        <p>Harvesting - May 25, 8:00 AM to 10:00 AM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-auto py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h5>Contact Us</h5>
          <p>Email: info@fmis.com</p>
          <p>Phone: 0655328428</p>
          <p>Address: FMIS TUDARco, Dar es salaam, Tanzania</p>
        </div>
        <div class="col-md-6">
          <h5>Feedback</h5>
          <form action="Home-Feed.php" method="POST">
            <div class="mb-3">
              <label for="name" class="form-label">Name:</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="emailback" name="emailback" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message:</label>
              <textarea class="form-control" id="message" name="message" required></textarea>
            </div>
            <button type="submit" class="btn btn-light" name="submit" >Submit</button>
          </form>
        </div>
      </div>
    </div>
    <br>
    <div class="container text-center">
        <span>&copy; <?php echo date("Y"); ?> Farm Organization. All rights reserved.</span>
    </div>
    <div class="copyright">
      &copy; COPYRIGHT - 2023    
    </div>
  </footer>

<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root"; // Replace with your XAMPP database username
$password = ""; // Replace with your XAMPP database password
$dbname = "fmis";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// Check if the feedback form is submitted
if (isset($_POST['submit'])) {
    // Validate and sanitize the form data
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $emailback = isset($_POST['emailback']) ? $_POST['emailback'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Insert the data into the database
    $sql = "INSERT INTO feedback (name, emailback, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $emailback, $message);

    if ($stmt->execute()) {
        // Feedback submitted successfully
        echo "<div id='success-message' class='center-box'>
              <div class='green-theme'>
                  <h2>Feedback Submitted</h2>
                  <p>Thank you for your feedback!</p>
              </div>
          </div>";
        // Redirect to the desired page or display a success message
    } else {
        // Error occurred while executing the query
        echo "Error: " . $stmt->error;
        // Handle the error appropriately
    }
    

    $stmt->close();
}

$conn->close();

//it still give this error "Error: SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES)"
?>
</body>
</html>
