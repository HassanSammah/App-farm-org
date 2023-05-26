<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Report</title>
    <link rel="icon" type="image/x-icon" href="/Objects/Images/farm-logo-2.png" >
    <link rel="stylesheet" href="/Bootstrap-5/css/bootstrap.min.css">
    <script src="/Bootstrap-5/js/bootstrap.min.js" defer></script>
  <!-- Include Chart.js CDN link here -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0"></script>
  <style>
        body {
            background-image: url('/Objects/Images/finance.jpg');
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
        .task-container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .task-container.completed {
            text-decoration: line-through;
        }
        .task-container .task-title {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .task-container .task-time {
            margin-bottom: 10px;
        }
        .task-container .task-description {
            margin-bottom: 10px;
        }
        .progress-bar-container {
            margin-top: 30px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 10px;
        }
        .progress-bar {
            height: 20px;
            background-color: #00b894; /* Green color */
        }
        .progress-bar::after {
        background-color: #0984e3; /* Blue color */
        }

                .task-image {
                    max-width: 100%;
                    height: auto;
                }
        .report {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
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
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto flex-row ">
                  <a class="nav-link btn btn-success text-white me-2 mb-sm-2" href="/Farm-main/Home-Feed.php">BACK HOME</a>
                  <a class="nav-link btn btn-success text-white me-2 mb-sm-2" href="/Farm-main/my-farm.php">MY FARM</a>
                  <a class="nav-link btn btn-success text-white me-2 mb-sm-2" href="/Finances/market-analysis.php">MARKET ANALYSIS</a>
                </div>
              </div>
            </div>
          </nav>    
    </header>

    <br>

    <div class="report container">
  <h2>Financial Reports</h2>

  <!-- Revenue and Expenses Form -->
  <form id="financialForm" class="report mb-4">
    <div class="mb-3">
      <label for="revenueInput" class="form-label">Revenue</label>
      <input type="number" class="form-control" id="revenueInput" placeholder="Enter revenue amount">
    </div>
    <div class="mb-3">
      <label for="expensesInput" class="form-label">Expenses</label>
      <input type="number" class="form-control" id="expensesInput" placeholder="Enter expenses amount">
    </div>
    <button type="submit" class="btn btn-primary">Calculate</button>
  </form>

  <!-- Monthly Financial Report -->
  <div id="financialReport" class="report d-none">
    <h3>Monthly Financial Report</h3>
    <p id="monthlyExpenses">Monthly Expenses: $0</p>
    <p id="monthlyRevenue">Monthly Revenue: $0</p>
    <p id="grossProfit">Gross Profit/Loss: $0</p>
  </div>

  <!-- Gross Profit Monthly Chart -->
  <canvas id="grossProfitChart"></canvas>
</div>


    <script>
// Get form elements
const financialForm = document.getElementById("financialForm");
const revenueInput = document.getElementById("revenueInput");
const expensesInput = document.getElementById("expensesInput");

// Get financial report elements
const financialReport = document.getElementById("financialReport");
const monthlyExpenses = document.getElementById("monthlyExpenses");
const monthlyRevenue = document.getElementById("monthlyRevenue");
const grossProfit = document.getElementById("grossProfit");

// Get gross profit chart canvas
const grossProfitChartCanvas = document.getElementById("grossProfitChart");

// Define initial data
const monthlyData = {
  expenses: 0,
  revenue: 0,
  grossProfit: 0,
};

// Handle form submission
financialForm.addEventListener("submit", function (e) {
  e.preventDefault();

  // Get revenue and expenses values
  const revenue = parseFloat(revenueInput.value);
  const expenses = parseFloat(expensesInput.value);

  // Update monthly data
  monthlyData.expenses += expenses;
  monthlyData.revenue += revenue;
  monthlyData.grossProfit = monthlyData.revenue - monthlyData.expenses;

  // Update financial report elements
  monthlyExpenses.textContent = `Monthly Expenses: $${monthlyData.expenses.toFixed(2)}`;
  monthlyRevenue.textContent = `Monthly Revenue: $${monthlyData.revenue.toFixed(2)}`;
  grossProfit.textContent = `Gross Profit/Loss: $${monthlyData.grossProfit.toFixed(2)}`;

  // Show financial report section
  financialReport.classList.remove("d-none");

  // Render gross profit chart
  renderGrossProfitChart();
  
  // Reset form inputs
  financialForm.reset();
});

// Function to render the gross profit chart
function renderGrossProfitChart() {
  const grossProfitChart = new Chart(grossProfitChartCanvas, {
    type: "bar",
    data: {
      labels: ["Month 1", "Month 2", "Month 3", "Month 4", "Month 5", "Month 6"],
      datasets: [
        {
          label: "Gross Profit",
          data: [1000, 2000, 1500, 3000, 2500, 3500],
          backgroundColor: "rgba(75, 192, 192, 0.5)",
          borderColor: "rgba(75, 192, 192, 1)",
          borderWidth: 1,
        },
      ],
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: false,
        },
        title: {
          display: true,
          text: "Gross Profit Monthly",
        },
      },
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
}


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
          <form action="financial-reports.php" method="POST">
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

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get revenue and expenses values from the form submission
    $revenue = $_POST['revenue'];
    $expenses = $_POST['expenses'];

    // Perform any necessary database operations, such as inserting the data into the 'financialinfo' table
    $sql = "INSERT INTO financialinfo (revenue, expenses) VALUES ('$revenue', '$expenses')";

    if (mysqli_query($connection, $sql)) {
        echo "Data inserted successfully into the 'financialinfo' table.";
    } else {
        echo "Error inserting data: " . mysqli_error($connection);
    }
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