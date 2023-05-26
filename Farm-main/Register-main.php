<?php
// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fmis";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Check if the signup form is submitted
if (isset($_POST['submit-signup'])) {
    // Validate and sanitize the form data
    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Perform further validation if required

    // Insert the data into the database
    $sql = "INSERT INTO user (fullname, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $fullname, $email, $password);

    if ($stmt->execute()) {
        // Signup successful
        echo "
    <div id='success-message' class='center-box'>
        <div class='green-theme'>
            <h2>Signup Success</h2>
            <p>Please Login To Continue</p>
        </div>
    </div>
    ";

    header ("Location: signin.php"); // Redirect to signin.php
    } else {
        // Error occurred while executing the query
        echo "Error: " . $stmt->error;
        // Handle the error appropriately
    }

    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Main-Page </title>
    <link rel="icon" type="image/x-icon" href="/Objects/Images/farm-logo-2.png" >
    <link rel="stylesheet" href="/Bootstrap-5/css/bootstrap.min.css">
    <script src="/Bootstrap-5/js/bootstrap.min.js" defer></script>
    <style>
        body {
            background-image: url('/Objects/Images/farm-background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        .logo {
          max-width: 90px;
        }
        .navbar-nav .nav-link.btn:hover {
        border: 2px solid #0758d1;
        color: rgb(233, 231, 231);
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
        .transparent-container {
          max-width: 700px;
          background-color: #00FF0080;
          padding-top: 10px;
          border-radius: 8px;
         
        }
        .footer {
          background-color: #28a745;
          color: #ffffff;
          padding: 20px 0;
        }
        .copyright {
          text-align: center;
        }
        /* Center the box */
        .center-box {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        /* Green theme */
        .green-theme {
            background-color: #7ED957;
            color: #ffffff;
            padding: 15px;
            border-radius: 8px;
        }

        #success-message {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            background-color: #66bb6a;
            color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            display: none;
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
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto flex-row ">
                  <a class="nav-link btn btn-success text-white me-2 mb-sm-2" href="/Farm-main/Home-Feed.php">BACK HOME</a>
                  <a class="nav-link btn btn-success text-white me-2 mb-sm-2" href="/Farm-main/Supplier-register.php">REGISTER AS SUPPLIER</a>
                  <a class="nav-link btn btn-success text-white me-2 mb-sm-2" href="/Farm-main/Investor-register.php">REGISTER AS INVESTOR</a>
                </div>
              </div>
            </div>
          </nav>    
    </header>

    <br>


  <div class="container transparent-container">
    <h2 class="text-center">Sign up</h2>
    <form action="Register-main.php" method="POST">
      <div class="mb-3">
        <label for="fullname" class="form-label">Full Name:</label>
        <input type="text" class="form-control" id="fullname" name="fullname" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-success" name="submit-signup" >Signup</button>
      </div> 
    </form>
    <br>
    <br>
  </div>





  <!--Footer content and feeback form-->
  <br>
  <br>
  <footer class="footer">
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
          <form action="Register-main.php" method="POST">
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
?>


</body>
</html>