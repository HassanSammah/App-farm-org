<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seasons and Climates</title>
    <link rel="icon" type="image/x-icon" href="/Objects/Images/farm-logo-2.png" >
    <link rel="stylesheet" href="/Bootstrap-5/css/bootstrap.min.css">
    <script src="/Bootstrap-5/js/bootstrap.min.js" defer></script>
    <style>
        body {
            background-image: url('/Objects/Images/seasons.jpg');
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

        .footer {
            background-color: #28a745;
            color: #ffffff;
            padding: 20px 0;
        }

        .copyright {
            text-align: center;
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

        html, body {
        height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1 0 auto;
        }
        
        .seasons-container {
            margin-bottom: 40px;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            padding: 20px;
        }

        .seasons-section {
            margin-bottom: 20px;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            padding: 20px;
        }

        .season-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-bottom: 10px;
            border-radius: 8px;
        }

        .climate-container {
            margin-bottom: 40px;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
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
                    <a class="nav-link btn btn-success text-white me-2 mb-sm-2" href="/Farm-main/Home-Feed.php">BACK HOME</a>
                    <a class="nav-link btn btn-success text-white me-2 mb-sm-2" href="/Weather-forecast/weather.php">WEATHER</a>
                    <a class="nav-link btn btn-success text-white me-2 mb-sm-2" href="/Weather-forecast/forecast.php">FORECAST</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<br>
<br>

<div class="container">
        <div class="seasons-container">
            <h2>Seasons</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="seasons-section">
                        <h3>Summer</h3>
                        <div class="seasons-info">
                            <img src="/Objects/Images/summer.jpg" alt="Summer" class="season-image">
                            <p>Current Season: Summer</p>
                            <p>Next Season: Autumn</p>
                            <p>Date: June 21 - September 22</p>
                            <p>Crops: Corn, Tomatoes, Sunflowers</p>
                            <p>Livestock: Cows, Chickens, Bees</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="seasons-section">
                        <h3>Autumn</h3>
                        <div class="seasons-info">
                            <img src="/Objects/Images/Season-Autumn.jpg" alt="Autumn" class="season-image">
                            <p>Current Season: Autumn</p>
                            <p>Next Season: Winter</p>
                            <p>Date: September 23 - December 21</p>
                            <p>Crops: Apples, Pumpkins, Grapes</p>
                            <p>Livestock: Sheep, Turkeys, Pigs</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="seasons-section">
                        <h3>Winter</h3>
                        <div class="seasons-info">
                            <img src="/Objects/Images/winter.jpg" alt="Winter" class="season-image">
                            <p>Current Season: Winter</p>
                            <p>Next Season: Spring</p>
                            <p>Date: December 22 - March 20</p>
                            <p>Crops: Kale, Carrots, Radishes</p>
                            <p>Livestock: Horses, Rabbits, Ducks</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="seasons-section">
                        <h3>Spring</h3>
                        <div class="seasons-info">
                            <img src="/Objects/Images/spring.jpg" alt="Spring" class="season-image">
                            <p>Current Season: Spring</p>
                            <p>Next Season: Summer</p>
                            <p>Date: March 21 - June 20</p>
                            <p>Crops: Strawberries, Lettuce, Peas</p>
                            <p>Livestock: Goats, Chickens, Bees</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="climate-container">
            <h2>Climate</h2>
            <form id="climate-form" onsubmit="event.preventDefault(); getClimateData();">
                <div class="form-group">
                    <input type="text" class="form-control" id="city-input" placeholder="Enter city name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="start-day-input" placeholder="Start Day (MM-DD)">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="end-day-input" placeholder="End Day (MM-DD)">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Get Climate Data</button>
            </form>
            <div id="climate-data"></div>
        </div>
    </div>

    <script>
        const apiKey = "02b56529736b45e3a0913c34392515bb";

        function getClimateData() {
            const cityInput = document.getElementById("city-input");
            const startDayInput = document.getElementById("start-day-input");
            const endDayInput = document.getElementById("end-day-input");

            const city = cityInput.value.trim();
            const startDay = startDayInput.value;
            const endDay = endDayInput.value;

            if (city === "" || startDay === "" || endDay === "") {
                alert("Please enter a city name and select start/end days.");
                return;
            }

            const apiUrl = `https://api.weatherbit.io/v2.0/normals?key=${apiKey}&start_day=${startDay}&end_day=${endDay}&city=${encodeURIComponent(city)}`;

            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    // Parse the climate data and display it
                    const climateData = data.data;
                    let climateHtml = "";

                    climateData.forEach(climate => {
                        const date = climate.date;
                        const temperature = climate.temperature;
                        const description = climate.weather.description;
                        const icon = climate.weather.icon;

                        climateHtml += `
                            <div>
                                <h3>${date}</h3>
                                <img src="https://www.weatherbit.io/static/img/icons/${icon}.png" alt="${description}" class="weather-icon">
                                <p>${temperature}°C</p>
                                <p>${description}</p>
                            </div>
                        `;
                    });

                    const climateDiv = document.getElementById("climate-data");
                    climateDiv.innerHTML = climateHtml;
                })
                .catch(error => {
                    console.log("An error occurred:", error);
                    const climateDiv = document.getElementById("climate-data");
                    climateDiv.innerHTML = "Error retrieving climate data.";
                });
        }
    </script>



<br>
<br>
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
          <form action="seasons-and-climate.php" method="POST">
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
