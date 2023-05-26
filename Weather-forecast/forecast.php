<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forecasts</title>
    <link rel="icon" type="image/x-icon" href="/Objects/Images/farm-logo-2.png" >
    <link rel="stylesheet" href="/Bootstrap-5/css/bootstrap.min.css">
    <script src="/Bootstrap-5/js/bootstrap.min.js" defer></script>
    <style>
        .forecast-slide {
            display: none;
        }

        body {
            background-image: url('/Objects/Images/forecast.jpg');
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
         /* Sticky header */
         .sticky-top {
            position: sticky;
            top: 0;
            z-index: 100;
        }

        /* Forecast container */
        .forecast-container {
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            padding: 20px;
        }

        .forecast-container h1 {
            margin-bottom: 20px;
        }
        .forecast-item {
        background-color: rgba(255, 255, 255, 0.7);
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        }
        
        .forecast-item img {
            width: 150px;
            height: 150px;
            border-radius: 10px;
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
                    <a class="nav-link btn btn-success text-white me-2 mb-sm-2" href="/Weather-forecast/seasons-and-climate.php">SEASONS & CLIMATE</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="container">
        <h1>Weather Forecast</h1>
        <div class="forecast-container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Current Forecast</h2>
                    <form id="forecast-form" onsubmit="event.preventDefault(); getWeatherForecast();">
                        <div class="form-group">
                            <input type="text" class="form-control" id="city-input" placeholder="Enter city name">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Get Weather Forecast</button>
                    </form>
                    <div id="forecast-data" class="mt-4"></div>
                </div>
                <div class="col-md-6">
                    <h2>Upcoming Forecasts</h2>
                    <div id="forecast-slideshow" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" id="forecast-slides"></div>
                        <a class="carousel-control-prev" href="#forecast-slideshow" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#forecast-slideshow" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                        <div class="progress mt-2">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" id="forecast-progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

   <div class="row">
    <div class="col-md-4">
    <div class="forecast-item">
      <img src="/Objects/Images/forecast-corn.jpg" alt="Forecast 1">
      <h3>Forecast 1</h3>
      <p>Date: July 10, 2023</p>
      <p>Soil Temperature: 25°C</p>
      <p>Soil Moisture: 50%</p>
      <p>Evapotranspiration: 5 mm</p>
      <p>Crop: Corn</p>
      <p>Recommended Practices: Irrigate the fields, monitor pest infestation, apply appropriate fertilizers.</p>
    </div>
  </div>

  <div class="col-md-4">
    <div class="forecast-item">
      <img src="/Objects/Images/harvest-maize.jpg" alt="Forecast 2">
      <h3>Forecast 2</h3>
      <p>Date: August 5, 2023</p>
      <p>Soil Temperature: 28°C</p>
      <p>Soil Moisture: 45%</p>
      <p>Evapotranspiration: 6 mm</p>
      <p>Crop: Wheat</p>
      <p>Recommended Practices: Harvest the matured crops, monitor moisture levels, plan for the next crop rotation.</p>
    </div>
  </div>

  <div class="col-md-4">
    <div class="forecast-item">
      <img src="/Objects/Images/fields.jpg" alt="Forecast 3">
      <h3>Forecast 3</h3>
      <p>Date: September 20, 2023</p>
      <p>Soil Temperature: 22°C</p>
      <p>Soil Moisture: 60%</p>
      <p>Evapotranspiration: 4 mm</p>
      <p>Crop: Rice</p>
      <p>Recommended Practices: Prepare fields for planting, apply necessary fertilizers, monitor water levels.</p>
    </div>
  </div>
</div>



    <script>
        const apiKey = "02b56529736b45e3a0913c34392515bb";

        function getWeatherForecast() {
            const cityInput = document.getElementById("city-input");

            const city = cityInput.value.trim();

            if (city === "") {
                alert("Please enter a city name.");
                return;
            }

            const apiUrl = `https://api.weatherbit.io/v2.0/agweather/forecast?city=${encodeURIComponent(city)}&key=${apiKey}`;

            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    // Parse the forecast data and display it
                    const forecastData = data.data;
                    let forecastHtml = "";

                    forecastData.forEach((forecast, index) => {
                        const date = forecast.datetime;
                        const soilTemperature = forecast.soil_temp;
                        const soilMoisture = forecast.soil_moisture;
                        const evapotranspiration = forecast.evapotranspiration;
                        const rain = forecast.precipitation;
                        const wind = forecast.wind_spd;
                        const drought = forecast.drought_index;

                        forecastHtml += `
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5 class="card-title">${date}</h5>
                                    <p class="card-text">Soil Temperature: ${soilTemperature}&deg;C</p>
                                    <p class="card-text">Soil Moisture: ${soilMoisture}%</p>
                                    <p class="card-text">Evapotranspiration: ${evapotranspiration} mm/day</p>
                                    <p class="card-text">Rain: ${rain} mm</p>
                                    <p class="card-text">Wind: ${wind} m/s</p>
                                    <p class="card-text">Drought Index: ${drought}</p>
                                </div>
                            </div>
                        `;

                        // Create forecast slide for slideshow
                        const slideActiveClass = index === 0 ? 'active' : '';
                        const forecastSlideHtml = `
                            <div class="carousel-item ${slideActiveClass}">
                                <img src="https://www.weatherbit.io/static/img/icons/${forecast.weather.icon}.png" class="d-block mx-auto" alt="${forecast.weather.description}">
                                <div class="carousel-caption">
                                    <h5>${date}</h5>
                                    <p>${forecast.weather.description}</p>
                                </div>
                            </div>
                        `;
                        document.getElementById("forecast-slides").innerHTML += forecastSlideHtml;
                    });

                    const forecastDiv = document.getElementById("forecast-data");
                    forecastDiv.innerHTML = forecastHtml;

                    // Start the forecast slideshow
                    document.querySelector("#forecast-slideshow .carousel-item").classList.add("active");

                    // Update progress bar
                    const progressBar = document.getElementById("forecast-progress-bar");
                    progressBar.style.width = "0%";
                    const slidesCount = document.querySelectorAll("#forecast-slides .carousel-item").length;
                    let progress = 0;

                    setInterval(() => {
                        progressBar.style.width = `${progress}%`;
                        progress += 100 / slidesCount;
                        if (progress >= 100) {
                            progress = 0;
                            document.getElementById("forecast-slideshow").carousel("next");
                        }
                    }, 3000);
                })
                .catch(error => {
                    console.log("An error occurred:", error);
                    const forecastDiv = document.getElementById("forecast-data");
                    forecastDiv.innerHTML = "Error retrieving weather forecast.";
                });
        }
        // Get all forecast items
        const forecastItems = document.querySelectorAll('.forecast-item');

        // Add click event listener to each forecast item
        forecastItems.forEach(item => {
        item.addEventListener('click', () => {
            // Perform action when a forecast item is clicked
            console.log('Forecast item clicked:', item);
        });
        });
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
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
          <form action="forecast.php" method="POST">
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
