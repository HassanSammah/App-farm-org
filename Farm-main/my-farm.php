<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Farm</title>
    <link rel="icon" type="image/x-icon" href="/Objects/Images/farm-logo-2.png">
    <link rel="stylesheet" href="/Bootstrap-5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Objects/fontawesome/css/all.min.css">
    <script src="/Bootstrap-5/js/bootstrap.min.js" defer></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous" defer></script>
    <style>
    /* Add your custom styles here */

    /* Example styles */
    body {
        background-image: url('/Objects/Images/farm-background.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
       
    }

    .logo {
        max-width: 90px;
    }


    section {
        background-color: #ffffff;
        height: 100vh;
        position: fixed;
        left: 0;
        z-index: 999;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 1rem;
    }

    .navbar-brand {
        font-weight: bold;
    }

    .nav-link {
        color: #000000;
    }

    .nav-link:hover {
        color: #198754;
    }

    .search-form {
        margin-top: 1rem;
    }

    @media (max-width: 700px) {
        section {
            justify-content: flex-start;
            align-items: center;
            padding: 1rem;
        }

        .nav-link {
            display: none;
        }

        .search-form {
            display: none;
        }

        .navbar .navbar-nav {
            flex-direction: column;
            align-items: flex-start;
        }

        .navbar .navbar-nav .nav-item {
            margin: 5px 0;
        }

        .navbar .navbar-nav .nav-item a {
            display: flex;
            align-items: center;
        }

        .navbar .navbar-nav .nav-item a i {
            margin-right: 10px;
        }

        .navbar .navbar-nav .nav-item a span {
            display: none;
        }
    }

    .search-bar {
        width: 200px;
    }

    .footer {
        background-color: #28a745;
        color: #ffffff;
        padding: 20px 0px;
        margin-top: auto;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-left: 100px;
        height: 100%;
    }

    .content-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin-top: 20px;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 8px;
        border-radius: 10px;
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
                        <a class="nav-link btn btn-outline-success mx-2" href="/Farm-main/Register-main.php">REGISTER</a>
                        <a class="nav-link btn btn-outline-success mx-2" href="/Farm-main/Contact-us.php">CONTACT-INFO</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section>
        <nav class="navbar">
        
            <ul class="navbar-nav">
            <a class="navbar-brand" href="/Farm-main/Home-Feed.php">
                    <img src="/Objects/Images/farm-logo-2.png" alt="Logo" class="logo" width="40px" height="40px">
                </a>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-seedling"></i><span> My Farm</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Farm-main/my-stock.php"><i class="fas fa-box-open"></i><span> My Stock</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/finances/financial-reports.php"><i class="fas fa-chart-line"></i><span> My Finances</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Farm-main/my-products-services.php"><i class="fas fa-shopping-cart"></i><span> My Products</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Farm-main/investors.php"><i class="fas fa-chart-line"></i><span>Investments</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Weather-forecast/weather.php"><i class="fas fa-cloud-sun"></i><span> Weather</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Schedule-tasks/daily-activity.php"><i class="fas fa-calendar-alt"></i><span> Schedules</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Farm-main/consulting.php"><i class="fas fa-hands-helping"></i><span> Consulting</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Farm-main/Home-Feed.php"><i class="fas fa-home"></i><span> Back Home</span></a>
                </li>
            </ul>
        </nav>
    </section>
    <br>
    <br>
    <div class="container content-container">

    <h2>Fill in Your farm information and Save.</h2>
        <form action="my-farm.php" method="POST">
            <div class="mb-3">
                <label for="farm_name" class="form-label">Farm Name:</label>
                <input type="text" id="farm_name" name="farm_name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Location:</label>
                <input type="text" id="location" name="location" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="contacts" class="form-label">Contacts:</label>
                <input type="text" id="contacts" name="contacts" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="area" class="form-label">Area:</label>
                <input type="text" id="area" name="area" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="crops" class="form-label">Crops:</label>
                <input type="text" id="crops" name="crops" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="livestock" class="form-label">Livestock:</label>
                <input type="text" id="livestock" name="livestock" class="form-control" >
            </div>

            <div class="mb-3">
                <label for="soil_info" class="form-label">Soil Info:</label>
                <input type="text" id="soil_info" name="soil_info" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="fertilizer" class="form-label">Fertilizer:</label>
                <input type="text" id="fertilizer" name="fertilizer" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>


    <main>
        <div class="container content-container">
            <?php

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form inputs
    $farmName = $_POST['farm_name'];
    $location = $_POST['location'];
    $contacts = $_POST['contacts'];
    $area = $_POST['area'];
    $crops = $_POST['crops'];
    $livestock = $_POST['livestock'];
    $soilInfo = $_POST['soil_info'];
    $fertilizer = $_POST['fertilizer'];

    if (empty($farmName)) {
        echo "Farm Name is required.";
        return;
    }



    // Connect to the database and retrieve farm info data
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fmis";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO farm_info (farm_name, location, contacts, area, crops, livestock, soil_info, fertilizer) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $farmName, $location, $contacts, $area, $crops, $livestock, $soilInfo, $fertilizer);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Farm information added successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }


    // Fetch farm info data from the database
    $sql = "SELECT * FROM farm_info";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data for each farm
        while ($row = $result->fetch_assoc()) {
            echo '<div class="card">';
            echo '<h3>' . $row["farm_name"] . '</h3>';
            echo '<p><strong>Location:</strong> ' . $row["location"] . '</p>';
            echo '<p><strong>Contacts:</strong> ' . $row["contacts"] . '</p>';
            echo '<p><strong>Area:</strong> ' . $row["area"] . '</p>';
            echo '<p><strong>Crops:</strong> ' . $row["crops"] . '</p>';
            echo '<p><strong>Livestock:</strong> ' . $row["livestock"] . '</p>';
            echo '<p><strong>Soil Info:</strong> ' . $row["soil_info"] . '</p>';
            echo '<p><strong>Fertilizer:</strong> ' . $row["fertilizer"] . '</p>';
            echo '</div>';
        }
    } else {
        echo "<p>No farm info found.</p>";
    }

    $conn->close();
}
            ?>
        </div>
    </main>

    <br>

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
          <form action="my-farm.php" method="POST">
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
