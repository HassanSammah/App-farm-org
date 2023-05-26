<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investors page</title>
    <link rel="icon" type="image/x-icon" href="/Objects/Images/farm-logo-2.png">
    <link rel="stylesheet" href="/Bootstrap-5/css/bootstrap.min.css">
    <script src="/Bootstrap-5/js/bootstrap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script src="/Farm-main/current-contracts.json"></script>
    <script src="/Farm-main/farmers.json"></script>
    <style>
           body {
    background-image: url('/Objects/Images/irrigation.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
}

        .container {
            padding-top: 20px;
        }

        .card {
            margin-bottom: 20px;
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

        main {
            padding: 10px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.7);
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
                    <a class="nav-link btn btn-success text-white me-2 mb-sm-2" href="/Farm-main/Home-Feed.php">BACK HOME</a>
                    <a class="nav-link btn btn-success text-white me-2 mb-sm-2" href="/Farm-main/my-farm.php">MY FARM</a>
                    <a class="nav-link btn btn-success text-white me-2 mb-sm-2" href="/Farm-main/About.php">ABOUT-US</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<br>
<main>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Farmers</h2>
                <canvas id="farmersChart"></canvas>
            </div>
            <div class="col-md-6">
                <h2>Shares</h2>
                <canvas id="sharesChart"></canvas>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>Current Contracts</h2>
                <table id="currentContractsTable" class="table">
                    <thead>
                        <tr>
                            <th>Farmer</th>
                            <th>Amount</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                        </tr>
                    </thead>
                    <tbody id="currentContractsBody">
                        <!-- Contract rows will be dynamically added here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </main>
    <script>
        // Get the farmers data from the datastore.
        $.getJSON("farmers.json", function(data) {
            // Create a new chart for each farmer.
            $.each(data, function(i, farmer) {
                var farmersChart = new Chart(document.getElementById("farmersChart"), {
                    type: "bar",
                    data: {
                        labels: farmer.years,
                        datasets: [{
                            label: farmer.name,
                            data: farmer.cashFlow
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            text: "Farmer Cash Flow"
                        }
                    }
                });
            });

            // Create a new pie chart for each farmer.
            $.each(data, function(i, farmer) {
                var sharesChart = new Chart(document.getElementById("sharesChart"), {
                    type: "pie",
                    data: {
                        labels: ["Loan", "Support", "Profit"],
                        datasets: [{
                            label: farmer.name,
                            data: [farmer.loan, farmer.support, farmer.profit]
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            text: "Farmer Financial Needs"
                        }
                    }
                });
            });

            // Get the current contracts data from the datastore.
            $.getJSON("current-contracts.json", function(data) {
                // Create a table of the current contracts.
                var contractsTableBody = $("#currentContractsBody");
                contractsTableBody.empty();
                $.each(data, function(i, contract) {
                    var row = $("<tr>");
                    row.append($("<td>").text(contract.farmer));
                    row.append($("<td>").text(contract.amount));
                    row.append($("<td>").text(contract.start_date));
                    row.append($("<td>").text(contract.end_date));
                    contractsTableBody.append(row);
                });
            });
        });
    </script>

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
          <form action="investors.php" method="POST">
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
